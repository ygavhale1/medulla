<?php
	if(isset($_REQUEST['name'])){
		extract($_REQUEST);
		if($name!="" && $email!="" && $cont!="" && $city!="" && $query!=""){
			$subject="FAQ Leads.";
			$headers  = "From: Facebook<noreplay@medulla.in>\r\n"; 
    		$headers .= "Content-type: text/html\r\n"; 
			$msg="Dear Sir,<br><br>";
			$msg.="User enter data is given below:<br><br>";
			$msg.="Name : $name<br>";
			$msg.="Email Id : $email<br>";
			$msg.="Contact Number : $cont<br>";
			$msg.="City : $city<br>";
			$msg.="Query : $query<br>";
			$msg.="<br><br>Thanks & Regards,<br>Stemade";
			if(mail("ask@stemade.com,stemade.tabs@gmail.com",$subject,$msg,$headers)){//arvind@sharptechcompany.com
				$curd=date("d-m-Y");
				$filename = "FAQpage.csv";
				$string=array(array("$name","$email","$cont","$city","$query","$curd"));
				if (file_exists($filename)) 
				{
				   $fp=fopen($filename,"a");
				  foreach ($string as $fields)
					{
						fputcsv($fp, $fields);
					}
					fclose($fp);
				}
				else
				{
				   $fp=fopen($filename,"a");
				   $string1=array(array("Full Name","Email ID","Contact No.","City","Query","Date"));
				   foreach ($string1 as $fields)
					{
						fputcsv($fp, $fields);
					}
					foreach ($string as $fields)
					{
						fputcsv($fp, $fields);
					}
					fclose($fp);
				}
				echo 'Thank you for Contacting us';
			}
			else{
				echo 'Please try again';
			}
		}
	}
	
	if(isset($_REQUEST['name1'])){
		extract($_REQUEST);
		if($name1!="" && $email1!="" && $cont1!="" && $city1!="" && $ykage!="" && $gttc!="" && $hmky!=""){
			$subject=" Landing Page Leads.";
			$headers  = "From: Facebook<noreplay@medulla.in>\r\n"; 
    		$headers .= "Content-type: text/html\r\n"; 
			$msg="Dear Sir,<br><br>";
			$msg.="User enter data is given below:<br><br>";
			$msg.="Name : $name1<br>";
			$msg.="Email Id : $email1<br>";
			$msg.="Contact Number : $cont1<br>";
			$msg.="Good time to call : $gttc<br>";
			$msg.="City : $city1<br>";
			$msg.="How many kids do you have? : $hmky<br>";
			$msg.="Your kids age : $ykage<br>";
			$msg.="<br><br>Thanks & Regards,<br>Stemade";
			if(mail("ask@stemade.com,stemade.tabs@gmail.com",$subject,$msg,$headers)){//arvind@sharptechcompany.com
				$curd=date("d-m-Y");
				$filename = "landingpage.csv";
				$string=array(array("$name1","$email1","$cont1","$gttc","$city1","$hmky","$ykage","$curd"));
				if (file_exists($filename)) 
				{
				   $fp=fopen($filename,"a");
				  foreach ($string as $fields)
					{
						fputcsv($fp, $fields);
					}
					fclose($fp);
				}
				else
				{
				   $fp=fopen($filename,"a");
				   $string1=array(array("Full Name","Email ID","Contact No.","Good time to call","City","How many kids do you have?","Your kids age","Date"));
				   foreach ($string1 as $fields)
					{
						fputcsv($fp, $fields);
					}
					foreach ($string as $fields)
					{
						fputcsv($fp, $fields);
					}
					fclose($fp);
				}
				echo 'Thank you for Contacting us';
			}
			else{
				echo 'Please try again';
			}
		}
	}
	if(isset($_REQUEST['name2'])){
		extract($_REQUEST);
		if($name2!="" && $email1!="" && $cont1!="" && $city1!="" && $ykage!="" && $gttc!="" && $hmky!=""){
			$subject="LWDI Diabetes Offer";
			$headers  = "From: Facebook<noreplay@medulla.in>\r\n"; 
    		$headers .= "Content-type: text/html\r\n"; 
			$msg="Dear Sir,<br><br>";
			$msg.="User enter data is given below:<br><br>";
			$msg.="Name : $name2<br>";
			$msg.="Email Id : $email1<br>";
			$msg.="Contact Number : $cont1<br>";
			$msg.="Good time to call : $gttc<br>";
			$msg.="City : $city1<br>";
			$msg.="How many kids do you have? : $hmky<br>";
			$msg.="Your kids age : $ykage<br>";
			$msg.="<br><br>Thanks & Regards,<br>Stemade";
			if(mail("ask@stemade.com,karyn@medulla.in,stemade.tabs@gmail.com",$subject,$msg,$headers)){//arvind@sharptechcompany.com
				$curd=date("d-m-Y");
				$filename = "registerwithus.csv";
				$string=array(array("$name2","$email1","$cont1","$gttc","$city1","$hmky","$ykage","$curd"));
				if (file_exists($filename)) 
				{
				   $fp=fopen($filename,"a");
				  foreach ($string as $fields)
					{
						fputcsv($fp, $fields);
					}
					fclose($fp);
				}
				else
				{
				   $fp=fopen($filename,"a");
				   $string1=array(array("Full Name","Email ID","Contact No.","Good time to call","City","How many kids do you have?","Your kids age","Date"));
				   foreach ($string1 as $fields)
					{
						fputcsv($fp, $fields);
					}
					foreach ($string as $fields)
					{
						fputcsv($fp, $fields);
					}
					fclose($fp);
				}
				echo 'Thank you for Contacting us';
			}
			else{
				echo 'Please try again';
			}
		}
	}
?>