<?php
$i = 0;
$classValue = [];
$dataValue = [];
foreach ( $whichController  as $key )
 {
    if ( $key[ 'admin_page_name' ] == 'home-section6' )
 {
        
        $classValue[ $i ] = $key[ 'admin_page_component_name' ];
        $dataValue[ $i ] = $key[ 'admin_page_component_data' ];
        $i++;
    }
}
?>
<!-- <section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 col-lg-6">
                <h2 class="section-heading">Our Web Development Portfolio</h2>
                <h3 class="section-subheading text-muted">Portfolio</h3>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="filtering">
                    <span data-filter="*" class="active">All</span>
                    <span data-filter=".Branding" class="">Branding</span>
                    <span data-filter=".Web" class="">Web</span>
                    <span data-filter=".Ecomerce" class="">Ecomerce</span>
                </div>
            </div>
            <div class="col-12 text-center w-100">
                <div class="row grid form-row gallery text-center" style="position: relative; height: 1141.12px;">
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/1.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                </a>
                                <h4>Dynamic News Publishing</h4>
                                <p>[Foundershope]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/2.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                </a>
                                <h4>Pune Dentist </h4>
                                <p>[Dr. Pharande's]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Branding"
                        style="position: absolute; left: 0px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/branding.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                </a>
                                <h4>D3V Technology Solutions</h4>
                                <p>[Twitter]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 270px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/4.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                </a>
                                <h4>Womens Leggings and Pants</h4>
                                <p>[GearBunch]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 0px; top: 747.156px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/5.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                </a>
                                <h4>Cakes and Flowers</h4>
                                <p>[MUMG]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 767.547px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/7.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                </a>
                                <h4>Drums and Percussion</h4>
                                <p>[TY KEY]</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 col-lg-6">
                <h2 class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?></h2>
                <h3 class="<?php echo $classValue[1]?>"><?php echo $dataValue[1]?></h3>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="<?php echo $classValue[2]?>">
                    <span data-filter="*" class="active"><?php echo $dataValue[2]?></span>
                    <span data-filter=".Branding" class=""><?php echo $dataValue[3]?></span>
                    <span data-filter=".Web" class=""><?php echo $dataValue[4]?></span>
                    <span data-filter=".Ecomerce" class=""><?php echo $dataValue[5]?></span>
                </div>
            </div>
            <div class="col-12 text-center w-100">
                <div class="row grid form-row gallery text-center" style="position: relative; height: 1141.12px;">
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[6]?>">
                                <img src="<?php echo $dataValue[6]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[7]?>"></i>
                                </a>
                                <?php echo $dataValue[7]?>
                                <?php echo $dataValue[8]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/2.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[9]?>"></i>
                                </a>
                                <?php echo $dataValue[9]?>
                                <?php echo $dataValue[10]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Branding"
                        style="position: absolute; left: 0px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/branding.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[11]?>"></i>
                                </a>
                                <?php echo $dataValue[11]?>
                                <?php echo $dataValue[12]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 270px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[13]?>">
                                <img src="<?php echo $dataValue[13]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[14]?>"></i>
                                </a>
                                <?php echo $dataValue[14]?>
                                <?php echo $dataValue[15]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 0px; top: 747.156px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[16]?>">
                                <img src="<?php echo $dataValue[16]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[17]?>"></i>
                                </a>
                                <?php echo $dataValue[17]?>
                                <?php echo $dataValue[18]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 767.547px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[19]?>">
                                <img src="<?php echo $dataValue[19]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[20]?>"></i>
                                </a>
                                <?php echo $dataValue[20]?>
                                <?php echo $dataValue[21]?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(function() {
    $(".grid").masonry({
        itemSelector: ".grid-item"
    });

    $(".filtering").on("click", "span", function() {
        var a = $(".gallery").isotope({});
        var e = $(this).attr("data-filter");
        a.isotope({
            filter: e
        });
    });
    $(".filtering").on("click", "span", function() {
        $(this).addClass("active").siblings().removeClass("active");
    });
})
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script> -->