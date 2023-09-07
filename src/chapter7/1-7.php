<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chapter7</title>
</head>
<body>
  <?php
    // if文について
    // if ()の()の中には、bool型の値を入れる
    $x = 1;
    if ($x >= 0) {
      echo 'プラスだよ';
    }
    if ($x < 0) {
      echo 'マイナスだよ';
    }
    echo '<br>';
    $x = -1;
    if ($x >= 0) {
      echo 'プラスだよ';
    }
    if ($x < 0) {
      echo 'マイナスだよ';
    }
    echo '<br>';

    // if-else構文：2つの条件が排他的かつ網羅的な場合（同時にTRUEになり得ないし、同時にFALSEになり得ない）に使える
    if ($x >= 0) {
      echo 'プラスだよ';
    } else {
      echo 'マイナスだよ';
    }
    echo '<br>';

    $human = '俺';
    if ($human === '俺') {
      echo 'ローランド';
    } else {
      echo '俺以外';
    }
    echo '<br>';
    $human = '俺以外';
    if ($human === '俺') {
      echo 'ローランド';
    } else {
      echo '俺以外';
    }
    echo '<br>';
    // 3つでも使える（どれか1つがTRUEでその他がFALSEになる）
    $x = 0;
    if ($x > 0) {
      echo 'プラスだよ';
    } else if ($x < 0) {
      echo 'マイナスだよ';
    } else {
      echo 'ゼロだよ';
    }
    echo '<br>';
    // ifは二重でも使える
    $x = 0;
    if ($x > 0) {
      if ($x % 2 === 0) {
        echo '正の偶数だよ';
      } else {
        echo '正の奇数だよ';
      }
    } else if ($x < 0) {
      if ($x % 2 === 0) {
        echo '負の偶数だよ';
      } else {
        echo '負の奇数だよ';
      }
    } else {
      echo 'ゼロだよ';
    }
  ?>
</body>
</html>