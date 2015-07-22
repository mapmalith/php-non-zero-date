include ('non-zero-function.php');

$today = time();
echo remove_zero_from_date(strftime('The date today is - *%m/*%d/%y'), $today);
