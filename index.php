<?php
$c = array('Iran', 'Iraq', 'Turkey', 'Russia');
$p = array('Tehran', 'Baghdad', 'Ankara', 'Moscow');
$find = 0;
if (isset($_POST['submit'])) {
    $country = $_POST['country'];
    for ($i = 0; $i < count($c); $i++) {
        if ($c[$i] == $country) {
            $find = 1;
            break;
        }//if
    }//for

    if ($find == 1) {
        echo $p[$i];
    } else {
        echo "پیدا نشد";
    }
}//if
?>
<form action="" method="post">
    <label>:نام کشور</label> <input type="text" name="country"/>
    <input type="submit" name="submit" value="پایتخت"/>
</form>
