<?php
// Q1 tic-tac問題
echo "<Q1>\n";
for($i = 1; $i <= 100 ; $i++)
{
  if($i % 4 === 0 && $i % 5 === 0 )
  {
    echo 'tic-tac'."\n";
    continue;
  }
  if($i % 4 === 0)
  {
    echo 'tic'."\n";
    continue;
  }
  if($i % 5 === 0)
  {
    echo 'tac'."\n";
    continue;
  }
  
  echo $i."\n";
}
echo "\n</Q1>\n";
// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
$ageList = [25, 30, 18];
  
  ## 問1
  echo "<Q2-1>\n";
  echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';
  echo "\n</Q2-1>\n";

  ## 問2
  echo "<Q2-2>\n";
  $index = 1;
  foreach($personalInfos as $array)
  {
    echo $index.'番目の'.$array['name'] . 'の電話番号は' . $array['tel'] . 'です。' . "\n";
    $index++;
  }
  echo "</Q2-2>\n";
  
  ## 問3
  echo "<Q2-3>\n";
  foreach($personalInfos as $i => $array)
  {
    $personalInfos[$i]['age'] = $ageList[$i];
  }
  var_dump($personalInfos);
  echo "\n</Q2-3>\n";

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    //Q4追記済み
    public function attend($lessonName)
    {
        echo $this->studentName.'は'.
             $lessonName . 'の授業に出席しました。学籍番号：' .
             $this->studentId;
    }
}

echo "<Q3>\n";
$student = new Student(120,'山田');
echo '学籍番号' .
     $student->studentId .
     '番の生徒は' .
     $student->studentName .
     'です。';
echo "\n<Q3>\n";

// Q4 オブジェクト-2
echo "<Q4>\n";
$yamada = new Student(120,'山田');
$yamada->attend('PHP');
echo "\n<Q4>\n";

// Q5 定義済みクラス
echo "<Q5-1>\n";
$date = new DateTime();
echo $date->format('Y-m-d');
echo "\n<Q5-1>\n";

echo "<Q5-2>\n";
$day = new DateTime();
$day2 = new DateTime('1992-04-25');
$diff = $day->diff($day2);
echo 'あの日から' . 
     $diff->days .
     '日経過しました。';
echo "\n<Q5-2>\n";
?>