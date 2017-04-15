<?php
$month = 60 * 60 * 24 * 30 + time();
setcookie('user_visit', date("m/d/y") , $month);
?>





<?php

if (isset($_COOKIE['user_visit']))
{
	$last_visit = $_COOKIE['user_visit'];
	echo "Dear Viisitor your last visit on this site was on<br /><b>$last_visit</b>";
}

?>
