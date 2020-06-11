<?php
if(isset($_POST['Submit']))
{
	$enquiry=$_POST['enq'];
	$fname=$_POST['name'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$con=$_POST['phone'];
	$msg=$_POST['msg'];
	if($enquiry=="Careers")
	{
	$fnarea=$_POST['farea'];
	$preemp=$_POST['lemp'];
	$desg=$_POST['desg'];
	$compen=$_POST['comp1'];
	$eduqual=$_POST['edu'];
	
	$to="info@medulla.in";
	$subject="Contactus By Customers.";
	$header="From: medulla@medulla.in";
	$message="Dear Sir,\r\n\n";
	$message.="User Enter the given below details:-\r\n\n";
	$message.="Enquiry About : $enquiry.\r\n";
	$message.="First Name : $fname.\r\n";
	$message.="Last Name : $lname.\r\n";
	$message.="Email : $email.\r\n";
	$message.="Contact Number : $con.\r\n";
	$message.="Functional Area : $fnarea.\r\n";
	$message.="Present/Last Employer : $preemp.\r\n";
	$message.="Designation/Role : $desg.\r\n";
	$message.="Compensation (P.A) : $compen.\r\n";
	$message.="Educational Qualification : $eduqual.\r\n";
	$message.="Message : $msg.\r\n\n\n";
	$send=mail($to,$subject,$message,$header);
	
	$subject="Medulla Communications Pvt. Ltd.";
	$header="From: medulla@medulla.in";
	$message="Dear '$fname',\r\n\n";
	$message.="Thanking you for contacting us.\r\n";
	$message.="You Have Enter the below mention detials:-\r\n\n";
	$message.="Enquiry About : $enquiry.\r\n";
	$message.="First Name : $fname.\r\n";
	$message.="Last Name : $lname.\r\n";
	$message.="Email : $email.\r\n";
	$message.="Contact Number : $con.\r\n";
	$message.="Functional Area : $fnarea.\r\n";
	$message.="Present/Last Employer : $preemp.\r\n";
	$message.="Designation/Role : $desg.\r\n";
	$message.="Compensation (P.A) : $compen.\r\n";
	$message.="Educational Qualification : $eduqual.\r\n";
	$message.="Message : $msg.\r\n\n\n";
	$message.="--\r\n";
	$message.="Medulla Communications Pvt.Ltd.";
	$send1=mail($email,$subject,$message,$header);
	}
	else
	{
	$comp=$_POST['comp'];
	$cont=$_POST['country'];
	
	$to="info@medulla.in";
	$subject="Contactus By Customers.";
	$header="From: medulla@medulla.in";
	$message="Dear Sir,\r\n\n";
	$message.="User Enter the given below details:-\r\n\n";
	$message.="Enquiry About : $enquiry.\r\n";
	$message.="First Name : $fname.\r\n";
	$message.="Last Name : $lname.\r\n";
	$message.="Email : $email.\r\n";
	$message.="Contact Number : $con.\r\n";
	$message.="Company/Organisation : $comp.\r\n";
	$message.="Country : $cont.\r\n";
	$message.="Message : $msg.\r\n\n\n";
	$send=mail($to,$subject,$message,$header);
	
	$subject="Medulla Communications Pvt. Ltd.";
	$header="From: medulla@medulla.in";
	$message="Dear '$fname',\r\n\n";
	$message.="Thanking you for contacting us.\r\n";
	$message.="You Have Enter the below mention detials:-\r\n\n";
	$message.="Enquiry About : $enquiry.\r\n";
	$message.="First Name : $fname.\r\n";
	$message.="Last Name : $lname.\r\n";
	$message.="Email : $email.\r\n";
	$message.="Contact Number : $con.\r\n";
	$message.="Company/Organisation : $comp.\r\n";
	$message.="Country : $cont.\r\n";
	$message.="Message : $msg.\r\n\n\n";
	$message.="--\r\n";
	$message.="Medulla Communications Pvt.Ltd.";
	$send1=mail($email,$subject,$message,$header);
	}
	if($send)
	{
		echo '<script type="text/javascript">alert("Thank you for Contacting us.");</script>';
		echo "<script>window.location='index.php';</script>";
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>medulla</title>
<script type="text/javascript" src="jquery.min.js"></script>
<script>
function hied()
{
	$('#abcdef').hide();
}
function changeOpt()
	{	
	if(document.getElementById('enq').value=="Careers")
	{
	$('#hijkl').hide();
	$('#abcdef').show();
	}
	else
	{
		$('#abcdef').hide();
	$('#hijkl').show();
	}
	}
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){	

		if (!$.browser.opera) {
    
			// select element styling
			$('select.select').each(function(){
				var title = $(this).attr('title');
				if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
				$(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.after('<span class="select">' + title + '</span>')
					.change(function(){
						val = $('option:selected',this).text();
						$(this).next().text(val);
						})
			});

		};
		
	});
	
function checkEmail()
 {
	var i,j,k,t;
	t=document.getElementById('email').value;
	i=t.indexOf("@");
	j=t.indexOf(".");
	k=t.indexOf(" ");
	
	if(k==0||k>0)
	{
		window.alert("Email id should not contain spaces");
		document.getElementById('email').value="";
		document.getElementById('email').focus();
		return false;
	}
	
	if(i<0||j<0||i<3||i==0||j==0||j==i+1)
	{
		window.alert("Please enter valid e-mail address");
		document.getElementById('email').value="";;
		document.getElementById('email').focus();
		return false;
	}
	
	if(i!=t.lastIndexOf("@") || j+1==t.lastIndexOf(".") || i==t.length-1 || j==t.length-1)
	{
		window.alert("Please enter valid e-mail address");
		document.getElementById('email').value="";;
		document.getElementById('email').focus();
		return false;
	}

	return true;
}

//Phone number validation.
function formatphonenumber(phone)
            {
                
                var p = phone;
                var pp = '';
                phone = phone.value;
                
                if(phone.length > 0)
                {
                   if(phone.length <=3)
                    {   
                        pp='';
                        for(c=0;c<phone.length;c++)
                        {
                            if(isNaN(phone.charAt(c))  || phone.charAt(c) ==' ')
                               continue; 
                            else
                                pp = pp + phone.charAt(c);   
                        }
                        
                        p.value = pp;
                    }
                    else if(phone.length > 3 )
                    {
                        var pAry = phone.split('');
                        phone ='';
                        
                        for(r=0;r<pAry.length; r++)
                            if(pAry[r])
                                phone += pAry[r];
                        
                        pp='';
                        for(c=0;c<phone.length;c++)
                        {
                            if(isNaN(phone.charAt(c)) || phone.charAt(c) ==' ')   
                               continue; 
                            else
                                pp = pp + phone.charAt(c);
                        }
                        
                        if(pp.length > 11)
                            pp = pp.substring(0,3) + '' + pp.substring(3,6) + '' + pp.substring(6,11);
                        else if(pp.length > 6)
                            pp = pp.substring(0,3) + '' + pp.substring(3,6) + '' + pp.substring(6);
                        else
                            pp = pp.substring(0,3) + '' + pp.substring(3,6) ;
                        p.value = pp;
                    }
                }
                if(p.value == '') p.value = '';
            }

function phonel()
{
	var mlength;
	mlength=document.getElementById('phone').value;
	if(mlength.length <11 && mlength.length < 10)
	{
		alert("Phone number should be 11 digits");
		document.getElementById('phone').value="";
		document.getElementById("phone").focus();
		return false;
	}
	return true;
}
	
	function checkempty()
	{
		//alert("testing.");
		if(document.getElementById('enq').value=="1")
		{
			alert("Please select the enquiry option");
			document.getElementById('enq').focus();
			return false;
		}
		if(document.getElementById('name').value=="")
		{
			alert("Please enter the first name");
			document.getElementById('name').focus();
			return false;
		}
		if(document.getElementById('lname').vlaue=="")
		{
			alert("Please Enter the last name");
			document.getElementById('lname').focus();
			return false;
		}
		if(document.getElementById('email').value=="")
		{
			alert("Please enter the email id");
			document.getElementById('email').focus();
			return false;
		}
		if(document.getElementById('phone').value=="")
		{
			alert("Please enter the contact number");
			document.getElementById('phone').focus();
			return false;
		}
		if(document.getElementById('enq').value=="Careers")
		{
			if(document.getElementById('farea').value=="")
			{
				alert("Please enter the functional area");
				document.getElementById('farea').focus();
				return false;
			}
			if(document.getElementById('lemp').value=="")
			{
				alert("Please enter the present/last employer");
				document.getElementById('lemp').focus();
				return false;
			}
			if(document.getElementById('desg').value=="")
			{
				alert("Please enter the designation");
				document.getElementById('desg').focus();
				return false;
			}
			if(document.getElementById('comp1').value=="")
			{
				alert("Please enter the ompensation");
				document.getElementById('comp1').focus();
				return false;
			}
			if(document.getElementById('edu').value=="")
			{
				alert("Please enter the educational qualification");
				document.getElementById('edu').focus();
				return false;
			}
		}
		else
		{
		if(document.getElementById('comp').value=="")
		{
			alert("Please enter the company name");
			document.getElementById('comp').focus();
			return false;
		}
		}
		if(document.getElementById('msg').value=="")
		{
			alert("Please enter the message");
			document.getElementById('msg').focus();
			return false;
		}
		return true;
	}
</script>

<link href="css/medulla-admin.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript" src="curve-corners/curvycorners.src.js"></script>
<link href="css/body.css" rel="stylesheet" type="text/css" />
<link href="css/site_styles.css" rel="stylesheet" type="text/css" />
<link href="css/droplist_styles.css" rel="stylesheet" type="text/css">
</head>

<body onload="javascript:hied()">

<div id="mainwrapper">

<!--containar start here-->

<div id="container">

<!--header start here-->
<div id="header"><?php include('header7.php')?></div>
<!--header end here-->



<!--banner start here-->
<div class="contact_banner2" id="banner2"><span class="contact_banner">Medulla Communications Pvt. Ltd.</span><br />
  Address - Unit No. 602, Opulence Bldg, 6th Road, TPS III, Santacruz(E), Mumbai - 400055.<br />
  Email Address - info<span style="font-family:Arial, Helvetica, sans-serif; font-weight: normal;">@</span>medulla.in<br />
  Telephone - 022-67589450
  <br />
  <div class="contact_banner_italic">Fill in your contact details in the form below, and we will respond accordingly.</div></div>
<!--banner end here-->


<!--body content start here-->
<div id="bodycontainer">
  <div class="bkrleft"><img src="images/body_left_line.png" alt="left" width="5" height="700" /></div>
  <div class="bkrright"><img src="images/body_right_line.png" alt="right" width="5" height="700" /></div>
  <div class="bkr_arrow"></div>
<div>
<div class="body_content_wrap"><form name="contact" action="contactus.php" method="post">


<div class="selection_drop">
<div class="flield_text">Enquiry About</div>
<div class="flield_box_bkr2">
  <label>
  <select name="enq" id="enq" class="select" onchange="changeOpt();" >
    <option value="Our Services" selected="selected">Our Services</option>
    <option value="Careers" >Careers</option>
    <option value="General" >General</option>
  </select>
  </label>
</div>
</div>

<div class="selection_drop" id="fields">
<div class="flield_text">First Name</div>
<div class="flield_box_bkr">
  <label>
  <input name="name" type="text" class="flield_box" id="name" />
  </label>
</div>
<div class="flield_text">Last Name</div>
<div class="flield_box_bkr">
  <label>
  <input name="lname" id="lname" type="text" class="flield_box"  />
  </label>
</div>
<div class="flield_text">Email</div>
<div class="flield_box_bkr">
  <label>
  <input name="email" type="text" class="flield_box" id="email" onchange="return checkEmail();" />
  </label>
</div>
<div class="flield_text">Contact Number</div>
<div class="flield_box_bkr">
  <label>
  <input name="phone" type="text" class="flield_box" id="phone" onkeyup="formatphonenumber(this)" onchange="return phonel();" />
  </label>
</div>
<div id="hijkl">
<div class="flield_text">Company / Organisation</div>
<div class="flield_box_bkr">
  <label>
  <input name="comp" type="text" class="flield_box" id="comp" />
  </label>
</div>
<div class="flield_text">Country</div>
<div class="flield_box_bkr2">
  <label>
  <select name="country" class="select" id="country">
<option value="AF">Afghanistan</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos [Keeling] Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo - Brazzaville</option>
<option value="CD">Congo - Kinshasa</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="CI">Côte d’Ivoire</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong SAR China</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN" selected="selected">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau SAR China</option>
<option value="MK">Macedonia</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar [Burma]</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="KP">North Korea</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territories</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn Islands</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="RW">Rwanda</option>
<option value="RE">Réunion</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="KR">South Korea</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="ST">São Tomé and Príncipe</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UM">U.S. Minor Outlying Islands</option>
<option value="VI">U.S. Virgin Islands</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VA">Vatican City</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
<option value="AX">Åland Islands</option></select>
  </select>
  </label>
</div>
</div>
<div id="abcdef">
<div class="flield_text">Functional Area</div>
<div class="flield_box_bkr">
  <label>
  <input name="farea" type="text" class="flield_box" id="farea" />
  </label>
</div>
<div class="flield_text">Present/ Last Employer</div>
<div class="flield_box_bkr">
  <label>
  <input name="lemp" type="text" class="flield_box" id="lemp" />
  </label>
</div>
<div class="flield_text">Designation/ Role</div>
<div class="flield_box_bkr">
  <label>
  <input name="desg" type="text" class="flield_box" id="desg" />
  </label>
</div>
<div class="flield_text">Compensation (p.a.)</div>
<div class="flield_box_bkr">
  <label>
  <input name="comp1" type="text" class="flield_box" id="comp1" />
  </label>
</div>
<div class="flield_text">Educational Qualification</div>
<div class="flield_box_bkr">
  <label>
  <input name="edu" type="text" class="flield_box" id="edu" />
  </label>
</div>
</div>
<div class="flield_text">Message</div>
<div class="flield_box2_bkr">
  <label>
  <textarea name="msg" class="flield_box2" id="msg"></textarea>
  </label>
</div>
</div>


<!----------careers div start here----------->
<!----------careers div start here----------->



<!----------careers div end here----------->
<!----------careers div end here----------->



<div class="flield_submit">
  <label>
  <input name="Submit" type="submit" class="flield_submit_btn" value="" onclick="return checkempty();"/>
  </label>
</div>
</form>
 <div class="clear"></div> </div>
 <div class="flield_btm_text">By clicking Submit I have agreed to all the terms and conditions of this site.</div>
  
<div class="reachout_contactus">
<div class="reachout_content_wrap">
  <div class="contact_footertext"><a href="sitemap.php">Site Map</a> | <a href="privacy-policy.php">Privacy Policy</a> | Copyright &copy; 2012 Medulla Communications Pvt. Ltd.</div>
</div>


</div></div>

<div class="clear"></div>  


</div>



<!--body content end here-->







<!--footer start here-->
<div id="footer"><?php include('footer2.html')?></div>
<!--footer end here-->
</div>
</div>
<div class="clear"></div>

<!--GOOGLE ANALYTICS--->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-64758208-1', 'auto');
ga('send', 'pageview');
 
</script>
<!--GOOGLE ANALYTICS--->

</body>
</html>
