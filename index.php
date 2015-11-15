<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Tokamakea | Audrey Authom, Front End Developer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="My name is Tokamakea. Also known as Audrey Authom in the real world. I'm a 26 years old primate from Brussels, working as a Front End developper. I obsess over plasma donuts and smart birds, among many other things." />
        <meta name="keywords" content="web design, web development, freelance, css, html, css3, html5, javascript, jquery" />
        <meta name="author" content="Tokamakea" />
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />

        <!-- Open Graph protocol -->
        <meta property="og:url" content="http://www.tokamakea.be" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Tokamakea | Audrey Authom, Graphic Designer" />
        <meta property="og:image" content="/img/tokamakea-og.jpg" />
        <meta property="og:description" content="My name is Tokamakea. Also known as Audrey Authom in the real world. I'm a 26 years old primate from Brussels, working as a graphic designer. I obsess over plasma donuts and smart birds, among many other things." />
        <meta property="og:site_name" content="Tokamakea" />

        <!-- GOOGLE BOTS -->
        <meta name="robots" content="index, follow" />
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <img class="logo-img" src="/assets/img/logo_tokamakea_getting-makeover.svg" onerror="this.src=/img/logo_tokamakea_getting-makeover.png;this.onerror=null;" alt="Tokamakea is getting a makeover." />
            </div>
			<p class="copyright">
				<span class="word"><span class="symbol">©</span> Tokamakea <?php echo date("Y"); ?> | <a href="mailto:info@tokamakea.be" title="Contact Tokamakea">info@tokamakea.be</a></span>
			</p>
        </div>

        <!-- GOOGLE Analytics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            var pluginUrl =
                '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
            _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
            _gaq.push(['_setAccount', 'UA-38024661-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>