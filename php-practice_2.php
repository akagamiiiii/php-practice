<?php
// Q1 tic-tac問題
<?php
    for($i = 1; $i <= 100; $i++){
        if($i % 4 === 0 and $i % 5 === 0){
            echo "tic-tac". "\n";
        }elseif($i % 4 === 0){
            echo "tic". "\n";
        }elseif($i % 5 === 0){
            echo "tac". "\n";
        }else{
            echo $i. "\n";
        }
    }
?>

// Q2 多次元連想配列
//問題1
<?php
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
    
    echo   $personalInfos[1]["name"]. "さんの電話番号は". $personalInfos[1]["tel"]. "です。";
?>

//問題2
<?php
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
    
    foreach($personalInfos as $index => $value){
        $index = $index + 1;
         echo $index. "番目の". $value["name"]. "さんのメールアドレスは". $value["mail"]. 
              "で、電話番号は". $value["tel"]. "です。"."\n";
    }
        
?>

//問題3
<?php
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
    
    foreach($personalInfos as $index => $value){
        $personalInfos[$index]["age"] = $ageList[$index];
    }
    
    // foreach($ageList as $index => $value){
    //     $personalInfos[$index]["age"] = $value;
    // }
    
    var_dump($personalInfos);
    
        
?>

// Q3 オブジェクト-1
<?php
   class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$makoto = new Student(1, "まこと");

echo "学籍番号". $makoto->studentId. "番の生徒は". $makoto->studentName. "です。";
?>

// Q4 オブジェクト-2
<?php
   class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName. "は". $class. "の授業に参加しました。".
             "学籍番号:". $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');
?>

// Q5 定義済みクラス
//問題1
<?php
    date_default_timezone_set('Asia/Tokyo');

    $now = new DateTime();
    $prev = $now->modify("-1 month")->format("Y-m-d");
    
    echo $prev;
?>

//問題2
<?php
    date_default_timezone_set('Asia/Tokyo');

    $now = new DateTime();
    $time = new DateTime("1992/04/25");
    
    echo "あの日から". $time->diff($now)->format("%a日"). "経過しました。";
?>

?>
