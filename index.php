
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>じゃんけんしようぜ！</title>
</head>

<body>
<main>
<div class="title" >
  <h1>じゃんけん</h1>
  <p>あなたの手を選んでください！</p>
</div> 
<!-- じゃんけんのフォーマット -->
<div class="form-box">
 　<form action="battle.php" method="post">
  　　<legend>選択の時です。</legend>
  　　<label>
  　　 <input type="radio" title="playerHand" name="playerHand" value="ぐー">ぐー
 　　 </label>
 　　 <label>
 　  <input type="radio" title="playerHand" name="playerHand" value="ちょき">ちょき
 　　 </label>
 　　 <label><input type="radio" title="playerHand" name="playerHand" value="ぱー">ぱー
 　　 </label>
 　　 <button type="submit" class="battle-button" >しょうぶ</button>
 　</form>
 

</div>
</main>
</body>
</html>