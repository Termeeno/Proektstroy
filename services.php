<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>"Услуги"</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- RedHelper -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" 
	src="https://web.redhelper.ru/service/main.js?c=alessaria">
</script> 
<!--/Redhelper -->
</head>
<body>
<img src="images/header.png" alt="Geoplan" width="1080" height="135" class="header" />
<div class="mainblock">
		<div class="menu">
		<a href="index.php" style="color: #F4FBF6; font-size: 28px; float: left; text-decoration: none;"/>&nbsp;&nbsp;&nbsp;НА ГЛАВНУЮ</a>
		<ul id="navbar">
  		<li><a href="#">ЧИТА</a>
    		<ul>
      	<li><a href="index.php">ЧИТА</a></li>
      	<li><a href="sochi/index.php">СОЧИ</a></li>
    	</ul>
  			</li>
				</ul>
				<a href="self.php" style="color: #F4FBF6; font-size: 28px; float: right; text-decoration: none;"/>ВАШ ГОРОД:</a>
		</div>
		<br/>
		<a href="self.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;О КОМПАНИИ</a>
		<a href="services.php" class="buttonselect"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;УСЛУГИ</a>  
		<a href="partners.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ПАРТНЕРАМ</a>
		<a href="documents.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ДОКУМЕНТЫ</a>
		<a href="contacts.php" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;КОНТАКТЫ</a> 
		<div class="centerblock2" style="text-align: center;">
		<?php
		$page=$_GET["page"];
		switch ($page) {
    	case 'mezhevanie':
      	$text="Межевание представляет собой комплекс работ по установлению, восстановлению и закреплению на местности границ земельных участков, определению местоположения границ и площади участка, а также юридическому оформлению полученных материалов.<br/>

Результатом данных работ являются:<br/>

- сформированный межевой план необходимый как для постановки земельного участка на кадастровый учет, так и для внесения изменений в кадастровые сведения об уже учтенном земельном участке;<br/>

-четкое закрепление границ земельного участка межевыми знаками на местности, позволяющие визуально определить границы участка.<br/>";
      	break;
      	case 'kadastr':
      	$text="- межевание<br/>- Уточнение границ земельных участков<br/>- вынос точек земельного участка<br/>- выполнение технических планов
      	<br/>- горизонтальная исполнительная съемка<br/>- разбивка осей зданий<br/>- постановка на кадастровый учет";
      	break;
      	case 'oformlenie':
      	$text='Специалисты ООО "Проектстрой" готовы помочь Вам в получении земельного участка в аренду или собственность.
Процесс оформления выбранного Вами земельного начинается с подготовки схемы расположения земельного участка на кадастровом плане. Затем участок ставится на кадастровый учет, и для заключения договора его аренды готовится пакет документов.
Также, в случае необходимости получения участка в собственность, мы подготавливаем пакет документов для получения разрешения на строительство с дальнейшим вводом сооружения в эксплуатацию и выкупом земельного участка в собственность.
';
      	break;
      	case 'stroit':
      	$text='Команда ООО "Проектстрой" имеет в своем составе подрядчиков для малоэтажного строительства и реконструкции, а за годы практики наших проектировщиков на Забайкальском рынке строительства налажено сотрудничество и продуктивное взаимопонимание с гигантами многоквартирного строительства.';
      	break;
      	case 'proektirovanie':
      	$text='Наиболее частыми поводами обращения клиентов к проектировщикам ООО "Проектстрой" являются:
-подготовка проекта перепланировки
-разрешение на строительство.
Но практика показывает, что наш коллектив готов взяться за решение ЛЮБОГО вопроса, от консультации рабочих в процессе квартирного ремонта до строительного контроля и разработки конструктивных решений для сооружений, подлежащих госэкспертизе.';
      	break;
      	case 'konsult':
      	$text=" Сфера юриспруденции - гибкая динамичная среда, в которой каждый день появляются новые вопросы. Какое бы затруднение ни возникло у Вас, если решение существует, то мы можем его добиться. Невозможно отразить на нескольких страницах весь накопленный нашими специалистами опыт. В практике нашей энергичной и деятельной команды были даже вопросы не связанные напрямую со строительной сферой.
Позвоните, или закажите обратный звонок, и уверены, мы найдем пути решения ваших вопросов и сферы продуктивного сотрудничества.
";
      	break;

  		}
  		if (empty($page)) {
		$text='<a href="docs/services.pdf" style="text-decoration: none;"/><img src="images/price.png" alt="Kadastr" width="302" height="86"/></a>';
		}
		?>
		<div class="serviceblock" style="float: left;"><a href="services.php?page=mezhevanie" style="font-size: 20px; color: #080707; text-decoration: none;"/><img src="images/arrowdown.png" alt="Kadastr" width="107" height="51" style="float: center;"/>МЕЖЕВАНИЕ</a></div>
		<div class="serviceblock" style="float: none;"><a href="services.php?page=kadastr" style="font-size: 20px; color: #080707; text-decoration: none;"/><img src="images/arrowdown.png" alt="Kadastr" width="107" height="51" style="float: center;"/>КАДАСТРОВЫЕ РАБОТЫ</a></div>
		<div class="serviceblock" style="float: right;"><a href="services.php?page=oformlenie" style="font-size: 20px; color: #080707; text-decoration: none;"/><img src="images/arrowdown.png" alt="Kadastr" width="107" height="51" style="float: center;"/>ОФОРМЛЕНИЕ ЗЕМ. УЧАСТКОВ</a></div>
		<?php
		echo "<br/>".$text."<br/><br/>";
		?>
		<div class="serviceblockbottom" style="float: left;"><a href="services.php?page=stroit" style="font-size: 20px; color: #080707; text-decoration: none;"/>СТРОИТЕЛЬСТВО<img src="images/arrowup.png" alt="Kadastr" width="107" height="51" style="float: center;"/></a></div>
		<div class="serviceblockbottom" style="float: none;"><a href="services.php?page=proektirovanie" style="font-size: 20px; color: #080707; text-decoration: none;"/>ПРОЕКТИРОВАНИЕ<img src="images/arrowup.png" alt="Kadastr" width="107" height="51" style="float: center;"/></a></div>
		<div class="serviceblockbottom" style="float: right;"><a href="services.php?page=konsult" style="font-size: 20px; color: #080707; text-decoration: none;"/>КОНСУЛЬТАЦИИ<img src="images/arrowup.png" alt="Kadastr" width="107" height="51" style="float: center;"/></a></div>
		</div> 
</div>
	
<div class="footerblock">
Приемная: тел. 8-914-470-82-24<br/>
График работы: Пн-Чт - с 9.00 до 18.00, обед- с13.00 до 14.00, Птн- с 9.00 до 17.00
</div>
</form>
</body>
</html>