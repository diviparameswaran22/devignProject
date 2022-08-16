<?php
$i = 0;
$classValue = [];
$dataValue = [];
foreach ( $whichController  as $key )
 {
    if ( $key[ 'admin_page_name' ] == 'home-section2' )
 {
        
        $classValue[ $i ] = $key[ 'admin_page_component_name' ];
        $dataValue[ $i ] = $key[ 'admin_page_component_data' ];
        $i++;
    }
}
?>


<!-- <section class="page-section bg-shape-image-position" id="services">
            <div class="container">
               <div class="bg-shape-image">
                    <img class="light-image" src="../assets/images/background-shape.svg" alt="Bg images">
                </div>
               <div class="left-heading">
                  <h2 class="section-heading">Transparent Pune based <br>Web Development Services</h2>
               </div>
               <div class="row text-center">
                  <div class="col-md-12 col-lg-4">
                     <div class="Design">
                        <span class="icon">
                        <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                        <h4 class="my-3">Design</h4>
                        <p class="text-muted">Is the pain of poorly performing websites hurting you? Find out how to make websites that converts better. Hire an expert website design company in Pune.</p>
                        <a class="axil-button" data-hover="Learn More" target="_blank" href="https://devigntech.com/web-designing-services">Learn More</a>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="Ecommerce">
                        <span class="icon">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        </span>
                        <h4 class="my-3">Ecommerce Website Development</h4>
                        <p class="text-muted">Do you want to avoid mistakes done by other store owners? Our ecommerce developers will make an online store with robust features to attract buyers.</p>
                        <a class="axil-button" data-hover="Learn More" target="_blank" href="https://devigntech.com/ecommerce-web-development-services-pune-india">Learn More</a>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="Mobile-app">
                        <span class="icon">
                        <i class="fa fa-code" aria-hidden="true"></i>
                        </span>
                        <h4 class="my-3">PHP Application Development</h4>
                     <p class="text-muted">Build your secure and user friendly software application with PHP CodeIgniter to establish trust with your users</p>
                        <a class="axil-button" data-hover="Learn More" target="_blank" href="https://devigntech.com/web-and-software-application-development">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->

         <section class="page-section bg-shape-image-position" id="services">
            <div class="container">
               <div class="bg-shape-image">
                    <img class="<?php echo $classValue[0]?>" src="<?php echo $dataValue[0]?>" alt="Bg images">
                </div>
               <div class="left-heading">
                  <h2 class="<?php echo $classValue[1]?>"><?php echo $dataValue[1]?></h2>
               </div>
               <div class="row text-center">
                  <div class="col-md-12 col-lg-4">
                     <div class="Design">
                        <span class="icon">
                        <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                        <h4 class="<?php echo $classValue[2]?>"><?php echo $dataValue[2]?></h4>
                        <p class="<?php echo $classValue[3]?>"><?php echo $dataValue[3]?></p>
                        <a class="<?php echo $classValue[4]?>" data-hover="Learn More" target="_blank" href="https://devigntech.com/web-designing-services"><?php echo $dataValue[4]?></a>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="Ecommerce">
                        <span class="icon">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        </span>
                        <h4 class="<?php echo $classValue[5]?>"><?php echo $dataValue[5]?></h4>
                        <p class="<?php echo $classValue[6]?>"><?php echo $dataValue[6]?></p>
                        <a class="<?php echo $classValue[7]?>" data-hover="Learn More" target="_blank" href="https://devigntech.com/ecommerce-web-development-services-pune-india"><?php echo $dataValue[7]?></a>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="Mobile-app">
                        <span class="icon">
                        <i class="fa fa-code" aria-hidden="true"></i>
                        </span>
                        <h4 class="<?php echo $classValue[8]?>"><?php echo $dataValue[8]?></h4>
                     <p class="<?php echo $classValue[9]?>"><?php echo $dataValue[9]?></p>
                        <a class="<?php echo $classValue[10]?>" data-hover="Learn More" target="_blank" href="https://devigntech.com/web-and-software-application-development"><?php echo $dataValue[10]?></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>