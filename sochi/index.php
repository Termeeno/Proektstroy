<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>"Проектстрой"</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<img src="images/header.png" alt="Geoplan" width="1080" height="135" class="header" />
<div class="mainblock">
		<div class="menu">
		<a href="index.php" style="color: #F4FBF6; font-size: 28px; float: left; text-decoration: none;"/>&nbsp;&nbsp;&nbsp;НА ГЛАВНУЮ</a>
		<a href="self.php" style="color: #F4FBF6; font-size: 28px; float: center; text-decoration: none;"/>ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</a>
		<ul id="navbar">
  		<li><a href="#">СОЧИ</a>
    		<ul>
      	<li><a href="../index.php">ЧИТА</a></li>
      	<li><a href="../sochi/index.php">СОЧИ</a></li>
    	</ul>
  			</li>
				</ul>
				<a href="self.php" style="color: #F4FBF6; font-size: 28px; float: right; text-decoration: none;"/>ВАШ ГОРОД:</a>
		</div>
		<div class="sliderblock">
		Блок новостей<br/>
		<?php
		$url="http://ancb.ru";
		$out = file_get_contents($url);
		$arraylink= explode('a class="one_analytics_main_horizont"', $out, 10);
		$key=1;
		while ($key<7) {
		$stroke=$arraylink[$key];
		$key++;
		$linkin='/pub';
		$linkout='">';
		$linkstart=strpos($stroke, $linkin);
		$linkend=strpos($stroke, $linkout);
		$linklenght=$linkend-$linkstart; //вычисляем длину линка, от позиции последнего символа отнимаем позицию первого
		$link=$url.substr($stroke, $linkstart, $linklenght);

		$imgin='/files';
		$imgout=');';
		$imgstart=strpos($stroke, $imgin);
		$imgend=strpos($stroke, $imgout);
		$imglenght=$imgend-$imgstart;
		$img=$url.substr($stroke, $imgstart, $imglenght);

		$namein='18px;">';
		$nameout='</div>';
		$namestart=strpos($stroke, $namein)+7; //+7- чтобы убрать начало заголовка 18px
		$nameend=strpos($stroke, $nameout, $namestart);;
		$namelenght=$nameend-$namestart;
		$name=substr($stroke, $namestart, $namelenght);
		echo '<div class="newsimage"><img src="'.$img.'" width="180" height="126" style="-webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px;" ><a href="'.$link.'"style="color: #699274; text-align: left;"/>'.$name.'</a></div>';
		}
		//echo htmlspecialchars($stroke);
		?>
		</div> 
		<a href="self.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;О КОМПАНИИ</a>
		<a href="services.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;УСЛУГИ</a>  
		<a href="partners.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ПАРТНЕРАМ</a>
		<a href="documents.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ДОКУМЕНТЫ</a>
		<a href="contacts.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;КОНТАКТЫ</a> 
		<br/>
		<br/> 
	<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	
<div class="footerblock">
Текст в подвальчике
</div>
</form>
</body>
</html>