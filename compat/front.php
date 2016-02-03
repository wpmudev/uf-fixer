<?php

/**
 * Temporary version check nag
 */
if (!is_admin() && !function_exists('upfront_version_check_script')) {
    function upfront_version_check_script () {
        if (function_exists('upfront_exporter_is_running') && upfront_exporter_is_running()) return false; // Not in exporter
        if (version_compare(wp_get_theme('upfront')->Version, '1.0-alpha-1', 'ge')) return false;
?>
<style type="text/css">
.mfp-bg.uf-upgrade-notice {
    background:#fff;
    background:rgba(255,255,255,.75);
}
.uf-upgrade-notice .mfp-close {
    display:none;
}
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
<script type="text/javascript">
;(function ($, undefined) {

    /**
     * Overridden Upfront.Application.start
     *
     * Actual application starting.
     *
     * @return {Boolean}
     */
    function application_override () {
        _nag = $.magnificPopup.open({
            items: {
                src: '' + 
                    '<div class="upfront-version_compatibility-nag">' +
                        '<p>You have recently upgraded your theme. Please Upgrade to <b>Upfront 1.0</b> in order to be able to edit this theme.</p>' +
                        '<div>' +
                            '<a class="update" href="<?php echo esc_url(admin_url("themes.php")); ?>">Update</a>' +
                        '</div>' +
                    '</div>' +
                '',
                type: 'inline'
            },
            mainClass: 'uf-upgrade-notice'
        });
        return false;
    }

    (function boot () {
        if (!((window.Upfront || {}).Events || {}).on) return setTimeout(boot);
        Upfront.Events.on("application:loaded:layout_editor", function () {
            // Monkeypatch the Application.start method so we can't run whatsoever
            Upfront.Application.start = application_override;
        });
    })();

})(jQuery);
</script>
<?php
    }
    add_action('wp_footer', 'upfront_version_check_script');
}
