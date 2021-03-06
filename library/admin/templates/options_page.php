<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); } ?>

<div class="wrap clearfix">
<h2 id="arras-header"><?php _e('Arras Options', 'arras') ?></h2>

<?php echo $notices; ?>

<form enctype="multipart/form-data" id="arras-settings-form" method="post" action="<?php get_template_directory() . '/admin/admin.php'; ?>">
<?php wp_nonce_field('arras-admin'); ?>

<ul id="arras-tabs" class="clearfix">
	<li><a href="#general-settings"><?php _e('General', 'arras') ?></a></li>
	<?php if (!function_exists('wp_nav_menu')) : ?><li><a href="#navigation"><?php _e('Navigation', 'arras') ?></a></li><?php endif; ?>
	<li><a href="#home"><?php _e('Home', 'arras') ?></a></li>
	<li><a href="#layout"><?php _e('Layout', 'arras') ?></a></li>
	<li><a href="#design"><?php _e('Design', 'arras') ?></a></li>
	<li><a href="#posttype"><?php _e('Post Types', 'arras') ?></a></li>
	<li><a href="#taxonomies"><?php _e('Taxonomies', 'arras') ?></a></li>
	<li><a href="#tools"><?php _e('Tools', 'arras') ?></a></li>
</ul>

<div class="clearfix arras-options-wrapper">

<?php include 'arras-general.php' ?>
<?php if (!function_exists('wp_nav_menu')) include 'arras-navigation.php' ?>
<?php include 'arras-home.php' ?>
<?php include 'arras-layout.php' ?>
<?php include 'arras-design.php' ?>
<?php include 'posttype_page.php' ?>
<?php include 'taxonomy_page.php' ?>
<?php include 'arras-tools.php' ?>

<p class="final-submit">
<input class="button-primary" type="submit" name="save" value="<?php _e('Save Changes', 'arras') ?>" />
<input class="button-secondary" type="submit" name="reset" value="<?php _e('Reset Settings', 'arras') ?>" />
</p>

</div>

</form>

<?php arras_right_col() ?>

</div><!-- .wrap -->

<?php

/* End of file options_page.php */
/* Location: ./library/admin/templates/options_page.php */
