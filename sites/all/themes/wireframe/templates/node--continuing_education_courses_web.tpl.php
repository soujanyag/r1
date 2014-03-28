<?php if(!$teaser){ ?>

<div class="grid-6 alpha">
    <?php print render($content['field_ce_about_the_course']); ?>
     <?php 
            print render($content['field_ce_instructor']); 
           
            print render($content['field_ce_video']);
            
            if($node->field_ce_registration_deadline){
                 print "<b>Registration Deadline : </b>";
                 $deadline  = $node->field_ce_registration_deadline['und'][0]['value'];
                 $deadline = _nt_utilities_tz_offset($deadline);
                 print format_date($deadline,"long");
                 
            }
            echo "<br />";
            print render($content['field_ce_location']);
            echo "<br />";
            print render($content['field_ce_learning_outcomes']);
            echo "<br />";
            print render($content['field_ce_course_brochure']);
            echo "<br />";
            print render($content['field_ce_syllabus']);
            echo "<br />";
            print render($content['field_ce_course_format']);
            echo "<br />";
            print render($content['field_ce_course_sections']);
            echo "<br />";
            print render($content['field_ce_product_code_']);
            echo "<br />";
            print render($content['field_ce_category']);
            echo "<br />";
            print render($content['field_ce_type']);
            
            
     ?>
    
    
    
  </div>
 
<div class="grid-2">
      <span>
    <?php print "<b>Next Session : </b><br/>";
          print get_startend_custom_format($node->field_ce_start_and_end_date['und'][0]['value'],$node->field_ce_start_and_end_date['und'][0]['value2']);?>
          
      </span><br /><br />
      <span>
          <?php print "<b>Cost : </b>"; 
          if($node->field_ce_member_cost['und'][0]['value']){
                print $node->field_ce_member_cost['und'][0]['value'] ." Members, ";
          }
          if($node->field_ce_non_member_cost['und'][0]['value']){
                print $node->field_ce_non_member_cost['und'][0]['value'] ." Non Members";
          }
        echo "<br /><br />";
          print render($content['field_ce_ceus']);
          
          if($node->field_ce_mem_link['und'][0]['value'])
                print l("Member Registration",$node->field_ce_mem_link['und'][0]['value']);
          echo "</br>";
          
          if($node->field_non_mem_link['und'][0]['value'])
                print l("Non Member Registration",$node->field_non_mem_link['und'][0]['value']);
          ?>
          </span>
</div>
 
<div class="panel-panel panel-footer grid-6 alpha omega">
  <?php //print render($content); ?>
</div>
<?php } ?>