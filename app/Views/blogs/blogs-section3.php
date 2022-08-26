<link rel="stylesheet" href="<?php echo base_url() . '/assets/css/style.css' ?>" />
<link rel="stylesheet" href="<?php echo base_url() . '/assets/css/new-style.css' ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.pagination {
    height: 36px;
    margin: 18px 0;
    color: #FFC800;
    
}

.pagination ul {
    display: inline-block;
    *display: inline;
    /* IE7 inline-block hack */
    *zoom: 1;
    margin-left: 0;
    color: #ffffff;
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    background-color: white;
}

.pagination li {
    display: inline;
    color: #FFC800;
}

.pagination a {
    float: left;
    padding: 0 14px;
    line-height: 34px;
    color: #FFC800;
    text-decoration: none;
    border: 1px solid #ddd;
    border-left-width: 0;
}

.pagination a:hover,
.pagination .active a {
    background-color: #FFC800;
    color: #ffffff;
}

.pagination a:focus {
    background-color: #FFC800;
    color: #ffffff;
}


.pagination .active a {
    color: #ffffff;
    cursor: default;
}

.pagination .disabled span,
.pagination .disabled a,
.pagination .disabled a:hover {
    color: #999999;
    background-color: transparent;
    cursor: default;
}

.pagination li:first-child a {
    border-left-width: 1px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}

.pagination li:last-child a {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}

.pagination-centered {
    text-align: center;
}

.pagination-right {
    text-align: right;
}

.pager {
    margin-left: 0;
    margin-bottom: 18px;
    list-style: none;
    text-align: center;
    color: #FFC800;
    *zoom: 1;
}

.pager:before,
.pager:after {
    display: table;
    content: "";
}

.pager:after {
    clear: both;
}

.pager li {
    display: inline;
    color: #FFC800;
}

.pager a {
    display: inline-block;
    padding: 5px 14px;
    color: #FFC800;
    background-color: #fff;
    border: 1px solid #ddd;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
}

.pager a:hover {
    text-decoration: none;
    background-color: #f5f5f5;
}

.pager .next a {
    float: right;
}

.pager .previous a {
    float: left;
}

.pager .disabled a,
.pager .disabled a:hover {
    color: #999999;
}

</style>
<?php

 function getTheImage($row)
{
            $dom =  new \DOMDocument('1.0', 'utf-8');
               @$dom->loadHtml( $row['blog_detail'] );
               $imageTags = $dom->getElementsByTagName('img');
                $i=0;
                foreach($imageTags as $tag) 
                {
               //    echo $tag->getAttribute('src');
                   $data=$tag->getAttribute('src');
                   return $data;
                   
                   $i++;
                   
                }
}
?>


<section class="page-section blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div class="row">
                        <!-- start from here col-lg--6 -->
                        <?php foreach ($blogdata as $row ){?>
                        <div class="col-lg-6">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" <?php 
                                     $imgAddress= getTheImage($row);?> src="<?php echo $imgAddress ?>"
                                        alt="Common Problems with Web Design Companies">
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php echo base_url().'/blog/blogDetail/'.$row['blog_id'] ?>"
                                        target="_blank">
                                        <h2><?php echo $row['blog_title']; ?></h2>
                                    </a>
                                    <ul class="blog-info-link mt-3 mb-4" style="
                                                    margin-top: auto !important;
                                                    ">
                                        <li><?php echo $row['category']; ?></li>
                                        <li><?php echo $row['created_date'] ?></li>
                                    </ul>
                                    <p style="margin-bottom: auto !important;"> <?php echo $row['blog_description'] ?>
                                    </p>
                                </div>
                            </article>
                        </div>
                        <?php } ?>
                        <!-- end  here, till the last div that comes after the end of article tag-->
                    </div>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                        <?php echo $pager->links();?>
                            <!-- <li class="page-item active"><a class="page-link" href="/blogs/page/1">1</a></li>
                            <li class="page-item"><a class="page-link" href="/blogs/page/2">2</a></li>
                            <li class="page-item"><a class="page-link" href="/blogs/page/3">3</a></li>
                            <li class="page-item"><a class="page-link" href="/blogs/page/4">4</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="/blogs/page/2"><i
                                        class="fa fa-angle-right"></i></a></li> -->
                        </ul>
                    </nav>
                    
                </div>
                
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h2 class="section-heading">Category</h2>
                        <ul class="list cat-list">
                        <?php foreach ($categoryCount as $row ){?>
                            <li>
                                <a href="<?php echo base_url().'/blog/blogCategory/'.$row['category'];?>" class="d-flex">
                                    <p><?php echo $row['category'] ?></p>
                                    <p>&nbsp;(<?php echo $row['No_of_categories'] ?>)</p>
                                </a>
                            </li>
                            <?php }
                            
                            ?>
                                  <a href="<?php echo base_url().'/blog/showAll'?>" class="d-flex">
                                    <p>Show All Categories</p>
                                    
                                </a>
                            <!-- <li>
                                <a href="/blogs/category/ecommerce-conversion-tips" class="d-flex">
                                    <p>Ecommerce Conversion Tips</p>
                                    <p>&nbsp;(6)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/blogs/category/good-firms-listing" class="d-flex">
                                    <p>Good Firms Listing</p>
                                    <p>&nbsp;(1)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/blogs/category/human-relationships" class="d-flex">
                                    <p>Human Relationships</p>
                                    <p>&nbsp;(2)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/blogs/category/mobile-apps" class="d-flex">
                                    <p>Mobile Apps</p>
                                    <p>&nbsp;(2)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/blogs/category/small-business" class="d-flex">
                                    <p>Small Business</p>
                                    <p>&nbsp;(13)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/blogs/category/web-design-tips" class="d-flex">
                                    <p>Web Design Tips</p>
                                    <p>&nbsp;(9)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/blogs/category/wordpress" class="d-flex">
                                    <p>WordPress</p>
                                    <p>&nbsp;(4)</p>
                                </a>
                            </li> -->
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h2 class="section-heading">Newsletter</h2>
                        <form id="subbs" class="form-contact contact_form" method="POST">
                            <div class="form-group">
                                <input type="name" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter name'" placeholder="Enter name" required=""
                                    id="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder="Enter email" required=""
                                    id="email">
                            </div>
                            <div class="">
                                <button class="button button-contactForm btn_4" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</section>