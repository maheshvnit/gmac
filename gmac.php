<?php
/*
to run script

php gmac.php

php gmac.php A=50 B=4,46,8

php gmac.php A=50 B=4,46,8

*/
// [1, 2, 3, ..., A]
// ["1", "2", "3", .., "A"]
// a list B of K random integers
// sort vector of strings
// B[i]-th (0 <= i < K)
// { S[B[0] - 1], S[B[1] - 1], ..., S[B[K-1] - 1] }


/*
Input: A = 12, B = [2, 5] 
Output: ans = [10, 2] 
Sorted list S: ["1", "10", "11", "12", "2", "3", "4", "5", ...., "9"] 
ans = [2nd number, 5th number] = [10, 2]

*/
$a = 12;
$b = [2,5];	
if (isset($argc)) {
	if (isset($argv[1]) && isset($argv[2])) {
		$as = $argv[1];
		$asr = explode('=', $as);	
		$a=$asr[1];
		$bs = $argv[2];
		$brs = explode('=', $bs);	
		$b=explode(',', $brs[1]);
	}	
}

//echo "$a";
//print_r($b);

echo "Input: A = $a, B = [".join(', ',$b)."]\n\n";

$ar = [];
for($i=1;$i<=$a;$i++)
{
	$ar[] = "\"$i\"";
}
//print_r($ar);
sort($ar);
//print_r($ar);
$br = [];
for($j=0;$j<count($b);$j++)
{
	$br[] = $ar[$b[$j]-1];
}
//print_r($br);

echo "ans: = [".join(', ',$br)."]\n\n";

?>