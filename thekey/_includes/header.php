<?php

	date_default_timezone_set('UTC');

	$prev = NULL;
	$next = NULL;
	
	if(isset($navigation) && is_array($navigation)){
		if(array_key_exists('prev',$navigation) && $navigation['prev']){
			$prev="<li><a href=\"".$navigation['prev']['path']."/\" class=\"arrow\"><em>Previous</em><br />".$navigation['prev']['title']."</a></li>";
		}
		if(array_key_exists('next',$navigation) && $navigation['next']){
			$next="<li class=\"next\"><a href=\"".$navigation['next']['path']."/\" class=\"arrow\"><em>Next</em><br />".$navigation['next']['title']."</a></li>";
		}
	}
	
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Samantha Usborne<?php if(isset($navigation) && array_key_exists('this',$navigation)) { echo " - ".$navigation['this']['title']; } ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="robots" content="index,follow,archive"/>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<link href="<?php echo path; ?>_assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="//use.typekit.net/dlu2bpa.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta name="viewport" content="width=320,initial-scale=1.0" />
</head>
<body<?php if(isset($bodyclass)){ echo " class=\"".$bodyclass."\""; }?>>
	<div class="container">
		<?php if(path=="../../"){ ?><div id="header" class="project">
			<h1><a href="<?php echo path; ?>" id="nav">Sam Usborne</a></h1><?php } else { ?><div id="header">
			<h1><a href="<?php echo path; ?>" id="nav">Sam Usborne</a></h1>
			<?php } ?>

		</div>
