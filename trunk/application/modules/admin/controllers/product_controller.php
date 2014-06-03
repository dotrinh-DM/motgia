<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html', 'category'));
        $this->load->model("product_model");
        $this->load->model("home/musers");
        $this->load->model("category_model");
        $this->load->library('upload');
        $this->load->library('session');

        if ($this->session->userdata('admin') == '') {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Quản lý sản phẩm';
        $temp['template'] = 'product/list_product';
        $temp['data'] = $this->product_model->getAll();
        $this->load->view('layout_admin/layout', $temp);
    }

    public function addProduct()
    {
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Thêm sản phẩm';
        $temp['template'] = 'product/add_product';
        $temp['data'] = $this->category_model->getAll();
        $this->load->view('layout_admin/layout', $temp);

    }

    public function getInput($link_json)
    {
        $date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $masp = $this->musers->setID('products', 'productsID', 'PRO');
        $data = array(
            'productsID' => $masp,
            'name' => $this->input->post('txtname'),
            'price' => $this->input->post('txtprice'),
            'quantity' => $this->input->post('soluong'),
            'create_date' => $date,
            'soldnumber' => 0,
            'images'=>$link_json,
            'intro' => $this->input->post('txtdes'),
            'hightlight' => $this->input->post('noibat'),
            'condition' => $this->input->post('dieukien'),
            'productinfo' => $this->input->post('chitiet'),
            'userID' => $this->session->userdata['admin']['userID'],
            'status' => $this->input->post('status')
        );
        return $data;
    }

    public function insertProducts()
    {
        $raw_name = 'img';
        $link = 'public/product_images/';
        $link_img_insert = array();
        for ($i = 1; $i < 4; $i++) {
            $name_detail = $raw_name . $i;
            $link_img_insert[] = $this->uploadImages($name_detail, $link);
        }
        foreach ($link_img_insert as $val) {
            $newlink[] = $link.$val['file_name'];
        }
        $link_json = json_encode($newlink);
        $data = $this->getInput($link_json);
        $this->product_model->insertProduct($data);
        $danhmuc = $this->input->post('danhmuc');
        foreach ($danhmuc as $row) {
            $category_product = array(
                'productsID' => $data['productsID'],
                'categoryID' => $row
            );
//                var_dump($category_product); die();
            $this->product_model->insertCatePro($category_product);
        }

        redirect('admin/product_controller');

    }

    /*
     * Ham nay de upload tung anh len server, ca single va multi
     */

    public function uploadImages($name, $link)
    {

        $config['upload_path'] = $link;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $name . uniqid();
        $config['max_size'] = '9000000';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($name)) {
            return $this->upload->data();
        } else {
            echo $this->upload->display_errors();
        }
    }

    /**
     *
     * @param string $id
     * load gia dien cho nguoi dung dua san pham
     */
    public function editForm($id)
    {
        $data['title'] = 'Sửa sản phẩm';
        $data['h1'] = 'Edit Product';
        $data['main_images'] = $this->product_model->getMainImages($id);
        $data['detail_images'] = $this->product_model->getDetailImages($id);
        $data['product_info'] = $this->product_model->getProductById($id);
        $data['product_in_cate'] = $this->product_model->getProductIncate($id);
        $data['cates'] = $this->category_model->getAll();
        $data['brands'] = $this->brand_model->getAll();
        $data['template'] = 'product/edit';
        $this->load->view("layout/layout", $data);
    }

    /**
     *
     * @param string $id
     * Xoa san pham theo id
     */
    public function del($id)
    {

        $this->product_model->delImages($id);
        $this->product_model->delProCate($id);
        $this->product_model->delProduct($id);
        redirect('admin/product_controller');
    }
}

?>
