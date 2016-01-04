<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title>SHEinIT | Women in Tech</title>
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div id="header">
		<div class="wrap">
			<div class="inner">
				<?php if(is_home()) : ?><h1 id="blog-title"><?php else : ?><strong
						id="blog-title"><?php endif; ?>
					<a href="<?php echo esc_url(home_url('/')); ?>"
						title="<?php echo esc_attr(get_bloginfo('name')); ?>"><?php echo get_bloginfo('name'); ?></a>
				<?php if(is_home()) : ?>
				</h1><?php else : ?></strong><?php endif; ?>
			<div id="changeText"></div>
				<script type="text/javascript">
				document.getElementById("changeText").innerHTML = "Female German Computer Scientist striving for an inclusive tech environment for women.";
    				var text = ["\"Computer science does not happen in cellars full of empty pizza cartons.\"", "\"I don’t believe in magic anymore; I believe in the power of computing.\"", "\"Invention - intervention. Advancement - assistance. Growth - giving. Learn - teach.\"", "\"Turn minutes into moments, so little things become big things and time does not matter anymore.\""];
    				var counter = 1;
    				var elem = document.getElementById("changeText");
				elem.innerHTML = text[0];
    				setInterval(change, 13000);
    				function change() {
     					elem.innerHTML = text[counter];
        				counter++;
        				if(counter >= text.length) { counter = 0; }
    				}
    			</script>
			</div>
		</div>
	</div>
	</div>
</body>