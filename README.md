# php_o2_fw
PHP軽量フレームワーク サンプルコード

・ディレクトリ構成
o2_fw
├─ execute  置き換え文字列の作成プログラム
├─ library  ライブラリ用
├─ public   ドキュメントルート
└─ template HTMLテンプレート

・実行形態
１．public/index.phpをhttpより実行する
２．パラメータ{ex}の値に対応するテンプレートファイルを読み込む
    template/{ex}.html
３．パラメータ{ex}の値に対応するプログラムが実行される
    excute/{ex}.php
    {ex}->excute()
４．テンプレートの置き換え文字列を置換する
５．HTMLを出力する

