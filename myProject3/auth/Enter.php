<?php
require PROJECT_ROOT.'/nordic/sofia/myProject3/global_path.php'; // подключаем скрипт
 
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
 header("Location: https://ironlinks.ru/nordic/sofia/myProject3/index.php/"); /* Производит перенаправление браузера на другой ресурс */
  /* Внимание! Убедитесь, что код, расположенный ниже не исполняется */
     exit;
 }?>	







    
    
     
    
     

