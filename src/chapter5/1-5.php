<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chapter5</title>
</head>
<body>
  <?php
    // NULL型（"無"を表現するもの）
    // 新たな選択肢になりうる
    // TRUE・FALSE以外の選択肢が欲しい場合など
    // 土曜日シフト入っているかどうか
    // 例：TRUE → 誘う、FALSE → 誘わない、NULL(そもそもバイトをやっていない) → 叱る
    $土曜日シフト入っているかどうか = NULL;
    // キャスト演算：型変換（単項演算）
    // イメージ：ドル → 円、センチメートル → メートル
    // var_dump：echoと同様、値を出力する関数
    // 値と"値の型"を同時に出力する
    // デバッグ時に使う（HTMLを作る目的では使わない）
    var_dump(1); // 出力 => int(1)
    echo '<br>';
    // HTMLの表示が同じ
    echo 1;
    echo '<br>';
    echo '1';
    echo '<br>';
    // データ型の違いもわかる
    var_dump(1);
    echo '<br>';
    var_dump('1');
    echo '<br>';
    // 変数が何につけられた"あだ名"かを調査するのにも有用
    $x = TRUE;
    var_dump($x);
    echo '<br>';
    // キャスト演算（本題）
    // 変換したい値の前に、(変換したい型)を記述する
    // int型の10（変換したい値）をstring型（変換したい型）に変換
    $x = (string) 10;
    var_dump($x);
    echo '<br>';
    // 変換規則は覚えなくていい（調べればいい）
    // 例1：数字でない文字列をint型に変換すると、0になる（変換規則）
    $x = (int) 'a';
    var_dump($x); // 出力 => int(0)
    echo '<br>';
    // 例2：文字列をbool型に変換すると、TRUEになる（変換規則）
    $x = (bool) 'a';
    var_dump($x); // 出力 => bool(true)
    echo '<br>';
    // string型では、数字の四則演算ができないはず
    $x = '1' + '2';
    echo $x; // 出力 => 3
    // PHPの暗黙の型変換
    // 正しくない型で演算が行われた場合、自動的に型変換される
    // どういう風に型変換されるのかは複雑で把握しにくい
    // 想定外の挙動を避けるため、正しい型で演算を行うようにする
  ?>
</body>
</html>