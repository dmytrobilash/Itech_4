<!DOCTYPE HTML>
<html>
<head>
<title>test</title>
</head>
    <h2>Лабораторна робота №4, КІУКІ-19-5, Білаш Дмитро, Варіант №1 </h2>
    <h3>Вхід</h3>
    <form id="form" method="post" action="">
        <p>Логін:<input type="text" name="mname" required="required" /></p>
        <p>Пароль:<input type="password" name="mpassword" required="required" /></p>
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
    
    $mname = isset($_POST['mname']) ? $_POST['mname'] : '';
    $mpassword = isset($_POST['mpassword']) ? $_POST['mpassword'] : '';


    if (array_key_exists($mname, $accessData) && $mpassword == $accessData[$mname]) {

        echo "<br>Привіт, " . htmlspecialchars($_POST["mname"]) . "!";;
    } else {
        echo "<br>Неправельні дані для входу";
    }
}
?>
</body>
</html>