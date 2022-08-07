<?php


session_start();


if(session_destroy()) {
	
	echo "<script>location.href='../login'</script>";
	
}


?>