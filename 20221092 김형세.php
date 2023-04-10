<!DOCTYPE html>
<html>
<body>

<?php
echo "1번 문제 <br><br>";

$sum = 0;
$prod = 1;
for ($n = 1; $n <= 30; $n++) 
{
  echo "$n <br>";
  $sum = $sum + $n;
  $prod = $prod * $n;
}
echo "<br>";
echo "합 : $sum <br><br>";

echo "곱 : $prod <br><br>";

echo "2번 문제 <br><br>";

$n = 30;

$random_numbers = array();
for ($i = 0; $i < $n; $i++) {
  $random_numbers[] = rand(10, 100);
}

sort($random_numbers);

echo "정렬: ";
foreach ($random_numbers as $num) {
  echo $num . " ";
}
echo "<br><br>";

echo "3번 문제 <br><br>";

$fib = array(1, 1);
for ($i = 2; $i <= 5; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}

echo "1 1 1<br>";
echo "2 1 2<br>";
echo "3 2 1.5<br>";
echo "4 3 ".round($fib[4]/$fib[3], 6)."<br>";
echo "5 5 ".round($fib[5]/$fib[4], 6)."<br>";
echo "6 8<br><br>";

echo "4번 문제 <br><br>";

<form action="welcome.php" method="post">
width: <input type="text" name="width"><br>
height: <input type="text" name="height"><br>
length: <input type="text" name="length"><br>
radius: <input type="text" name="radius"><br>
<input type="submit">
</form>

echo "5번 문제 <br><br>";
?>
<?php 
	$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
	$month = isset($_GET['month']) ? $_GET['month'] : date('m');

	$date = "$year-$month-01";
	$time = strtotime($date); 
	$start_week = date('w', $time); 
	$total_day = date('t', $time);
	$total_week = ceil(($total_day + $start_week) / 7); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calendar</title>
	<style type="text/css">
		table {
			border-spacing: 0;
		}
		table td {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php echo "$year 년 $month 월" ?>
	<?php if ($month == 1): ?>
		<a href="/?year=<?php echo $year-1 ?>&month=12">이전 달</a>
	<?php else: ?>
		<a href="/?year=<?php echo $year ?>&month=<?php echo $month-1 ?>">이전 달</a>
	<?php endif ?>

	<?php if ($month == 12): ?>
		<a href="/?year=<?php echo $year+1 ?>&month=1">다음 달</a>
	<?php else: ?>
		<a href="/?year=<?php echo $year ?>&month=<?php echo $month+1 ?>">다음 달</a>
	<?php endif ?>


	<table border="1">
		<tr> 
			<th>일</th> 
			<th>월</th> 
			<th>화</th> 
			<th>수</th> 
			<th>목</th> 
			<th>금</th> 
			<th>토</th> 
		</tr> 

		<?php for ($n = 1, $i = 0; $i < $total_week; $i++): ?> 
			<tr> 
				<?php for ($k = 0; $k < 7; $k++): ?> 
					<td> 
						<?php if ( ($n > 1 || $k >= $start_week) && ($total_day >= $n) ): ?>
							<?php echo $n++ ?>
						<?php endif ?>
					</td> 
				<?php endfor; ?> 
			</tr> 
		<?php endfor; ?> 
	</table>
</body>
</html>
