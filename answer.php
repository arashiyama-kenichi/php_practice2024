<?php

// 配列操作
// Q1
var_dump( $countries[2] );

// Q2
$countries[3] = 'ロシア';
var_dump($countries);

// Q3
$countries[] = '中国';
var_dump($countries);

// Q4
var_dump($days['tuesday']);

// Q5
$days['wednesday'] = '水曜日';
var_dump($days);

// Q6
$days['saturday'] = '土曜日';
var_dump($days);


// 繰り返し構文
// Q1
$array = ["1" => "a", 'b', 'c', 'd', 'e', 'f'] ;
foreach ($array as $x => $y) {
    echo $x. 'つめは'. $y. "\n";
}


// Q2
$array = ["1" => "a", 'b', 'c', 'd', 'e', 'f'];
for ($i = 1; $i <= 6; $i++) {
    echo $i . 'つめは' . $array[$i] ."\n";
}

// 多重連想配列

// Q1
foreach ($menu as $menuName => $info){
    echo $menuName . 'は' . $info['ジャンル'] . 'で値段は' . $info['値段'] . '円です。' . "\n";
}

// Q2
$menu['そば'] = [
    '値段' => 800,
    'ジャンル' => '日本料理',
];

print_r($menu);

// Q3
$menu = [
    'カレーライス' => [
        '値段' => 1200,
        'ジャンル' => 'インド料理',
        '人気度' => 5,
    ],
    'スパゲッティ' => [
        '値段' => 1000,
        'ジャンル' => 'イタリア料理',
        '人気度' => 3,
    ],
    'ボルシチ' => [
        '値段' => 2000,
        'ジャンル' => 'ロシア料理',
        '人気度' => 4,
    ],
    'そば' => [
        '値段' => 800,
        'ジャンル' => '日本料理',
        '人気度' => 4,
    ],
];

// 関数

// Q1
function calcDiscountPrice($price) {
    
    $discountRate = 0.2;

    $discountAmount = $price * $discountRate;

    $discountPrice = $price - $discountAmount;

    return $discountPrice;
}

$price = 800;

$discountPrice = calcDiscountPrice($price);

echo $price . "円の商品が今だけ" . $discountPrice . "円です！";


// Q2
function whichIsBigger($value1, $value2) {
    if ($value1 > $value2) {
        return "第一引数の方が大きい。値:\"$value1\"";
    } else if ($value2 > $value1) {
        return "第二引数の方が大きい。値:\"$value2\"";
    } else {
        return "両方の値は同じです。値:\"$value1\"";
    }
}

// 値を指定
$num1 = 100;
$num2 = 50;

echo whichIsBigger($num1, $num2);

// Q3
function isPrimeNumber($num) {
    // 1以下の数は素数ではない
    if ($num <= 1) {
        return false;
    }

    // 2から$numの平方根までで割り切れるか確認
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    // 割り切れる数がなければ素数
    return true;
}

// 例：判定したい数値
$number = 17;

// 関数を呼び出して結果を表示
var_dump(isPrimeNumber($number));


// オブジェクト

// Q1
class Item
{
    public $name;
    public $price;

    // コンストラクタメソッド
    public function __construct($param1, $param2) {
        $this->name = $param1;
        $this->price = $param2;
    }

    // 商品情報を表示するメソッド
    public function showInfo() {
        echo $this->name . "の税抜価格は" . $this->price . "円です。";
    }
}

// 商品インスタンスの作成
$apple = new Item("りんご", 100);

// 商品情報の表示
$apple->showInfo();


// Q2
class Item
{
    public $name;
    public $price;

    public function __construct($param1, $param2) {
        $this->name = $param1;
        $this->price = $param2;
    }

    public function showInfo() {
        echo $this->name . "の税抜価格は" . $this->price . "円です。";
    }

    // 税込価格を計算して返すメソッド
    public function fetchCalcTaxInPrice($taxRate = 1.1) {
        $taxIncludedPrice = $this->price * $taxRate;
        return $taxIncludedPrice;
    }
}

// 出力例：商品インスタンスの作成
$orange = new Item("みかん", 200);

// 税込価格を計算し、表示
$taxIncludedPrice = $orange->fetchCalcTaxInPrice();
echo $orange->name . "の税込価格は" . $taxIncludedPrice . "円です。";