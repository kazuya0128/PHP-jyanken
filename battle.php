<?php
$hands = ['ぐー','ちょき','ぱー'];
$picts =['gu','choki','pa'];

if(isset($_POST['playerHand'])){
$playerHand = $_POST['playerHand'];

$key = array_rand($hands);
$pcHand = $hands[$key];

if($playerHand==$pcHand){
    $result = 'あいこ';
}elseif($playerHand=='ぐー'&& $pcHand=='ちょき'){
    $result = ' YOU WIN!';
}elseif($playerHand=='ちょき'&& $pcHand=='ぱー'){
    $result ='YOU WIN!';
}elseif($playerHand=='ぱー' && $pcHand=='ぐー'){
    $result ='YOU WIN!';
}else{
    $result ='YOU LOSE';
}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>結果発表</title>
</head>
<body>
 <main>
    <div class="title2" >
      <h1>じゃんけん</h1>
      <p>結果発表です。。</p>
   </div> 

    <div class="result-box" >
        <p>判定は、、、</p>
        <h1 class="result-word"><?php echo $result; ?></h1>
        あなた：<?php echo $playerHand; ?><br>
 　　    PC：<?php echo $pcHand; ?><br>
        <p> <a class="again" href="index.php"><<< もう一度戦う</a> </p>
   </div>
</main>
</body>
</html>