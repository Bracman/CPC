<?php
?><h4>CPC №1  Часть 1. Вопрос 1</h4><?
$a=3;
$y=$a;
echo $y,"<br>";

?><h4>CPC №1  Часть 1. Вопрос 2</h4><?
$a=10;
$b=2;
echo $a+$b,"<br>";
echo $a-$b,"<br>";
echo $a*$b,"<br>";
echo $a/$b,"<br>";

?><h4>CPC №1  Часть 1. Вопрос 3</h4><?
$c=15;
$d=2;
$result=$c+$d;
echo $result,"<br>";


?><h4>CPC №1  Часть 1. Вопрос 4</h4><?
$a=10;
$b=2;
$c=5;
$res=($a+$b+$c)/(($a+$b+$c)/3);
echo $res,"<br>";

?><h4>CPC №1  Часть 1. Вопрос 5</h4><?
$a=17;
$b=10;
$c=$a-$b;
$d=17;
$result=$c+$d;
echo $result,"<br>";

?><h4>CPC №1  Часть 2. Вопрос 1</h4><?
$text='Привет, Мир!';

echo $text .='Это моя первая программа',"<br>";

?><h4>CPC №1  Часть 2. Вопрос 2</h4><?
$text1='Привет,';
$text2='Мир';
echo $text1.$text2,"<br>";;

?><h4>CPC №1  Часть 2. Вопрос 3</h4><?
$name='Динар';
echo 'Привет'.$name,"<br>";
$text='Новый текст';

?><h4>CPC №1  Часть 2. Вопрос 4</h4><?
$age=120;
$height=192;
echo 'Мой возраст'.$age,"<br>";
echo 'Мой рост'.$height,"<br>";

?><h4>CPC №1  Часть 2. Вопрос 5</h4><?
$text='abcde';
echo $text [0],"<br>";
echo $text [2],"<br>";
echo $text [4],"<br>";


?><h4>CPC №1  Часть 3. Вопрос 1</h4><?

$arr=['a','b','c'];
var_dump($arr);
for($i=0;$i<count($arr);$i++){
    var_dump($arr[$i]);
}
?><h4>CPC №1  Часть 3. Вопрос 2</h4><?
$a='';
for($i=0;$i<count($arr);$i++){
    echo $a .=$arr[$i],"<br>";

}
?><h4>CPC №1  Часть 3. Вопрос 3</h4><?
$arr=['a','b','c','d'];
echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.$arr[3].','.$arr[0].'-'.$arr[1].','.$arr[0].'/'.$arr[1],"<br>";

?><h4>CPC №1  Часть 3. Вопрос 4</h4><?
$arr=['2','5','3','9'];
$result=($arr[0]*$arr[1])+($arr[2]*$arr[3]);
echo $result,"<br>";

?><h4>CPC №1  Часть 3. Вопрос 5</h4><?

$arr[0]=1;
$arr[1]=2;
$arr[2]=3;
$arr[3]=4;
$arr[4]=5;


?><h4>CPC №1  Часть 4. Вопрос 1</h4><?
$arr=['a'=>11,'b'=>20,'c'=>30];
echo $arr['c'],"<br>";
?><h4>CPC №1  Часть 4. Вопрос 2</h4><?
$arr=['q3'=>12,'r3'=>23,'f3'=>34];
echo array_sum($arr);

