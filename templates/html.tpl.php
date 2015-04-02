<!DOCTYPE html>
<head>
<?php print $head; ?>
<meta name="viewport" content="width=device-width">
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script>
  jQuery(function ($){
    $("#masterhead").sticky({topSpacing:0, center:true});
  });
</script>
<!--<script>
jQuery(function($) {
$( "#block-block-7" ).click(function() {
  $( ".smenuwrap" ).slideToggle( "fast" );
});
});
</script>-->
<!--<link rel="stylesheet" href="/js/animate.min.css"> -->
<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300,200,100' rel='stylesheet' type='text/css'>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

</body>
</html>