<?php
header('content-type:text/html;charset=utf8');
	function choushu($nums){
		if(!nums){
			echo "这不是一个丑数";
		}
		while($nums%2==0){
			$nums=$nums/2;
			echo '2';
		}
		while($nums%3==0){
			$nums=$nums/3;
			echo '3';
		}
		while($nums%5==0){
			$nums=$nums/5;
			echo '5';
		}
		if($nums==1){
			echo "<br>";
			echo "这是一个丑数";
		}else
		{
			echo "这不是丑数";
		}
	}
	choushu(100);
?>