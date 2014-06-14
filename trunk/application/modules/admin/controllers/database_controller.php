<?php


class Database_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html'));
        $this->load->model("home/musers");
        $this->load->model("user_model");
        $this->load->library('upload', 'encrypt');
        $this->load->library('session');
        $this->load->model('database_model');
        if ($this->session->userdata('admin') == '') {
            redirect('admin/login');
        }
    }

    /**
     * Load giao dien cho nguoi dung chon ngay bao cao
     */
    public function index()
    {
        $data['link'] = 'Database';
        $data['title'] = 'Quản lý hóa đơn :: Admin';
        $data['info'] = $this->session->userdata('admin');
        $data['data'] = $this->order_model->getAll();
        $data['template'] = 'order/list_order';
        $this->load->view("layout_admin/layout", $data);
    }

    /**
     * Thống kê theo sản phẩm và theo danh muc SP
     */
    public function backup()
    {
        $data['link'] = 'Backup Database';
        $data['title'] = 'Sao lưu :: Admin';
        $data['info'] = $this->session->userdata('admin');
        $data['template'] = 'database/backup';
        $this->load->view("layout_admin/layout", $data);
    }

    public function restore()
    {
        $data['link'] = 'Restore Database';
        $data['title'] = 'Phục hồi dữ liệu:: Admin';
        $data['info'] = $this->session->userdata('admin');
        $data['template'] = 'database/restore';
        $this->load->view("layout_admin/layout", $data);
    }

    public function backup_db()
    {
        $u = $this->input->post('username');
        $p = $this->input->post('matkhau');
        if ($u != '' && $p != '') {
            $result = $this->user_model->checkUser($u, $p);
            if ($result) {
                $return = "";
                $allTables = array();
                $result = mysql_query('SHOW TABLES');
                while ($row = mysql_fetch_row($result)) {
                    $allTables[] = $row[0];
                }
                foreach ($allTables as $table) {
                    $result = mysql_query('SELECT * FROM ' . $table);

                    $num_fields = mysql_num_fields($result);

                    $return .= 'DROP TABLE IF EXISTS ' . $table . ';';

                    $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE ' . $table));

                    $return .= "\n\n" . $row2[1] . ";\n\n";

                    for ($i = 0; $i < $num_fields; $i++) {
                        while ($row = mysql_fetch_row($result)) {
                            $return .= 'INSERT INTO ' . $table . ' VALUES(';
                            for ($j = 0; $j < $num_fields; $j++) {
                                $row[$j] = addslashes($row[$j]);
                                $row[$j] = str_replace("\n", "\\n", $row[$j]);

                                if (isset($row[$j])) {
                                    $return .= '"' . $row[$j] . '"';
                                } else {
                                    $return .= '""';
                                }

                                if ($j < ($num_fields - 1)) {
                                    $return .= ',';
                                }
                            }
                            $return .= ");\n";
                        }
                    }
                    $return .= "\n\n";
                }
                $folder = 'Database_Backup/';

                if (!is_dir($folder))

                    mkdir($folder, 0755, true);
                chmod($folder, 0755);

                $date = date('m-d-Y-H-i-s', time());
                $filename = $folder . "motgia-" . $date;

                $handle = fopen($filename . '.sql', 'w+');

                fwrite($handle, $return);
                fclose($handle);
                $this->session->set_flashdata('succ', 'Backup thành công!');
            } else {
                $this->session->set_flashdata('error', 'Backup Thất bại!');
            }
        } else {
            $this->session->set_flashdata('error', 'Vui lòng điền chính xác thông tin!');
        }
        redirect('admin/database_controller/backup');
    }

    public function restore_db()
    {
        $u = $this->input->post('username');
        $p = $this->input->post('matkhau');
        if ($u != '' && $p != '') {
            $result = $this->user_model->checkUser($u, $p);
            if ($result) {
                $link_up = 'Database_Backup/';
                $data = $this->uploadDb('dbname', $link_up);
                $name_db = $link_up . $data['file_name'];
                $sql = file_get_contents("$name_db");
                foreach (explode(";\n", $sql) as $sql) {
                    $sql = trim($sql);
                    if ($sql) {
                        $this->db->query($sql);
                    }
                }
                $this->session->set_flashdata('succ', 'Restore thành công!');
            } else {
                $this->session->set_flashdata('error', 'Restore Thất bại!');
            }
        } else {
            $this->session->set_flashdata('error', 'Vui lòng điền chính xác thông tin!');
        }
        redirect('admin/database_controller/restore');
    }

    public function uploadDb($name, $link)
    {

        $config['upload_path'] = $link;
        $config['allowed_types'] = '*';
        $config['file_name'] = $name . uniqid();
        $this->upload->initialize($config);
        if ($this->upload->do_upload($name)) {
            return $this->upload->data();
        } else {
            echo $this->upload->display_errors();
        }
    }
}
