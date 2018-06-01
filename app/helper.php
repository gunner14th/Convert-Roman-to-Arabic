<?php

function is_romanic($val = '')
{
	if (!$val) {
		return;
	}

	$symbols = array(
		'M',
		'D',
		'C',
		'L',
		'X',
		'V',
		'I'
	);

	$counter = 0;
	foreach ($symbols as $symbol) {
		$sub_count = substr_count($val, $symbol);
		if ($sub_count !== 0) {
			$counter += $sub_count;
		}
	}

	if ($counter === strlen($val)) {
		return true;
	} else {
		return false;
	}
}