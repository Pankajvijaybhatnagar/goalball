<?php
include "layouts/header.php";
include "parts/_db.php";
$slug = isset($_GET['e']) ?$_GET['e']:null;


$sql = "SELECT * FROM `events` WHERE slug= '$slug'";
$res=$conn->query($sql);

if($res->num_rows>0){
$row = $res->fetch_assoc();
}else{
    $slug=null;
    $row=null;
}

?>
<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0"><?php echo  $slug ?? "Not Found"  ?> </h1>
                    <ol class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="index" title="">Home</a></li>
                        <li class="breadcrumb-item ">Events</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>



<section>
    <div class="w-100 pt-110 pb-120 position-relative">
        <div class="container">
            <div class="page-wrap wide-sec3 position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 col-lg-8">
                        <div class="post-detail w-100">
                            <div class="post-feat-img serv-detail-img brd-rd10 position-relative overflow-hidden w-100">
                                <img class="img-fluid w-100" src="assets/images/resources/<?php echo $rows['featured_image'] ?>"
                                    alt="Service Detail Image">
                                <span class="brd-rd10 thm-bg serv-post-date position-absolute"></span>
                                <span class="serv-post-authr position-absolute"><i class="fas fa-ball thm-clr"></i><a
                                        href="javasctipt:void()" title="">Goalball Federation of India</a></span>
                            </div>
                            <h1>
                            <?php echo strtoupper( $row['title'])  ?>
                            </h1>
                            <h6>From : <?php echo date("F j, Y", strtotime($row['from_date']));  ?> to <?php echo date("F j, Y", strtotime($row['to_date']));  ?></h6>
                               
                            <p style="text-align:justify;" class="mb-0">
                                <?php
                                echo $row['description']
                                ?>
                            </p>
                            <blockquote class="blockquote text-center thm-bg brd-rd10">
                                <i class="fas fa-quote-left d-block"></i>
                                <p class="mb-0">dolor st amet, consetetur sadipscing elit dolore lorime smagna aliquyam.
                                </p>
                            </blockquote>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <aside class="sidebar w-100">
                            <div class="widget-box v3 brd-rd10 bg-color6 overflow-hidden w-100">
                                <h4 class="position-relative tit-shp thm-shp widget-title3">Other Events</h4>
                                <div class="mini-posts-wrap w-100">
                                    <div class="mini-post-box d-flex flex-wrap align-items-center">
                                        <a class="brd-rd5 overflow-hidden" href="product-detail.html" title=""><img
                                                class="img-fluid" src="assets/images/resources/mini-product-img1-1.jpg"
                                                alt="Mini Product Image 1"></a>
                                        <div class="mini-post-info">
                                            <h5 class="mb-0"><a href="product-detail.html" title="">Brown Vintage
                                                    Gloves</a></h5>
                                            <span
                                                class="price scndry-clr d-block"><ins><small>$</small>85.00</ins><del><small>$</small>45.00</del></span>
                                        </div>
                                    </div>
                                    <div class="mini-post-box d-flex flex-wrap align-items-center">
                                        <a class="brd-rd5 overflow-hidden" href="product-detail.html" title=""><img
                                                class="img-fluid" src="assets/images/resources/mini-product-img1-2.jpg"
                                                alt="Mini Product Image 2"></a>
                                        <div class="mini-post-info">
                                            <h5 class="mb-0"><a href="product-detail.html" title="">Red Leather
                                                    Jacket</a></h5>
                                            <span
                                                class="price scndry-clr d-block"><ins><small>$</small>50.00</ins><del><small>$</small>60.00</del></span>
                                        </div>
                                    </div>
                                    <div class="mini-post-box d-flex flex-wrap align-items-center">
                                        <a class="brd-rd5 overflow-hidden" href="product-detail.html" title=""><img
                                                class="img-fluid" src="assets/images/resources/mini-product-img1-3.jpg"
                                                alt="Mini Product Image 3"></a>
                                        <div class="mini-post-info">
                                            <h5 class="mb-0"><a href="product-detail.html" title="">Brown Cowboy Hat</a>
                                            </h5>
                                            <span
                                                class="price scndry-clr d-block"><ins><small>$</small>25.00</ins><del><small>$</small>20.00</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </aside><!-- Sidebar -->
                    </div>
                </div>
            </div><!-- Page Wrap -->
        </div>
    </div>
</section>












<?php
include 'layouts/footer.php';
?>