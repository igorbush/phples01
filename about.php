
	<?php 
		$name = 'Игорь';
		$age = 32;
		$email = 'about@mail.com';
		$city = 'Сыктывкар';
		$about = 'full-stack dev';
	?>

	<style>
		body {width: 500px;}
		p {display: inline-block; border-bottom: 1px solid #000000;}
		.label {width: 300px;}
	</style>

<body>
	<h1>Страница пользователя: Игорь</h1>
	<p class="label">Имя:<p/><p><?= $name ?></p>
	<p class="label">Возраст:</p><p><?= $age ?></p>
	<p class="label">Адрес электронной почты:</p><p><?= $email ?></p>
	<p class="label">Город:</p><p><?= $city ?></p>
	<p class="label">О себе:</p><p><?= $about ?></p>
</body>
