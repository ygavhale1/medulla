<?php
	if(isset($_POST['name'])){
		extract($_POST);
		if($name!="" && $email!="" && $cont!="" && $city!="" && $query!=""){
			$subject="Contact by User From Facebook.";
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
			if(mail("ask@stemade.com",$subject,$msg,$headers)){
				echo '<script>alert("Thank you for Contacting us.");</script>';
			}
			else{
				echo '<script>alert("Please try again.");</script>';
			}
		}
	}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
/*Accordian Starts Here*/
.mainContnet{ font-family:Arial, Helvetica, sans-serif; margin-top:0px;}
h2 { padding:0 0 0 27px; height:40px; background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/butions_left_icon.png) left top 15px no-repeat; width: auto; float: left; clear: both; font-size: 12.24pt; }
.h2_div{ margin:0 0 0 25px; line-height:43px; cursor: pointer; font-weight: bold; color:#00529b; background: url(icon_plus.png) no-repeat right 7px; border:1px solid #a7a6a6; border-radius:30px; 
    ///*gradient*/
//    background: #fcfcfc; /* Old browsers */
//background: -moz-linear-gradient(top,  #fcfcfc 1%, #ebebec 50%, #d1d3d4 100%); /* FF3.6+ */
//background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#fcfcfc), color-stop(50%,#ebebec), color-stop(100%,#d1d3d4)); /* Chrome,Safari4+ */
//background: -webkit-linear-gradient(top,  #fcfcfc 1%,#ebebec 50%,#d1d3d4 100%); /* Chrome10+,Safari5.1+ */
//background: -o-linear-gradient(top,  #fcfcfc 1%,#ebebec 50%,#d1d3d4 100%); /* Opera 11.10+ */
//background: -ms-linear-gradient(top,  #fcfcfc 1%,#ebebec 50%,#d1d3d4 100%); /* IE10+ */
//background: linear-gradient(to bottom,  #fcfcfc 1%,#ebebec 50%,#d1d3d4 100%); /* W3C */
//filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfcfc', endColorstr='#d1d3d4',GradientType=0 ); /* IE6-9 */
background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/butions_bg.png) left top repeat-x; padding: 0; font-family:'gothambold'; }
.h2_span{ color:#72be44; float: left; padding: 0 8px 0 10px; font-size: 12.24pt; }
.h2_text{ float: left; }
.gap_bot{ height: 100px; }
h3 { background:#72bf44 url(http://scsp.in/stemade_fb/stemade_fb_AR/arrow_down.png) no-repeat right center; border-bottom: 20px solid #ffffff; border-top: 1px solid #DAF5FF; cursor: pointer; font-family:'gothammedium'; font-size:12.16pt; font-weight: normal; line-height: 28px; margin: 0; padding:20px; color:#FFFFFF; height:41px; line-height:41px; position:relative; }
h3.longLink{line-height:22px;}
.minus{ background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/butions_left_icon.png) left top 15px no-repeat;}
.minus1{background:#72be44 url(http://scsp.in/stemade_fb/stemade_fb_AR/arrow_up.png) no-repeat right center;}
.hide { display:none;}
div.levelOne { margin: 0; padding: 0; width:100%; float: left; }
.levelOne ul, .levelOne ul li{	padding:0;	margin:0;}
.levelOne ul{height:auto;padding:0;	overflow:hidden;  width:100%;}
.levelOne ul li:last-child h3{ border-bottom:0px; margin-bottom:20px;}
.detail { color: #FFFFFF; font-size: 12.24pt; line-height:18px; margin: -20px 0 0px 0;height:auto; overflow:auto; display:inline-block; background-color:#00529b; padding: 10px 20px; border-radius: 0 0 020px 0; font-family:'gothambook'; width: 703px; border-bottom:11px solid #FFFFFF; position:relative; }
.secondLink .detail {	height:160px;}
.thirdLink .detail {height:140px;}
.fouthdLink .detail {height:175px;}
.fifthLink .detail {height:115px;}
.detail p{	padding:0px 0 7px 0;}
.detail ul {height:auto;	padding:0;	margin:0 0 10px 0;}
.detail ul li{	background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/bullet.jpg) no-repeat left 6px;	padding: 0 0 0 13px;	margin-left:10px;}
.detail ol{	list-style:decimal;	margin-left:30px;}
.detail strong{font-weight:bold;}
.detail a{ color:#FFFFFF; text-decoration:underline; }
.detail a:hover{color:#0293cd; text-decoration:none; } 
/*Ends here*/
.content{ width:550px; height:170px; margin:0; color:#000;}
.content p em{	font-style:italic;	}
.content ul, .content ol {font-size:1.4em;	line-height:1.2em;	color:#494949;	margin:0 20px 0 20px;	}
ul.alpha{	list-style:lower-alpha;	margin:0 20px 0 24px;}
.content ul li, .content ol li{	padding:0 0 5px 0;}
.content ol li{	list-style:decimal;		margin:0 0 0 24px;}
.content p span {	width:65px;	display:inline-block;	font-weight:bold;	}
.content p span.indent{	display:inherit;	font-weight:normal;	width:auto;	padding-left:70px;}
.smallFonts{	font-size:11px;	color:#0293cd;	}
.clear {clear:both;}
/*Footer*/
.footer {	width:780px;	padding:5px 0;	border:solid 1px #cccccc;	background:#f1f1f1;	margin-top:10px;}
.footer p {	padding:3px 10px;	color:#000;	font-size:1.2em;	line-height:1.2em;	font-family:Arial, Helvetica, sans-serif;}
.footer p strong{font-weight:bold;}
/*Popup Window*/
.popupDiv {	background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/bg_overlay.png) no-repeat 0 0;	height:149px ;	width:511px;}
.popupDiv p{	font-size:1.4em;	color:#fff;	padding:30px 10px 10px;	text-align:center;	line-height:1.4em;	font-family:Arial, Helvetica, sans-serif;}
.popupDiv .btnLinks{	text-align:center;}
.popupDiv .btnLinks a{	margin-right:14px;	}
.h2_pad{ padding: 0 0 40px 0; margin: 0 0 0 390px; }
.h2_down_ar{ background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/down_arrow.png) left top no-repeat; width: 31px; height: 31px; float: right; position: relative; left: 14px; top: 6px; }
.h3_pad_lef{ padding: 0 35px 0 10px;}
html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, def, em, img, ins, kbd, q, samp, small, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, th, td, figure, input, select { margin:0; padding:0; }
/*--------[ Body ]--------*/
body { background:/*url(../images/bg3.jpg)*/ #ffffff left top repeat; color: #333333; font-family:Verdana, Arial, Calibri; font-weight:normal; font-size:15px; line-height: 22px; }
img{ border:0px;}
.cb{ clear:both;}
/*--------[ Font Face ]--------*/
@font-face {
    font-family: 'gothambook';
    src: url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambook.eot');
    src: url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambook.eot?#iefix') format('embedded-opentype'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambook.woff') format('woff'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambook.ttf') format('truetype'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambook.svg#webfont1BSMunJa') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'gothambold';
    src: url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambold.eot');
    src: url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambold.eot?#iefix') format('embedded-opentype'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambold.woff') format('woff'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambold.ttf') format('truetype'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothambold.svg#webfont1BSMunJa') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'gothammedium';
    src: url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothammedium.eot');
    src: url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothammedium.eot?#iefix') format('embedded-opentype'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothammedium.woff') format('woff'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothammedium.ttf') format('truetype'),
         url('http://scsp.in/stemade_fb/stemade_fb_AR/css/fonts/gothammedium.svg#webfont1BSMunJa') format('svg');
    font-weight: normal;
    font-style: normal;
}
.main_wap{ width:760px; margin:0 auto; background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/footer.png) center bottom no-repeat;}
.head{ height:169px; }
.head .img{ float:left;}
.head .logo{ margin:35px 35px 0 0; float: right; }
.top_hea{ background-color:#72be44; line-height: 59px; font-family: 'gothambold'; font-size: 13.68pt; color: #FFFFFF; text-align: center; }
.container{ padding:25px 0px 00px 0px; background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/faqs_bg.png) left top no-repeat; }
.container_r1{ background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/line.png) left 390px top repeat-y; }
<!--.faq_img{ padding:0px; float: left; height:1px; width:auto;}-->
.faq_img{ margin: -130px 0 0 7px; text-align: right; }
/*.container .l{ float:left; background:url(images/faqs_logo.png) left center no-repeat; height:100%; position: absolute; width: 200px; }
.container .r{ float:right; }*/
.container_r2{ padding:0px; color: #00529b; font-family:'gothambold'; font-size: 10.9pt; text-align: center; margin-top: -60px; z-index: 1000; position: relative; }
.container_r2 span{ color:#00529b;}
.inp{ border:1px solid #8c8d8d; background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/input_bg.png) left top repeat; border-radius:5px; height: 20px; line-height: 20px; width: 542px; margin: 6px 0; padding: 0 5px; }
.but{ background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/submit.png) left top no-repeat; width:63px; height:23px; border: 0px; cursor: pointer; margin: 5px 0 0 0; }
.but:hover{ opacity:0.8;}
.but1 {background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/submit.png) left top no-repeat; width:63px; height:23px; border: 0px; cursor: pointer; margin: 5px 0 0 0; }
.container1 {padding:25px 0px 00px 0px; background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/faqs_bg.png) left top no-repeat; }
.container_r11 {background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/line.png) left 390px top repeat-y; }
.faq_img1 {padding:0px; float: left; height:1px; width:auto;}
.faq_img1 {margin: -130px 0 0 7px; text-align: right; z-index: -10; }
.inp1 {border:1px solid #8c8d8d; background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/input_bg.png) left top repeat; border-radius:5px; height: 20px; line-height: 20px; width: 542px; margin: 6px 0; padding: 0 5px; }<br />

#ul2 { margin-top:5px;padding:0 0 0 10px;}
#ul2 li {list-style:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/arrow.png) outside; padding:0px; margin-left: 20px; }
#ul3 { padding:0px; padding:0 0 0 15px;}
#ul3 li { list-style:decimal; padding:0px; }
.h_height{ line-height:23px; height:50px; }
</style>
<script type="text/javascript" src="http://scsp.in/stemade_fb/stemade_fb_AR/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://scsp.in/stemade_fb/stemade_fb_AR/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">	
  $(document).ready(function(){
	$('div.levelOne').addClass('hide');
	//$('div.levelOne').eq(0).slideToggle(200);
	//$('h2').eq(0).addClass('minus');
	$('.detail').hide();
	
	$('div.mainContnet').on('click', 'h2', function() {
		$(this).next().slideToggle(300).siblings('div.levelOne').slideUp(300);
		$(this).siblings('h2').removeClass('minus');
		$('.detail').hide();
		$('.minus1').removeClass();

		if($(this).hasClass("minus")){
			$(this).removeClass("minus");
		}
		else{
			$(this).addClass("minus");
		}
		
		//$('h3').removeClass('minus1');
		
	});
	
	$('div.mainContnet').on('click', 'h3', function() {
		
		$(this).next().slideToggle(300).parent().siblings('li').children('div.detail').slideUp(300);
		$(this).parent().siblings('li').children('h3').removeClass('minus1');
			
		if($(this).hasClass("minus1")){
			$(this).removeClass("minus1");
		}
		else{
			$(this).addClass("minus1");
		}

	});
});
</script>
<div class="main_wap">
  <div class="head"><img src="http://scsp.in/stemade_fb/stemade_fb_AR/images/faqs-img.png" width="311" height="169" class="img" /><img src="http://scsp.in/stemade_fb/stemade_fb_AR/images/logo-2.png" width="174" height="91" class="logo" />
  <div class="cb"></div></div>
  <div class="top_hea">Here are the most frequently asked questions on stem cell preservation: </div>
  <div class="container1">
    <div class="container_r1">
      <div style="background-color:#FFFFFF; width:2px; margin: 0 0 0 390px; height: 20px; top: 0px; position: relative; z-index: 1000;">
        <div style="background-color:#FFFFFF; width:2px; height: 20px; top: 18px; position: relative; z-index: 1000;">&nbsp;</div>
      </div>
      <div class="mainContnet">
      
        <h2 onClick="googleMark('Diabetes Basics','Click');" class="h2_pad">
          <div class="h2_div">
            <div class="h2_down_ar">&nbsp;</div>
            <span class="h2_span">?</span> Stem Cell Basics</div>
        </h2>
        <div class="levelOne firstOpen hide">
          <ul>
            <li>
              <h3 class="h3_pad_lef">01.	What are stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>Stem cells are �master cells� that have the potential to become any type of cell in the body. One of the main characteristics of stem cells is their ability to self-renew or multiply while maintaining the potential to develop into other types of cells. Stem cells can become cells of the blood, heart, bone, skin, muscle, brain, etc.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">02.	What are the sources of stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>Researchers have discovered various sources of stem cells:</p>
                <p><strong>Embryonic Stem Cells:</strong><br />
                Human embryonic stem cells are obtained from embryos that are 5�6 days old. They have the ability to form all the different types of cell in the body, including germ cells.</p>
                <strong>Adult Stem Cells:</strong><br />
                Adult stem cells are undifferentiated cells, found throughout the body after development, that multiply by cell division to replenish dying cells and regenerate damaged tissues. Despite the name, they are found in children as well as in adults.
These stem cells are found in most adult tissues like:
<ul id="ul2">
<li>Teeth</li>
<li>Umbilical cord blood</li>
<li>Bone marrow</li>
<li>Menstrual blood</li>
<li>Skin</li>
<li>Placental tissue</li>
</ul>
<p><strong>Induced Pluripotent Stem Cells:</strong><br />

Induced pluripotent stem cells are regular adult cells that are not stem cells but are genetically reprogrammed to act like an embryonic stem cell.
</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">03.	What is the use of stem cell and how does it work?</h3>
              <div class="detail" style="display: none;">
                <p>Given their unique regenerative abilities, stem cells offer new potential for treating diseases such as diabetes, heart disease, etc. Stem cell therapy is a part of regenerative medicine that refers to a group of biomedical approaches to clinical therapies that may involve the use of stem cells. It is now known that adult stem cells taken from one area of the body can be transplanted into another area and grown into a completely different type of tissue.</p>
<p>For example, a patient�s own skin cells may be collected, reprogrammed in a laboratory to give them certain characteristics, and delivered back to the patient to treat his or her disease. This ability to grow and regenerate tissues is the focus of the emerging field of personalised medicine which uses a patient�s own stem cells for biologically compatible therapies and individually tailored treatments.
</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">04.	Are stem cells being used today to treat any systemic diseases?</h3>
              <div class="detail" style="display: none;">
                <p>Yes. The most common stem cell therapy is bone marrow transplant. Stem cells have been used for decades to treat patients who are suffering from blood related disorders like leukaemia, anaemia, etc. or immune deficiency.</p>
                <p>Clinical research has shown that stem cells have a high potential to treat over 75 life threatening diseases and many more critical ailments in future through stem cell therapy For example, the use of stem cells to repair damaged heart muscle, to generate cells that produce insulin to treat diabetes and to repair damaged spinal nerves, etc.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">05.	What is stem cell banking?</h3>
              <div class="detail" style="display: none;">
                <p>Stem cell banking is a process of preserving stem cells at several degrees below freezing point and the process is known as cryopreservation. Using this method stem cells can be banked and are accessible for use during one�s entire life span.</p>
              </div>
              <h3 class="h3_pad_lef">06.	What cell types can mesenchymal cells become or differentiate?</h3>
              <div class="detail" style="display: none;">                Mesenchymal stem cells from dental pulp have the future potential to differentiate into a variety of other cell types including:
                <ul id="ul2">
  <li>Myocardiocytes&nbsp;to  repair damaged cardiac tissue following a heart attack&nbsp;</li>
  <li>Neuronal cells&nbsp;to generate nerve and brain tissue</li>
  <li>Myocytes&nbsp;to repair  muscle&nbsp;</li>
  <li>Osteocytes&nbsp;to generate  bone&nbsp; </li>
  <li>Chondrocytes&nbsp;to generate  cartilage</li>
  <li>Adipocytes&nbsp;to generate  fat&nbsp;</li>
  <li>Pancreatic cells for treatment of diabetes</li>
  <li>Bone and tissue from the oral cavity</li></ul>
              </div>            </li>
          </ul>
        </div>
        <!-- [ 02 ]-->
        <h2 onClick="googleMark('Diabetes Basics','Click');" class="h2_pad">
          <div class="h2_div">
            <div class="h2_down_ar">&nbsp;</div>
            <span class="h2_span">?</span> Dental Pulp Stem Cells </div>
        </h2>
        <div class="levelOne firstOpen hide">
          <ul>
            <li>
              <h3 class="h3_pad_lef">07. What are dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>Dental pulp is the soft living tissue inside a tooth. Stem cells are found inside the dental pulp. They are adult stem cells found in both, baby teeth (milk teeth of children in the age group of 5�12 years) and permanent teeth of young adults. This particular type of stem cell has the future potential to differentiate into bone tissue, dental tissue, cartilage, muscle and neural tissue. They are being studied for applications in regenerative medicine and dentistry.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">08. What makes dental pulp stem cells so unique?</h3>
              <div class="detail" style="display: none;">                Dental pulp stem cells differ from other stem cells in many ways and score high in terms of therapeutic advantages like:
                <ul id="ul2">
  <li>Dental pulp stem cells can differentiate into nerve cells, muscle  cells, insulin producing cells, etc. owing to their multipotency</li>
  <li>Dental pulp stem cells have demonstrated interactivity with biomaterials,  making them ideal for tissue reconstruction</li>
  <li>Dental pulp stem cells are expandable and they can be multiplied under  controlled conditions</li>
  <li>Dental pulp stem cells are plentiful and easy to collect. Unlike harvesting  bone marrow stem cells which require invasive surgery and cord blood stem cells  which are available only at birth; dental pulp stem cells can be collected from  baby and wisdom teeth which would otherwise be discarded</li>
  <li>Dental  pulp stem cells are non-controversial adult stem cells, unlike embryonic stem  cells, the source of which involves ethical issues</li>
</ul>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">09. What are the potential applications of dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">                Dental pulp stem cells are of mesenchymal type, also research on mesenchymal stem cells (MSCs) are in advanced stage of clinical trials.
                <ul id="ul2">
  <li>One of the successful applications of dental pulp stem cells has been  the formation of the human mandibular bone</li>
  <li>Many completed clinical trials have demonstrated the efficacy of MSCs  for diseases including acute myocardial ischaemia (AMI), stroke, liver  cirrhosis and graft versus host disease (GVHD)</li>
  <li>More recently, research showed that dental pulp stem cells were able  to create similar cells as seen in the pancreas, which were able to produce  insulin and suggested that cells could potentially treat Type I diabetes</li>
  <li>Mesenchymal stem cells can be used for regeneration of the whole tooth</li>
  <li>Other potential applications include generation of cartilaginous  tissue, assistance in plastic surgeries, etc.</li>
</ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- [03]-->
        <h2 onClick="googleMark('Diabetes Basics','Click');" class="h2_pad">
          <div class="h2_div">
            <div class="h2_down_ar">&nbsp;</div>
            <span class="h2_span">?</span> Dental Pulp Stem Cell Banking </div>
        </h2>
        <div class="levelOne firstOpen hide">
          <ul>
            <li>
              <h3 class="h3_pad_lef">10. What is dental pulp stem cell banking?</h3>
              <div class="detail" style="display: none;">
                <p>Dental pulp stem cell banking means storing stem cells obtained from the teeth of an individual for future use. In future, the preserved stem cells can be used if an individual needs stem cell treatment. This eliminates the need to find a suitable donor and associated complications.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">11. What are the benefits of dental pulp stem cell banking?</h3>
              <div class="detail" style="display: none;">                Dental pulp stem cells score high not only in terms of therapeutic advantages but also in terms of practical aspects of banking. Dental pulp stem cell banking has the following advantages, which are one of its kind:
                <ul id="ul2">
  <li>The duration for banking healthy dental pulp stem cells is long, since  it can be done for children in the age group of 5�12 years and also for adults  under the age of 30</li>
  <li>The collection of stem cells from the pulp of the tooth is easy, painless,  quick, highly efficient, as it involves a simple process of extraction of the  tooth</li>
  <li>Easy retrieval process</li>
  <li>Precious as public banks don�t exist for storing dental pulp stem  cells</li>
  <li>Unlike  embryonic stem cells, dental pulp stem cell banking is ethical and perfectly  legal</li>
</ul>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">12. What is the right age for banking dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>The sooner the better, since the quantity and quality of stem cells starts to decrease with age. However, for children it would be ideal if they are between 5�12 years of age. Adults who are under 30 years� of age can bank their permanent teeth if they are being extracted for orthodontic purposes.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">13. Should I bank cells from more than one tooth?</h3>
              <div class="detail" style="display: none;">
                <p>Yes. Although it is not known for certain how many cells will be needed for clinical use in the future, we recommend you to store more than one tooth, if possible. For this reason, we do not charge extra for up to four teeth from the same patient when they are collected and shipped at the same time.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">14. Should I bank cells for more than one child?</h3>
              <div class="detail" style="display: none;">
                <p>Yes. Although MSCs are considered to be immunoprivileged because of which it could be used regardless of the major histocompatibility complex identity between donor and recipient�but as per the law, these stored specimens are for autologous use only.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">15. When can I bank stem cells from my child�s teeth or from my own teeth?</h3>
              <div class="detail" style="display: none;">
                <p>With regard to your children, the best time to recover baby teeth with stem cells is before the teeth become very loose, as the cells in the dental pulp will remain more viable if they continue to have a blood supply. Adolescents have two excellent opportunities for banking their dental pulp stem cells�following extraction of premolar teeth in preparation for orthodontic treatment, and after the extraction of their wisdom teeth under the age of 30.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">16. My child has lost a tooth just an hour back. We have stored it in a cotton swab, can you come and take it for banking?</h3>
              <div class="detail" style="display: none;">
                <p>No. Such a tooth cannot be used for banking purposes. The tooth has to be removed using a standard procedure and taken immediately to the laboratory in controlled temperature conditions for testing and storage within 48 hours of removal.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">17. If I do not have neurological damage or any degenerative disease, why should I bank my dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>On the surface, stem cells might seem irrelevant to you because you are not suffering from disorders like myocardial infarction, Parkinson�s disease, diabetes, etc. But an individual may suffer from these conditions in the future. In such cases, stem cells could be important due to their unique property of being forever �young� and being responsive to change.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">18. I have already banked my child�s cord blood, why should I now bank his/her dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>Scientists are still learning about the best source of stem cells which will work best for the different possible clinical applications. Cord blood stem cells are primarily used today to treat blood diseases whereas dental pulp stem cells are to be used to treat hard and soft tissue diseases and injuries such as healing connective tissue, repairing dental tissues, neuronal tissue and bone tissue.</p>
              </div><br />
<br />
<br />
<br />
<br /><br />


            </li>
          </ul>
        </div>

        <!--[04]-->
        <div class="faq_img"><img src="http://scsp.in/stemade_fb/stemade_fb_AR/images/faqs_logo.png" width="384" height="252" /></div>
        <h2 onClick="googleMark('Diabetes Basics','Click');" class="h2_pad">
          <div class="h2_div">
            <div class="h2_down_ar">&nbsp;</div>
            <span class="h2_span">?</span> Collection Process </div>
        </h2>
        <div class="levelOne firstOpen hide">
          <ul>
            <li>
              <h3 class="h3_pad_lef">19. Which are the right teeth to collect for banking purposes?</h3>
              <div class="detail" style="display: none;">
                <p>All healthy teeth contain dental pulp and are a potential source of stem cells. The removal of premolar and wisdom tooth for orthodontic purposes are also a good candidate for banking.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">20. Can teeth with cavities or gum disease be used for banking?</h3>
              <div class="detail" style="display: none;">
                <p>No. Teeth with decay or where there is a reason to believe that pulp is compromised should not be considered for banking.</p>
              </div>


            </li>
            <li>
              <h3 class="h3_pad_lef">21. How are milk teeth collected?</h3>
              <div class="detail" style="display: none;">
                <p>Once confirmed by our panel dentist, you will be scheduled for tooth collection at one of our Stemade smile clinics. Each Stemade smile clinic is equipped with all the necessary equipment and skilled staff for tooth collection. With minimum intervention the loosened tooth is extracted by the dentist and blood sample is collected by the present paramedic and placed in the tooth collection kit which is transferred to the laboratory for processing.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">22. Is the procedure painful for my child?</h3>
              <div class="detail" style="display: none;">
                <p>Tooth collection is a routine procedure performed by all dentists in their clinic. Hence you can expect no to minimal pain during the procedure.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">23. Will it need injecting a local anaesthetic?</h3>
              <div class="detail" style="display: none;">
                <p>Most often, the tooth to be collected in a child is mobile. Hence, it may not require injecting a local anaesthetic solution. Often even a topical application of a anaesthetic gel/solution would suffice. However, this decision is solely the responsibility of the dentist.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">24. What problems will my child have after his/her teeth are extracted?</h3>
              <div class="detail" style="display: none;">
                <p>Routinely in children, there are no complications reported after removing their teeth.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">25. Should I wait for the teeth to fall out?</h3>
              <div class="detail" style="display: none;">
                <p>No. You should make an appointment with a dentist at our Stemade smile clinic so he/she can properly extract the teeth using a standard procedure. This includes oral examination to check the condition of the tooth�a sound, non-decayed, non-infected tooth is required for banking purpose; dental X-ray to check the condition of the root of the tooth�at least 1/2 to 2/3 of the root of milk tooth should be present at the time of extraction.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">26. I have been told that a blood sample is also taken. Is it true? If so, why?</h3>
              <div class="detail" style="display: none;">
                <p>Yes. The paramedic will collect a small amount of blood sample after the extraction is done. This is done to test the blood for certain infectious diseases like HIV, Hepatitis B and C, Cytomegalovirus (CMV), syphilis, malaria, etc.</p>
              </div>
            </li>
          </ul>
        </div>
        
        <!-- [05] -->
        <h2 onClick="googleMark('Diabetes Basics','Click');" class="h2_pad">
          <div class="h2_div">
            <div class="h2_down_ar">&nbsp;</div>
            <span class="h2_span">?</span> Processing and Storage </div>
        </h2>
        <div class="levelOne firstOpen hide">
          <ul>
            <li>
              <h3 class="h3_pad_lef">27. How are teeth transported for storage?</h3>
              <div class="detail" style="display: none;">
                <p>The dentist in our Stemade smile clinic places the extracted tooth in a tube containing transport medium, which is surrounded by ice packs in the tooth collection kit. The kit is then transported within 48 hours to our state-of-the-art laboratory in Chennai.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">28.	How do you ensure the viability of cells while transporting? </h3>
              <div class="detail" style="display: none;">
                <p>Safeguarding the extracted teeth requires a kit with excellent insulating properties and Stemade has designed a kit that maintains the viability of stem cells during transportation.</p>
                Our kit has the following features:
                <ul id="ul2">
    <li>It is  small and compact</li>
    <li>It  utilizes State-of-the-Art gel packs responsible for maximum temperature control  during transportation</li>
    <li>It  includes an internal indicator (thermobutton) that continuously monitors the  temperature during transportation</li>
  </ul>
  <p>The internal temperature of our kit remained well within normal range (2�4�C), the entire time, demonstrating exceptional ability to control temperature excursions and thus protects the stem cells. These systems have been tested, verified and are being used to collect thousands of sample successfully.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">29. How and where are my stem cells stored?</h3>
              <div class="detail" style="display: none;">
                <p>Stem cell samples are cryogenically preserved and stored indefinitely at the LifeCell facility in Chennai. Upon arrival at the storage facility, the labelling of the sample and the shipping container is verified to ensure that the tissue sample matches the correct donor. Then, all the teeth are given an initial inspection to check for caries, fracture, etc. If the teeth pass this inspection, they are disinfected and soft tissue is isolated and a sample is then assessed for cell viability. If the cells are viable, the tissue will be further processed and prepared for cryopreservation. We will contact you and provide you with a certificate of banking, which you should place in your family records for future use.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">30. What is cryopreservation?</h3>
              <div class="detail" style="display: none;">
                <p>Cryopreservation refers to the storage of cells at ultra-low-temperatures so that it can be revived and restored to the same living state as before it was stored. At these freezing temperatures all biological activity is stopped as are any cellular processes that lead to cell death. Dental pulp stem cells can be preserved for lifetime and when needed, carefully thawed to maintain their viability.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">31.	How do you prevent the stem cells from damage during the freezing process?</h3>
              <div class="detail" style="display: none;">
                <p>Stem cells are cryopreserved (freezed) in a manner similar to other mammalian cells, with some exceptions to enhance recovery and clonogenic activity. Cryoprotection is normally afforded by using cryoprotectant solution which prevents the formation of ice crystals, in combination with serum, and controlled rate freezing is done to prevent cell damage.</p>
                <p>Our processing, quality-control, and quality-assurance metrics are in accordance with FDA guidelines, and we are accredited by the AABB (American Association of Blood Banks). Stemade's laboratory technology provides secure, long-term protection for your little one�s stem cells.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">32. What happens if my child�s tooth does not have viable cells?</h3>
              <div class="detail" style="display: none;">
                <p>Failing the stringent quality norms put up by Stemade the rejection letter will be issued by Stemade to you. If your child still has viable teeth left, we will complete the process again free as part of our service or will refund you according to our refund scheme.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">33. For how long is the sample stored?</h3>
              <div class="detail" style="display: none;">
                <p>The sample is stored for as long as you maintain your contract with us.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">34. How do I know if my sample will not be confused with someone else�s?</h3>
              <div class="detail" style="display: none;">
                <p>All samples are bar-coded and tracked at all times, during the entire process, using a sophisticated sample management and logistics system. These systems have been tested, verified and are being used to collect thousands of samples successfully.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">35. What systems are in place to protect stem cells during long-term storage?</h3>
              <div class="detail" style="display: none;">
                <p>Our cryogenic facility maintains multiple levels of security. This includes a backup alarm system, 24 hour on-call staff, 24 hour temperature monitoring, and a gravity driven liquid nitrogen system which does not depend on electricity.</p>
              </div>
            </li>
          </ul>
        </div>
        <!--[06]-->
        <h2 onClick="googleMark('Diabetes Basics','Click');" class="h2_pad">
          <div class="h2_div">
            <div class="h2_down_ar">&nbsp;</div>
            <span class="h2_span">?</span> General Questions </div>
        </h2>
        <div class="levelOne firstOpen hide">
          <ul>
            <li>
              <h3 class="h3_pad_lef">36.	What is the right age for banking stem cells from wisdom tooth?</h3>
              <div class="detail" style="display: none;">
                <p>The rule is the sooner, the better! As age progresses, it has been observed that there is a loss of viable stem cells in tooth, hence it is better to get the wisdom tooth extracted sooner and stored. </p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">37.	My child is HIV carrier; can I store his dental stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>No.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">38. Who owns my child�s dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>Ownership of the child�s stem cells belongs to the parent or legal guardian until the child attains maturity in legal terms (i.e., 18 yrs in India). Then full ownership is passed to the child by renewing the contract.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">39. Can my stem cells be given to someone else without my permission?</h3>
              <div class="detail" style="display: none;">
                <p>No. Banked dental pulp stem cells are stored for the individual�s own use (autologous) and cannot be given to anyone else.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">40.	How do you ensure the confidentiality of personal information?</h3>
              <div class="detail" style="display: none;">
                <p>Stemade takes confidentiality seriously. Because of the sensitive nature of �families� medical information, all Stemade employees sign confidentiality agreements. The collection and use of your personal information is governed by our privacy policy. Kindly check article 18 of our contract copy.</p>
                <p><strong>Note:</strong><br /><ul id="ul3">
<li>CRM Number (bar code) - When you enroll with Stemade, your collection kit is assigned a CRM number. This same identifier remains with your tooth collection kit, paperwork, and sample all the way to storage.</li>
<li>Client bar code label - Person doing the processing is not aware of your name or any personal information, your sample is easily identified by the CRM number, which is permanently attached to the storage bag. </li>
<li>Once your stem cells are stored, the storage location is logged in our computer system, certificate of preservation is given to you mentioning the CRM number which we back up to tape daily.</li>
</ul>
</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">41. Can someone donate dental pulp stem cells for research purpose?</h3>
              <div class="detail" style="display: none;">
                <p>The stem cells stored by Stemade are for autologous �self� use only. These stem cells are neither received nor used for research purposes.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">42. How many families have stored dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>Globally, hundreds of thousands have banked dental pulp stem cells. In India, since our launch in November 2010, thousands have chosen to store stem cells from their child�s dental pulp.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">43. Can I use my �banked� dental pulp stem cells now?</h3>
              <div class="detail" style="display: none;">
                <p>At present, stem cells are being studied as life-saving therapies and clinical trials are underway. The ability for patients to use their banked stem cells immediately will be dependent upon what their needs are and whether medical therapies are available now.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">44. How can I be assured that my dental pulp stem cells will be available to me in the future?</h3>
              <div class="detail" style="display: none;">
                <p>We have state-of-the-art stem cell processing and cryogenic facilities at the laboratory in Chennai. The laboratory has been accredited with AABB (American Association of Blood Banks), is ISO certified and US FDA approved. There are highly trained professionals in our laboratory, thereby maintaining the highest scientific standards. The stem cells are stored for autologous use only. Individuals and families have trusted and depended on our laboratory�s facilities and services for their
very personal family and health. So you can assure yourself that you will receive your stem cells whenever required.
</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">45. Can I use my child�s dental pulp stem cells to treat other members of my family?</h3>
              <div class="detail" style="display: none;">
                <p>Currently, we bank the dental pulp, rich in adult stem cells, for autologous use only. However, they may potentially be used to treat conditions in first or second degree blood relatives (siblings, parents, grandparents, uncles, and aunts) in addition to the donor, considering their immunomodulatory properties, subject to regulatory approvals.
</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">46. Is my child or my personal information kept confidential?</h3>
              <div class="detail" style="display: none;">
                <p>Yes. Stemade maintains strict confidentiality of all information.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">47. Do you provide stem cell treatment?</h3>
              <div class="detail" style="display: none;">
                <p>No. We bank stem cells. We will process and store your sample and make it available when required. Currently we do not provide stem cell treatments and are not responsible for your stem cell treatment in any form.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">48.	How much time it will take to access my child�s sample if we intent to use it for therapy? </h3>
              <div class="detail" style="display: none;">
                <p>Stem cell therapy is a planned procedure. Whenever you need your banked stem cells all you will need to do is send a written request addressed to Stemade at least 30 days before the desired date of recovery. Do mention details of your medical doctor or hospital manager, they will be responsible for collecting the cells. Stemade will work with your physician to make arrangements for confirmatory testing, release, and transportation of your stem cells to a designated hospital.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">49. Why should I choose Stemade?</h3>
              <div class="detail" style="display: none;">
                <p><ul>
<li>Our mission is to make banking services, convenient and affordable for you</li>
<li>We have an efficient team of professionals at work</li>
<li>We adhere to stringent guidelines � Our service laboratory and cryopreservation facility (LifeCell International Pvt. Ltd., Chennai) has been in business for over decades and it is <strong>certified by AABB (American Association of Blood Banks) and ISO and is US FDA approved</strong></li>
<li>We offer excellent service � Industry leading tooth transport, cryopreservation, and biorepository protocols and logistics</li>
</ul></p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">50.	Is the company public or private? Are there any government regulations for such banking? </h3>
              <div class="detail" style="display: none;">
                <p>Stemade, India�s first private dental stem cell bank�is proud to introduce the radical concept of dental stem cell banking.</p><p>The ministry of health and family welfare is in the process of putting together a proposal for the formation of an expert committee for stem cell banks and therapy. Also till date there are no rules or laws governing stem cell banking once a laboratory is approved by the state.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef">51.	Currently, how many privately banked samples does the company have?</h3>
              <div class="detail" style="display: none;">
                <p>More than 1000 samples.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">52. What are the accreditations of the laboratory where the processing and storage is done?</h3>
              <div class="detail" style="display: none;">
                <p>The laboratory has the following accreditations � ISO Certification, AABB (American Association of Blood Banks) Accredited Stem Cell Bank, GMP and US FDA approved. This ensures that we have confirmed to all the international standards, should you need the stem cells in any other country for therapy.</p>
              </div>
            </li>
            <li>
              <h3 class="h3_pad_lef h_height">53. Whom should I contact if I would like to bank my child�s or my own dental pulp stem cells?</h3>
              <div class="detail" style="display: none;">
                <p>You can call us on our <strong>customer care no. : 1800-102-7836</strong> for quick answers to all your queries<br />

Write to us at <a href="mailto:info@stemade.com">info@stemade.com</a> and we will get in touch with you shortly.</p>
<p>For details about stem cells and dental stem cell banking visit
  <a href="http://www.stemade.com/" target="_blank">www.stemade.com</a></p>
              </div>
            </li><br />
<br />

          </ul>
        </div>
        <div class="cb"></div>
      </div>
      <div style="background-color:#FFFFFF; width:2px; margin: 0 0 0 390px; height: 60px; top: -59px; position: relative; z-index: 1000;">
        <div style="background-color:#FFFFFF; width:2px; height: auto; top: 60px; position: relative; z-index: 1000;">&nbsp;</div>
        <div style="background-color:#FFFFFF; width:2px; height: 65px; top: 60px; position: relative;">&nbsp;</div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="container_r2" style="background:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/footer.png) left bottom no-repeat;">
      <table width="680" border="0" align="center" cellpadding="0" cellspacing="0" style=" margin:0 auto;">
        <tr>
          <td colspan="2" align="left" valign="middle"><span>If your queries have not been answered, you can fill the form below and we will contact you shortly. </span></td>
        </tr>
        <tr>
          <td width="16%" align="left" valign="middle">&nbsp;</td>
          <td width="84%" align="left" valign="middle">&nbsp;</td>
        </tr>
		<form action="http://medulla.in/facebook/sendfaq.php" method="post">
        <tr>
          <td align="left" valign="middle"><span>Name</span></td>
          <td align="left" valign="middle"><input type="text" name="name" id="name" class="inp1" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle"><span>Email</span></td>
          <td align="left" valign="middle"><input type="text" name="email" id="email" class="inp1" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle"><span>Contact No.</span></td>
          <td align="left" valign="middle"><input type="text" name="cont" id="cont" class="inp1" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle"><span>City</span></td>
          <td align="left" valign="middle"><input type="text" name="city" id="city" class="inp1" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle"><span>Query</span></td>
          <td align="left" valign="middle"><textarea name="query" id="query" cols="45" rows="5" class="inp1" style="height:48px; background-image:url(http://scsp.in/stemade_fb/stemade_fb_AR/images/input_bg2.png);"></textarea></td>
        </tr>
        <tr>
          <td align="left" valign="middle">&nbsp;</td>
          <td align="left" valign="middle"><a href="mailto:ask@stemade.com"></a>
            <input type="submit" name="button" id="button" value="" class="but1" />
          </td>
        </tr></form>
      </table>
      <br />
    </div>
  </div>
</div>
<script>
	$("#button").click(function(){
		if($("#name").val()==""){alert("Please Enter Name");$("#name").focus();return false;}
		if($("#email").val()==""){alert("Please Enter Email");$("#email").focus();return false;}
		if($("#cont").val()==""){alert("Please Enter Contact Number");$("#cont").focus();return false;}
		if($("#city").val()==""){alert("Please Enter City");$("#city").focus();return false;}
		if($("#query").val()==""){alert("Please Enter Query");$("#query").focus();return false;}
		
	});
</script>


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