<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
        <!--custom css -->
        <link rel="stylesheet" href="css/main.css" >
        
        <title>Mod Sprog</title>
</head>
<body>
    <div class="background">
         <div class="container">
        <div class="account">
            <div class="container">
                <a href="../modsprog/"><img src="img/logo.png" align="bottom" alt="A sprog is British slang for child!" class="pull-left"></a>

                <ul class="pull-right" >
                    <form class="navbar-form navbar-left" role="search">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="submit" class="btn btn-default">Search</button>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">View Cart</a></li>
                    </form>
                </ul>
            </div>
        </div>
	</div>
	<div class="nav">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="#">Clothing</a></li>
				<li><a href="#">Maternity</a></li>
				<li><a href="#">Decor</a></li>
				<li><a href="#">Books & Music</a></li>
				<li><a href="#">Diapering</a></li>
				<li><a href="#">Accessories</a></li>
				<li><a href="#">Fun!</a></li>
			</ul>
		</div>
	</div>
        <?php echo $content_for_layout ?>
        <div class="footer">
		<div class="container">
			<p>Footer text here.</p>
		</div>
	</div>
</body>
</html>
