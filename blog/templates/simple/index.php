<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title><?php echo($page_title); ?></title>

        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">

        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

        <?php get_header(); ?>


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Fontawesome Icon font -->
            <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!-- bootstrap.min -->
            <link rel="stylesheet" href="../css/jquery.fancybox.css">
        <!-- bootstrap.min -->
            <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- bootstrap.min -->
            <link rel="stylesheet" href="../css/owl.carousel.css">
        <!-- bootstrap.min -->
            <link rel="stylesheet" href="../css/slit-slider.css">
        <!-- bootstrap.min -->
            <link rel="stylesheet" href="../css/animate.css">
        <!-- Main Stylesheet -->
            <link rel="stylesheet" href="../css/main.css">

        <!-- Modernizer Script for old Browsers -->
            <script src="js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">
      <?php if($is_home) { ?>
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
          <!-- logo -->
					 <a href="index.html">                <img src="img/cherishLogo.png" alt="Mountain View" style="width:200px;"></a>

					<!-- /logo -->					</h1>
					<!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who We Are<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a  id="vision">Vision</a></li>
                          <li><a id="contact">Team</a></li>
                          <li><a id="partners">Partners</a></li>
                          <li><a id="governance">Governance</a></li>
                          <li><a id="contactpage">Contact</a></li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Themes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a id="themes" href="#">About</a></li>
                          <li class="divider"></li>
                          <li><a id="theme_healthSocial">Health and Social Care</a></li>
                          <li><a id="theme_resourceConstrained">Resource Constrained Communities</a></li>
                          <li><a id="theme_safetyAndSecurity">Safety and Security</a></li>
                        </ul>
                      </li>
                      <li><a id="apply" href="apply.html">Apply for Funding</a></li>
                      <li><a id="crucible" href="crucible.html">Crucible</a></li>
                      <li><a id="blog" href="blog.html">News</a></li>
                      <li><a id="de_network" href="de_network.html">DE-Network</a></li>

                      <!-- <li><a id="partners" href="partners.html">Partners</a></li>
                      <li><a id="projects" href="projects.html">Projects</a></li> -->
                    </ul>
                </nav>
        				<!-- /main nav -->
            </div>
        </header>
        <article>
            <div class="row">
                <div class="one-quarter meta">
                    <div class="thumbnail">
                        <img src="<?php echo get_twitter_profile_img($blog_twitter); ?>" alt="profile" />
                    </div>

                    <ul>
                        <li><?php echo($blog_title); ?></li>
                        <li><a href="mailto:<?php echo($blog_email); ?>?subject=Hello"><?php echo($blog_email); ?></a></li>
                        <li><a href="http://twitter.com/<?php echo($blog_twitter); ?>">&#64;<?php echo($blog_twitter); ?></a></li>
                        <li></li>
                    </ul>
                </div>

                <div class="three-quarters post">
                    <h2><?php echo($intro_title); ?></h2>

                    <p><?php echo($intro_text); ?></p>

                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </article>
        <?php } ?>

        <?php echo($content); ?>

        <?php get_footer(); ?>
    </body>
</html>
