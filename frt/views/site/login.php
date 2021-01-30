<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use  yii\helpers\url;



$this->title = 'Login';

?>

<html lang="en-Us">
<head>

	<meta charset="utf-8">
    
	<title>Login </title>

	<link rel="stylesheet" href="login.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>

</head>

<body>

	<div id="login">

		<h1><strong>Welcome.</strong> Please login.</h1>

		<form action="javascript:void(0);" method="get">

			<fieldset>

				<p><input type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Username" -->

				<p><input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Password" -->

				<p><a href="#">Forgot Password?</a></p>

				<a class="" href="<?= Url::to(['site/']);?>"><input type="submit" value="Login" ></a>

			</fieldset>

		</form>

		<p><span class="btn-round">or</span></p>

		<p>

			<a class="facebook-before"><span class="fontawesome-facebook"></span></a>
			<button class="facebook">Login Using Facbook</button>

		</p>

		<p>

			<a class="twitter-before"><span class="fontawesome-twitter"></span></a>
			<button class="twitter">Login Using Twitter</button>

		</p>

	</div> <!-- end login -->

</body>
</html>