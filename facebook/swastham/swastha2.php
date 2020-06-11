<?php
mysql_connect("localhost","medulla_fb","Medulla@fb");
mysql_select_db("medulla_fb");
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$mob=$_POST['mobile'];
	$city=$_POST['city'];
	$typed=$_POST['typed'];
	$num=$_POST['num'];
	$lwd=$_POST['lwd'];
	$sel_em=mysql_query("select email from swastham where email like '$email'");
	if(mysql_num_rows($sel_em)<1)
	{
		mysql_query("insert into swastham(name,age,email,typed,num,lwd,mobile,city) values('$name','$age','$email','$typed','$num','$lwd','$mob','$city')");
		$sel_t=mysql_query("select sr from swastham");
		if(mysql_num_rows($sel_t)<=50)
		{
			echo '<script>window.location="swastha3.html";</script>';
		}
		else
		{
			echo '<script>window.location="swastha4.html";</script>';
		}
	}
	else
	{
		echo '<script>alert("You have already register.");window.location="swastha2.php"</script>';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Swastham</title>
<script type="text/javascript">
function empty()
{
	if(document.getElementById('name').value=="")
	{
		alert("Please Enter Your Name.");
		document.getElementById('name').focus();
		return false;
	}
	if(document.getElementById('age').value=="")
	{
		alert("Please Enter Your Age.");
		document.getElementById('age').focus();
		return false;
	}
	if(document.getElementById('email').value=="")
	{
		alert("Please Enter Your Email Id.");
		document.getElementById('email').focus();
		return false;
	}
	if(document.getElementById('mobile').value=="")
	{
		alert("Please Enter Your Mobile Number.");
		document.getElementById('mobile').focus();
		return false;
	}
	if(document.getElementById('city').value=="")
	{
		alert("Please Enter Your City.");
		document.getElementById('city').focus();
		return false;
	}
	if(document.getElementById('typed').value=="")
	{
		alert("Please Enter Your Type of Diabetes.");
		document.getElementById('typed').focus();
		return false;
	}
	if(document.getElementById('num').value=="")
	{
		alert("Please Enter Your Numbere of Years Since Diagnosis of Diabetes.");
		document.getElementById('num').focus();
		return false;
	}
	if(document.getElementById('lwd').value=="")
	{
		alert("Please Write About Living With Diabetes in India.");
		document.getElementById('lwd').focus();
		return false;
	}
	return true;
}
var wordLen = 30; // Maximum word length
	function checkWordLen(obj){
	var len = obj.value.split(/[\s]+/);
	if(len.length > wordLen){
		alert("You've exceeded the "+wordLen+" word limit for the article!");
		obj.oldValue = obj.value!=obj.oldValue?obj.value:obj.oldValue;
		obj.value = obj.oldValue?obj.oldValue:"";
		return false;
	}
	return true;
	}
	function limitWords(id) {
    var maxWords=30;
    var d=document.getElementById(id);
    if ( d.value.split(' ').length > maxWords ) {
        t=d.value.substring(0,d.value.lastIndexOf(' '));
        d.value=t.substring(0,t.lastIndexOf(' ')+1);
    }
}
</script>
<style type="text/css">.update{ background:url(http://medulla.in/facebook/swastham/images/submit.png) no-repeat left top; margin: 0; width: 86px; height: 31px; border: none;}</style>
</head>

<body>

<div style="width:810px; height:1555px; width:810px; background-image:url(http://medulla.in/facebook/swastham/images/s2.png); margin: 0 auto;">

<div style="background-image:url(http://medulla.in/facebook/swastham/images/s2text.png); position:absolute; top:925px; left:334px; width:247px; height:445px"> </div>

<div style="position:absolute; top:924px; left:606px; width:350px ">
<form action="" method="post"  name="swas" id="swas">
 <input type="text" name="name" id="name" size="65" />
<br><br />
<input type="text" name="age" id="age" size="65" />
<br><br />
<input type="text" name="email" id="email" size="65" />
<br><br />
<input type="text" name="mobile" id="mobile" size="65" />
<br><br />
<input type="text" name="city" id="city" size="65" />
<br><br />
    <textarea rows="1" cols="48" name="typed" id="typed"></textarea>

<br><br /><br />
<input type="text" name="num" id="num" size="65" />
<br><br /><br />
  <textarea rows="6" cols="48" name="lwd" id="lwd" onkeyup="limitWords(this.id);"></textarea>
 

<input type="submit" name="subt" id="subt" class="update" value="" onclick="return empty();" style="position:absolute; top:491px; left:65px" />

</form>
</div><a href="swastha3.html"></a> </div>

</body>
</html>
