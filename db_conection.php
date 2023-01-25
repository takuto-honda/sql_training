<?php

const DB_HOST = 'mysql:dbname=training_db;host=localhost;charset=utf8mb4';
const DB_USER = 'test_user';
const DB_PASSWORD = 'password123';

try{
    $pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//連想配列で取得
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,//例外
        PDO::ATTR_EMULATE_PREPARES => false,//SQLインジェクション対策
    ]);
    echo '接続成功';
} catch(PDOException $e) {
    exit($e->getMessage()); 
}