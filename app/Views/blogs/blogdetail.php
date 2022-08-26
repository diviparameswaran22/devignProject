<link rel="stylesheet" href="<?php echo base_url() . '/assets/css/style.css' ?>" />
<link rel="stylesheet" href="<?php echo base_url() . '/assets/css/new-style.css' ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    img{
       width: 100%;
       display: block;
  margin-left: auto;
  margin-right: auto;
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
                            <?php foreach ($blogdata as $row ){
                            echo '<h2>'.$row['blog_title'].'</h2>';
                            echo '<h6 style="color: dodgerblue;">Category: '.$row['category'].'&nbsp;&nbsp;&nbsp; Created Date:'.$row['created_date'].'</h6>';
                            echo $row['blog_detail'];
                            echo '<h6>'.$row['author'].'</h6>';
                            
                        }
                            
                            ?>

                       
                        <!-- end  here, till the last div that comes after the end of article tag-->
                    </div>
                    <!-- <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="/blogs/page/1">1</a></li>
                            <li class="page-item"><a class="page-link" href="/blogs/page/2">2</a></li>
                            <li class="page-item"><a class="page-link" href="/blogs/page/3">3</a></li>
                            <li class="page-item"><a class="page-link" href="/blogs/page/4">4</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="/blogs/page/2"><i
                                        class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h2 class="section-heading">Category</h2>
                        <ul class="list cat-list">
                            <li>
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
                            </li>
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