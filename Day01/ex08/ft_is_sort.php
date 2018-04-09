#!/usr/bin/php
<?php
function ft_is_sort($array)
{
	$asort = $array;
	sort ($asort);
	if (array_diff_asoc($asort, $array) == null)
		return true;
	return false;
}
?>
