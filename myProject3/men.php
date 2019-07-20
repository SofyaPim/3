<?php


    require_once ($_SERVER['DOCUMENT_ROOT']. "/nordic/sofia/myProject3/components/header/index.php");

?>
<div class="title">
<h1>МУЖЧИНАМ</h1>
<h2 style="align-self:center" >Все товары</h2>

</div>
<div class="menu">
<div class="category">
<div class="dropdown">
  <h3 class="dropbtn">Категории</h3>
  <div class="dropdown-content">
  <a href="#">ЗИМА</a>
  <a href="#">ВЕСНА</a>
  <a href="#">ЛЕТО</a>
  <a href="#">ОСЕНЬ</a>
  </div>
</div>
</div>
<div class="size">
<div class="dropdown">
  <h3 class="dropbtn">Размеры</h3>
  <div class="dropdown-content">
  <a href="#">M</a>
  <a href="#">L</a>
  <a href="#">XL</a>
  <a href="#">XXL</a>
  </div>
</div>
</div>
<div class="price">
<div class="dropdown">
  <h3 class="dropbtn">Стоимость</h3>
  <div class="dropdown-content">
  <a href="#">100-1000 рублей</a>
  <a href="#">1000-3000 рублей</a>
  <a href="#">3000-6000 рублей</a>
  <a href="#">6000-20000 рублей</a>
  </div>
</div>
</div>




</div>
<div class= "card-wrapper">
<?$arr = (new Goods(0))->getElementsId();?>
                  <?foreach($arr as $elem){?>
            <?$item = new Goods($elem)?>            
            <div class="cards-Item">   
               <a href="https://ironlinks.ru/nordic/sofia/myProject3/details.php?id=<?=$item->getField('id')?>">
					<?= "<img src=". $item->getField('photo').">"?>
				</a>	
               
                <div class="Item">
                    <h2><?=$item->getField('title')?></h2>
                    <p> <?=$item->getField('price')?></p>
                </div>

            
                    <!-- <a href="<?=$item->getField('link')?>" class="news__a">Подробнее</a> -->
                </div>
        <?}?>

</div>




<?php
require_once ($_SERVER['DOCUMENT_ROOT']. "/nordic/sofia/myProject3/components/footer/index.php");


?> 