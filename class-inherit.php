<?php
 // public private protected

 class Product { // class名の頭文字は 重時

 // 変数
 private $product = []; // クラス内で使用出来る(private)変数作成

 // 関数
 function __construct($product){ // __初回に読み込まれる __construct 関数作成 インプットに $peoduct変数 を渡す  ここに 'テスト'引数 が入ってきている
     $this->product = $product;// このclassの中のproduct変数 を productへ
 }

 public function getProduct(){ // どこからでも読み込める(public) として getProduct関数 作成
     echo $this->product; // このclassの中の変数 $product を表示
 }

 public function addProduct($item){ // どこからでも読み込める(public) として addProduct関数 作成 インプットに $item を渡す .= で追加
     $this->product .= $item; // このclassの中の変数 product($product) に item を追加
 }

  // 静的にインスタンスを作らずに使う方法
 public static function getStaticProduct($str){ // 静的な関数として getStaticProduct関数 を作成 インプットに $str を渡す
     echo $str; // インプットで渡ってきた $str を 表示
 }
 }

 $instance = new Product('テスト'); // instance変数 をインスタンス化 して 初期値に 'テスト' を加える

 var_dump($instance); // インスタンス化した instance変数 を表示

 $instance->getProduct(); // インスタンス化した  instance変数 と矢印と 関数 で関数を呼び出す
 echo '<br>';

 $instance->addProduct('追加分'); // インスタンス化した  instance変数 と矢印と 関数 で関数を呼び出す 初期値に '追加分' を渡す
 echo '<br>';

 $instance->getProduct(); // インスタンス化した  instance変数 と矢印と 関数 で関数を呼び出す
 echo '<br>';

 // 静的にインスタンスを作らずに使う方法
 Product::getStaticProduct('静的'); // 静的インスタンスを制作せずに呼ぶ意出す方法がこれ
 echo '<br>';

?>