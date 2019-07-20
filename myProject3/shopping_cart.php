<?php


    require ($_SERVER['DOCUMENT_ROOT']. "/nordic/sofia/myProject3/components/header/index.php");

?>

<div class="title">
    <h1>ваша корзина </h1>
    <h2>товары резервируются на ограниченное время</h2>
</div>

<div class="header-card">
    <span>фото</span> <span>наименование</span> <span>размер</span> <span>количество</span> <span>стоимость</span> <span>удалить</span>
    
</div>



<div class="items-card">
</div>
<div class="form-wrapper">
	<div class="title">
		<h1>адрес доставки </h1>
		<h2>Все поля обязательны для заполнения</h2> 
	
	<form  class="adres-form" action="/nordic/sofia/myProject3/auth/deliver-adres.php"  method="get">
		<div class="row">
			<p> ВЫБЕРИТЕ ВАРИАНТ ДОСТАВКИ:</p>

			<input type="text" name="" size="70" > 
		</div>
		<div class="row">
			<p>ИМЯ:</p> <input type="text" name="name" size="30" >      
		</div>
 
		<div class="row">
			 <p>ФАМИЛИЯ:</p>
			<input type="text" name="lastname" size="30" >
		</div>
		<div class="row">
			<p>АДРЕС:</p> 
			<input type="text" name="" size="70"  >
		</div>
		<div class="row">
			<p>ГОРОД</p>  
			<input type="text" name="name" size="30" >   
		</div>
			<div class="row">
				<p>ИНДЕКС</p>	  
				<input type="text" name="lastname" size="30">
			</div>
		<div class="row">
			<p>ТЕЛЕФОН</p> 
			<input type="text" name="name" size="30">
		</div>
   
		<div class="row">
			<p>   E-MAIL</p>	  
			<input type="text" name="lastname" size="30">
		</div>
  
</form>
</div>


</div>
<div class="zigzag" >  <img src="/nordic/sofia/myProject3/img/icons/zigzag-moustache.png"> </div>

<div class="form-wrapper">
<div class="title">
		<h1>варианты оплаты</h1>
		<h2>Все поля обязательны для заполнения</h2> 
		<div class="order-button">
			<p>выберите способ оплаты</p> 
			<input type="" name="" placeholder="банковская карта"  size="75" >      
			<button type="submit">заказать</button>
		</div>
		
	</div>	
</div>

<?php
require ($_SERVER['DOCUMENT_ROOT']. "/nordic/sofia/myProject3/components/footer/index.php");


?> 