<?php

require_once('helper.php');

if (isset($_POST['action']))
{
	$val = (isset($_POST['input'])) ? $_POST['input'] : '';
	$val = trim($val);

	$result = '';

	// determine the type of number (watch helper.php)	
	if (is_romanic($val)) {
		$result = romanic_number($val);
	} elseif(is_numeric($val)) {
		$result = number_romanic($val);
	} 

	echo json_encode($result);
}

// function for the Roman number
function romanic_number($roman) { 
	$table = array(
		'M'  => 1000,
		'CM' => 900,
		'D'  => 500,
		'CD' => 400,
		'C'  => 100,
		'XC' => 90,
		'L'  => 50,
		'XL' => 40,
		'X'  => 10,
		'IX' => 9,
		'V'  => 5,
		'IV' => 4,
		'I'  => 1
	);

	$result = 0;
	foreach ($table as $key => $value) {
		while (strpos($roman, $key) === 0) {
			$result += $value;
			$roman = substr($roman, strlen($key));
		}
	}
	return $result;
}

// function for the Arabic number
function number_romanic($integer) { 
	$table = array(
		'M'  => 1000,
		'CM' => 900,
		'D'  => 500,
		'CD' => 400,
		'C'  => 100,
		'XC' => 90,
		'L'  => 50,
		'XL' => 40,
		'X'  => 10,
		'IX' => 9,
		'V'  => 5,
		'IV' => 4,
		'I'  => 1
	);

	$result = ''; 
	while($integer > 0) { 
		foreach($table as $rom => $arb) { 
            if($integer >= $arb) { 
                $integer -= $arb;
                $result .= $rom;
                break;
            }
        }
	}
	return $result; 
}