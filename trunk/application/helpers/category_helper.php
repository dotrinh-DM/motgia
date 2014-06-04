<?php

function show_cate($user_data = array(), $parrent = 0, $text = '')
{
    foreach ($user_data as $key => $val)
    {
        if ($val->category_parent == $parrent)
        {
            echo '<tr class="oddRow">';
            echo "<td class='firstCol'>" . $text . $val->category_name . "</a></td>";
            $id = $val->categoryID;
            unset($user_data[$key]);
            ?>
            <td><input type="text" name="order[<?php echo $val->categoryID; ?>]" value="<?php echo $val->order_sort; ?>" style="width: 30px;" /></td>
            <td class="editItem">
                <ul>
                    <li class="iconEdit"><a href="<?php echo site_url("admin/category_controller/editForm/$val->categoryID"); ?>">edit</a></li>
                    <li class="iconDel"><a onclick="return confirm('Do you want to delete?');" href="<?php echo site_url("admin/category_controller/del/$val->categoryID"); ?>">delete</a></li>
                </ul>
            </td>
            <?php
            show_cate($user_data, $id, $text . '- - ');
            echo '</tr>';
        }
    }
}

function selectCate($user_data = array(), $parrent = 0, $text = '')
{
    foreach ($user_data as $key => $val)
    {
        if ($val->category_parent == $parrent)
        {
            echo "<option value='$val->categoryID' >" . $text . $val->category_name . "</option>";
            $id = $val->categoryID;
            unset($user_data[$key]);
            selectCate($user_data, $id, $text . '- - ');
        }
    }
}



function checkBoxCate($user_data = array(), $parrent = 0, $text = '')
{
    foreach ($user_data as $key => $val)
    {
        if ($val->category_parent == $parrent)
        {
            echo '<tr class="oddRow">';
            echo "<td><input type='checkbox' name='danhmuc[]' value='$val->categoryID' /></td>";
            echo "<td class='firstCol'>" . $text . $val->category_name . "</a></td>";
            $id = $val->categoryID;
            unset($user_data[$key]);
            ?>
            <td></td>
            <td class="editItem">
                <ul>
                    <li class="iconEdit"><a href="<?php echo site_url("admin/category_controller/editForm/$val->categoryID"); ?>"></a></li>
                    <li class="iconDel"><a onclick="return confirm('Do you want to delete?');" href="<?php echo site_url("admin/category_controller/del/$val->categoryID"); ?>"></a></li>
                </ul>
            </td>
            <?php
            checkBoxCate($user_data, $id, $text . '- - ');
            echo '</tr>';
        }
    }
}
