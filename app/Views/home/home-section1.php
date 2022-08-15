<?php
$i = 0;
$classValue = [];
$dataValue = [];
foreach ( $whichController  as $key )
 {
    if ( $key[ 'admin_page_name' ] == 'home-section1' )
 {
        
        $classValue[ $i ] = $key[ 'admin_page_component_name' ];
        $dataValue[ $i ] = $key[ 'admin_page_component_data' ];
        $i++;
    }
}
?>

<!-- 
<header class = 'masthead'>
<div class = 'container'>
<div class = 'masthead-heading text-uppercase'>Conversion driven-websites for service based businesses</div>
<div class = 'masthead-Sub-heading'>Get qualified customers with result proven content marketing strategies</div>
<a class = 'btn btn-primary btn-xl text-uppercase' target = '_blank' href = '#'>Let's Discuss Your Project</a>
</div>
</header> -->

<header class='masthead'>
    <div class='container'>
        <div class='<?php echo $classValue[0]?>'><?php echo $dataValue[0]?></div>
        <div class='<?php echo $classValue[1]?>'><?php echo $dataValue[1]?></div>
        <a class='<?php echo $classValue[2]?>' target= '_blank' href='#'><?php echo $dataValue[2]?></a>
    </div>
</header>