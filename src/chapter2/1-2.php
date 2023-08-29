<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chapter2</title>
</head>
<body>
  <?php
    // 変数：値につけるあだ名のこと
    // 変数に使えるのは、半角英数字と_のみ
    // 変数の先頭だけは数字は使えない
    $jojo = 'ジョナサン・ジョースター';
    $jonathan = 'ジョナサン・ジョースター';
    $joester_san = 'ジョナサン・ジョースター';
    echo $jojo;
    echo '<br>';
    echo $jonathan;
    echo '<br>';
    echo $joester_san;
    echo '<br>';
    echo 'ここからは第二部<br>';
    // プログラムは上から順に実行される
    $jojo = 'ジョセフ・ジョースター';
    // 出力 => ジョセフ・ジョースター
    echo $jojo;
    echo '<br>';
    echo $jonathan;
    echo '<br>';
    echo $joester_san;
    // あだ名に対してもあだ名をつけられる
    $ojiichan = $jonathan;
    echo '<br>';
    echo $ojiichan;
    echo '<br>';
    echo 'ここからは第三部<br>';
    $jijii = $jojo;
    $jojo = '空条承太郎';
    echo $jojo;
    echo '<br>';
    echo $jijii;
  ?>
</body>
</html>