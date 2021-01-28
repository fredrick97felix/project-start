<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

<div id="login">

		<h1><strong>Welcome.</strong> Please login.</h1>

		<form action="javascript:void(0);" method="get">

			<fieldset>

				<p><input type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Username" -->

				<p><input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Password" -->

				<p><a href="#">Forgot Password?</a></p>

				<p><input type="submit" value="Login"></p>

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












<!-------------original about------------->	
    <!---<h1><?= Html::encode($this->title) ?></h1> --->

   <!--- <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><? = __FILE__ ?></code>
    --->
</div>
