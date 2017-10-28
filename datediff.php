
<?php
//Script by Cirkovic// //https://github.com/CirkaN
if (isset($_POST['submit'])) {


$date1 = $_POST['start'];

$now = time(); // or your date
$new = strtotime("$date1");

$datediff = $now - $new;

$days = floor($datediff / (60 * 60 * 24)); //CALCULATION IN DAYS
 $months = floor($datediff /  (60 * 60 * 24 * 30));//CALCULATION IN MONTHS
  $years = floor($datediff / (60*60*24*30*12));//CALCULATION IN YEARS u can usee (31556926) too


   echo "Days $days<br>";
         echo "Months $months<br>";
             echo "Years $years<br>";
}
?>
<form method="POST">
	<input type="date" name="start">
	<input type="submit" name="submit">
</form>