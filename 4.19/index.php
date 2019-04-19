<?php
	function index($n,$m){
		if($n<1||$m<1){
			return 0;
		}
		if($n==1){
			return 1;
		}
		return (index($n-1)+$m)%$n;
	}
	echo index(11,1);
?>