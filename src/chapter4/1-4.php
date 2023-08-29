<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chapter4</title>
</head>
<body>
  <?php
    // 演算：ある値から別の値を作り出すこと
    // 演算子：演算子と呼ばれる記号を使って別の値を作り出す
    // 二項演算：二つの値から別の値を作り出すこと
    // string型（文字列）
    echo '文字列';
    echo '<br>';
    // int型（整数）
    echo 3 + 5;
    echo '<br>';
    // string型のデータの連結
    $x = 'こんにちは、'.'チャンネル登録してね';
    echo $x;
    echo '<br>';
    $x = '最'.'&'.'高';
    echo $x;
    echo '<br>';
    // float型（小数）
    $x = 0.1 + 0.2 - 0.5;
    echo $x;
    echo '<br>';
    echo 100 - 99.6;
    // bool型（論理値）
    $t = TRUE;
    $f = FALSE;
    // 論理和
    $x = TRUE || FALSE;
    $y = TRUE or FALSE;
    // 論理積
    $x = TRUE && FALSE;
    $y = TRUE and FALSE;
    // 否定
    $z = ! FALSE;
  ?>
</body>
</html>