<?php
	date_default_timezone_set("America/Mexico_City");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <meta name="author" content="Ignacio Serrano">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/header.css">
  <link rel="stylesheet" type="text/css" href="/css/navbar.vertical.css">
  <link rel="stylesheet" type="text/css" href="/css/navbar.horizontal.css">
  <link rel="stylesheet" href="/css/fontAwesome/css/font-awesome.min.css">
	
  <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
</head>

<body>
	<?php
            if(!isset($_SESSION["id"])){
                header("location: ../index.php");
            }
	?>
	
    <nav class="horizontal top">
        <div class="logo container">
            <a>
                <img src="/img/8lc-logo.png">
            </a>
        </div>
        <div class="options_notifications">
            <div class="opt username">Hola, <?php echo $_SESSION["user_name"]; ?> <i class="fa fa-user-circle" aria-hidden="true"></i></div>
        </div>
    </nav>
    <nav class="vertical left">
        <ul class="main nav">
            <li class="selected"><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
            <li><a href="/index.php"><i class="fa fa-line-chart" aria-hidden="true"></i> Administración</a></li>
            <li><a href="/index.php"><i class="fa fa-pencil" aria-hidden="true"></i> Contabilidad</a></li>
            <li><a href="/index.php"><i class="fa fa-archive" aria-hidden="true"></i> Inventarios</a></li>
            <li><a href="/index.php"><i class="fa fa-money" aria-hidden="true"></i> Ventas</a></li>
            <li><a href="/index.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Tienda En Línea</a></li>
            <li><a href="/index.php"><i class="fa fa-users" aria-hidden="true"></i> Entidades</a></li>
            </li>
        </ul>
        
    </nav>
        
    

    <main>