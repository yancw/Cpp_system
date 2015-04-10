<?php
	require_once("configs/config.php");


	$fb1="";
	$fb2="";
	$fb3="";

	if(  isset($_POST['user_feedback_1']) )
		$fb1 = $_POST['user_feedback_1'];

	if(  isset($_POST['user_feedback_2']) )
		$fb2 = $_POST['user_feedback_2'];

	if( isset($_POST['user_feedback_3']))
		$fb3 = $_POST['user_feedback_3'];


	$num = $_SESSION['Ques_id'];

	$submit_code_id = $_POST['submit_code_id'];
	//echo  $_POST['choice_course_page'] . "  " . $_POST['choice_Qestion_id'] ."   ".  $_POST['hint'] ."  $fb1   $fb2   $fb3";

	date_default_timezone_set('Asia/Taipei');
    $today = date("Y-m-d H:i:s"); 

	$sth = $db->prepare("INSERT INTO collection_feedback (num, hint, feedback1, feedback2, feedback3, submit_code_id, time) VALUES (:num, :hint, :feedback1, :feedback2, :feedback3, :submit_code_id, :time)");
	$sth->bindParam(':num',  $num	);	
	$sth->bindParam(':hint', $_POST['hint']	);
	$sth->bindParam(':feedback1', $fb1	);
	$sth->bindParam(':feedback2', $fb2	);
	$sth->bindParam(':feedback3', $fb3	);
	$sth->bindParam(':submit_code_id' , $submit_code_id );
	$sth->bindParam(':time', $today	);
	$sth->execute();


	echo "儲存成功!";
	//header( "Location: cpp_compiler_OV.php?");

?>