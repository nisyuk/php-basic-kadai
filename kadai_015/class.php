<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

    <body>
      <p>
        <?php
        // Foodのクラスを定義する
        class Food{

          // プロパティを定義する
          private $name;
          private $price;

          // メソッドを定義する
          public function set_price(int $price){
            $this->price = $price;
          }
          public function show_price(){
            echo $this->price . '<br>';
          }

          // コンストラクタを定義する
          public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
          }
        }

        // Foodのインスタンス化
        $beefbowl = new Food('牛丼', '400');

        // Foodのインスタンスを出力
        print_r($beefbowl);

        // 改行する
        echo '<br>';

        // Animalのクラスを定義する
        class Animal{
          // プロパティを定義する
          private $name;
          private $height;
          private $weight;

          // メソッドを定義する
          public function set_height(int $height){
            $this->height = $height;
          }
          public function show_height(){
            echo $this->height . '<br>';
          }

          // コンストラクタを定義する
          public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
        }

        // Animalのインスタンス化
        $tanuki = new Animal('たぬき', 50, 5000);

        // Animalのインスタンスを出力
        print_r($tanuki);

        // 改行する
        echo '<br>';

        // Foodのメソッドを実行する
        $beefbowl->set_price(400);
        $beefbowl->show_price();

        // Animalのメソッドを実行する
        $tanuki->set_height('50');
        $tanuki->show_height();
        
        ?>
      </p>
    </body>
</html>
