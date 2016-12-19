<?php
$data['menu']=' <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><i>Kitchen</i></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="http://localhost:83/web/page"><a href="http://localhost:83/web/?page=index">Главная</a></li>
                <li class="http://localhost:83/web/history"><a href="http://localhost:83/web/?page=history">О разных кухнях</a></li>
                <li class="http://localhost:83/web/foto"><a href="http://localhost:83/web/?page=foto">Фотоальбом</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Рецепты <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="zavt.html">Завтраки</a></li>
                    <li><a href="#">Супы</a></li>
                    <li><a href="#">Основные блюда</a></li>
					<li><a href="#">Выпечка и десерты</a></li> 
					<li><a href="#">Закуски</a></li> 
					<li><a href="#">Напитки</a></li> 					
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
		<form class="form-inline" align="center" action="testreg.php" method="post">
	  <div class="form-group">
		<label class="sr-only" for="exampleInputEmail3">Email address</label>
		<input name="login" type="text" class="form-control" size="15" maxlength="15" placeholder="Email">
	  </div>
	  <div class="form-group">
		<label class="sr-only" for="exampleInputPassword3">Password</label>
		<input name="password" type="password" class="form-control" size="15" maxlength="15"  placeholder="Password">
	  </div>
	  <div class="checkbox">
		<label>
		  <input type="checkbox"> Remember me
		</label>
	  </div>
	  <button type="submit" class="btn btn-default">Sign in</button>
	  <a href="reg.php">Check in</a> 
	</form>
';
		
$page='index';
if (isset($_GET['page']))
{
	$page=$_GET['page'];
}	
$func=$page.'Func';
$func();

function indexFunc(){
	global $data;
		$data['fouter']='<div class="row">
        <div class="col-lg-4">
          <img class="img-circle"  src="1.jpg" alt="140x140"  style="width: 140px; height: 140px;">
          <h2>Необычная еда</h2>
          <p>В разных странах и у различных народов свои представления о еде – поэтому границы между съедобным и не съедобным весьма и весьма условны. </p>
          <p><a class="btn btn-default" href="#" role="button">Подробнее »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="2.jpg" alt="140x140"  style="width: 140px; height: 140px;">
          <h2>Вредная еда</h2>
          <p>Охватить все существующие виды пищи, наносящие значительный урон здоровью, не представляется возможным. Поэтому предлагаю познакомиться с основными вредоносами из данной серии.</p>
          <p><a class="btn btn-default" href="#" role="button">Подробнее »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle"  alt="140x140" src="3.jpg" alt="140x140"  style="width: 140px; height: 140px;">
		  <h2>Великолепные десерты</h2>
          <p>Новые необычные десерты вместо стандартных тортов! Узнай, какие они.</p>
          <p><a class="btn btn-default" href="#" role="button">Подробнее »</a></p>
        </div>
      </div>';
	_rendelTemplate($data,'page');
}
function historyFunc(){
	global $data;
$data['history']='
<div class="row">
	<div class="col-md-3">
	 <img class="img-circle"  src="21.jpg" alt="230x230"  style="width: 190px; height: 170px;">
	 </div>
  <div class="col-md-9">
  <h1><u><a href="#"><center><i>Английская кухня</i></center> </a></u></h1>
  <p align="justify" style="text-indent: 20; font-size: 14pt;" >Захватывающие произведения Конан-Дойля о Шерлоке Холмсе невольно заставили нас ассоциировать древнейшую английскую кухню с традиционным черным чаем и овсянкой. Но на самом деле она не ограничивается этими двумя блюда, а охватывает десятки других. В их числе пудинги, бифштексы, бисквиты, эскалоп, рыбные и мясные блюда.</p>
  </div> 
</div>
	<div class="row">
	 <div class="col-md-9">
  <h1><u><a href="#"><center><i>Немецкая кухня</i></center> </a></u></h1>
  <p align="justify" style="text-indent: 20; font-size: 14pt;" >Об истории национальной немецкой кухни известно очень мало. Зарождалась она во времена существования Древнего Рима. Между тем, особого развития с тех пор и до начала ХХ века так и не получила. Связано это было, в основном, с политикой и историей становления самой страны.</p>
</div>
<div class="col-md-3">
	 <img class="img-circle"  src="22.jpg" alt="230x230"  style="width: 190px; height: 170px;">
	 </div>
</div>
<div class="row">
	<div class="col-md-3">
	 <img class="img-circle"  src="23.jpg" alt="230x230"  style="width: 190px; height: 170px;">
	 </div>
  <div class="col-md-9">
  <h1><u><a href="#"><center><i>Итальянская кухня</i></center> </a></u></h1>
  <p align="justify" style="text-indent: 20; font-size: 14pt;" >Красота Италии не ограничивается величественной архитектурой, богатой историей и местными достопримечательностями. Она распространяется и на потрясающее умение итальянцев создавать настоящие шедевры вокруг себя не только в искусстве, но и в кулинарии.</p>
  </div> 
</div>
<div class="row">
	 <div class="col-md-9">
  <h1><u><a href="#"><center><i>Русская кухня</i></center> </a></u></h1>
  <p align="justify" style="text-indent: 20; font-size: 14pt;" > Процесс становления и развития русской кухни растянулся на несколько веков. То и дело о ней всплывают упоминания в летописях Х-ХV вв. и в разнообразных исторических документах. О ней любили писать классики в своих бессмертных произведениях. Ее тщательно изучали этнографы. А все потому что она самобытна и невероятна богата. Развиваясь вместе со своим народом, она отражала не только его быт и нравы, но и историю. И все время совершенствовалась, пополнялась заимствованиями и расширялась.</p>
</div>
<div class="col-md-3">
	 <img class="img-circle"  src="24.jpg" alt="230x230"  style="width: 190px; height: 170px;">
	 </div>
</div>';
_rendelTemplate($data,'history');
}
function fotoFunc(){
	global $data;
	$data['foto']= '<div class="row">
  <div class="col-md-4"><img class="img-thumbnail"  src="31.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="32.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="33.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
</div>
<div class="row">
<p>
  <div class="col-md-4"><img class="img-thumbnail"  src="34.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="35.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="36.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
</div>
<div class="row">
<p>
  <div class="col-md-4"><img class="img-thumbnail"  src="37.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="38.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="3.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
</div>
<div class="row">
<p>
  <div class="col-md-4"><img class="img-thumbnail"  src="39.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="40.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
  <div class="col-md-4"><img class="img-thumbnail"  src="41.jpg" alt="230x230"  style="width: 350px; height: 240px;"></div>
</div>';
_rendelTemplate($data,'foto');
}
function _rendelTemplate($data,$tpl){
	include($tpl.'.php');
}