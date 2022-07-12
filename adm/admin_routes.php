<?php
	session_start();
	include_once("seguranca.php");
	include_once("../conexao.php");
	seguranca_adm();

    include_once("menu_adm.php"); 

    $pag[1] = "logout.php";
    $pag[2] = "listar/adm_listar_usuario.php";
    $pag[3] = "cadastro/adm_cad_usuario.php";
    $pag[4] = "editar/adm_editar_usuario.php";
    $pag[5] = "visualizar/adm_visual_usuario.php";
    $pag[6] = "listar/adm_listar_nivel_acesso.php";
    $pag[7] = "cadastro/adm_cad_nivel_acesso.php";			
    $pag[8] = "editar/adm_editar_nivel_acesso.php";
    $pag[9] = "visualizar/adm_visual_nivel_acesso.php";
    $pag[10] = "listar/adm_listar_situacoes.php";
    $pag[11] = "cadastro/adm_cad_situacoes.php";			
    $pag[12] = "editar/adm_editar_situacoes.php";
    $pag[13] = "visualizar/adm_visual_situacoes.php";

    
    if(!empty($_GET["link"])){
        $link = $_GET["link"];
        if(file_exists($pag[$link])){
            include $pag[$link];
        }else{
            include "adm_home.php";
        }				
    }else{
        include "adm_home.php";
    }


?>