<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html', 'category'));
        $this->load->model("category_model");
        $this->load->model("home/musers");
        $this->load->library('upload');
        $this->load->library('session');

        if ($this->session->userdata('admin') == '') {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Danh mục';
        $temp['data'] = $this->category_model->getAll();
        $temp['template'] = 'category/list_category';
        $this->load->view('layout_admin/layout', $temp);
    }

    public function addForm()
    {
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Thêm danh mục';
        $temp['template'] = 'category/add_category';
        $temp['data'] = $this->category_model->getAll();
        $this->load->view("layout_admin/layout", $temp);
    }

    public function sortOrder()
    {
        $order = $this->input->post('order');
        foreach ($order as $key => $value) {
            $data = array(
                'order_sort' => $value
            );
            $this->category_model->update($key, $data);
        }
        redirect('admin/category_controller');
    }

    /**
     * Them mot category moi
     */
    public function insertCategory()
    {

        if ($this->input->post('thuocloai') == 1) {
            $loaidanhmuc = $this->input->post('danhmuc');
        } else {
            $loaidanhmuc = 0;
        }
        $data = array(
            'category_name' => $this->input->post('txtcategory'),
            'category_parent' => $loaidanhmuc,
            'order_sort' => 0
        );
        $this->category_model->insertCategory($data);
        redirect('admin/category_controller');

    }

    /**
     *
     * @param string $id
     * load form edit san pham theo id cua category
     */
    public function editForm($id)
    {
        $data['info'] = $this->session->userdata('admin');
        $data['title'] = 'Sửa danh mục';
        $data['cate_name'] = $this->category_model->getById($id);
        $data['data'] = $this->category_model->getAll();
        $data['template'] = 'category/edit_category';
        $this->load->view('layout_admin/layout', $data);
    }

    /**
     * Cap nhat category thoe id cua no
     */
    public function updateCategory()
    {
        $id = $this->input->post('id');
        $idparent = $this->input->post('idparent');
        $category = $this->category_model->getAll();

        if ($this->input->post('thuocloai') == 1) {
            $loaidanhmuc = $this->input->post('danhmuc');
        } elseif ($this->input->post('thuocloai') == 2) {
            $loaidanhmuc = $idparent;
        } else {
            $loaidanhmuc = 0;
        }
        if ($loaidanhmuc != $id) {
            $data = array(
                'category_name' => $this->input->post('txtcategory'),
                'category_parent' => $loaidanhmuc
            );
            if ($loaidanhmuc == $idparent) {
                $this->category_model->update($id, $data);
            } else {
                $check = $this->category_model->update($id, $data);
            }
            redirect('admin/category_controller');
        } else {
            $this->session->set_flashdata('error_edit', 'Không thể chọn chính nó!');
            redirect("admin/category_controller/editForm/$id");
        }
    }

    public function del($id)
    {
        $check = $this->category_model->checkChildExist(
            $id);
        if (
        $check)
        {
            $this->session->set_flashdata(
                'error', 'Xin lỗi không thể xóa được do còn thư mục con!');
        }
        else
        {
            $this->category_model->del(
                $id);
            $this->session->set_flashdata(
                'success', 'Thành công!');
        }
        redirect(
            'admin/category_controller');
    }

}

?>
