<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <div class="block-inner clearfix">
   <ul class="list-group--two">
    <?php if ($block->subject): ?>
    <li<?php print $title_attributes; ?>><?php print $block->subject; ?></li>
    <?php endif; ?>
   
    <?php print $content ?>
    </ul>
  </div>
</<?php print $tag; ?>>


