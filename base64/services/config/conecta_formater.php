<?php

interface Conexao
{
    static public function executeQuery(string $query): ?array;
}

$user = "vmx";
$password = "123456";
$database = "formater_db";
$todo_list = "todo_list";

try {
  $query = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}