<?php

error_reporting(E_ALL); 
ini_set( 'display_errors','1');


if(isset($_GET['l'])==1) { $link = $_GET['l']; } else { $link = "home"; }


switch ($link) {

    case "home":

        $titulo  = "Home";
        $arquivo = "home.php";

    break;

    case "empresa":
    
        $titulo  = "Empresa";
        $arquivo = "empresa.php";
        
    break;

    case "produtos":
    
        $titulo  = "Produtos";
        $arquivo = "produtos.php";
        
    break;
        
    case "servicos":
    
        $titulo  = "Servicos";
        $arquivo = "servicos.php";
        
    break;
                
        
    case "contato":
    
        $titulo  = 'Contato';
    
        if(isset($_POST['act'])=="enviar"){


            $mensagem = "Dados enviados com sucesso, abaixo seguem os dados que você enviou:<br/>";

            while(list($campo, $valor) = each($_POST)) {

                if ($campo != "act")  $mensagem .= "<b>".ucwords($campo).":</b> ".$valor."<br/>";

            }
            

        }  else { 
            
            //$mensagem = false;
            
        }
        $arquivo = "contato.php";
    
        
    break;

    default:

        $titulo  = '404';
        $arquivo = "404.php";
}

          
