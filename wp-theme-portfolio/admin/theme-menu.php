<div class="wrap">
    <h1>Admin theme menu</h1>
    <form method="post" action="options.php">
        <?php settings_fields('wp-potfolio-theme-settings'); ?>
        <?php do_settings_sections('wp-potfolio-theme-settings'); ?>
        <table class="form-table">
            <tbody>
                <?php /*
                <tr>
                    <th><label for="top_contact_info">Top contact info</label></th>
                    <td><input type="text" class="regular-text" id="top_contact_info" name="top_contact_info" value="<?php echo get_option('top_contact_info'); ?>" /></td>
                </tr>
                */ ?>
            </tbody>
        </table>
        <?php submit_button(); ?>
    </form>
</div>