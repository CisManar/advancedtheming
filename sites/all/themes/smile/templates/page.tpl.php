<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<?php print render($page['header']); ?>
<div id="page-wrapper"><div id="page">

	<headr>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
								<h1> <?php print $site_name; ?> </h1>
							</a>
						</div>
					</div>
						
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav', 'nav-tabs'), 'role' => 'tablist' ))); ?>
						</div>
					</div>						
				</div>
			</div>	
		</nav>	
	</header>

	<section id="main-slider" class="no-margin">
		<div class="carousel slide">      
				<?php print render($page['main-slider']); ?>
		</div>
	</section>

	<div class="feature">
		<div class="container">
			<div class="text-center">
				<?php print render($page['our-features']); ?>
			</div>
		</div>
	</div>

	<div class="about">
		<div class="container">
			<?php print render($page['about']); ?>
		</div>
	</div>

	<div class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Lates News</h2>
			</div>
			<?php print render($page['latest']); ?>
		</div>
	</div>

	<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class="partners">
                <ul>
					<?php print render($page['partners']); ?>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->


	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<?php print render($page['social-icons']); ?>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; 2018 <a target="_blank" href="http://www.facebook.com/cisManar" >Manar Sarah</a>. All Rights Reserved.
					</div>

				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer>



</div></div>



  


