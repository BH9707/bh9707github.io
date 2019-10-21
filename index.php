<?php require 'vendor/autoload.php';# Инстутут куратора
@session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		 <script src="http://code.jquery.com/jquery-latest.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link href="stye.css" rel="stylesheet" type="text/css"/>
		<title>KSIPO</title>
	</head>
	<body>

	<header class="header">
		<div class="header__top">	
		</div>
		<div class="header__content">
			<div class="container">
			<div class="header__logo">
			</div> 
		</div>
	</div>
	<a class="container1">
	<a class="container1_photo"><img src="katu.png" alt="" width = "90%"></a>
	<a class="container1_slovo" align = ""><big>ШКОЛА КУРАТОРА</big></a>
	</a>		
	<div align="center"><? include('Slaider.php');?></div>
	<ul>
 <li><a href="?Istoria">История Школы кураторов</a></li>
 <li><a href="?Anketa">Анкетирование</a></li>
 <li><a href="?Kon">Конкурс</a>
 </li>
 	 <li><a href="?Plan">План работы куратора</a></li>
 	 <li><a href="?TF">Список кураторов</a>
 </li>
 <li><a>Документы и материал</a>
<ul>
   <li class="li"><a href="?ND">Нормативные документы</a></li>
   <li class="li"><a href="?B">Библиотека</a></li>
   <li class="li"><span style="color:#ffff;">Материал для кур. часов</span></li>
   <ol>
      <li><span style="color:#ffff;">1 курс</span></li>
      <ol>
      <li><a href="?k11">1 триместр</a></li>
      <li><a href="?k12">2 триместр</a></li>
      <li><a href="?k13">3 триместр</a></li>
 	  </ol>
      <li><span style="color:#ffff;">2 курс</span></li>
      <ol>
      <li><a href="?k21">1 триместр</a></li>
      <li><a href="?k22">2 триместр</a></li>
      <li><a href="?k23">3 триместр</a></li>
 	  </ol>
 	  <li><span style="color:#ffff;">3 курс</span></li>
      <ol>
      <li><a href="?k31">1 триместр</a></li>
      <li><a href="?k32">2 триместр</a></li>
      <li><a href="?k33">3 триместр</a></li>
 	  </ol>
 </ol>
   <li><a href="?MM">Методический материалы</a></li>
  </ul>

</li>
 </li>
 <li><a href="?Surak">On-line консультация</a>
 </li>
</ul>
	
</header>
<script>
$(document).ready(function(){
$("ol").hide();
$("span").click(function(){
$(this).parent().next().slideToggle();
});
}); 
</script>
  <div class="info">
		<?php
		$fa = "1";
			if(isset($_GET['Surak'])){//Silkalarga baskanda fail ashy
				$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">On-line консультация</h2></div>	
				<div id="in1">
					<form action="" method="POST">
						<div class="sol_jak">
							<label><p><b>Напишите имя:</b></p></label>
						<label><p><b>Напишите фамилю:</b></p></label>
						<label><p><b>Напишите почту:</b></p></label>
						<label for="Fac"><p><b>Выберите факультет:</b></p></label>
						</div>
						<div class="on_jak">
				<input type="text" name="Ati">
				<br><br>
			    <input type="text" name="Tegi">
			    <br><br>
			    <input type="text" name="Email">
			    <select class="select" name="Fac">
                    <optgroup label="КСиПО">
                        <option value="ВТиПО">ВТиПО</option>
                        <option value="ИС">ИС</option>
                        <option value="ВТ">ВТ</option>
                        <option value="ПО">ПО</option>
                        <option value="ФиХ">ФиХ</option>
                    </optgroup>
                    <optgroup label="АФ">
                        <option value="ЗиКР">ЗиКР</option>
                        <option value="ЗиР">ЗиР</option>
                        <option value="ЛРиЛХ">ЛРиЛХ</option>
                        <option value="ПиА">ПиА</option>
                        <option value="Э">Э</option>
                    </optgroup>
                     <optgroup label="ВиТЖ">
                        <option value="ВМ">ВМ</option>
                        <option value="ВС">ВС</option>
                        <option value="МиБ">МиБ</option>
                        <option value="МиФ">МиФ</option>
                        <option value="ОиР">ОиР</option>
                        <option value="ТПиПРЖ">ТПиПРЖ</option>
                    </optgroup>
                    <optgroup label="УЗРАиД">
                        <option value="КиО">КиО</option>
                        <option value="ЗиГ">ЗиГ</option>
                        <option value="АиД">АиД</option>
                    </optgroup>
                    <optgroup label="Технический факультет">
                        <option value="ТМиО">ТМиО</option>
                        <option value="МТП">МТП</option>
                        <option value="ТПиПП">ТПиПП</option>
                        <option value="СМиС">СМиС</option>
                        <option value="ТТиТ">ТТиТ</option>
                        <option value="ТМ">ТМ</option>
                    </optgroup>
                    <optgroup label="Экономический факультет">
                        <option value="УиА">УиА</option>
                        <option value="Маркетинг">Маркетинг</option>
                        <option value="Менеджмент">Менеджмент</option>
                        <option value="Финанс">Финанс</option>
                        <option value="Экономика">Экономика</option>
                        <option value="ЭТиП">ЭТиП</option>
                    </optgroup>
                    <optgroup label="Энергетический факультет">
                        <option value="РЭиТ">РЭиТ</option>
                        <option value="Теплоэнергетика">Теплоэнергетика</option>
                        <option value="ЭЭ">ЭЭ</option>
                        <option value="Электроснабжения">электроснабжения</option>
                    </optgroup>
                    <optgroup label="Гуманитарный факультет">
                        <option value="ИК">ИК</option>
                        <option value="КиРЯ">КиРЯ</option>
                        <option value="Философия">Философия</option>
                        <option value="ФВ">ФВ</option>
                    </optgroup>
                </select>
						</div>
		    
		    
		    <p>
                
                </p>
                <p><b>Какой вопрос вас интересует:</b></p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
			    <button type="submit" name="knopReg" class="btn btn-primary">Отправить</button>
			     <br><br>
			    </p>
			    </form>
			    <?if(isset($_POST['knopReg'])){
			    	
			    	$name1= $_POST['Ati'];
			    	if ($_POST['Ati'] =='' | $_POST["Tegi"]==''| $_POST["Email"]==''| $_POST["text"]=='') 
			    		{ 
			    			echo "<p style='color:#009900;'>заполните все поля!</p>";
			    			?>
			    			<script type="text/javascript">
							alert("заполните все поля!");
							</script>
			    			<?php
			    		}		
			    	else
			    	{
			    		include('smtpauth.php');

						$smtp_username = 'visualmoc@mail.ru'; 	// название моей почты
						$smtp_password = 'astana123';          	// пароль моей почты
						$smtp_host = 'ssl://smtp.mail.ru';   		// сервер почты
						$smtp_from = 'pop.mail.ru';				 		// 
						  
						$instance = new SendMailSmtpClass($smtp_username,$smtp_password , $smtp_host, $smtp_from,465 ,'utf-8');

						$mailTo = 'visualmoc@mail.ru';// почта кому отправляем письмо shkolakuratora2019@mail.ru
						$subject = 'отзывы или вопросы от Школа куратора';// тема письма
						$message = $_POST["text"];// содержание письма
						$headers = "от ".$_POST["Tegi"]." ".$_POST["Ati"].", ".$_POST["Fac"]." ответте на почту: ".$_POST["Email"];//шапка 

						$result = $instance->send($mailTo, $subject, $message, $headers);


						?>
			    			<script type="text/javascript">
							alert("Уважаемый(ая), Ваше письмо отправленно успешно.\nСпасибо!");
							</script>
							<div id="div0">
			    			<?php
			    	}																																																	    
			    	
					
			    }
			}
			if(isset($_GET['Anketa'])){
				
				$fa = "2";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Тест «Психологический портрет педагога»</h2></div>
			<?
			}
			if(isset($_GET['Istoria'])){
			
				$fa = "3";
				?><div class="takirip">
					<h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Об истории Школы кураторов</h2>
				</div>
			<?
			}
			
			if(isset($_GET['Plan'])){
			
				?><div class="takirip"><h2 style="font-size: 40px; text-align: center; margin-top: 30px;">План работы кураторов на 2019-2020 учебный год</h2></div>
				<div id="in1"><?
				$fa = "";
				?>
				<p style='font-size: 18px;'>2019-20 кураторлық жоспар 1 курс<a id ="kbatirma" href="SHC\План работы куратора/2019-20 кураторлық жоспар 1 курс.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2019-2010 ПЛАН кураторов 1 курс<a id ="kbatirma" href="SHC\План работы куратора\2019-2010 ПЛАН кураторов 1 курс.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2019-20 кураторлық жоспар 2 курс<a id ="kbatirma" href="SHC\План работы куратора/2019-20 кураторлық жоспар 2 курс.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2019-2020  ПЛАН кураторов 2 курс<a id ="kbatirma" href="SHC\План работы куратора\2019-2020  ПЛАН кураторов 2 курс.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2019-20 кураторлық жоспар 3 курс<a id ="kbatirma" href="SHC\План работы куратора/2019-20 кураторлық жоспар 3 курс.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2019-2020  ПЛАН кураторов 3 курс<a id ="kbatirma" href="SHC\План работы куратора\2019-2020  ПЛАН кураторов 3 курс.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>План работы кураторов на 2019<a id ="kbatirma" href="SHC\План работы куратора\План работы кураторов на 2019.docx" target="_blank">Открыть</a></p>
<?php
			
			}
			if(isset($_GET['ND'])){
			
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Нормативно-правовые документы</h2></div>
			<?
			?><div id="in1"><?
				$fa = "";
				?>
				<p style='font-size: 18px;'>2018 Білім алушыларына жатахана. беру тәртібі туралы ереже<a id ="kbatirma" href="SHC\Нормативно-правовые документы/2018 Білім алушыларына жатахана. беру тәртібі туралы ереже.docx" target="_blank">Открыть</a></p>

				<p style='font-size: 18px;'>2019    Кодекс чести студента КАТУ им.С.Сейфуллина (1)<a id ="kbatirma" href="SHC\Нормативно-правовые документы/2019    Кодекс чести студента КАТУ им.С.Сейфуллина (1).docx" target="_blank">Открыть</a></p>

				<p style='font-size: 18px;'>2019  С. Сейфуллина ат. ҚАТУ студентінің ар -намыс кодексі<a id ="kbatirma" href="SHC\Нормативно-правовые документы/2019  С. Сейфуллина ат. ҚАТУ студентінің ар -намыс кодексі.docx" target="_blank">Открыть</a></p>

				<p style='font-size: 18px;'>МИ куратора, старост и старш.куратора   2019-20<a id ="kbatirma" href="SHC\Нормативно-правовые документы/МИ куратора, старост и старш.куратора   2019-20.docx" target="_blank">Открыть</a></p>

				<p style='font-size: 18px;'>Положение о правилах проживания в студ.общежитии 2018-2019<a id ="kbatirma" href="SHC\Нормативно-правовые документы/Положение о правилах проживания в студ.общежитии 2018-2019.doc" target="_blank">Открыть</a></p>

				<p style='font-size: 18px;'>Положение о школе кураторов Казахского агротехнического универистета имени С.Сейфуллина<a id ="kbatirma" href="SHC\Нормативно-правовые документы/Положение о школе кураторов Казахского агротехнического универистета имени С.Сейфуллина.doc" target="_blank">Открыть</a></p>
<?php
				
			}
			if(isset($_GET['MM'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Методические материалы</h2></div>
			<?
			?><div id="in1"><?
				
				?>

				<p style='font-size: 18px;'>Сценарий тренингов<a id ="kbatirma" href="SHC\Материалы\Методические материалы/Сценарий тренингов.docx" target="_blank">Открыть</a></p>
<?php
				
			}
			if(isset($_GET['k11'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 1 курс 1 триместр</h2></div>
			<?
			?><div id="in1"><?
				?>
				<p style='font-size: 18px;'>Тема- «Сердце страны- Нур-Султан» посещение культурных  мест и  памятников города Нур-Султан.ppt<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- «Сердце страны- Нур-Султан» посещение культурных  мест и  памятников города Нур-Султан.ppt" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тема- «Час добропорядочности».doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- «Час добропорядочности».doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тема- Значение и преимущества волонтерской деятельности.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- Значение и преимущества волонтерской деятельности.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тема- Нетрадиционные религиозные течения.ppt<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- Нетрадиционные религиозные течения.ppt" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тема- Основа здоровья - это правильное питание.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- Основа здоровья - это правильное питание.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тема- Основные периоды становления и развития КазАТУ им.С.Сейфуллина.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- Основные периоды становления и развития КазАТУ им.С.Сейфуллина.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тема- Сакен Сейфуллин- выдающ.личность.rtf<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- Сакен Сейфуллин- выдающ.личность.rtf" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тема- Этикет поведения везде и во всем.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\1 триместр\Тема- Этикет поведения везде и во всем.doc" target="_blank">Открыть</a></p>
<?php
				
			}
			if(isset($_GET['k12'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 1 курс 2 триместр</h2></div>
			<?
			?><div id="in1"><?
				
				?>

				<p style='font-size: 18px;'>Латинский алфавит. Плюсы и положительные стороны.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\2 триместр\Латинский алфавит. Плюсы и положительные стороны.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Лучший способ найти друга - самому стать хорошим другом.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\2 триместр\Лучший способ найти друга - самому стать хорошим другом.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Молодежь против накротиков.ppt<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\2 триместр\Молодежь против накротиков.ppt" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Послание Президента РК народу Казахстана.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\2 триместр\Послание Президента РК народу Казахстана.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Тайм.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\2 триместр\Тайм.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>Экологическая ситуация в Республике Казахстан.ppt<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\2 триместр\Экологическая ситуация в Республике Казахстан.ppt" target="_blank">Открыть</a></p>
<?php
				
			}
			if(isset($_GET['k13'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 1 курс 3 триместр</h2></div>
			<?
			?><div id="in1"><?
				
				?>

				<p style='font-size: 18px;'>1 неделя Имидж современного студента.rtf<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\3 триместр\1 неделя Имидж современного студента.rtf" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2 неделя Приоритеты и особенности моего университета.ppt<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\3 триместр\2 неделя Приоритеты и особенности моего университета.ppt" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>4 неделя Семинар-тренинг  лНа пути к самопознанию, самоопределению¬.doc<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\3 триместр\4 неделя Семинар-тренинг  лНа пути к самопознанию, самоопределению¬.doc" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>5 неделяМероприятие,  посвященное Дню единства народов Казахстана лМы вместе -за стабильность!¬.ppt<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\1 курс\3 триместр\5 неделяМероприятие,  посвященное Дню единства народов Казахстана лМы вместе -за стабильность!¬.ppt" target="_blank">Открыть</a></p>
				<?php
				
			}
			if(isset($_GET['k21'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 2 курс 1 триместр</h2></div>
			<?
			?><div id="in1"><?
				?>
				<p style='font-size: 18px;'>1 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\1 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2 неделя.ppt<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\2 неделя.ppt" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>3 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\3 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>4 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\4 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>6 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\6 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>7 неделя.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\7 неделя.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>8 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\8 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>9 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\1 триместр\9 неделя.docx" target="_blank">Открыть</a></p>
<?php
				
			}	
			if(isset($_GET['k22'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 2 курс 2 триместр</h2></div>
			<?
			?><div id="in1"><?
				?>
				<p style='font-size: 18px;'>11 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\11 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>12 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\12 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>13 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\13 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>14 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\14 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>15 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\15 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>16 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\16 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>17 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\17 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>18 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\18 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>19 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\2 триместр\19 неделя.docx" target="_blank">Открыть</a></p>
				<?php	
			}
			if(isset($_GET['k23'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 2 курс 3 триместр</h2></div>
			<?
			?><div id="in1"><?
				?>
				<p style='font-size: 18px;'>21 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\21 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>22 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\22 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>23 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\23 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>24 неделя детские дома.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\24 неделя детские дома.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>24 неделя.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\24 неделя.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>25 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\25 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>26 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\26 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>27 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\27 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>28 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\28 неделя.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>29 неделя.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\2 курс\3 триместр\29 неделя.docx" target="_blank">Открыть</a></p>
				<?php	
			}	
			if(isset($_GET['k31'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 3 курс 1 триместр</h2></div>
			<?
			?><div id="in1"><?
				?>
				<p style='font-size: 18px;'>1 неделя кодекс чести студента.pdf<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\1 неделя кодекс чести студента.pdf" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>1 неделя кодекс чести студента.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\1 неделя кодекс чести студента.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2 неделя Влияние вредных привычек на организм человека.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\2 неделя Влияние вредных привычек на организм человека.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>3 неделя Последствия административного правонарушения.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\3 неделя Последствия административного правонарушения.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>4 неделя Ежегодное послание Президента РК народу Казахстана.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\4 неделя Ежегодное послание Президента РК народу Казахстана.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>5 неделя Секреты долголетия и красоты.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\5 неделя Секреты долголетия и красоты.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>6 неделя Программа StartUp первые шаги по бизнесу.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\6 неделя Программа StartUp первые шаги по бизнесу.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>7 неделя Имидж моей специальности.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\7 неделя Имидж моей специальности.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>8 неделя Республика Казахстан и ООН.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\8 неделя Республика Казахстан и ООН.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>8 неделя Республика Казахстан и ООН.pdf<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\8 неделя Республика Казахстан и ООН.pdf" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>9 неделя Родина начинается с семьи.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\9 неделя Родина начинается с семьи.docx" target="_blank">Открыть</a></p>
				<?php	
			}		
			if(isset($_GET['k32'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 3 курс 2 триместр</h2></div>
			<?
			?><div id="in1"><?
				?>
				<p style='font-size: 18px;'>1 неделя Действия, преследуемые Уголовным кодексом РК против коррупции.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\1 неделя Действия, преследуемые Уголовным кодексом РК против коррупции.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>2 неделя Образование фактор современного культурного пространства.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\2 неделя Образование фактор современного культурного пространства.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>3 неделя Электронное правительство Республики Казахстан.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\3 неделя Электронное правительство Республики Казахстан.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>4 неделя Значение межнационального согласия в Республике Казахстан.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\4 неделя Значение межнационального согласия в Республике Казахстан.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>5 неделя Спортивные достижения в Независимой стране.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\5 неделя Спортивные достижения в Независимой стране.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>6 неделя Законы о труде и молодой специалист.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\6 неделя Законы о труде и молодой специалист.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>7 неделя Что вы знаете о дресс коде.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\7 неделя Что вы знаете о дресс коде.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>8 неделя Что взять лучшего из зарубежного образования.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\8 неделя Что взять лучшего из зарубежного образования.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>9 неделя Выдающиеся люди - стимул для успеха.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\2 триместр\9 неделя Выдающиеся люди - стимул для успеха.pptx" target="_blank">Открыть</a></p>
				<?php	
			}
			if(isset($_GET['k33'])){
			$fa = "";
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Материал для кураторских часов 3 курс 3 триместр</h2></div>
			<?
			?><div id="in1"><?
				?>
				<p style='font-size: 18px;'>1 неделя Значение позитивного мышления.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\1 неделя Значение позитивного мышления.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>3 неделя Признаки пищевых отравлений и пути их предотвращения.pptx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\3 неделя Признаки пищевых отравлений и пути их предотвращения.pptx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>4 неделя Научно-исследовательская деятельность студентов возможности и цели.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\4 неделя Научно-исследовательская деятельность студентов возможности и цели.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>5 неделя Программа Болашак или академическая мобильность.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\5 неделя Программа Болашак или академическая мобильность.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>6 неделя Выдающиеся деятели казахстанской  культуры.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\6 неделя Выдающиеся деятели казахстанской  культуры.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>7 неделя Пенсионная грамотность- знание в будущем.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\7 неделя Пенсионная грамотность- знание в будущем.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>8 неделя Роль ораторского искусства в современном обществе.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\8 неделя Роль ораторского искусства в современном обществе.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>9 неделя Кредиты и депозиты- плюсы и минусы.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\3 триместр\9 неделя Кредиты и депозиты- плюсы и минусы.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>8 неделя Республика Казахстан и ООН.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\8 неделя Республика Казахстан и ООН.docx" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>8 неделя Республика Казахстан и ООН.pdf<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\8 неделя Республика Казахстан и ООН.pdf" target="_blank">Открыть</a></p>
				<p style='font-size: 18px;'>9 неделя Родина начинается с семьи.docx<a id ="kbatirma" href="SHC\Материалы\Материал для кураторских часов\3 курс\1 триместр\9 неделя Родина начинается с семьи.docx" target="_blank">Открыть</a></p>
				<?php	
			}			
			if(isset($_GET['B'])){
			
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Библиотека</h2></div>
			<?
			?><div id="in1"><?
				$fa = "";
				?>

				<p style='font-size: 18px;'>Библиотека<a id ="kbatirma" href="SHC\Материалы\Библиотека.doc" target="_blank">Открыть</a></p>
<?php
				
			}
			
			if(isset($_GET['TF'])){
			
				?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Список кураторов:</h2></div>
			<?
			?><div id="in1"><?
				$fa = "";
				?>
				<p style='font-size: 18px;'>Техникалық факультет бойынша<a id ="kbatirma" href="SHC\Список кураторов/Техникалық факультет бойынша.docx" target="_blank">Открыть</a></p>

				<p style='font-size: 18px;'>Энергетикалы факультет кураторларының тізімі 2019-2020<a id ="kbatirma" href="SHC\Список кураторов/Энергетикалы факультет кураторларының тізімі 2019-2020.docx" target="_blank">Открыть</a></p>
<?php
				
			}
			if(isset($_GET['EF'])){
			
				$fa = "52";
			}
			if(isset($_GET['Kon'])){
			$fa = ""
			?><div class="takirip"><h2 style="font-size: 50px; text-align: center; margin-top: 60px;">Конкурс «Лучший куратор года»</h2></div>
			<?

				?>
				
				<div id="in1">

					<div class="KonT">
						<?php 
						$source = __DIR__."/SHC/Kon/docKon/KonT.docx";
$objReader = \PhpOffice\PhpWord\IOFactory::createReader('Word2007');
$phpWord = $objReader->load($source);
$body = '';
foreach($phpWord->getSections() as $section) {
	$arrays = $section->getElements();
	
	foreach($arrays as $e) {
		if(get_class($e) === 'PhpOffice\PhpWord\Element\TextRun') {
			foreach($e->getElements() as $text) {
				
				$font = $text->getFontStyle();
				
				$size = $font->getSize()/10;
				$bold = $font->isBold() ? 'font-weight:700;' :'';
				$color = $font->getColor();
				$fontFamily = $font->getName();
				
				$body .= '<span font-family:' . $fontFamily . '; '.$bold.';text-align: center; color:#'.$color.'">';
				$body .= $text->getText().'</span>';
				
				//print_r($font);
				//break;
				
				$text->getText();
			}
		}
		
		else if(get_class($e) === 'PhpOffice\PhpWord\Element\TextBreak') {
			$body .= '<br />';
		}
		
		else if(get_class($e) === 'PhpOffice\PhpWord\Element\Table') {
			$body .= '<table border="1px">';
			
			$rows = $e->getRows();
			
			foreach($rows as $row) {
				$body .= '<tr>';
				
				$cells = $row->getCells();
				foreach($cells as $cell) {
					$body .= '<td style="width:'.$cell->getWidth().'">';
					$celements = $cell->getElements();
					foreach($celements as $celem) {
						if(get_class($celem) === 'PhpOffice\PhpWord\Element\Text') {
							$body .= $celem->getText();
						}
						
						else if(get_class($celem) === 'PhpOffice\PhpWord\Element\TextRun') {
							foreach($celem->getElements() as $text) {
								$body .= $text->getText();
							}
						}
						else {
							//$body .= get_class($celem);
						}
					}	
					$body .= '</td>';
				}
				
				$body .= '</tr>';
			}
			$body .= '</table>';
		}
		else {
			$body .= $e->getText();
		}
	}
	
	break;
}

?><p align="justify">
	<?echo $body;?>
</p>
					
					</div>
					
			<div class="KonB">
				
			<?php for ($i=1; $i < 12; $i++){ 
	?>
				<div class = "KonF">
								<img src="SHC\Kon\foto\<?php echo $i;?>.jpg" alt="" width = "50%"></a>
				</div>
				
					<div class = "KonD">
						<?php if($i == 1){ $A = "8";}
								if($i == 4){ $A = "7";}
							 	if($i == 7){ $A = "6";}
							 	if($i == 10){ $A = "5";}
							 	if($i == 11){ $A = "4";}
							 	?>

						<p style="font-weight: 700;">Лучший куратор 201<?php echo $A; ?> года</p>
						<?php
$source = __DIR__."/SHC/Kon/docKon/".$i.".docx";
$objReader = \PhpOffice\PhpWord\IOFactory::createReader('Word2007');
$phpWord = $objReader->load($source);
$body = '';
foreach($phpWord->getSections() as $section) {
	$arrays = $section->getElements();
	
	foreach($arrays as $e) {
		if(get_class($e) === 'PhpOffice\PhpWord\Element\TextRun') {
			foreach($e->getElements() as $text) {
				
				$font = $text->getFontStyle();
				
				$size = $font->getSize()/10;
				$bold = $font->isBold() ? 'font-weight:700;' :'';
				$color = $font->getColor();
				$fontFamily = $font->getName();
				
				$body .= '<span font-family:' . $fontFamily . '; '.$bold.';text-align: center; color:#'.$color.'">';
				$body .= $text->getText().'</span>';
				
				//print_r($font);
				//break;
				
				$text->getText();
			}
		}
		
		else if(get_class($e) === 'PhpOffice\PhpWord\Element\TextBreak') {
			$body .= '<br />';
		}
		
		else if(get_class($e) === 'PhpOffice\PhpWord\Element\Table') {
			$body .= '<table border="1px">';
			
			$rows = $e->getRows();
			
			foreach($rows as $row) {
				$body .= '<tr>';
				
				$cells = $row->getCells();
				foreach($cells as $cell) {
					$body .= '<td style="width:'.$cell->getWidth().'">';
					$celements = $cell->getElements();
					foreach($celements as $celem) {
						if(get_class($celem) === 'PhpOffice\PhpWord\Element\Text') {
							$body .= $celem->getText();
						}
						
						else if(get_class($celem) === 'PhpOffice\PhpWord\Element\TextRun') {
							foreach($celem->getElements() as $text) {
								$body .= $text->getText();
							}
						}
						else {
							//$body .= get_class($celem);
						}
					}	
					$body .= '</td>';
				}
				
				$body .= '</tr>';
			}
			$body .= '</table>';
		}
		else {
			$body .= $e->getText();
		}
	}
	
	break;
}

?><p align="justify">
	<?echo $body;?>
</p>
	</div>
	<?
	# code...
}
						?>
</div>
					
				<div class="clear">
					<br><p style='font-size: 18px;'>Конкурс<a id ="kbatirma" href="SHC/Kon/Konkurs.docx" target="_blank" >Открыть</a></p>
				<p style='font-size: 18px;'>Положение о системе материального поощрения ППС_ кафедр и факультетов по наминациям<a id ="kbatirma" href="SHC/Kon/Положение о системе материального поощрения ППС_ кафедр и факультетов по наминациям_.doc" target="_blank">Открыть</a></p>
				</div>
				<?
			}
		if($fa == "")
					{
					
					}
		else if($fa == "2"){
			?><div id="in1"><?
		?><h2 style="text-align: center;">
			Уважаемые коллеги!
		</h2>
Этот тест поможет определить Ваш стиль преподавания и узнать некоторые особенности нервной системы. Отвечая на вопросы, не забывайте, что «неправильных» ответов быть не может - могут быть только не искренние. Из трех вариантов ответов выбирайте тот, который точнее всего отражает ваши мысли, чувства, реакции.
 
</p>
		<?php			if(!isset($_POST['button'])|$_POST['AtiTest']=="")
								{
									?>
									<form method="POST">
										<input style="width: 250px; height: 50px;" type="text" name="AtiTest" placeholder="ФИО">
									    <br><br>
									    <p>
							                <label for="Fac">Выберите факультет:</label><br>
							                <select style="width: 250px; height: 50px;" id="Fac" name="FacTest">
							                	<optgroup label="">
							                        <option value=""></option>
							                    </optgroup>
							                    <optgroup label="КСиПО">
							                        <option value="ВТиПО">ВТиПО</option>
							                        <option value="ИС">ИС</option>
							                        <option value="ВТ">ВТ</option>
							                        <option value="ПО">ПО</option>
							                        <option value="ФиХ">ФиХ</option>
							                    </optgroup>
							                    <optgroup label="АФ">
							                        <option value="ЗиКР">ЗиКР</option>
							                        <option value="ЗиР">ЗиР</option>
							                        <option value="ЛРиЛХ">ЛРиЛХ</option>
							                        <option value="ПиА">ПиА</option>
							                        <option value="Э">Э</option>
							                    </optgroup>
							                     <optgroup label="ВиТЖ">
							                        <option value="ВМ">ВМ</option>
							                        <option value="ВС">ВС</option>
							                        <option value="МиБ">МиБ</option>
							                        <option value="МиФ">МиФ</option>
							                        <option value="ОиР">ОиР</option>
							                        <option value="ТПиПРЖ">ТПиПРЖ</option>
							                    </optgroup>
							                    <optgroup label="УЗРАиД">
							                        <option value="КиО">КиО</option>
							                        <option value="ЗиГ">ЗиГ</option>
							                        <option value="АиД">АиД</option>
							                    </optgroup>
							                    <optgroup label="Технический факультет">
							                        <option value="ТМиО">ТМиО</option>
							                        <option value="МТП">МТП</option>
							                        <option value="ТПиПП">ТПиПП</option>
							                        <option value="СМиС">СМиС</option>
							                        <option value="ТТиТ">ТТиТ</option>
							                        <option value="ТМ">ТМ</option>
							                    </optgroup>
							                    <optgroup label="Экономический факультет">
							                        <option value="УиА">УиА</option>
							                        <option value="Маркетинг">Маркетинг</option>
							                        <option value="Менеджмент">Менеджмент</option>
							                        <option value="Финанс">Финанс</option>
							                        <option value="Экономика">Экономика</option>
							                        <option value="ЭТиП">ЭТиП</option>
							                    </optgroup>
							                    <optgroup label="Энергетический факультет">
							                        <option value="РЭиТ">РЭиТ</option>
							                        <option value="Теплоэнергетика">Теплоэнергетика</option>
							                        <option value="ЭЭ">ЭЭ</option>
							                        <option value="Электроснабжения">электроснабжения</option>
							                    </optgroup>
							                    <optgroup label="Гуманитарный факультет">
							                        <option value="ИК">ИК</option>
							                        <option value="КиРЯ">КиРЯ</option>
							                        <option value="Философия">Философия</option>
							                        <option value="ФВ">ФВ</option>
							                    </optgroup>
							                </select>
							                
										    </p>
											<button class="batirma" name = "button">Начать Тест</button>
									</form>

									<?php
								}
			if(isset($_POST['button'])) 
							{
								if($_POST['AtiTest']==""|$_POST['FacTest']=="")
								{
									?>
						    			<script type="text/javascript">
										alert("заполните поля ФИО и выберите факультет!");
										</script>
			    			<?php
								}
								else{
									$_SESSION['jau'] = $_POST['AtiTest']." ".$_POST['FacTest'];
									@session_write_close();
										?><form method="POST">
										<?php
									
										#echo "string: ".$_SESSION['jau'];
										$test = "";
									//$fp = fopen("../Test primer/test.txt", "r"); // Открываем файл в режиме чтения
									$test = file_get_contents("../Test primer/test.txt");

									$k = 0;
									$k1 = 0;
									$s ="";
									$S = "";

									for ($i=0; $i <strlen($test); $i++) 
									{
										if(mb_substr($test,$i,1,"UTF-8") == ' ')
										{
											for ($j=$i+1; $j <strlen($test); $j++)
											{
												if(mb_substr($test,$j,1,"UTF-8") == ' ')
												{
													?><?php
													if(mb_substr($test,$j-1,1,"UTF-8") == '.')
													{ $k1 = 0;
														for ($i1=$j+1; $i1 <strlen($test); $i1++)
														{
															if(mb_substr($test,$i1,1,"UTF-8") == ':')
															{
																$k++;
																?> <p><?php echo $k.". ".$s; ?></p><?
																$s ="";
																break;
															}
															$s =$s."".mb_substr($test,$i1,1,"UTF-8");
														}
													}
													if(mb_substr($test,$j-1,1,"UTF-8") == ')')
													{
													

														for ($i1=$j+1; $i1 <strlen($test); $i1++)
														{
															if(mb_substr($test,$i1,1,"UTF-8") == ';')
															{
																$k1++;
																?><label><input name="q<?echo $k?>" type="radio" value="<?echo $k1?>"><?php echo $S; ?></label><br/><?
																$S ="";
																break;
															}
															$S = $S."".mb_substr($test,$i1,1,"UTF-8");
														}
													}break;
												}
											}
										}
									}
								
								?>
									<br>
									<button name="Jauap">Отправить результат</button>
									</form><?php
							}
						}//batirmani tecseru
			else 
				{
					#echo "string:".$_SESSION['jau'];
					echo 'Test bastau ushin batirmani basiniz';
				}
				if(isset($_POST['Jauap']))
	{

			$jau1 = 0;
		    $jau2 = 0;
		    $jau3 = 0;
		    $blog11 = 0;   
		    $blog12 = 0;
		    $blog13 = 0;
		    $blog21 = 0;
		    $blog22 = 0;
		    $blog23 = 0;
		    $blog31 = 0;
		    $blog32 = 0;
		    $blog33 = 0;
		    $blog41 = 0;
		    $blog42 = 0;
		    $blog43 = 0;
		    $blog51 = 0;
		    $blog52 = 0;
		    $blog53 = 0;
		    for($i1 = 1; $i1<6; $i1-=-1)#Jauap bergenderdi blogka bolu
		    {
			    for ($i=$i1; $i <= 50; $i-=-5)#Jauaptardi ar blogka azirleu
			    { 
			   	if ($_POST["q".$i] == "1"){$jau1++;}
			   	if ($_POST["q".$i] == "2"){$jau2++;}
			   	if ($_POST["q".$i] == "3"){$jau3++;}
	   	# code...
	   			}
	   			if($i1 == 1)
	   			{
					$blog11 = $jau1;   
			    	$blog12 = $jau2;
			    	$blog13 = $jau3;
	   			}
	   			if($i1 == 2)
	   			{
					$blog21 = $jau1;   
			    	$blog22 = $jau2;
			    	$blog23 = $jau3;
	   			}
	   			if($i1 == 3)
	   			{
					$blog31 = $jau1;   
			    	$blog32 = $jau2;
			    	$blog33 = $jau3;
	   			}
	   			if($i1 == 4)
	   			{
					$blog41 = $jau1;   
			    	$blog42 = $jau2;
			    	$blog43 = $jau3;
	   			}
	   			if($i1 == 5)
	   			{
					$blog51 = $jau1;   
			    	$blog52 = $jau2;
			    	$blog53 = $jau3;
	   			}
	   			$jau1 = 0;
		    	$jau2 = 0;
		    	$jau3 = 0;
		    }
		    
   			$Jau = $jau1 + ($jau2*2)+($jau3*3);
   			$S = "";
		?>
		<?
		
		for($i = 1; $i < 6; $i-=-1)
		{
			if($i == 1)
	   			{
	   				$J .= "Блок ".$i."\nколичество первый вариант: ".$blog11."\nколичество второй вариант: ".$blog12."\nколичество третий вариант: ".$blog13."\n";
				}
				if($i == 2)
	   			{
	   				$J .= "Блок ".$i."\nколичество первый вариант: ".$blog21."\nколичество второй вариант: ".$blog22."\nколичество третий вариант: ".$blog23."\n";
				}
				if($i == 3)
	   			{
	   				$J .= "Блок ".$i."\nколичество первый вариант: ".$blog31."\nколичество второй вариант: ".$blog32."\nколичество третий вариант: ".$blog33."\n";
					
				}
				if($i == 4)
	   			{
	   				$J .= "Блок ".$i."\nколичество первый вариант: ".$blog41."\nколичество второй вариант: ".$blog42."\nколичество третий вариант: ".$blog43."\n";
				}
				if($i == 5)
	   			{
	   				$J .= "Блок ".$i."\nколичество первый вариант: ".$blog51."\nколичество второй вариант: ".$blog52."\nколичество третий вариант: ".$blog53."\n";
				}
		}
					include('smtpauth.php');
					

									$smtp_username = 'visualmoc@mail.ru'; 	// название моей почты
									$smtp_password = 'astana123';          	// пароль моей почты
									$smtp_host = 'ssl://smtp.mail.ru';   		// сервер почты
									$smtp_from = 'pop.mail.ru';				 		// 
									  
									$instance = new SendMailSmtpClass($smtp_username,$smtp_password , $smtp_host, $smtp_from,465 ,'utf-8');

									$mailTo = 'visualmoc@mail.ru';// почта кому отправляем письмо shkolakuratora2019@mail.ru
									$subject = 'отзывы или вопросы от Школа куратора';// тема письма
									$message = $J;// содержание письма
									$headers = "от ".$_SESSION['jau'];//шапка 

									$result = $instance->send($mailTo, $subject, $message, $headers);


									?>
						    			<script type="text/javascript">
										alert("Уважаемый(ая), Ваше письмо отправленно успешно.\nСпасибо!");
										</script>
										
						    			<?php
	}
			}
		else
			{

$source = __DIR__."/docs/".$fa.".docx";
$objReader = \PhpOffice\PhpWord\IOFactory::createReader('Word2007');
$phpWord = $objReader->load($source);
$body = '';
foreach($phpWord->getSections() as $section) {
	$arrays = $section->getElements();
	
	foreach($arrays as $e) {
		if(get_class($e) === 'PhpOffice\PhpWord\Element\TextRun') {
			foreach($e->getElements() as $text) {
				
				$font = $text->getFontStyle();
				
				$size = $font->getSize()/10;
				$bold = $font->isBold() ? 'font-weight:700;' :'';
				$color = $font->getColor();
				$fontFamily = $font->getName();
				
				$body .= '<span font-family:' . $fontFamily . '; '.$bold.';text-align: center; color:#'.$color.'">';
				$body .= $text->getText().'</span>';
				
				//print_r($font);
				//break;
				
				$text->getText();
			}
		}
		
		else if(get_class($e) === 'PhpOffice\PhpWord\Element\TextBreak') {
			$body .= '<br />';
		}
		
		else if(get_class($e) === 'PhpOffice\PhpWord\Element\Table') {
			$body .= '<table border="1px">';
			
			$rows = $e->getRows();
			
			foreach($rows as $row) {
				$body .= '<tr>';
				
				$cells = $row->getCells();
				foreach($cells as $cell) {
					$body .= '<td style="width:'.$cell->getWidth().'">';
					$celements = $cell->getElements();
					foreach($celements as $celem) {
						if(get_class($celem) === 'PhpOffice\PhpWord\Element\Text') {
							$body .= $celem->getText();
						}
						
						else if(get_class($celem) === 'PhpOffice\PhpWord\Element\TextRun') {
							foreach($celem->getElements() as $text) {
								$body .= $text->getText();
							}
						}
						else {
							//$body .= get_class($celem);
						}
					}	
					$body .= '</td>';
				}
				
				$body .= '</tr>';
			}
			$body .= '</table>';
		}
		else {
			$body .= $e->getText();
		}
	}
	
	break;
}
?>
<div class="info">
	
			<div id="in1">
		<p align="justify">
			<?echo $body;?>
		</p>
		<?php	
		}
				?>
				</div>
</div>

	</div>
	<div class="Astingiblog">
		
Поддержка сайтa: visualmoc@mail.ru
	</div>
</body>		
</html>