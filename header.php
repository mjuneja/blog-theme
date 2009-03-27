<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="page">
  <div id="header">
  	<div id="headerimg">
  		<div class="logo"><a href="#">&nbsp;</a></div>
  		<div class="topNavBar">
  		  <ul>
  		    <li class=""><a href="#"><span>Home</span></a></li>
  		    <li class="subNav">
  		      <a href="/about"><span>Company</span></a>
  		      <ul>
  		        <li><a href="/Our-Partners/our-partners.html">Our partners</a></li>
  		        <li><a href="/component/option,com_staffmaster/Itemid,77/view,all/">Our team</a></li>
  		        <li><a href="/Our-Toolbox/our-toolbox.html">our toolbox</a></li>
  		      </ul>
		      </li>
  		    <li class="subNav">
  		      <a href="/Vinsol-Services/services.html"><span>Services</span></a>
  		      <ul>
  		        <li><a href="/Vinsol-Services/we-build-applications.html">We build applications</a></li>
  		        <li><a href="/Vinsol-Services/we-improve-applications.html">We improve applications</a></li>
  		        <li><a href="/rails-training/">rails Training</a></li>
  		      </ul>  
		      </li>
  		    <li><a href="/component/option,com_portfolio/Itemid,63/view,all/"><span>Our Work</span></a></li>
  		    <li class="active"><a href="/blog"><span>Blog</span></a></li>
  		    <li><a href="/HR/we-are-hiring.html"><span>Jobs</span></a></li>
  		    <li><a href="/Vinsol-Services/see-and-hear-us.html">Events</a></li>
  		    <li class="subNav">
  		      <a href="/About-Vinsol/contact-us.html"><span>Contact us</span></a>
  		      <ul class="adjusted">
  		        <li><a href="/Vinsol-Services/hire-us-for-your-premier-web-project.html">Get Free Evalution</a></li>
  		      </ul>
		      </li>
  		  </ul>  
  		</div>  
  	</div>
  </div>

