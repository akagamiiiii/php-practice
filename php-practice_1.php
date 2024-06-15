<?php
// Q1 変数と文字列
<?php
  $name = "油井";
  echo "私の名前は「". $name. "」です。";
?>

// Q2 四則演算
<?php
  $num = 5 * 4;
  echo $num. "\n";
  echo $num / 2;
?>

// Q3 日付操作
<?php
  date_default_timezone_set('Asia/Tokyo');
   
  echo "現在時刻は、". date("Y年m月d日 H時i分s秒"). "です。";
?>

// Q4 条件分岐-1 if文
<?php
    $device = "abcde";
    
    if($device == "windows" or $device == "mac"){
        echo "使用OSは、". $device. "です。";
    }else{
        echo "どちらでもありません。";
    }
?>

// Q5 条件分岐-2 三項演算子
<?php
    $age = 20;
    
    $message = ($age < 18) ? "未成年です。" : "成人です。";
    echo $message;
?>

// Q6 配列
<?php
    $places = ["栃木県", "群馬県", "茨城県", "千葉県", "埼玉県", "東京都", "神奈川県"];
    
    echo $places[2]. "と". $places[3]. "は関東地方の都道府県です。";
?>

// Q7 連想配列-1
<?php
    $places = ["東京都" => "新宿区", "神奈川県" => "横浜市", "千葉県" => "千葉市",
               "埼玉県" => "さいたま市", "栃木県" => "宇都宮市", "群馬県" => "前橋市",
               "茨城県" => "水戸市"];
    
    foreach($places as $key => $value){
        echo $value. "\n";
    }
?>

// Q8 連想配列-2
<?php
    $places = ["東京都" => "新宿区", "神奈川県" => "横浜市", "千葉県" => "千葉市",
               "埼玉県" => "さいたま市", "栃木県" => "宇都宮市", "群馬県" => "前橋市",
               "茨城県" => "水戸市"];
    
    foreach($places as $key => $value){
        if($key == "埼玉県"){
            echo $key. "の県庁所在地は、". $value. "です。";
        }
    }
?>

// Q9 連想配列-3
<?php
    $places = ["東京都" => "新宿区", "神奈川県" => "横浜市", "千葉県" => "千葉市",
               "埼玉県" => "さいたま市", "栃木県" => "宇都宮市", "群馬県" => "前橋市",
               "茨城県" => "水戸市"];
               
    $places["愛知県"] = "名古屋市";
    $places["大阪府"] = "大阪市";
    
    foreach($places as $key => $value){
        if(
            $key === "東京都" or
            $key === "神奈川県" or
            $key === "千葉県" or
            $key === "埼玉県" or
            $key === "栃木県" or
            $key === "群馬県" or
            $key === "茨城県" 
        ){
            echo $key. "の県庁所在地は、". $value. "です。". "\n";
        }else{
            echo $key. "は関東地方ではありません。". "\n";
        }
    }
?>

// Q10 関数-1
<?php
    function hello($name){
        echo $name. "、こんにちは。". "\n";
    }
    
    hello("油井さん");
    hello("佐藤さん");
?>

// Q11 関数-2
<?php
    function calcTaxPrice($price){
        $addPrice = $price + $price * 0.1;;
        
        echo $price. "の商品の税込価格は". $addPrice. "円です。";
    }
    
    calcTaxPrice(1000);
?>

// Q12 関数とif文
<?php
    function distinguishNum($num){
        if($num % 2 == 1){
            echo $num. "は奇数です。". "\n";
        }else{
            echo $num. "は偶数です。";
        }
    }
    
    distinguishNum(11);
    distinguishNum(24);
?>

// Q13 関数とswitch文
<?php
    function evaluateGrade($grade){
        switch($grade){
            case "A":
            case "B":
            echo "合格です";
            break;
            
            case "C":
            echo "合格ですが追加課題がります。";
            break;
            
            case "D":
            echo "不合格です。";
            break;
            
            case "F":
            echo "判定不明です。講師に問い合わせてください。";
            break;
        }
    }
    
    evaluateGrade("A");
?>

?>