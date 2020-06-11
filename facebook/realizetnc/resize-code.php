<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter.php?version=28#channel=f262f4964&amp;channel_path=%2Fethicon%2FTnC%2Ftnc.php%3Ffb_xd_fragment%23xd_sig%3Df2ecf0ad04%26&amp;origin=https%3A%2F%2Fjnj.vizualize.com" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $appId;?>', // App ID
      channelUrl : '<?php echo $channelPage;?>', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
	 FB.Canvas.setSize({ width: '<?php echo $width;?>', height:'<?php echo $height;?>' });
    //FB.Canvas.setAutoResize();
	
	window.onload = function() {
		 //Run the timer every 100 milliseconds, you can increase this if you want to save CPU cycles
		FB.Canvas.setAutoGrow(100);
	}
  };
  
  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>