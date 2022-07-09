<?php
session_start();
isset(
    $_session['usuarioId'],
    $_session['usuarioNome'],
    $_session['usuarioNiveisAcessoId'],
    $_session['usuarioEmail']
);

$_session['loginDeslogado'] = "Deslogado com sucesso";
header("Location: home.php");
