<?php

if (isset($_POST['action']))
{
	$val = (isset($_POST['input'])) ? $_POST['input'] : '';

	// Do some magic

	echo $val;
}