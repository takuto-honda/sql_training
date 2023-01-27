<?php
require 'db_conection.php';

// $sql = 'SELECT * FROM all_db WHERE id =:id';//SQLのセット :idはプレースホルダー
// $stmt = $pdo->prepare($sql);//SQL文の準備
// $stmt->bindValue('id', 1, PDO::PARAM_INT);//:idと1を紐付ける&&型指定
// $stmt->execute();//SQL実行

// insert文
// $sql = "INSERT INTO `all_db` (`id`, `name`) VALUES (6, 'honda1')";
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

//レコード数取得
// $sql = 'SELECT COUNT(*) FROM all_db';
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

//指定したレコード数取得
// $sql = 'SELECT * FROM all_db LIMIT 1';
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// 開始位置の指定
// $sql = 'SELECT * FROM all_db LIMIT 1 OFFSET 1';
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// あいまい検索
// $sql = "SELECT * FROM all_db WHERE name LIKE 'honda%'";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// かつとまたは
// $sql = "SELECT * FROM all_db WHERE status = 1 AND (name = 'takuto' OR name ='honda')";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// 並び替え(降順)
// $sql = "SELECT * FROM all_db ORDER BY `id` DESC";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// 並び替え(昇順)
// $sql = "SELECT * FROM all_db ORDER BY `id` ASC";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// グルーピング
// $sql = "SELECT sum(price) FROM all_db GROUP BY status";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

//取得
echo '<pre>';var_dump($stmt->fetchAll());echo '</pre>';exit;