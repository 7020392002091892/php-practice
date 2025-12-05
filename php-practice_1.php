<?php
// Q1 変数と文字列
$q1name = '安藤';

echo "<Q1>\n";
echo '私の名前は「' . $q1name . '」です。';
echo "\n</Q1>\n";

// Q2 四則演算
$num = 5 * 4;

echo "<Q2>\n";
echo $num . "\n";
echo ($num / 2);
echo "\n</Q2>\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date = date("Y年m月d日 H時i分s秒");

echo "<Q3>\n";
echo '現在時刻は、' . $date . 'です。';
echo "\n</Q3>\n";

// Q4 条件分岐-1 if文

$device = "windows";

echo "<Q4>\n";
if($device === "windows")
{
  echo '使用OSは、windowsです。';
}
else
{
  if($device === "mac")
  {
    echo '使用OSは、windowsです。';
  }
  else
  {
    echo 'どちらでもありません。';
  }
}
echo "\n</Q4>\n";
    
// Q5 条件分岐-2 三項演算子
$age = 17;
$message = '';

echo "<Q5>\n";
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message;
echo "\n</Q5>\n";

// Q6 配列
$country = ['群馬県','茨城県','栃木県','千葉県','埼玉県','東京都','神奈川県'];
echo "<Q6>\n";
echo $country[2] . 'と' . $country[3] . 'は関東地方の都道府県です。';
echo "\n</Q6>\n";

// Q7 連想配列-1
echo "<Q7>\n";
$q7country =  [
               '東京都' => '新宿区',
               '神奈川県' => '横浜市',
               '千葉県' => '千葉市',
               '埼玉県' => 'さいたま市',
               '栃木県' => '宇都宮市',
               '群馬県' => '前橋市',
               '茨城県' => '水戸市'
              ];

foreach($q7country as $value)
{
  echo $value . "\n";
}
echo "</Q7>\n";

// Q8 連想配列-2
echo "<Q8>\n";

foreach($q7country as $key => $value)
{
  if($key === '埼玉県')
  {
    echo $key . 'の県庁所在地は、' . $value . 'です。';
    break;
  }
}
echo "\n</Q8>\n";

// Q9 連想配列-3
$q7country['愛知県'] = '名古屋市';	
$q7country['大阪府'] = '大阪市';

$kanto = ['群馬県','茨城県','栃木県','千葉県','埼玉県','東京都','神奈川県'];

echo "<Q9>\n";

foreach($q7country as $key => $value)
{
  $boolean = false;
  foreach($kanto as $name)
  {
    if($key !== $name){
      continue;
    }

    $boolean = true;
    break;
  }
  
  if($boolean)
  {
    echo $key . 'の県庁所在地は、' . $value . 'です。';
    echo "\n";
  }
  else
  {
    echo $key . 'は関東地方ではありません。';
    echo "\n";
  }
}
echo "</Q9>\n";

// Q10 関数-1
function sayHello($name)
{
  echo $name . 'さん、こんにちは。';
}
echo "<Q10>\n";
sayHello('金谷');
echo "\n";
sayHello('安藤');
echo "\n</Q10>\n";

// Q11 関数-2
$price = 1000;
$taxInPrice = 0;
function calcTaxInPrice($price_default)
{
  return $price_default * 1.1;
}

echo "<Q11>\n";
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' .  $taxInPrice . '円です。';
echo "\n</Q11>\n";

// Q12 関数とif文

function distinguishNum ($number)
{
  $mod = $number % 2;
  if($mod === 0)
  {
    return $number . 'は偶数です。';
  }
  return $number . 'は奇数です。';
}
echo "<Q12>\n";
echo distinguishNum (11) . "\n";
echo distinguishNum (24);
echo "\n</Q12>\n";

// Q13 関数とswitch文
function evaluateGrade ($grades)
{
  switch ($grades) {
    case 'A':
    case 'B':
      return '合格です。';
    case 'C':
      return '合格ですが、追加課題があります。';
    case 'D':
      return '不合格です。';
    default:
      return '判定不明です。講師に問い合わせてください。';
  }
} 

echo "<Q13>\n";
echo evaluateGrade("A") . "\n";
echo evaluateGrade("E");
echo "\n</Q13>\n";

?>