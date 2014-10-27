<?php include('includes/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=420" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title><?php echo $conf['app_name']; ?> | ModPods</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://demo.seedprod.com/coming-soon-pro/wp-content/plugins/seedprod-coming-soon-pro/themes/default/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://demo.seedprod.com/coming-soon-pro/wp-content/plugins/seedprod-coming-soon-pro/themes/default/style.css">
	<style type="text/css">.progress-striped .progress-bar,.progress.active .progress-bar{background-color:#47a447}.grow-modpod .progress-bar{background-color:#3e8f3e;background-image:-moz-linear-gradient(top,#47a447,#306f30);background-image:-ms-linear-gradient(top,#47a447,#306f30);background-image:-webkit-gradient(linear,0 0,0 100%,from(#47a447),to(#306f30));background-image:-webkit-linear-gradient(top,#47a447,#306f30);background-image:-o-linear-gradient(top,#47a447,#306f30);background-image:linear-gradient(top,#47a447,#306f30);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#47a447',endColorstr='#306f30',GradientType=0);}.countdown_section{background-color:#3e8f3e;background-image:-moz-linear-gradient(top,#47a447,#306f30);background-image:-ms-linear-gradient(top,#47a447,#306f30);background-image:-webkit-gradient(linear,0 0,0 100%,from(#47a447),to(#306f30));background-image:-webkit-linear-gradient(top,#47a447,#306f30);background-image:-o-linear-gradient(top,#47a447,#306f30);background-image:linear-gradient(top,#47a447,#306f30);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#47a447',endColorstr='#306f30',GradientType=0);}html{height:100%;background:#ffffff;}.grow-modpod body{background:transparent;}.grow-modpod body,.grow-modpod body p{font-family:Arial,Helvetica,sans-serif;font-weight:400;font-size:16px;line-height:18px;color:#fafafa;}.grow-modpod h1,.grow-modpod h2,.grow-modpod h3,.grow-modpod h4,.grow-modpod h5,.grow-modpod h6{font-family:Lobster;font-weight:400;font-size:32px;color:#ffffff;}.grow-modpod button{font-family:Lobster;font-weight:400;font-size:16px;}.grow-modpod a,.grow-modpod a:visited,.grow-modpod a:hover,.grow-modpod a:active{color:#47a447;}::-webkit-input-placeholder{font-family:Arial,Helvetica,sans-serif;}::-moz-placeholder{font-family:Arial,Helvetica,sans-serif;}:-ms-input-placeholder{font-family:Arial,Helvetica,sans-serif;}input:-moz-placeholder{font-family:Arial,Helvetica,sans-serif;}#modpod-socialprofiles a{color:#fafafa;}.grow-modpod .btn-primary,.grow-modpod .btn-primary:focus,.gform_button,#mc-embedded-subscribe,.mymail-wrapper .submit-button{color:white;text-shadow:0 -1px 0 rgba(0,0,0,0.3);background-color:#3e8f3e;background-image:-moz-linear-gradient(top,#47a447,#306f30);background-image:-ms-linear-gradient(top,#47a447,#306f30);background-image:-webkit-gradient(linear,0 0,0 100%,from(#47a447),to(#306f30));background-image:-webkit-linear-gradient(top,#47a447,#306f30);background-image:-o-linear-gradient(top,#47a447,#306f30);background-image:linear-gradient(top,#47a447,#306f30);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#47a447',endColorstr='#306f30',GradientType=0);border-color:#306f30 #306f30 #193919;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#306f30;filter:progid:DXImageTransform.Microsoft.gradient(enabled= false);border-color:#47a447;}.grow-modpod .btn-primary:hover,.grow-modpod .btn-primary:active,.grow-modpod .btn-primary.active,.grow-modpod .btn-primary.disabled,.grow-modpod .btn-primary[disabled],.grow-modpod .btn-primary:focus:hover,.grow-modpod .btn-primary:focus:active,.grow-modpod .btn-primary:focus.active,.grow-modpod .btn-primary:focus.disabled,.grow-modpod .btn-primary:focus[disabled],.gform_button:hover,.gform_button:active,.gform_button.active,.gform_button.disabled,.gform_button[disabled],#mc-embedded-subscribe:hover,#mc-embedded-subscribe:active,#mc-embedded-subscribe.active,#mc-embedded-subscribe.disabled,#mc-embedded-subscribe[disabled],.mymail-wrapper .submit-button:hover,.mymail-wrapper .submit-button:active,.mymail-wrapper .submit-button.active,.mymail-wrapper .submit-button.disabled,.mymail-wrapper .submit-button[disabled]{background-color:#306f30;*background-color:#285d28;}.grow-modpod .btn-primary:active,.grow-modpod .btn-primary.active,.grow-modpod .btn-primary:focus:active,.grow-modpod .btn-primary:focus.active,.gform_button:active,.gform_button.active,#mc-embedded-subscribe:active,#mc-embedded-subscribe.active,.mymail-wrapper .submit-button:active,.mymail-wrapper .submit-button.active{background-color:#204b20 \9;}#modpod-progressbar span,.countdown_section{color:white;text-shadow:0 -1px 0 rgba(0,0,0,0.3);}.grow-modpod .btn-primary:hover,.grow-modpod .btn-primary:active{color:white;text-shadow:0 -1px 0 rgba(0,0,0,0.3);border-color:#388038;}.grow-modpod input[type='text']{border-color:#306f30 #306f30 #193919;}.grow-modpod input[type='text']:focus{border-color:rgba(47,111,47,0.8);webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(47,111,47,0.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(47,111,47,0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(47,111,47,0.6);}#modpod-content{max-width:600px;background-color:#383838;float:none;text-align:none;border:0 solid #0a0a0a;-webkit-border-radius:3px;border-radius:3px;-moz-background-clip:padding;-webkit-background-clip:padding-box;background-clip:padding-box;background-color:rgba(56,56,56,0.84);}.grow-modpod .progress-bar,.countdown_section,.grow-modpod .btn-primary,.btn-primary:focus,.gform_button{background-image:none;text-shadow:none;}.countdown_section,.grow-modpod .progress-bar{-webkit-box-shadow:none;box-shadow:none;}.grow-modpod input,.grow-modpod input:focus{border-color:#47a447!important;-webkit-box-shadow:none!important;box-shadow:none!important;}</style>
	<script src="/assets/js/jquery.js"></script>
	<script src="http://demo.seedprod.com/coming-soon-pro/wp-content/plugins/seedprod-coming-soon-pro/themes/default/bootstrap/js/bootstrap.js"></script>
	<script src="http://demo.seedprod.com/coming-soon-pro/wp-content/plugins/seedprod-coming-soon-pro/themes/default/js/script.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', '-----', 'modpod.com');
	  ga('send', 'pageview');
	</script>
	<script src="http://demo.seedprod.com/coming-soon-pro/wp-content/plugins/seedprod-coming-soon-pro/themes/default/js/modernizr.min.js"></script>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles-small.css" media="screen and (max-width:450px)" />
	<link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/application.js"></script>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="/stylesheets/ie.css" media="all" />
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="coming-soon">
	<div id="modpod-content">
		<img id='modpod-logo' src='/assets/img/logo.png' style="width:200px;height:auto;">
			<h1 id="modpod-headline">Coming Soon!</h1> <div id="modpod-description"><p>ModPods is a new approach to growing.  It is a place of community, curriculum and capital.</p>
	<h3>Sign up and get&#8230;</h3>
	<ul class="unstyled">
		<li>The inside scoop on what we are working on.</li>
		<li>More details into the release of certain products</li>
	</ul>
	<p>&nbsp;</p>
	<p>Leave us your email and we&#8217;ll send them to you!</p>
</div>
			<form id="signup" action="/signup.php" method="post" target="popupwindow">
			<input class="required email" id="email" type="email" name="email" value="E-mail" onfocus="if (this.value == 'E-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'E-mail';}" autocapitalize="off" autocorrect="off" />
			<input class="submit" id="submit" type="submit" name="submit" value="Submit" />
			<img src="/assets/img/ajax-loader.gif" id="spinner" alt="Spinner" style="display:none;" />
		</form>
	</section>
	<span id="modpod-privacy-policy-txt">We promise to never spam you.</span>
</div>
<!-- <script>
jQuery(document).ready(function($){$("#modpod-description,#modpod-thankyoumsg").fitVids();});</script> -->

<style>#supersized{display:block;}</style>
<script>
	$(document).ready(function($){$.supersized({slide_interval:3000,
	transition:1,
	transition_speed:700,
	fit_landscape:0,
	random:1,
	slides:[
 		{image : 'assets/img/bg.jpg'},
 		{image : 'assets/img/bg1.jpg'},
 		{image : '/assets/img/bg2.jpg'},
 		{image : '/assets/img/bg3.jpg'},
 		{image : '/assets/img/bg4.jpg'},
 		{image : '/assets/img/bg5.jpg'}
]});});
</script>
<!--
<footer>
	<p>Copyright &copy; <?php echo date_default_timezone_set('Y'); ?> <?php echo $conf['app_name']; ?>.</p>
</footer>

<script type="text/javascript">$(document).ready(function(){ Application.init(); });</script> -->

</body>
</html>