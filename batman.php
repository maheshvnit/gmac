<?php
/*
to run script

php batman.php
php batman.php A=1 B=3
php batman.php A=2 B=3
php batman.php A=10 B=5

*/

function gcd($a, $b) 
{ 
	// Everything divides 0 
	if ($a == 0 || $b == 0) 
		return 0; 

	// base case 
	if ($a == $b) 
		return $a; 

	// a is greater 
	if ($a > $b) 
		return gcd($a - $b, $b); 

	return gcd($a, $b - $a); 
} 

function checkCoPrime($a, $b)
{
	if (gcd($a, $b) == 1) 
        echo true; 
    else
        echo false; 
}
	
	
$a = 1;
$b = 3;	
if (isset($argc)) {
	if (isset($argv[1]) && isset($argv[2])) {
		$as = $argv[1];
		$asr = explode('=', $as);	
		$a=$asr[1];
		$bs = $argv[2];
		$brs = explode('=', $bs);	
		$b=$brs[1];
	}	
}

echo "Input: A = $a, B = $b\n\n";

$n = 0;

//for($i=0;$i<$a;$i++) // distance 1
{
	for($ri=0;$ri<$b;$ri++) // runways i 3
	{
		//$d=0;
		for($rj=0;$rj<$b;$rj++) // runways j 3
		{
			echo "$ri,$rj";
			$p = checkCoPrime($ri,$rj);
			$pr = checkCoPrime($rj,$ri);
			if($p)
			{
				//$n++;
			}
			else
			{
				
				$n++;
			}
			
			if($pr)
			{
				//$n++;
			}
			else
			{
				
				$n++;
			}
			
		}
		
	}
}
echo "$n";

/*
for($ri=0;$ri<$b;$ri++) // runways i
{
	for($rj=0;$rj<$b;$rj++) // runways j
	{
		for($i=0;$i<$a;$i++) // distance
		{
			for($j=0;$j<$a;$j++) // distance
			{
				$p = checkCoPrime($i,$j);
				if($p)
				{
					
				}
				else
				{
					
				}
			}
		}
	}
}
*/
?>