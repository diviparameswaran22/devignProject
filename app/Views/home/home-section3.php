<?php
$i = 0;
$classValue = [];
$dataValue = [];
foreach ( $whichController  as $key )
 {
    if ( $key[ 'admin_page_name' ] == 'home-section3' )
 {
        
        $classValue[ $i ] = $key[ 'admin_page_component_name' ];
        $dataValue[ $i ] = $key[ 'admin_page_component_data' ];
        $i++;
    }
}
?>

<!-- <section class="page-section" id="whyus">
    <div class="container">
        <div class="text-center">
            <h3>We help service businesses use their website as a growth engine.<br>Most entrepreneurs or companies
                think if their website looks flashy, leads will come. <br>A flashy, attractive website is not enough. It
                needs to have the right combination of design, content and technology to drive results.</h3>
        </div>
    </div>
</section> -->
<section class="page-section" id="whyus">
    <div class="container">
        <div class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?></div>
    </div>
</section>