
/*
*Enter the array e.g. array(1,2,3,4)
*
*/
function powerSet($in,$minLength = 1) {
	$count = count($in);
	$members = pow(2,$count);
	$return = array();
	for ($i = 0; $i < $members; $i++) {
		$b = sprintf("%0".$count."b",$i);
		$out = array();
		for ($j = 0; $j < $count; $j++) {
			if ($b{$j} == '1') $out[] = $in[$j];
		}
		if (count($out) >= $minLength) {
			$return[] = $out;
		}
	}
	return $return;
}


		$a = powerSet(array('1', 2, 3, 4));
		array_multisort(array_map('count', $a),$a);
		$a=array_reverse($a);
		echo '<pre>';
		print_r($a);
		echo '</pre>';
		
		//The above will output
		/*
    Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
        )

    [1] => Array
        (
            [0] => 2
            [1] => 3
            [2] => 4
        )

    [2] => Array
        (
            [0] => 1
            [1] => 3
            [2] => 4
        )

    [3] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 4
        )

    [4] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )

    [5] => Array
        (
            [0] => 3
            [1] => 4
        )

    [6] => Array
        (
            [0] => 2
            [1] => 4
        )

    [7] => Array
        (
            [0] => 2
            [1] => 3
        )

    [8] => Array
        (
            [0] => 1
            [1] => 4
        )

    [9] => Array
        (
            [0] => 1
            [1] => 3
        )

    [10] => Array
        (
            [0] => 1
            [1] => 2
        )

    [11] => Array
        (
            [0] => 4
        )

    [12] => Array
        (
            [0] => 3
        )

    [13] => Array
        (
            [0] => 2
        )

    [14] => Array
        (
            [0] => 1
        )

)
		*/
