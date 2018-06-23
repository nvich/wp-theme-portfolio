<aside>
  <h2><?php _e('Categories'); ?></h2>
  <ul>
    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
  </ul>
  <h2><?php _e('Archives'); ?></h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
  <h2><?php _e('Example Widget'); ?></h2>
  <div>
    <?php dynamic_sidebar('example_widget'); ?>
  </div>
</aside>
