<?php

ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	
	
	require($_SERVER['DOCUMENT_ROOT']."/nordic/sofia/myProject3/global_path.php");
    require($_SERVER['DOCUMENT_ROOT']."/nordic/sofia/myProject3/classes/autoload.php");
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/nordic/sofia/myProject3/css/style.css">
<script src= "/nordic/sofia/myProject3/js/jquery-3.4.1.js"async></script>
    <script src="/nordic/sofia/myProject3/js/script.js" async></script>
    <script src="/nordic/sofia/myProject3/js/modal-box.js" async></script>
    <title>SH</title>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="floor">
        <div class="navig">
           <img src="/nordic/sofia/myProject3/img/icons/logo.jpg" alt="" srcset="">
            <a href="">Женщинам</a>
            <a href="https://ironlinks.ru/nordic/sofia/myProject3/men.php">Мужчинам</a>
            <a href="">Детям</a>
            <a href="">Новинки</a>
            <a href="https://ironlinks.ru/nordic/sofia/myProject3/index.php">О нас</a>
        </div>
        <div class="enter-basket">
        <img src="/nordic/sofia/myProject3/img/icons/account.png" alt="" srcset="">
            <a  id="myBtn" >Войти</a>
           
		
		<div id="myModal" class="modal"> 
 		 	<div class="modal-content">
					   

      				<form  class="modal-form " action='https://ironlinks.ru/nordic/sofia/myProject3/auth/Enter.php' method="GET">     
						<label for="login">LOGIN</label>
                        <input type="text" name="login" value="">     
                        <label for="password">PASSWORD</label>             
        				<input type="etext" name="password" value="">  					       				 	
        				<input type="submit" value="ВОЙТИ" >
    
					</form>
					
    		</div>
  		</div>
            
        <img src="https://ironlinks.ru/nordic/sofia/myProject3/img/icons/bascet.png" >
            <a href="https://ironlinks.ru/nordic/sofia/myProject3/shopping_cart.php">Корзина</a>
        </div></div>
       
            <div class="line"></div>
    </header>
<?php

 
if(isset($_GET['login']) && isset($_GET['password'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $login = htmlentities(mysqli_real_escape_string($link, $_GET['login']));
	$password = htmlentities(mysqli_real_escape_string($link, $_GET['password']));
	
     
    // создание строки запроса
    $query ="INSERT INTO enter VALUES(NULL, '$login','$password')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
   // mysqli_close($link);
   header("Location: https://ironlinks.ru/nordic/sofia/myProject3/index.php");
  
}?>	