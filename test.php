<!DOCTYPE HTML>
<html>
<head>
<title>test</title>
</head>
    <h2>Лабораторна робота №4, КІУКІ-19-5, Білаш Дмитро, Варіант №1 </h2>
    <h3>Вхід</h3>
    <form id="entrform" method="post" action="">
        <p>Логін:<input type="text" name="mid" required="required" /></p>
        <p>Password:<input type="password" name="mpassword" required="required" /></p>
        <input type="submit" value="Ввійти"/>
    </form>

<?php
if (count($_POST)){
    $loginData = file('logs.txt');
    $accessData = array();
    foreach ($loginData as $line) {
        list($username, $password) = explode(',', $line);
        $accessData[trim($username)] = trim($password);
    }
    
    $mid = isset($_POST['mid']) ? $_POST['mid'] : '';
    $mpassword = isset($_POST['mpassword']) ? $_POST['mpassword'] : '';


    if (array_key_exists($mid, $accessData) && $mpassword == $accessData[$mid]) {

        echo "<br>Ви ввійшли";
    } else {
        echo "<br>Неправельні дані для входу";
    }
}
?>
</body>
</html>