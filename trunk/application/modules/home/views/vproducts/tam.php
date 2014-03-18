<meta charset="utf-8"/>
<?php
foreach ($data as $value){}

$im = json_decode($value->images);

for ($i = 0; $i < 3; $i++) {
    echo "<img src='" . base_url() . $im[$i] . "' />";
}
//if (isset($_POST['ok'])) {
//    $img1 = $_FILES['file1']['error'];
//    $img2 = $_FILES['file2']['error'];
////$img3 = 30;
//    $arrayimg = array($img1, $img2);
//    var_dump($arrayimg);
//}
?>
<!--<form method="post" action="" enctype="multipart/form-data"/>
<input type="file" name="file1"/>
<input type="file" name="file2"/>
<input type="submit" name="ok"/>motgia5315e94467465.jpg
</form>-->
