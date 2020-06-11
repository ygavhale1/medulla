<div id="fb-root"></div>
<script>
   window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $appId; ?>', // App ID
      channelUrl : '<?php echo $channelPage ; ?>', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
	 FB.Canvas.setSize({ width: '<?php echo $width; ?>', height:'<?php echo $height; ?>' });
   //  FB.Canvas.setAutoResize();
	 FB.Canvas.scrollTo(0,0);
	 FB.Canvas.setAutoGrow(100);
	window.onload = function() {
		 //Run the timer every 100 milliseconds, you can increase this if you want to save CPU cycles
		
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
