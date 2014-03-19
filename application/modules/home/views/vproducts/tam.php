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
<!--Lorem ipsum dolor sit amet, consectetur adipisci
ng elit. Vivamus ultricies id nisi non consequat. Vivamu
s nec iaculis purus. Mauris augue nulla, rhoncus quis conv
allis et, viverra ut ante. Aliquam luctus velit purus, nec condi
mentum mauris pulvinar eu. Integer eget sapien id justo iaculi
s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae
mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq
uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi
nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S
uspendisse rutrum sapien vel feugiat euismod.
Quisque ornare auctor fringilla. 
Suspendisse sagittis commodo risus sed posuere.-->