<?php
$a = 2;
$b = 3;
$c = 4;
echo 1 .'<br>';
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';

echo '//'.'<br>';

echo $a + $b.'<br>';
echo $a * $b.'<br>';
$a += $b; echo $a.'<br>';

echo '//'.'<br>';

$a = 5;
echo $a++."<br>";
$a = 5;
echo ++$a."<br>";

echo '//'.'<br>';
?>
<?php
var_dump(is_float(4));
?><br>
<?php
var_dump(is_integer(4));
?><br>
<?php
var_dump(is_numeric(4));
?><br>

//<br>

<?php
$str4num = '12.34';
$number = (float)$str4num;
$number2 = intval($str4num);
var_dump($number);
?><br>

<?php
var_dump($number2);
?><br>

//<br>