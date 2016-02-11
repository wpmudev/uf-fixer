<?php

if (/*is_admin() &&*/ !class_exists('Upfront_ChildTheme_Admin_VersionCheck')) {

	class Upfront_ChildTheme_Admin_VersionCheck {

		private function __construct () {}
		public static function serve () {
			$me = new self;
			$hook = is_admin() ? 'admin_init' : 'init';
			add_action($hook, array($me, 'core_upgrade_check'));
		}

		private function _get_message_text () {
			$theme = wp_get_theme();
			$theme_name = !empty($theme) && $theme instanceof WP_Theme
				? $theme->Name
				: __('your theme', 'upfront')
			;
			return sprintf(
				__('You have successfully updated %s. Unfortunately, this theme update isn’t compatible with your current version of Upfront so it’s important that you update to Upfront 1.0 now to keep your website running smoothly.', 'upfront'),
				$theme_name
			);
		}

		private function _get_upfront_update_url () {
			$url = admin_url("themes.php");
			if (class_exists('WPMUDEV_Dashboard')) {

				// Is the user allowed to access dashboard?
				if (!empty(WPMUDEV_Dashboard::$site) && is_callable(array(WPMUDEV_Dashboard::$site, 'allowed_user'))) {
					if (!WPMUDEV_Dashboard::$site->allowed_user()) return $url; // If not, use admin URL
				}

				if (!empty(WPMUDEV_Dashboard::$ui->page_urls->themes_url)) {
					$url = WPMUDEV_Dashboard::$ui->page_urls->themes_url;
				}
				if (!empty(WPMUDEV_Dashboard::$site) && !empty(WPMUDEV_Dashboard::$site->id_upfront) && is_callable(array(WPMUDEV_Dashboard::$site, 'get_project_infos'))) {
					$upfront = WPMUDEV_Dashboard::$site->get_project_infos(WPMUDEV_Dashboard::$site->id_upfront);
					$url = !empty($upfront->url->install)
						? $upfront->url->install
						: $url
					;
				}
			}

			return $url;
		}

		private function _get_update_link () {
			$url = $this->_get_upfront_update_url();
			
			$is_destination = '';
			$screen = function_exists('get_current_screen')
				? get_current_screen()
				: false
			;

			// Add destination info, if we're already where we should be
			if ($screen && !empty($screen->base)) {
				if (class_exists('WPMUDEV_Dashboard') && preg_match('/wpmudev-themes/', $screen->base) && preg_match('/wpmudev-themes/', $url)) {
					$is_destination = 'destination';
				} else if ('themes' === $screen->base && preg_match('/themes\.php/', $url)) {
					$is_destination = 'destination';
				}
			}

			return '<a class="update ' . esc_attr(sanitize_html_class($is_destination)) . '" href="' . esc_url($url) . '">' . __('Update Upfront', 'upfront') . '</a>';
		}

		private function _is_user_able_to_update_core () {
			if (class_exists('WPMUDEV_Dashboard') && !empty(WPMUDEV_Dashboard::$site) && is_callable(array(WPMUDEV_Dashboard::$site, 'allowed_user'))) {
				return WPMUDEV_Dashboard::$site->allowed_user() && current_user_can('update_themes');
			}
			return current_user_can('update_themes');
		}

		public function core_upgrade_check () {
			if (!is_user_logged_in()) return false;
			if (!$this->_is_user_able_to_update_core()) return false;
			if (version_compare(wp_get_theme('upfront')->Version, '1.0-alpha-1', 'ge')) return false;
			if (class_exists('Upfront_Compat')) return false; // Class `Upfront_Compat` only exists in v1 and up

			add_action(
				(is_admin() ? 'admin_footer' : 'wp_footer'), 
				array($this, 'core_upgrade_nag')
			);
			if (is_admin()) add_action('admin_notices', array($this, 'core_upgrade_notice'));
		}

		public function core_upgrade_notice () {
			?>
<div class="error">
	<p>
		<?php echo esc_html($this->_get_message_text()); ?>
		<?php echo $this->_get_update_link(); ?>
	</p>
</div>
			<?php
		}

		public function core_upgrade_nag () {
			?>
<div id="upfront-core-update_nag">
	<div class="upfront-version_compatibility-nag">
		<p><?php echo esc_html($this->_get_message_text()); ?></p>
	    <div>
	        <a href="#continue" class="boot"><?php esc_html_e('I understand the risks, but don\'t want to update now', 'upfront'); ?></a>
	        <?php echo $this->_get_update_link(); ?>
	    </div>
	</div>
</div>
<style>
#upfront-core-update_nag {
	position: fixed;
	top: -40px; /* because admin bar */
	bottom: 0;
	left: 0;
	right: 0;
	z-index: 9999999999999999999999;
	background: rgba(256,256,256,.7);
}
#upfront-core-update_nag .upfront-version_compatibility-nag {
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	overflow: hidden;
}
#upfront-core-update_nag .upfront-version_compatibility-nag a {
	width: 40%;
	float: left;
}
.wp-admin #upfront-core-update_nag .upfront-version_compatibility-nag a {
	width: 30%;
}
#upfront-core-update_nag .upfront-version_compatibility-nag a.boot {
	font-size: 13px;
}
/* Various theme fixes */
#upfront-core-update_nag {
	box-sizing: border-box;
}
#upfront-core-update_nag * {
	box-sizing: border-box;
}
#upfront-core-update_nag .upfront-version_compatibility-nag > div {
	overflow: hidden;
}
/* quick responsive implementation */
@media all and (max-width: 699px) and (min-width: 220px) {
	#upfront-core-update_nag .upfront-version_compatibility-nag a {
		width: 100%;
		margin: 10px auto;
	}
}

/* front */
.upfront-version_compatibility-nag {
    margin: 0 auto;
    width: 90%;
    max-width: 600px;
    background: #fff;
    text-align: center;
    padding: 40px;
    box-shadow: 0 0 20px 0px rgba(0,0,0,.15);
    box-sizing: border-box;
}
.upfront-version_compatibility-nag p {
    font:normal 100 22px/1.7 'Open Sans', Helvetica Neueu, Helvetica, Arial, sans-serif; 
    margin-bottom: 2em;
    color:#777D82;
}
.upfront-version_compatibility-nag a {
    font:normal 100 18px 'Open Sans', Helvetica Neueu, Helvetica, Arial, sans-serif; 
    border-radius: 5px;
    margin: 10px 20px;
    text-decoration: none;
    display: inline-block;
    padding: 10px 25px;
    background-image: linear-gradient(-180deg, rgba(0,0,0,0.00) 0%, rgba(0,0,0,0.05) 100%);
    box-shadow: 0px 1px 0px 0px rgba(0,0,0,0.10);
}
.upfront-version_compatibility-nag a.update {
    color: #fff;
    background: #1FCD8F;
    padding: 15px 30px;

}
.upfront-version_compatibility-nag a.boot,
.upfront-version_compatibility-nag a.cancel {
    color: #777D82;
    background: #F0F0F0;
}

.upfront-version_compatibility-nag a.update:hover, 
.upfront-version_compatibility-nag a.boot:hover {
    background-image: linear-gradient(-180deg, rgba(0,0,0,0.08) 0%, rgba(0,0,0,0.00) 100%);
}
</style>
<script>
;(function ($) {

function init () {
	$(".upfront-version_compatibility-nag .boot, .upfront-version_compatibility-nag .update.destination").click(function (e) {
		if (e.preventDefault) e.preventDefault();
		if (e.stopPropagation) e.stopPropagation();

		$("#upfront-core-update_nag").remove();

		return false;
	});
}
$(init);

})(jQuery);
</script>
			<?php
		}
	}
	Upfront_ChildTheme_Admin_VersionCheck::serve();
}
