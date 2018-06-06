<?php

function is_romanic($roman = '')
{
	if (!$roman) {
		return;
	}

	$table = array(
		'M'  =>1000,
		'CM' =>900,
		'D'  =>500,
		'CD' =>400,
		'C'  =>100,
		'XC' =>90,
		'L'  =>50,
		'XL' =>40,
		'X'  =>10,
		'IX' =>9,
		'V'  =>5,
		'IV' =>4,
		'I'  =>1
	);

	$result = 0;
	foreach ($table as $key => $value) {
		while (strpos($roman, $key) === 0) {
			$result += $value;
			$roman = substr($roman, strlen($key));
		}
	}

	if ($roman !== '') {
		return false;
	}

	return true;
}