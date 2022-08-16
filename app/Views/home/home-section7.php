<?php
$i = 0;
$classValue = [];
$dataValue = [];
foreach ( $whichController  as $key )
 {
    if ( $key[ 'admin_page_name' ] == 'home-section7' )
 {
        
        $classValue[ $i ] = $key[ 'admin_page_component_name' ];
        $dataValue[ $i ] = $key[ 'admin_page_component_data' ];
        $i++;
    }
}
?>

<!-- <section class="page-section" id="Benefits">
            <div class="container">
               <div class="text-center">
                  <h2 class="section-heading">Benefits of Working with GyanDevign Tech Services</h2>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                        <h4>Economic Advantage</h4>
                        <p class="text-muted">Do you know that it can cost you upto $270K for an in house developer annually. At a lesser cost, you can work with a team that offers web experts and mobile consultants for your project (USD 10 - USD 25/ hour) at competitive prices.</p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                        <h4>Technology Expertise</h4>
                        <p class="text-muted">To assure you are in safe hands. Our Skilled WordPress and PHP  web experts will guide you on best practices for a successful web development project</p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-try" aria-hidden="true"></i></span>
                        <h4>Paid Trial for 2 weeks</h4>
                        <p class="text-muted">To gauge our tech capability by doing a pilot project. It gives you a clear idea, if you have found the right fit - process, communication and deliverables.</p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-inr" aria-hidden="true"></i></span>
                        <h4>Refund Guaranteed </h4>
                        <p class="text-muted">If you are not convinced in the trial period, we will refund you 50% of the effort cost. Yes, that is guaranteed.</p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <h4>Empathy For Free</h4>
                        <p class="text-muted">Let’s admit that. We are human beings first. And empathy is at the core of human relationships. And human relationships make life worth living and rewarding.</p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-pied-piper-pp" aria-hidden="true"></i></span>
                        <h4>Non Compete Agreement</h4>
                        <p class="text-muted">Your clients, code and project folders are never compromised. We signed a non compete agreement. You’re assured of a strong work ethic from the time of on-boarding.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <section class="page-section" id="Benefits">
            <div class="container">
               <div class="text-center">
                  <h2 class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?></h2>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                        <h4><?php echo $dataValue[1]?></h4>
                        <p class="<?php echo $classValue[2]?>"><?php echo $dataValue[2]?></p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                        <h4><?php echo $dataValue[3]?></h4>
                        <p class="<?php echo $classValue[4]?>"><?php echo $dataValue[4]?></p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-try" aria-hidden="true"></i></span>
                        <h4><?php echo $dataValue[5]?></h4>
                        <p class="<?php echo $classValue[6]?>"><?php echo $dataValue[6]?></p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-inr" aria-hidden="true"></i></span>
                        <h4><?php echo $dataValue[7]?></h4>
                        <p class="<?php echo $classValue[8]?>"><?php echo $dataValue[8]?></p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <h4><?php echo $dataValue[9]?></h4>
                        <p class="<?php echo $classValue[10]?>"><?php echo $dataValue[10]?></p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="benefit-col">
                        <span class="icon"><i class="fa fa-pied-piper-pp" aria-hidden="true"></i></span>
                        <h4><?php echo $dataValue[11]?></h4>
                        <p class="<?php echo $classValue[12]?>"><?php echo $dataValue[12]?></p>
                     </div>
                  </div>
               </div>
            </div>
         </section>