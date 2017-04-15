
<?php

function information()
{
	echo $name = "Tahir Khan<br />";
	echo $mail = "tahirkhan.dream@gmail.com<br />";
	echo $city = "Abbottabad";
}

information();
?>

<?php

function mobile()
{
	$info = array(
		"Tahir khan",
		"25",
		"abbottbad",
		"Computer Science",
		"tahirkhan.dream@gmial.com",
		"male"
	);
	echo $info[0];
}

mobile();
?>
