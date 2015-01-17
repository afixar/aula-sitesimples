<?php
/** Carrega o arquivo que ir? controlar os links e os t?tulos das p?ginas */
require_once("controlador.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Meu site / <?=$titulo;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ?#!watch? to the browser URL, then refresh the page. -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons 
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  -->
  
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!--

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
    -->
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                     <a class="navbar-brand" href="#"><img src="http://portal.code.education/bundles/sonbase/img/lms/marca.png?0.11.3"  width="65"></a> 
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                     
                        <li <?php if($link=="home") { echo 'class="active"'; } ?> >
                            <a href="./?l=home">Home</a>
                        </li> 
                        <li <?php if($link=="empresa") { echo 'class="active"'; } ?>>
                            <a href="./?l=empresa">Empresa</a> 
                        </li>
                        <li <?php if($link=="produtos") { echo 'class="active"'; } ?>>
                            <a href="./?l=produtos">Produtos</a>
                        </li>
                        <li <?php if($link=="servicos") { echo 'class="active"'; } ?>>
                            <a href="./?l=servicos">Servicos</a>
                        </li>
                        <li <?php if($link=="contato") { echo 'class="active"'; } ?>>
                            <a href="./?l=contato">Contato</a>
                        </li>
    
                    </ul>
                   
                </div>
                
            </nav>


            <ul class="breadcrumb">
                <li>
                    <a href="./?l=">Home</a>
                </li>

                <li class="active">
                    <?php if($link != "home") { echo $titulo; } else  { echo 'Bem-vindo'; }?>
                </li>
            </ul>

  
            <!-- CONTEUDO -->
            
            
             <?php
               //echo "inc/".$arquivo;
               require_once "inc/".$arquivo;
                
              ?>


        </div>
    </div>
    <center>Todos os direitos Reservados - <?=date('Y');?></center>
</div>
</body>
</html>
