<?php
if (isset($_POST['code'])) {
    $try = file_put_contents('Versions/' . strval(round(microtime(true) * 1000)) . ".md", $_POST["code"]);
    $try = file_put_contents('Versions/last.md', $_POST["code"]);
    $try = file_put_contents('index.sj', $_POST["code"]);
    chmod("Versions/last.md", 0755);
    chmod("index.sj", 0755);
}
$str = "";
$str_1 = "";
if (isset($_POST['height'])) $str = '&height=' . $_POST['height'];
if (isset($_POST['width'])) $str_1 = '&width=' . $_POST['width'];
header('Location: write.html?worked=' . isset($_POST['code']) . $str . $str_1);
?>
