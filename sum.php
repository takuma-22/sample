<?php
//課題１
function sum($sum){
    echo $sum*2;
}
echo sum(4);
?>
<?php
// 課題２
function f($a, $b){
      echo $a+$b;
 }
echo f(1,2);
?>
<?php
//課題３
$arr = array(1, 3, 5 ,7, 9);
echo count($arr);
?>
<?php
//課題４
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
         $max_number=$a;
     }
 //どうしたらいいかわからない・・・・
 }
 return $max_number;
 }
 echo max_array(array(1,2,3,4,8));
?>

<?php
//課題５
//strip_tags
$str="<h1>aaaaaaa</h1><p>bbbbb</p>";
echo strip_tags($str);

?>

<?php
//array_push
$fruits = ['りんご', 'オレンジ', 'イチゴ'];

array_push($fruits, 'バナナ', 'ブドウ');

print_r($fruits);
?>
<?php
//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);
 
print_r($array);
?>
<?php
//time, mktime
echo 'タイムスタンプ：'.time();
echo '<br>';

$timestamp = mktime(0, 0, 0, 6, 16, 2020);
echo $timestamp;

?>
<?php
//date
echo date('Y/m/d');
echo '<br>';
?>

