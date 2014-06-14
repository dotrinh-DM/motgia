<?php

class Mproducts extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Musers');
    }

    public function getAllCategories()
    {
        $this->db->select("*");
        $query = $this->db->get("categories");
        return $query->result();
    }

    public function getAllProducts()
    {
        $this->db->select("products.productsID as productsID,
            products.name as name,
            products.price as price,
            products.images as images,
            products.intro as intro,
            shop.company as company,
            shop.shopID as shopID", FALSE);
//        $this->db->order_by('productsID', 'DESC');
        $this->db->join('shop', 'shop.shopID = products.shopID');
        $this->db->limit(10, 0);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function show_more($start)
    {
        $this->db->select("products.productsID as productsID,
            products.name as name,
            products.price as price,
            products.images as images,
            products.intro as intro,
            shop.company as company", FALSE);
//        $this->db->order_by('productsID', 'DESC');
        $this->db->join('shop', 'shop.shopID = products.shopID');
        $this->db->limit(10, $start);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function getDataSlide()
    {
        $this->db->select("productsID,images");
        $this->db->order_by("soldnumber", "desc");
        $this->db->limit(5);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function getRandomProduct()
    {
        $this->db->select("productsID,name,price,images,categoriesID");
        $this->db->order_by("productsID", "desc");
        $this->db->limit(4);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function insertProducts($proid, $tensanpham, $soluong, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $images, $shopid)
    {
        $create_date = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));
        $data = array(
            'productsID' => $proid,
            'name' => $tensanpham,
            'quantity' => $soluong,
            'price' => 10000,
            'soldnumber' => 0,
            'images' => $images,
            'intro' => $motangan,
            'hightlight' => $dacdiemnb,
            'condition' => $dieukiensd,
            'productinfo' => $chitietsp,
            'create_date' => $create_date,
            'shopID' => $shopid,
            'status' => 3
        );
        $this->db->insert('products', $data);
    }

/**
 * @id $category_product
 * Them id cua san pham vao trong bang giua
 */
public
function insertCatePro($category_product)
{
    $this->db->insert('tbl_category_product', $category_product);
}

public
function editProducts($id)
{
    $this->db->select("productsID,name,quantity,images,intro,hightlight,condition,productinfo,categoriesID");
    $this->db->from("products");
    $this->db->where("productsID", $id);
    $query = $this->db->get();
    return $query->result();
}

public
function updateProducts($id, $danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $link_img)
{
    $data = array(
        'name' => $tensanpham,
        'quantity' => $soluong,
        'images' => $link_img,
        'intro' => $motangan,
        'hightlight' => $dacdiemnb,
        'condition' => $dieukiensd,
        'productinfo' => $chitietsp,
        'categoriesID' => $danhmuc,
    );
    $this->db->where("productsID", "$id");
    $this->db->update('products', $data);
}

public
function insertOrder($shopID, $buyer, $note, $method)
{
    $creat = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));

    $data = array(
        'action_date' => $creat,
        'userID' => $buyer
    );
    $this->db->insert('bill_status', $data);
    $statusID = mysql_insert_id();

    $id = $this->Musers->setID('tbl_order', 'orderID', 'ORD');
    $data2 = array(
        'orderID' => $id,
        'shopID' => $shopID,
        'buyerID' => $buyer,
        'create_date' => $creat,
        'note' => $note,
        'method' => $method,
        'status' => 1, //don hang dang cho xac nhan
        'statusID' => $statusID
    );
    $this->db->insert('tbl_order', $data2);
    return (string)$id;
}

public
function confirmOrder($orid, $st, $statusID, $uid, $note)
{ // xác nhận đơn hàng
    $this->db->where('orderID', $orid)
        ->update('tbl_order', array('status' => $st));
    if ($st == 0) { //khi huy don hang
        $this->db->where("orderID", "$orid")->update('tbl_order', array('note' => $note, 'status' => 0)); //ghi ly do
        $this->updateOrderStatus($statusID, $uid);
    }
    if ($st == 2) { //khi xac nhan don hang
        $this->db->where("orderID", "$orid")->update('tbl_order', array('status' => 2)); //ghi ly do
        $this->updateOrderStatus($statusID, $uid);
    }
}

public
function updateOrderStatus($statusID, $uid)
{
    $date = gmdate("Y-m-d H:i:s", time() + 3150 * (+7 + date("I")));
    $data = array(
        'action_date' => $date,
        'userID' => $uid
    );
    $this->db->where("statusID", "$statusID");
    $this->db->update('bill_status', $data);
}

public
function insertOrderDetail($order, $pro, $number)
{
    $data = array(
        'orderID' => $order,
        'productsID' => $pro,
        'quantity' => $number
    );
    $this->db->insert('order_detail', $data);
    $ck = $this->db->affected_rows();
    if ($ck > 0)
        return TRUE;
    else
        return FALSE;
}

public
function cancelOrder()
{
    $this->db->update('tbl_order', array('status' => 1), array('email' => $email));
}

public
function getProductByID($id)
{
    $this->db->select("*");
    $this->db->where('productsID', "$id");
    $query = $this->db->get('products');
    return $query->row_array();
}

public
function getProductByCate($id, $cate)
{
    $this->db->select("productsID,name,price,images");
    $this->db->where("categoriesID", "$cate");
    $this->db->where("productsID != '$id' ");
    $this->db->limit(5);
    $query = $this->db->get('products');
    return $query->result();
}

public
function getCart($where)
{
    $this->db->select("*");
    $this->db->where("productsID in ('$where')");
    $query = $this->db->get('products');
    return $query->result();
}

public
function getImage($proid)
{
    $this->db->select("images");
    $this->db->where('productsID', $proid);
    $query = $this->db->get('products');
    return $query->row_array();
}

public
function rateIn($id, $total, $value, $ip)
{
    $data = array(
        'id' => $id
    );
}

public
function rateUot()
{

}

public
function checkRateID($id)
{
    $ck = $this->db->select("count(*) as num")->where("id", "$id")->row_array();
    if ($ck['num'] > 0)
        return FALSE;
    else
        return TRUE;
}
}

?>
