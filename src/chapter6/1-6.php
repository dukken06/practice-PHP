<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chapter6</title>
</head>
<body>
  <?php
    // if文について
    // if文とfor文が使えれば、PHPの命令の幅が広がる
    // プログラム：コンピュータに命令するために記述する
    // if文：ある条件を満たした場合のみ、コンピュータに命令する
    // if文の書き方
    // if (bool型の値：TRUEかFALSE) {
    //   条件が満たされた場合(TRUEの場合)に実行する命令
    //   条件を満たしていない場合(FALSEの場合)は実行されない
    // }
    if (TRUE) {
      echo '条件が満たされた場合に実行する命令';
      echo '<br>';
    } // 出力 => 条件が満たされた場合に実行する命令
    if (FALSE) {
      echo '条件を満たしていない場合に実行する命令';
      echo '<br>';
    } // 出力されない
    // 条件は変数を使っても大丈夫
    $x = TRUE;
    if ($x) {
      echo '条件が満たされた場合に実行する命令';
      echo '<br>';
    } // 出力 => 条件が満たされた場合に実行する命令

    // 比較演算：2つの値(bool型でないデータ)からbool型の値（TRUEかFALSE）を作り出す
    // 比較演算：比較が正しい場合はTRUE、正しくない場合はFALSE
    var_dump(1 < 2); // 出力 => bool(true)
    echo '<br>';
    var_dump(1 > 2); // 出力 => bool(false)
    echo '<br>';
    // 両辺の値が等しいかどうか
    var_dump(1 == 1); // 出力 => bool(true)
    echo '<br>';
    var_dump(1 == 2); // 出力 => bool(false)
    echo '<br>';
    // 両辺の値が等しくないかどうか
    var_dump(1 != 1); // 出力 => bool(false) 
    echo '<br>';
    // 比較演算も、変数を使っても大丈夫
    $x = 1;
    $y = 2;
    var_dump($x < $y); // 出力 => bool(true)
    echo '<br>';

    // 比較するときは、両辺のデータ型を揃える
    // 肩が揃っている上で、データが等しいかどうかを比較する（暗黙の型変換を避ける）
    var_dump(1 == '1'); // 出力 => bool(true)
    // こちらは使わない
    echo '<br>';
    var_dump(1 === '1'); // 出力 => bool(false)
    // こちらを使う
  ?>
</body>
</html>