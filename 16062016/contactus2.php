<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>medulla</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){	

		if (!$.browser.opera) {
    
			// select element styling
			$('flield_box_bkr2').each(function(){
				var title = $(this).attr('title');
				if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
				$(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.after('<span class="flield_box_bkr2">' + title + '</span>')
					.change(function(){
						val = $('option:selected',this).text();
						$(this).next().text(val);
						})
			});

		};
		
	});
</script>

<link href="css/medulla-admin.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript" src="curve-corners/curvycorners.src.js"></script>
<link href="css/body.css" rel="stylesheet" type="text/css" />
<link href="css/site_styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="mainwrapper">

<!--containar start here-->

<div id="container">

<!--header start here-->
<div id="header"><?php include('header7.php')?></div>
<!--header end here-->



<!--banner start here-->
<div class="contact_banner2" id="banner2"><span class="contact_banner">Medulla Communications Pvt. Ltd.</span><br />
  Address - Unit No. 602, Opulence Bldg, 6th Road, TPS III, Santacruz(E), Mumbai - 400055.<br />
  Email Address - info@medulla.in<br />
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
<div class="body_content_wrap"><form action="" method="get">
<div class="selection_drop">
<div class="flield_text">Enquiry About</div>
<div class="flield_box_bkr2">
  <label>
  <select name="select" class="flield_list_menu">
    <option>Our Services</option>
    <option>Careers</option>
    <option>General</option>
    <option selected="selected">Select Your Topic</option>
  </select>
  </label>
</div>
</div>

<div class="selection_drop" id="fields2">
<div class="flield_text">First Name</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield2" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Last Name</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield3" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Email</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield4" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Contact Number</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield5" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Functional Area</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield5" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Present/ Last Employer</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield5" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Designation/ Role</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield5" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Compensation (p.a.)</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield5" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Educational Qualification</div>
<div class="flield_box_bkr">
  <label>
  <input name="textfield5" type="text" class="flield_box" />
  </label>
</div>
<div class="flield_text">Message</div>
<div class="flield_box2_bkr">
  <label>
  <textarea name="textfield5" class="flield_box2"></textarea>
  </label>
</div></div>
<div class="flield_submit">
  <label>
  <input name="Submit" type="submit" class="flield_submit_btn" value="" />
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
