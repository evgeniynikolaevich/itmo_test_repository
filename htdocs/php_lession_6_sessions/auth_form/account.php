<!doctype html>
<?php 
session_start();
var_dump($_SESSION);
if(!isset($_SESSION['login'])){
    header('Location:page.php');
}
$login =$_SESSION['login'];
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Страница 1</a></li>
        <li><a href="#">Страница 2</a></li>
        <li><a href="logout.php">Выйти</a></li> <!-- реалицазия выхода из личного кабинета -->
    </ul>
</nav>

<h2><?php echo $login?>, добро пожаловать в личный кабинет</h2>

</body>
</html>