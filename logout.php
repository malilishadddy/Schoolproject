<?php
	session_start();
	unset($_SESSION['user_id']);
	echo("<script> location.replace('index.html');</script>");