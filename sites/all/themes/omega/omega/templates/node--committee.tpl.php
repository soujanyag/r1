<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_cm_officers']);
      
      
      print render($content);
      $arr = array();
      $i=0;
      echo "<br/><b>Officers:</b><br/>";
      
      foreach ($node->field_cm_officers['und'] as $oneRow) {
          $row = field_collection_item_load($oneRow['value']);
          echo "<b>".$row->field_cm_officer_title['und'][0]['value']. "</b>:";
          echo $row->field_cm_officer_name['und'][0]['value']."<br/>";
         
          echo  $row->field_cm_officer_employer['und'][0]['value']."<br/>";
          echo  $row->field_cm_officer_email['und'][0]['email']."<br/>";
          
          if(isset($row->field_cm_ofcr_show_phone_number['und'])){
            if($row->field_cm_ofcr_show_phone_number['und'][0]['value'] == 1){
            echo  $row->field_cm_officer_phone_number['und'][0]['value'];
            }
          }
          echo "<br/>";
         $i++;
       }  
       
       
       
       /*foreach($arr as $row){
           foreach($row as $key=>$value){
              echo "<b>".$key.":</b>".$value."<br/>"; 
           }  
           echo "<br>";
       }*/
      // print_r($arr);
        //print_r '<pre>' . $arr . '</pre>';
   //  print_r($arr);
      
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>