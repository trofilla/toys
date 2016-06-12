<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
		<title>GaLiGa Toys</title>

		<!-- Vender styles -->
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"-->
		<link rel="stylesheet" href="assets/vendor/font-awesome-4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/vendor/menu.css" type="text/css">
		<link rel="stylesheet" href="assets/vendor/framework.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.5/assets/owl.carousel.min.css">
		<!-- Aplication styles -->
		<link href="assets/css/style.css" rel="stylesheet">

	</head>
	<body>
	<div class="header_mob">
		
		<div class="header_mob_top">
			<a href="assets/layout/index.php" class="topHeaderLink">Магазин</a>
		</div>
		<div class="header_main clearfix">
			<div class="header_main_logo ">
				<img src="assets/img/Logo_200_65.png" alt="" />
			</div>

		 	<div class="header_main_basket" onclick="location.assign('basket.php')">
    			<i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>
    			<span class="headertxt">Корзина</span>

    		</div>	
    		
		</div>
		<div class="header_search">
			<div class="row">
			  <div class="col-lg-6">
			    <div class="input-group">
			      <input type="text" class="form-control form-control-search" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-default btn-default-search" type="button">Поиск</button>
			      </span>
			    </div>
			  </div>
			</div>
		</div> 
	</div>
	
		<div id="header">
			<div class="header_top">
				<div class="wrap960">
					<div class="discoverLinks">
						<a href="assets/layout/index.php" class="ExploreLink">Магазин</a>
						<a href="assets/layout/forum.php" class="ExploreLink">Форум</a>
					</div>
				</div>
			</div>
			<div class="wrap960">
				
				<div id="headerleft">
					<div id="logo">
						<a href="index.jsp"><img src="assets/img/Logo_200_65.png" alt="logo" width="200" height="65"></a>
					</div>
				</div>
				<div class="headerCenter">
						<div class="headerFace">
							<div class="h" style="transform: rotate(142deg);"></div>
							<div class="m" style="transform: rotate(229deg);"></div>
						</div>
					<div class="headerWheel"></div>
				</div>
				<div id="headerright">
					<div id="headerbasket" class="miniBasketHold">
					
						<div class="headerbasketcontents empty"></div>
						<div class="headeraccount"><a href="#regist.php">Login / Create an Account</a>
						</div>
					
					</div>
					<div id="headersearch" class="sitesearchbox">
						<form name="headersearchform" id="searchform" action="index.jsp" autocomplete="off">
	                        <input type="text" name="searchStr" id="search" placeholder="Поиск товара" autocomplete="off" required="">
	                       <!--  <button class="hdrSrch">
	                        <div class="mag"></div>
	                        </button> -->
                        </form>
                        <div class="suggestSearch"></div>

					</div>
				</div>
			</div>
			<div class="wrap960">
				<nav id="nav">
					<!-- Single button -->
					<!-- <div class="btn-group bg_color__red">
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Акции <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">Новинки</a></li>
					    <li><a href="#">Хиты продаж</a></li>
					    <li><a href="#">Внимание АКЦИЯ</a></li>
					    <li><a href="#">Уценка</a></li>
					  </ul>
					</div> -->



					<ul class="topNav shopNav" data-fade="400" data-height="12" data-img="0" data-imgbg="">
			            <li class="Preschool nth-of-type-2">
			                <a href="#">Акции</a>
			                <ul class="irMenu irMenuStyle1" id="12559" style="opacity: 0; display: none;">
			                   
			                   <li class="irMenuLvl1"><a href="#" class="menu">Новинки</a></li>
			                   <li class="irMenuLvl1"><a href="#" class="menu">Хиты продаж</a></li>
			                   <li class="irMenuLvl1"><a href="#" class="menu">Внимание АКЦИЯ!</a></li>
			                   <li class="irMenuLvl1"><a href="#" class="menu">Уценка</a></li>
			                </ul>
			            </li>
			            <li class="Soft-Toys nth-of-type-3">
			                <a href="#">Игры</a>
			                <ul class="irMenu irMenuStyle1" id="12559" style="opacity: 0; display: none;">
			                   <li class="irMenuLvl1"><a href="#">Ролевые игры</a></li>
			                   <li class="irMenuLvl1"><a href="#">Настольные игры</a></li>
			                   <li class="irMenuLvl1"><a href="#">Игровые наборы</a></li>
			                   <li class="irMenuLvl1"><a href="#">Детское оржие</a></li>
			                   <li class="irMenuLvl1"><a href="#">Развлечение</a></li>
			                </ul>
			            </li>
			            <li class="nth-of-type-4">
			                <a href="#">Детские игрушки</a>
			                <ul class="irMenu irMenuStyle1" id="12559" style="opacity: 0; display: none;">
			                    <li class="irMenuLvl1"><a href="#">Игрушки для малышей</a></li>
			                    <li class="irMenuLvl1"><a href="#">Персонажи мультфильмов</a></li>
			                    <li class="irMenuLvl1"><a href="#">Мягкие игрушки</a></li>
			                    <li class="irMenuLvl1"><a href="#">Куклы</a></li>
			                    <li class="irMenuLvl1"><a href="#">Детские машинки</a></li>
			                	<li class="irMenuLvl1"><a href="#">Конструкторы</a></li>
			                    <li class="irMenuLvl1"><a href="#">Животные</a></li></ul>
			            </li>
			            <li class="nth-of-type-5">
			                <a href="#">Обучение и творчество</a>
			                <ul class="irMenu irMenuStyle1" id="12559" style="opacity: 0; display: none;">
			                    <li class="irMenuLvl1"><a href="#">Развивающие игрушки</a></li>
			                    <li class="irMenuLvl1"><a href="#">Наборы для творчества</a></li>
			                </ul>
			            </li>
			            <li class="nth-of-type-6">
			                <a href="#">Спорт и активный отдых</a>
			                <ul class="irMenu irMenuStyle1" id="12559" style="opacity: 0; display: none;">
			                    <li class="irMenuLvl1"><a href="#">Детский транспорт</a></li>
			                    <li class="irMenuLvl1"><a href="#">Детские велосипеды</a></li>
			                    <li class="irMenuLvl1"><a href="#">Все для пляжа</a></li>
			                    <li class="irMenuLvl1"><a href="#">Спортивный инвертарь</a></li>
			                    <li class="irMenuLvl1"><a href="#">Игры на свежем воздухе</a></li>
			                </ul>
			            </li>
			            <li class="nth-of-type-7">
			                <a href="#">Дом и школа</a>
			                <ul class="irMenu irMenuStyle1" id="12559" style="opacity: 0; display: none;">
			                    <li class="irMenuLvl1"><a href="#">Подготовка к школе</a></li>
			                    <li class="irMenuLvl1"><a href="#">Товары для новорожденных</a></li>
			                    <li class="irMenuLvl1"><a href="#">Детские товары</a></li>
			                   
			                </ul>
			            </li>
			             <li class="nth-of-type-8">
			                <a href="#">Контакты</a>
			                 <ul class="irMenu irMenuStyle1" id="12559" style="opacity: 0; display: none;">
			                г.Львов, ул.ОООРЛЛ, 69
			                телефоны: 067 700 58 58
			                093 700 58 58
			                050 700 58 58
			                </ul>
			            </li>
			           
			        </ul>
				</nav>
			</div>

<div id="fullWidth" class="shopSalesNav">
  <ul id="salesWrap2">
     <li>
        <a href="http://www.hamleys.com/offers-exclusive-offers.irc" title="Exclusive Offers">Exclusive Offers</a>                                     
     </li>
     <li>
         <a href="http://www.hamleys.com/delivery-information.irs" title="Free Delivery on Orders over £50">Free Delivery on Orders over £50</a>
     </li> 
     <li>
       <a href="http://www.hamleys.com/gift-vouchers.irs" title="Gift Vouchers">Gift Vouchers</a>
     </li> 
     <li>
        <a href="http://www.hamleys.com/explore-stores.irs" title="Explore – Find a store">Explore – Find a store</a>
      </li>
               </ul>
</div>

		</div>
	
		
			
			
			
			
	
	