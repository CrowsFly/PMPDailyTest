<?php
	class Math{
		public static function Sum_Solution($n){
			$sum = $n;
			$n = self::Sum_Solution($n-1);
		}
	}
	$n = Math::Sum_Solution(100);
	var_dump($n);
?>