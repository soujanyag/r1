<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print "iteration-$id"; ?>"<?php print $attributes; ?>>
  <div class="meta">
    <?php  drupal_add_css(path_to_theme() . '/css/style.css', 'theme', 'all'); ?>
    <div class="content clearfix row-fluid">
        <?php
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        //hide($content['field_tm_name']);
        hide($content['field_tm_additional_information']);
        hide($content['field_tm_category']);
        ?>
        <?php print render($content); ?>
      
        <div class="testimonial_meta">
          <div class="color field-item"><?php print $title; ?></div>
          <span class=""><?php print render($content['field_tm_additional_information']) ; ?></span>
          <!--<span class=""><?php //print render($content['field_tm_category']) ; ?></span>-->
        </div>
      
    </div>
  </div>
</div>