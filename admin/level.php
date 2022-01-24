<?php 
	if($level == 1){
		header('location:index.php?error');
		exit;
	}else{ 
		if ($level == 2) {
			header('location:manage');
			exit;
		}
		else{
			if ($level == 3) {
				header('location:root');
				exit;
			}
		}
	}