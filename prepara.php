<?php
require 'db_conection.php';

// $sql = 'SELECT * FROM all_db WHERE id =:id';//SQLのセット :idはプレースホルダー
// $stmt = $pdo->prepare($sql);//SQL文の準備
// $stmt->bindValue('id', 1, PDO::PARAM_INT);//:idと1を紐付ける&&型指定
// $stmt->execute();//SQL実行

// insert文
// $sql = "INSERT INTO `all_db` (`id`, `name`) VALUES (3, 'takuto3')";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// update文
// $sql = "UPDATE `all_db` SET `name` = 'takuto5' WHERE id = 1";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// delete文
// $sql = "DELETE FROM `all_db` WHERE id = 3;";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

//取得
echo '<pre>';var_dump($stmt->fetchAll());echo '</pre>';exit;