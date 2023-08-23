<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chapter2</title>
</head>
<body>
  <?php
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
    $jojo = 'ジョセフ・ジョースター';
    echo $jojo;
    echo '<br>';
    echo $jonathan;
    echo '<br>';
    echo $joester_san;
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