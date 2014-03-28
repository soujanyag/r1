<?php if($teaser){ ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print "iteration-$id"; ?>"<?php print $attributes; ?>>
  <div class="meta">
    <?php  drupal_add_css(path_to_theme() . '/css/style.css', 'theme', 'all'); ?>
    <div class="content clearfix row-fluid">
        <?php
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        //hide($content['field_tm_name']);
       //echo "<pre>";print_r($content);
        ?>
        <div class="">
           <?php if($page == ""){?> <div><h3 class="field-content"><?php print $node->field_sd_standard_number['und'][0]['value'];?> -
            <?php print l($title,'node/'.$node->nid);?></h3></div>
       
        <?php print ($node->field_sd_abstract['und'][0]['value']); //print render($content); ?>  <?php } ?>
         </div>
    </div>
  </div>
</div>
<?php } 

else{ ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print "iteration-$id"; ?>"<?php print $attributes; ?>>
  <div class="meta">
    <?php  drupal_add_css(path_to_theme() . '/css/style.css', 'theme', 'all'); ?>
    <div class="content clearfix row-fluid">
        <?php
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_sd_standard_number']);
       
        ?>
        <!-- To Print Standard Number -->
        <div class="content"><h3><?php print render($content['field_sd_standard_number']); ?></h3> </div> <br/>
        <!-- Title -->
        <div> <h4><?php print $title;?></h4></div><br/>
        
         <!-- Standard Development Committee -->
        <?php print render($content['field_sd_standard_dev_comm']);?><br/>
        
        <!-- Book of Standards Volume -->
        <h4><?php print render($content['field_sd_book_of_sds_volume']);?></h4><br/>
        
        
        <div> 
         <?php  
        
         foreach ($node->field_sd_url_grouping['und'] as $oneRow) {
          $row = field_collection_item_load($oneRow['value']);
          
            /******  Standards Purchase Link *******/
             if($row->field_sd_standards_purchase_link['und'][0]['url'] != ""){
                   echo l("PDF",$row->field_sd_standards_purchase_link['und'][0]['url']);
                   echo "<br/><br/>";
             }

             /******* Standards Purchase Link Print ********/

             if($row->field_sd_purchase_link_pri['und'][0]['url']){
                   echo  l($row->field_sd_purchase_link_pri['und'][0]['title'] , $row->field_sd_purchase_link_pri['und'][0]['url']);
                   echo "<br/><br/>";
             }
               /******* Standards Purchase Link Redline ********/
             if($row->field_sd_purchase_link_re['und'][0]['url']){
                   echo l($row->field_sd_purchase_link_re['und'][0]['title'], $row->field_sd_purchase_link_re['und'][0]['url']);
                   echo "<br/><br/>";
             }
                   
          }
          echo "<br/>";
          
        ?>
            <!------------- Abstruct-------------------->
            <div class='content clearfix row-fluid'><?php print render($content['field_sd_abstract']);?></div>
            
            <!------------- Scope -------------------->
            <div><?php print render($content['field_sd_scope']);?></div>
            
            <!------------- Reference Documents -------------------->
            <div><?php print render($content['field_sd_reference_documents']);?></div>
            
            <!------------- ICS Codes -------------------->
            <div><?php print render($content['field_sd_ics_codes_']);?></div>
        </div>
        
        <!-------------Rreference Documents-------------------->
    <div>
        <h3>Related Standards</h3>
   <?php    
            
            if($rel_standards = module_invoke('views', 'block_view', 'related_standards-block')){ //Keywords
                print render($rel_standards);
            }else if ($rel_standards = module_invoke('views', 'block_view', 'related_standards-block_1')){ //Category 
                print render($rel_standards);
            } else if($rel_standards = module_invoke('views', 'block_view', 'related_standards-block_2')){ // tags
             print render($rel_standards);
            }
    ?>
        </div>
    
    </div>
  </div>
</div>
<?php } ?>
