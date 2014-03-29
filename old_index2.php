<?php 
$items = array(
	0 => array(	'name' => 'Rebellious Tower Defence (RTD)',
				'techniques' => array('C++', 'SDL', 'SVN'),
				'dates' => array(	'Release' => '14 December 2009',
									'Start' => '29 October 2009'
							),
				'image' => 'Rebellioustowerdefence_Screenshot.png',
				'images' => array(),
				'links' => array(
							
							'Download' => 
								array(
									array(	'url' => 'RebelliousTowerDefence_Windows.rar',
											'label' => 'RebelliousTowerDefence_Windows.rar (Windows)'),
									array(	'url' => 'RebelliousTowerDefence_Ubuntu.rar',
											'label' => 'RebelliousTowerDefence_Ubuntu.rar (Linux)')
								),
							'Journal' => 
								array(
									array(	'url' => 'http://www.google.com/notebook/public/15502429618632229265/BDRxB5goQjvqCjMkk',
											'label' => 'Google Notebook')
								),
							'Specifications' => 
								array(
									array(	'url' => 'RebelliousTowerDefence_kravspecifikation_rev1.pdf',
											'label' => 'RebelliousTowerDefence_kravspecifikation_rev1.pdf')
								)
							),
				'description' => "A Tower Defence Game"
		)
);

// real data
$items = simplexml_load_file("data.xml");
$sections = array();
foreach ($items AS $item) {
	$sections[] = (string)$item->type;
}
$sections = array_unique($sections);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Han Lin Yap - portfolio</title>
<link rel="stylesheet" href="http://static.zencodez.net/thickbox3.1/thickbox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="/yap-goodies/css/global.css" />

<style type="text/css">
<!--
/* HTML 5 */
article, aside, footer, header, nav, section {
	display: block;
}

body {
	color: #555;
	font-size: 14px;
	font-family: sans-serif;
}

header, footer, nav, aside {
	text-align: center;
}

/* --- general --- */
#container {
	margin: 30px auto;
	width: 85%;
}

/* --- class --- */
.box {
	border: 1px solid #DDD; 
	display: inline-block;
	padding: 10px;
	
	/* CSS3 */
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0.08, rgb(237,237,237)),
		color-stop(0.25, rgb(245,245,245)),
		color-stop(0.46, rgb(255,255,255))
	);
	background-image: -moz-linear-gradient(
		center bottom,
		rgb(237,237,237) 8%,
		rgb(245,245,245) 25%,
		rgb(255,255,255) 46%
	);
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}

/* --- header --- */
header {
	font-size: 30px;
}

/* --- nav --- */
nav header {
	font-size: 14px;
	font-weight: bold;
	display: inline-block;
}
nav header:after {
	content: " » ";
}
nav a:hover {
	text-decoration: underline;
}
/* --- content --- */
article {
	border: 1px solid #DDD; 
	padding: 10px 0 10px 10px;
	
	background: url(spirit5.png) no-repeat fixed top center ;
	/* CSS3 */
	background: url(spirit5.png) no-repeat fixed top center, -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0.08, rgb(237,237,237)),
		color-stop(0.25, rgb(245,245,245)),
		color-stop(0.46, rgb(255,255,255))
	);
	background: url(spirit5.png) no-repeat fixed top center, -moz-linear-gradient(
		center bottom,
		rgb(237,237,237) 8%,
		rgb(245,245,245) 25%,
		rgb(255,255,255) 46%
	);
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}

article div {
	display: inline-block;
}

article .image {
	border-right: 1px solid #CCC;
	margin-right: 10px;
	padding: 10px;
	min-height: 200px;
	width: 20%;
	vertical-align: top;
}

article .image img {
	border: 1px solid #DDD;
	width: 100%;
}

article .description {
	max-width: 800px;
	width: 45%;
}
article .description header {
	color: #000;
	font-size: 20px;
	font-weight: bold;
	text-align: left;
}

article .description header:hover {
	color: #40A0E0;
	
}

article .imagemore {
	border-left: 1px solid #CCC;
	float: right;
	overflow: auto;
	margin-left: 10px;
	padding: 10px 4px 10px 10px;
	height: 200px;
	width: 24%;
}
article .imagemore img {
	border: 1px solid #DDD;
	display: inline-block;
	margin-bottom: 4px;
	min-height: 60px;
	min-width: 60px;
	width: 30%;
}

/* diffrent view */
#diff_view {
	display: block;
	margin: 0 auto;
	min-width: 600px;
	width: 65%;
}

#box {
	display: inline-block;
	vertical-align: top;
	width: 72%;
}

#image {
	border-right: 1px solid #DDD;
	display: inline-block;
	padding-right: 10px;
	max-width: 225px;
	min-width: 150px;
	width: 20%;
}

#image img {
	background-color: #555;
	border: 3px double #000;
	margin: 1px;
	height: 40px;
	width: 40px;
	
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
}

#image img:hover, #image img.active {
	border: 3px double yellow;
}

#imagemore {
	display: inline-block;
}

#imagemore img {
	background-color: #555;
	border: 2px solid #555;
	display: inline-block;
	height: 60px;
	width: 60px;
	
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
}
#description {
	display: inline-block;
	width: 100%;
	vertical-align: top;
}

-->
</style>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	</head>
<body>
<div id="container">
<header> <small>Webdeveloper &lt;</small> Han Lin Yap <small>&gt;</small> <img src="http://metroroll.zencodez.net/ref/email.php"/></header>
<aside>Up to date - this site use techniques of HTML 5 and CSS 3</aside>
<section>
<nav>
<header>Show</header>
<a id="explode">Explode!</a> <a id="expand">Expand!</a> <a href="old_index1.html">Old portfolio!</a>
</nav>
<?php foreach ($sections AS $section) : ?>
<header><?php echo $section; ?></header>
<?php foreach ($items AS $item) : 
	if ($item->type != $section) continue;
?>
<!-- <?php echo $item->name; ?> -->
<article>
	<div class="image">
		<a href="<?php echo $item->image; ?>"><img src="<?php echo $item->image; ?>" alt="<?php echo $item->name; ?>"></a>
	</div>
	<div class="description">
	<header><?php echo $item->name; ?></header>
	<?php foreach($item->dates AS $date) : ?>
	<?php echo $date->label; ?>: <?php echo $date->date; ?><br />
	<?php endforeach; ?>
	<br />
	<?php $techniques = (array)$item->techniques; ?>
	<b>Techniques / library used:</b><br /><?php echo implode(', ',$techniques['technique']); ?><br /><br />
	
	<b>Description:</b><br />
	<?php echo $item->description; ?><br /><br />
	
	<span class="box">
	<?php foreach($item->links AS $links) : ?>
		<?php if (strlen($links->label)) { ?><b><?php echo $links->label; ?></b><br /><?php } ?>
		<?php foreach($links->link AS $link) : ?>
			<a href="<?php echo $link->url; ?>"><?php echo $link->label; ?></a> 
		<?php endforeach; ?>
		<br />
	<?php endforeach; ?>
	</span>
	</div>
	<div class="imagemore">
		<?php foreach((array)$item->images AS $image) : ?>
		<a href="<?php echo $image; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $item->name; ?>"></a>
		<?php endforeach; ?>
	</div>
</article>
<?php endforeach; ?>
<?php endforeach; ?>
</section>
<div id="diff_view" class="box">
	<div id="image">
	</div>
	<span id="box">
		<div id="imagemore">
		</div>
		<div id="description">
		</div>
	</span>
</div>
<nav>
<header></header>
</nav>
<footer>Aka. Codler. This portfolio site started: 24 Mars 2010, released: 26 Mars 2010, update: 26 Mars 2010</footer>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://static.zencodez.net/thickbox3.1/thickbox-compressed.js"></script>
<script type="text/javascript">
<!--
/* thickbox */
$("a > img").parent().addClass('thickbox');
$(".nothickbox").removeClass('thickbox');

$(document).ready(function () {
	$("#explode").click(function () { 
		$("article:visible:first").effect('explode',{}, 2000, function () {
			//$(this).next().effect('explode',{}, 3000, arguments.callee); 
		}); 
	});
	
	$("#expand").click(function () {
		if ($("#diff_view:visible").length == 0) {
			$("#diff_view").show();
			$("article").hide("slow");
			$("section>header").hide();
			$(this).text("Expand!");
			$("#explode").hide();
		} else {
			$("#diff_view").hide();
			$("article").show("slow");
			$("section>header").show();
			$(this).text("Collapse!");
			$("#explode").show();
		}
	});
	
	$("article").hide();
	$("section>header").hide();
	$("#explode").hide();
	
	$("article .image img").each(function (i) {
		if ($("#diff_view").length == 0) {
			$("<div id=\"diff_view\"></div>").insertAfter($('section'));
		}
		
		var clone = $(this).clone();
		$('#image').append(clone);
		jQuery.data(clone.get(0),'id', i)
	});
	
	$('#image img').live('click', function () {
		var id = jQuery.data(this,'id');
		$("#description").html($("article:eq("+id+") .description").html());
		jQuery.data($("#description").get(0),'click_selected_id', id);
		
		var imagemore = $("article:eq("+id+") .image").html() + $("article:eq("+id+") .imagemore").html();
		$("#imagemore").html(imagemore);
	});
	
	$('#imagemore img').live('mouseover', function () {
		$("#description").html('<img src="' + $(this).attr('src') + '" width="100%" />');
	});
	$('#image img').live('mouseover', function () {
		var id = jQuery.data(this,'id');
		jQuery.data($("#description").get(0),'selected_id', id);
		$("#description").html('<img src="' + $(this).attr('src') + '" width="100%" />');
		var click_id = jQuery.data($("#description").get(0),'click_selected_id');
		if (!isNaN(click_id)) {
			if (click_id != id) {
				$("#imagemore").html("");
			}
		}
	});
	
	$('#imagemore img, #image img').live('mouseout', function () {
		var click_id = jQuery.data($("#description").get(0),'click_selected_id');
		var id = jQuery.data($("#description").get(0),'selected_id');
		if (!isNaN(click_id)) id = click_id; 
		$("#description").html($("article:eq("+id+") .description").html());
		var imagemore = $("article:eq("+id+") .image").html() + $("article:eq("+id+") .imagemore").html();
		$("#imagemore").html(imagemore);
	});
	
	$('#image').live('mouseenter', function () {
		$("#image img").removeClass('active');
	});
	
	$('#image').live('mouseleave', function () {
		var id = jQuery.data($("#description").get(0),'selected_id');
		var click_id = jQuery.data($("#description").get(0),'click_selected_id');
		if (!isNaN(click_id)) id = click_id; 
		$("#image img:eq("+id+")").addClass('active');
		jQuery.data($("#description").get(0),'click_selected_id', "string");
	});
});
-->
</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1944741-2");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- Woopra Code Start -->
<script type="text/javascript" src="//static.woopra.com/js/woopra.v2.js"></script>
<script type="text/javascript">
woopraTracker.track();
</script>
<!-- Woopra Code End -->
</body>
</html>