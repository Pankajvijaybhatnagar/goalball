<?php
include "layouts/header.php";
include "parts/_db.php";
?>

<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Events </h1>
                    <ol class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="index" title="">Home</a></li>
                        <li class="breadcrumb-item ">Events</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>

<?php
// print_r( $conn);

$sql = "SELECT * FROM `events`";
$res=$conn->query($sql);



?>

<section>
    <div class="w-100 pt-100 pb-110 position-relative">
        <div class="container">
            <div class="news-wrap2 position-relative w-100">
                <div class="row mrg30">
                    <?php 
                    if($res->num_rows>0){

                    while($rows = $res->fetch_assoc()){
                    ?>


                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="news-box2 brd-rd10 position-relative overflow-hidden w-100">
                            <div class="news-img2 position-relative overflow-hidden w-100">
                                <a href="event?e=<?php echo $rows['slug'] ?>" title=""><img class="img-fluid w-100"
                                        src="assets/images/events/<?php echo $rows['featured_image'] ?>" title="<?php echo $rows['title'] ?>"></a>
                            </div>
                            <div class="news-info2 brd-rd10 bg-color6 position-relative w-100">
                               
                                <h3 class="mb-0"><a href="event?e=<?php echo $rows['slug'] ?>" title=""><?php echo strtoupper( $rows['title'])  ?></a></h3>
                                <h6>at <?php echo $rows['place']  ?></h6>
                                <ul class="meta mb-0 list-unstyled d-flex flex-wrap w-100">
                                    <li class="scndry-clr"><a href="event?e=<?php echo $rows['slug'] ?>" title=""><?php echo date("F j, Y", strtotime($rows['from_date']));  ?></a></li>
                                    <li><a href="event?e=<?php echo $rows['slug'] ?>" title="">Read more -></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <?php }}  ?>
                </div>
            </div><!-- News Wrap -->
            <!-- <div class="pagination-wrap mt-60 text-center w-100">
                <div class="pagination-inner d-inline-block">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">01</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);" title="">02</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">03</a></li>
                        <li class="page-item next"><a class="page-link" href="javascript:void(0);" title="">Next Page<i
                                    class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>Pagination Wrap -->
        </div>
    </div>
</section>




<?php
include 'layouts/footer.php';
?>