# php_o2_fw
PHP軽量フレームワーク サンプルコード<br>
<br>
・ディレクトリ構成<br>
o2_fw<br>
├─ execute  置き換え文字列の作成プログラム<br>
├─ library  ライブラリ用<br>
├─ public   ドキュメントルート<br>
└─ template HTMLテンプレート<br>
<br>
・実行形態<br>
１．public/index.phpをhttpより実行する<br>
２．パラメータ{ex}の値に対応するテンプレートファイルを読み込む<br>
    template/{ex}.html<br>
３．パラメータ{ex}の値に対応するプログラムが実行される<br>
    excute/{ex}.php<br>
    {ex}->excute()<br>
４．テンプレートの置き換え文字列を置換する<br>
５．HTMLを出力する<br>
<br>
