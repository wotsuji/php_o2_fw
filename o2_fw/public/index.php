<?php

// デバッグ用
error_reporting(-1);            // 「-1」= 全てのPHPエラーを出力する
ini_set('display_errors', '1'); // 1 = 画面にエラーを表示する

// 初期処理
session_start();

// 実行ファイル設定
$ex = "";
if(isset($_GET['ex'])){
    // 値受取
    $ex = $_GET['ex'];
    // 入力不可とする記号を大さっぱに無効化する
    $ex = htmlentities($ex, ENT_QUOTES, 'UTF-8');
    //「\」「.」「/」を削除する
    $ex = preg_replace('/[\\\.\/]/u','',$ex);
} else {
    // 実行ファイル指定無しはトップページを表示する
    $ex = "top";
}

// テンプレートファイル読み込み
$html = "";
$fp = fopen('./../template/'.$ex.'.html', 'r');
while ($line = fgets($fp)) {
    $html .= $line;
}
fclose($fp);

// 実行ファイルの読み込み
require_once('./../execute/'.$ex.'.php');

// プログラム実行（置き換え文字列の連想配列を取得する）
$replace  = array();
$ex_class = new $ex();
$replace  = $ex_class->execute();

// 置き換え文字列の置換処理
foreach( $replace as $key => $value ){
    $html = str_replace('[%'.$key. '%]',$value,$html);
}

// HTML書き出し
echo $html;

?>
