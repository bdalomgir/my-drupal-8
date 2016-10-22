<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
	<?php global $base_url; global $base_path; ?>
    <title><?php print $head_title?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php print $base_path.path_to_theme();?>/images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php print $base_path.path_to_theme();?>/framework/icons.css">
    <link rel="stylesheet" type="text/css" href="<?php print $base_path.path_to_theme();?>/framework/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php print $base_path.path_to_theme();?>/framework/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php print $base_path.path_to_theme();?>/framework/animations.css">
    <?php print $styles; ?>
  	<?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<header class="row center">
        <div class="row logo">
            <a href="http://publicsafety.princeton.edu"><img src="<?php print $base_path.path_to_theme();?>/images/logo.png"/></a>
        </div>
    </header>
	<?php print $page_top; ?>
  	<?php print $page; ?>
	<?php print $page_bottom; ?>
    <footer class="row center">
        <div class="row return">
        	<a class="button" href="http://publicsafety.princeton.edu"/>Return to Public Safety Website</a>
        </div>
    </footer>
</body>
</html>