<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#" lang="en">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="fb:app_id"          content="769634313082294" /> 
<meta property="og:type"            content="ten_minute_give:Challenge" /> 
<meta property="og:title"           content="Ten Minute Give" /> 
<meta property="og:url"               content="http://10minutegive.com/" /> 
<meta property="og:description"     content="Share your achievements!" /> 

<title><?php echo $page_title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/index.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>/css/flipclock.css">
<style>
html, body{
	height: 100%;
	overflow: hidden;
}
.mblEdgeToEdgeList {
	background-color: #DBDDE2;
}
</style>
<script type="text/javascript" data-dojo-config="parseOnLoad:0,isDebug:1,async:1, mvc: {debugBindings: 1}" src="<?php echo base_url();?>dojo/dojo.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>javascript/src.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>javascript/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url();?>javascript/flipclock.min.js"></script>
<script type="text/javascript">
  // You probably don't want to use globals, but this is just example code
  var fbAppId = '769634313082294';
  var objectToLike = 'http://techcrunch.com/2013/02/06/facebook-launches-developers-live-video-channel-to-keep-its-developer-ecosystem-up-to-date/';

  // This check is just here to make sure you set your app ID. You don't
  // need to use it in production. 
  if (fbAppId === 'replace me') {
    alert('Please set the fbAppId in the sample.');
  }

  /*
   * This is boilerplate code that is used to initialize
   * the Facebook JS SDK.  You would normally set your
   * App ID in this code.
   */

  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : fbAppId, // App ID
      status     : true,    // check login status
      cookie     : true,    // enable cookies to allow the
                            // server to access the session
      xfbml      : true,     // parse page for xfbml or html5
                            // social plugins like login button below
      version        : 'v2.0',  // Specify an API version
    });

    // Put additional init code here
  };

  // Load the SDK Asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  /*
   * This function makes a call to the og.likes API.  The
   * object argument is the object you like.  Other types
   * of APIs may take other arguments. (i.e. the book.reads
   * API takes a book= argument.)
   *
   * Because it's a sample, it also sets the privacy
   * parameter so that it will create a story that only you
   * can see.  Remove the privacy parameter and the story
   * will be visible to whatever the default privacy was when
   * you added the app.
   *
   * Also note that you can view any story with the id, as
   * demonstrated with the code below.
   *
   * APIs used in postLike():
   * Call the Graph API from JS:
   *   https://developers.facebook.com/docs/reference/javascript/FB.api
   * The Open Graph og.likes API:
   *   https://developers.facebook.com/docs/reference/opengraph/action-type/og.likes
   * Privacy argument:
   *   https://developers.facebook.com/docs/reference/api/privacy-parameter
   */

function shareAchievement() {
  FB.ui({
  method: 'share_open_graph',
  action_type: 'ten_minute_give:finish',
  action_properties: JSON.stringify(
  {
    challenge:'http://10minutegive.com/',
  })
  },
  function(response){});
}
</script>
<style type="text/css">

.your-clock{
zoom: 0.5;
-moz-transform: scale(0.5)
}

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#body{
margin: 0 15px 0 15px;
}

p.footer{
text-align: right;
font-size: 11px;
border-top: 1px solid #D0D0D0;
line-height: 32px;
padding: 0 10px 0 10px;
margin: 20px 0 0 0;
}

#container{
margin: 10px;
border: 1px solid #D0D0D0;
-webkit-box-shadow: 0 0 8px #D0D0D0;
}
</style>

</head>
<script type="text/javascript">
	var $mcGoal = {'settings':{'uuid':'beb0e1b0dad76edb4f85c6020','dc':'us9'}};
	(function() {
		 var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
		sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
	})(); 
</script>