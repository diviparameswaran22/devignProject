<?php
$i = 0;
$classValue = [];
$dataValue = [];
foreach ( $whichController  as $key )
 {
    if ( $key[ 'admin_page_name' ] == 'home-section5' )
 {
        
        $classValue[ $i ] = $key[ 'admin_page_component_name' ];
        $dataValue[ $i ] = $key[ 'admin_page_component_data' ];
        $i++;
    }
}
?>
<!-- <section class="page-section" id="blockquote">
   <div class="container">
      <h3>Your Service Business Website will act as a growth engine by providing quality informational content, case studies and transparent pricing to convert opportunities into sales.</h3>
      <a class="axil-button btn-extra-large btn-transparent" target="_blank" href="#"><span class="button-text">Book a Call Now <i class="fa fa-caret-right" aria-hidden="true"></i> </span></a>
   </div>
</section> -->
<section class="page-section" id="blockquote">
   <div class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?>
      <a class="<?php echo $classValue[1]?>" target="_blank" href="#"><?php echo $dataValue[1]?><span class="button-text"><i class="fa fa-caret-right" aria-hidden="true"></i> </span></a>
   </div>
</section>