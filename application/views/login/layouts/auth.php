<!DOCTYPE html>  
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- Imports General CSS and jQuery CSS -->
	<link href="<?=css_path("screen.css")?>" rel="stylesheet" media="screen" type="text/css" />
	
	<!-- CSS for Fluid and Fixed Widths - Double to prevent flickering on change -->
	<link href="<?=css_path("fixed.css")?>" rel="stylesheet" media="screen" type="text/css" />

	<link href="<?=css_path("fixed.css")?>" rel="stylesheet" media="screen" type="text/css" class="width" />
	
	<!-- CSS for Theme Styles - Double to prevent flickering on change -->
	<link href="<?=css_path("theme/blue.css")?>" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?=css_path("theme/blue.css")?>" rel="stylesheet" media="screen" type="text/css" class="theme" />
	
	<!-- jQuery thats loaded before document ready to prevent flickering - Rest are found at the bottom -->
	<script type="text/javascript" src="<?=js_path("jquery-1.4.1.min.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery.cookie.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery.styleswitcher.js")?>"></script>

	<script type="text/javascript" src="<?=js_path("jquery.visualize.js")?>"></script>


	
	<!-- Grab Google CDNs jQuery, fall back if necessary -->
	<title><?php echo lang('cp_login_title') .' - ' .  $template['title']; ?></title>

    <?php echo $template['partials']['metadata']; ?>
</head>
<body>
	<?php echo $template['partials']['header']; ?>	
    <?php echo $template['body']; ?>	
	<?php echo $template['partials']['footer']; ?>			

	<!-- jQuery libs - Rest are found in the head section (at top) -->
	<script type="text/javascript" src="<?=js_path("jquery.visualize-tooltip.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery-animate-css-rotate-scale.js")?>"></script>

	<script type="text/javascript" src="<?=js_path("jquery-ui-1.8.13.custom.min.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery.poshytip.min.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery.quicksand.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery.dataTables.min.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery.facebox.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("jquery.uniform.min.js")?>"></script>

	<script type="text/javascript" src="<?=js_path("jquery.wysiwyg.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("syntaxHighlighter/shCore.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("syntaxHighlighter/shBrushXml.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("syntaxHighlighter/shBrushJScript.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("syntaxHighlighter/shBrushCss.js")?>"></script>
	<script type="text/javascript" src="<?=js_path("syntaxHighlighter/shBrushPhp.js")?>"></script>

	
	<!-- jQuery Customization -->
	<script type="text/javascript" src="<?=js_path("custom.js")?>"></script>
	
</body>
</html>

