<meta charset="utf-8"/>
<?php
//echo count($table);
//foreach ($table as $value) {
//    $anh = json_decode($value->images);
//}
//for($i=0;$i<3;$i++){
//        echo "<img src='".base_url().$anh[$i]."' />";}
//var_dump($value->images);
//for($i=0;$i<count($a);$i++)
//{
//    echo "<img src'".  base_url().$a[$i]."'/>";
//}
foreach ($data as $value){}
//    echo $value->intro . '<br>' . $value->productinfo . '<br>' . $value->name;

$im = json_decode($value->images);

for ($i = 0; $i < 3; $i++) {
    echo "<img src='" . base_url() . $im[$i] . "' />";
}

//echo form_open_multipart('home/cproducts/gogo');
//
?>
<!--<div class="bg-file">
    <input type="file" name="img"/>
    <input type="file" name="img[]"/>
    <input type="submit" name="ok" value="okkkk"/>
</div>-->

//<?php
//echo form_close()?>