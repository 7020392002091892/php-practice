<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100 ; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0 ) {
    echo 'tic-tac' . "\n";
    continue;
  }
  if ($i % 4 === 0) {
    echo 'tic' . "\n";
    continue;
  }
  if ($i % 5 === 0) {
    echo 'tac' . "\n";
    continue;
  }
  
  echo $i . "\n";
}

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
  echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

  ## 問2
  $index = 1;
  foreach ($personalInfos as $array) {
    echo $index . '番目の' . $array['name'] . 'の電話番号は' . $array['tel'] . 'です。' . "\n";
    $index++;
  }
  
  ## 問3
  foreach ($personalInfos as $i => $array) {
    $personalInfos[$i]['age'] = $ageList[$i];
  }

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
        echo $this->studentName . 'は' .
          $lessonName . 'の授業に出席しました。学籍番号：' .
          $this->studentId . "\n";
    }
}

$student = new Student(120,'山田');
echo '学籍番号' .
  $student->studentId .
  '番の生徒は' .
  $student->studentName .
  'です。' . "\n";

// Q4 オブジェクト-2
$yamada = new Student(120,'山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
  ## 問1
  $date = new DateTime();
  echo $date->format('Y-m-d') . "\n";
  
  ## 問2
  $day = new DateTime();
  $day2 = new DateTime('1992-04-25');
  $diff = $day->diff($day2);
  echo 'あの日から' .
    $diff->days .
    '日経過しました。' .
    "\n";
    
?>