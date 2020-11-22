<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=randomdb","root","password");

$add = $pdo->prepare("UPDATE db SET amount = amount + :amount WHERE name = :name");
$sub = $pdo->prepare("UPDATE db SET amount = amount  :amout WHERE name = :name");


//unless all the actions are executed, the database will not change.
//atomic transaction.
$pdo->beginTransaction();

$add->bindParam(":amount",50,PDO::PARAM_INT);
$add->bindParam(":name","hasan",PDO::PARAM_STR);
$add->execute();
$sub->bindParam(":amount",50,PDO::PARAM_INT);
$sub->bindParam(":name","ali",PDO::PARAM_STR);
$sub->execute();

$pdo->commit();
