<?php
require_once("f_lessons.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/css.css">
	<title>TiC</title>
</head>
<body>
<header class="header position__absolute">
	<div class="container">
		<div class="header__inner">
			<div class="header__logo">
				<span>T</span>
				<span class="hidden">H</span>
				<span class="hidden">I</span>
				<span class="hidden">S</span>
				<span>I</span>
				<span class="hidden">S</span>
				<span>C</span>
				<span class="hidden">L</span>
				<span class="hidden">A</span>
				<span class="hidden">S</span>
				<span class="hidden">S</span>
			</div>

			<nav class="nav">
				<a class="nav__link" href="index.php">Главная</a>
				<a class="nav__link" href="#">Объявления</a>
				<a class="nav__link-here" href="#">Что задали?</a>
				<a class="nav__link" href="#">Партнеры</a>
			</nav>
		</div>
	</div>
</header>
<div class="intro">
	<div class="container">
		<div class="homework__img">
			<form action="f_lessons.php" method="POST">
			<!--  РАСПИСАНИЕ  -->
			<!-- ПОНЕДЕЛЬНИК -->
			<input type="text" name="pn1" value="<?=$arr['pn1']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 54px auto 0 108px;">
			<input type="text" name="pn2" value="<?=$arr['pn2']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 77px auto 0 108px;">
			<input type="text" name="pn3" value="<?=$arr['pn3']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 100px auto 0 108px;">
			<input type="text" name="pn4" value="<?=$arr['pn4']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 123px auto 0 108px;">
			<input type="text" name="pn5" value="<?=$arr['pn5']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 146px auto 0 108px;">
			<input type="text" name="pn6" value="<?=$arr['pn6']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 169px auto 0 108px;">
			<!-- ВТОРНИК -->
			<input type="text" name="vt1" value="<?=$arr['vt1']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 245px auto 0 110px;">
			<input type="text" name="vt2" value="<?=$arr['vt2']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 268px auto 0 110px;">
			<input type="text" name="vt3" value="<?=$arr['vt3']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off"style="margin: 291px auto 0 110px;">
			<input type="text" name="vt4" value="<?=$arr['vt4']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 314px auto 0 110px;">
			<input type="text" name="vt5" value="<?=$arr['vt5']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 337px auto 0 110px;">
			<input type="text" name="vt6" value="<?=$arr['vt6']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 360px auto 0 110px;">
			<!--  СРЕДА  -->
			<input type="text" name="sr1" value="<?=$arr['sr1']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 433px auto 0 111px;">
			<input type="text" name="sr2" value="<?=$arr['sr2']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 455px auto 0 111px;">
			<input type="text" name="sr3" value="<?=$arr['sr3']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 478px auto 0 111px;">
			<input type="text" name="sr4" value="<?=$arr['sr4']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 501px auto 0 111px;">
			<input type="text" name="sr5" value="<?=$arr['sr5']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 523px auto 0 111px;">
			<input type="text" name="sr6" value="<?=$arr['sr6']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 546px auto 0 111px;">
			<!--  ЧЕТВЕРГ  -->
			<input type="text" name="4t1" value="<?=$arr['4t1']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 54px auto 0 611px;">
			<input type="text" name="4t2" value="<?=$arr['4t2']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 77px auto 0 611px;">
			<input type="text" name="4t3" value="<?=$arr['4t3']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 100px auto 0 611px;">
			<input type="text" name="4t4" value="<?=$arr['4t4']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 123px auto 0 611px;">
			<input type="text" name="4t5" value="<?=$arr['4t5']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 146px auto 0 611px;">
			<input type="text" name="4t6" value="<?=$arr['4t6']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 169px auto 0 611px;">
			<!--  ПЯТНИЦА  -->
			<input type="text" name="pt1" value="<?=$arr['pt1']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 245px auto 0 611px;">
			<input type="text" name="pt2" value="<?=$arr['pt2']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 268px auto 0 611px;">
			<input type="text" name="pt3" value="<?=$arr['pt3']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 291px auto 0 611px;">
			<input type="text" name="pt4" value="<?=$arr['pt4']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 314px auto 0 611px;">
			<input type="text" name="pt5" value="<?=$arr['pt5']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 337px auto 0 611px;">
			<input type="text" name="pt6" value="<?=$arr['pt6']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 360px auto 0 611px;">
			<!-- СУББОТА -->
			<input type="text" name="sb1" value="<?=$arr['sb1']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 433px auto 0 612px;">
			<input type="text" name="sb2" value="<?=$arr['sb2']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 455px auto 0 612px;">
			<input type="text" name="sb3" value="<?=$arr['sb3']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 478px auto 0 612px;">
			<input type="text" name="sb4" value="<?=$arr['sb4']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 501px auto 0 612px;">
			<input type="text" name="sb5" value="<?=$arr['sb5']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 523px auto 0 612px;">
			<input type="text" name="sb6" value="<?=$arr['sb6']?>" placeholder="Урок" class="yroki" maxlength="13" autocomplete="off" style="margin: 546px auto 0 612px;">
			<button type="submit" name="save" class="btn btn__save">SAVE</button>
			<!--  ДЗ  -->
			<!-- ПОНЕДЕЛЬНИК -->
			<input type="text" name="pn1d" value="<?=$arrd['pn1']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 54px auto 0 218px;">
			<input type="text" name="pn2d" value="<?=$arrd['pn2']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 77px auto 0 218px;">
			<input type="text" name="pn3d" value="<?=$arrd['pn3']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 100px auto 0 218px;">
			<input type="text" name="pn4d" value="<?=$arrd['pn4']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 123px auto 0 218px;">
			<input type="text" name="pn5d" value="<?=$arrd['pn5']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 146px auto 0 218px;">
			<input type="text" name="pn6d" value="<?=$arrd['pn6']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 169px auto 0 218px;">
			<!-- ВТОРНИК -->
			<input type="text" name="vt1d" value="<?=$arrd['vt1']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 245px auto 0 219px;">
			<input type="text" name="vt2d" value="<?=$arrd['vt2']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 268px auto 0 219px;">
			<input type="text" name="vt3d" value="<?=$arrd['vt3']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off"style="margin: 291px auto 0 219px;">
			<input type="text" name="vt4d" value="<?=$arrd['vt4']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 314px auto 0 219px;">
			<input type="text" name="vt5d" value="<?=$arrd['vt5']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 337px auto 0 219px;">
			<input type="text" name="vt6d" value="<?=$arrd['vt6']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 360px auto 0 219px;">
			<!--  СРЕДА  -->
			<input type="text" name="sr1d" value="<?=$arrd['sr1']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 433px auto 0 220px;">
			<input type="text" name="sr2d" value="<?=$arrd['sr2']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 455px auto 0 220px;">
			<input type="text" name="sr3d" value="<?=$arrd['sr3']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 478px auto 0 220px;">
			<input type="text" name="sr4d" value="<?=$arrd['sr4']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 501px auto 0 220px;">
			<input type="text" name="sr5d" value="<?=$arrd['sr5']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 523px auto 0 220px;">
			<input type="text" name="sr6d" value="<?=$arrd['sr6']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 546px auto 0 220px;">
			<!--  ЧЕТВЕРГ  -->
			<input type="text" name="4t1d" value="<?=$arrd['4t1']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 54px auto 0 720px;">
			<input type="text" name="4t2d" value="<?=$arrd['4t2']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 77px auto 0 720px;">
			<input type="text" name="4t3d" value="<?=$arrd['4t3']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 100px auto 0 720px;">
			<input type="text" name="4t4d" value="<?=$arrd['4t4']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 123px auto 0 720px;">
			<input type="text" name="4t5d" value="<?=$arrd['4t5']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 146px auto 0 720px;">
			<input type="text" name="4t6d" value="<?=$arrd['4t6']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 169px auto 0 720px;">
			<!--  ПЯТНИЦА  -->
			<input type="text" name="pt1d" value="<?=$arrd['pt1']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 245px auto 0 720px;">
			<input type="text" name="pt2d" value="<?=$arrd['pt2']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 268px auto 0 720px;">
			<input type="text" name="pt3d" value="<?=$arrd['pt3']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 291px auto 0 720px;">
			<input type="text" name="pt4d" value="<?=$arrd['pt4']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 314px auto 0 720px;">
			<input type="text" name="pt5d" value="<?=$arrd['pt5']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 337px auto 0 720px;">
			<input type="text" name="pt6d" value="<?=$arrd['pt6']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 360px auto 0 720px;">
			<!-- СУББОТА -->
			<input type="text" name="sb1d" value="<?=$arrd['sb1']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 433px auto 0 720px;">
			<input type="text" name="sb2d" value="<?=$arrd['sb2']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 455px auto 0 720px;">
			<input type="text" name="sb3d" value="<?=$arrd['sb3']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 478px auto 0 720px;">
			<input type="text" name="sb4d" value="<?=$arrd['sb4']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 501px auto 0 720px;">
			<input type="text" name="sb5d" value="<?=$arrd['sb5']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 523px auto 0 720px;">
			<input type="text" name="sb6d" value="<?=$arrd['sb6']?>" placeholder="Задание" class="homework" maxlength="60" autocomplete="off" style="margin: 546px auto 0 720px;">
			<!-- <input type="text" name="pn1d" class="dz" maxlength="25"> -->
			</form>
			<img src="png/shablon-dnevnika.png" alt="Картинка Дневника" width="1100px" height="700px">
		</div>
	</div>
</div>
</body>
</html>