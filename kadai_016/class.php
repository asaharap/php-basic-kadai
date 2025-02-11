<?php
// クラスの定義
class Food{
  // プロパティを定義
  private $name;
  private $price;

  // メソッドを定義
  public function set_price(string $price){
    $this->price = $price;
  }
  public function show_price(){
    echo $this->price . '<br>';
  }
  // コンストラクタを定義
  public function __construct(string $name, int $price){
   $this->name = $name;
   $this->price = $price;
  }
}
// インスタンス化
$food = new Food('potato', 250);
// 出力する
print_r ($food);

echo '<br>';

// クラスの定義
class Animal{
  // プロパティを定義
  private $name;
  private $height;
  private $weight;
  
  // メソッドを定義
  public function set_height(int $height){
    $this->height = $height;
  }
  public function show_height(){
    echo $this->height . '<br>';
  }
  // コンストラクタを定義
  public function __construct(string $name, int $height, int $weight ){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}
// インスタンス化
$animal = new Animal('dog', 60, 5000);
// 出力する
print_r($animal);

echo '<br>';

$money = new Food('potato', 250);
$money->set_price(250);
$money->show_price();


$long = new Animal('dog', 60, 5000);
$long->set_height(60);
$long->show_height();

?>

