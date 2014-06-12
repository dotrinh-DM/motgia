<?php
function generateMenu($trees,$procate, $data_category)
{

    echo '<ul class="sub_menu">';
    foreach ($trees as $category)
    {
        $quantity = '';
        $id = $category->categoryID;
        $list_cate = getChildren($data_category, $id, $id);
        if (count_product($list_cate, $procate))
        {
            $quantity = ' (' . count_product($list_cate, $procate) . ')';
        }
        echo '<li> ';
        echo "<a href='" . site_url('home/home_controller/productInCates/' . $category->categoryID) . "'>" .' '. $category->category_name .$quantity. '</a>';
        if (isset($category->children) and count($category->children) > 0)
        {
            generateMenu($category->children, $procate, $data_category);
        }
        echo '</li>';
    }
    echo '</ul>';
}
function getCategoryId($categories, $id_parent, &$ids)
{
    $ids[] = $id_parent;
    foreach ($categories as $key => $category)
    {
        if ($category->category_parent == $id_parent)
        {
            $ids[] = $category->categoryID;
            if (hasChildren($categories, $category->categoryID))
            {
                getCategoryId($categories, $category->categoryID, $ids);
            }
        }
    }
}

function getChildren($categories, $parent_id = 0, $self_id = 0)
{
    $data = array();
    $temp = array();
    foreach ($categories as $key => $category)
    {
        if ($self_id == $category->categoryID)
        {
            $data[] = $category;
        }
        if ($category->category_parent == $parent_id)
        {
            if (hasChildren($categories, $category->categoryID))
            {
                $category->children = getChildren($categories, $category->categoryID);
            }
            $temp[] = $category;
        }
    }
    if (!empty($data))
    {
        $data[0]->children = $temp;
        return $data;
    }
    return $temp;
}

function hasChildren($categories, $parent_id)
{
    foreach ($categories as $category)
    {
        if ($category->category_parent == $parent_id)
        {
            return true;
        }
    }
    return false;
}

function count_product($categories, $catepro, &$total = '', &$pro_id = array())
{
    foreach ($categories as $cate)
    {
        foreach ($catepro as $cp)
        {
            if ($cate->categoryID == $cp->categoryID)
            {
                if (!in_array($cp->productsID, $pro_id))
                {
                    $total += 1;
                    $pro_id[] = $cp->productsID;
                }
            }
        }
        if (isset($cate->children) && count($cate->children) > 0)
        {
            count_product($cate->children, $catepro, $total, $pro_id);
        }
    }
    return $total;
}