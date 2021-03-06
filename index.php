<?php
echo "<!--";
$myfile = fopen("api/contents.txt", "r") or die("Unable to open file!");
echo "opened file for reading\n";
$contents = fread($myfile,filesize("api/contents.txt"));
$feeds = array_filter(explode("\r\n\r\n\r\n",$contents));
echo "obtained contents inside file\n";
fclose($myfile);
echo "-->";
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Presentation</title>

		<meta name="description" content="an interface to store and display top news items">
    <meta name="author" content="NALANDA Admin Team">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">

		<script src="js/jquery-2.2.2.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<link rel="shortcut icon" type="image/png" href="img/logo.png" />

		<style>

img {
  height: 100vh;
}
img, video, iframe {
    min-width: 100%;
    height: 100vh;
}

		</style>

	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

				<?php
					foreach($feeds as $feed){
						echo "<section data-background=#fff><h1>" . $feed . "</h1></section>\n";
					}
				?>

			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: false,
				progress: false,
				history: true,
				center: true,
				loop: true,

				// Number of milliseconds between automatically proceeding to the
				// next slide, disabled when set to 0, this value can be overwritten
				// by using a data-autoslide attribute on your slides
				autoSlide: 60000,
				autoSlideStoppable: false,

				transition: 'none', // none/fade/slide/convex/concave/zoom

				// Optional reveal.js plugins
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
</html>
