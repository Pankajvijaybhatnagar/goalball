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
                                <img class="img-fluid w-100"
                                    src="uploads/<?php echo $row['image_folder_name'] ?>/<?php echo $row['featured_image'] ?>"
                                    alt="GFI">
                                <span class="brd-rd10 thm-bg serv-post-date position-absolute"></span>
                                <span class="serv-post-authr position-absolute"><i class="fas fa-ball thm-clr"></i><a
                                        href="javasctipt:void()" title="">Goalball Federation of India</a></span>
                            </div>
                            <h1>
                                <?php echo strtoupper( $row['title'])  ?>
                            </h1>
                            <h6>From : <?php echo date("F j, Y", strtotime($row['from_date']));  ?> to
                                <?php echo date("F j, Y", strtotime($row['to_date']));  ?></h6>

                            <p style="text-align:justify;" class="mb-0">
                                <?php
                                echo $row['description']
                                ?>
                            </p>
                            <blockquote class="blockquote text-center thm-bg brd-rd10">
                                <i class="fas fa-map-marker d-block"></i>

                                <p class="mb-0"> <?php echo $row['place'] ?>
                                </p>
                            </blockquote>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <aside class="sidebar w-100">
                            <div class="widget-box v3 brd-rd10 bg-color6 overflow-hidden w-100">
                                <h4 class="position-relative tit-shp thm-shp widget-title3">Other Events</h4>
                                <div class="mini-posts-wrap w-100">
                                    <?php
                                        // print_r( $conn);

                                        $sql = "SELECT * FROM `events`";
                                        $res=$conn->query($sql);
                                        ?>
                                         <?php 
                                        if($res->num_rows>0){

                                        while($rows = $res->fetch_assoc()){
                                        ?>
                                    <div class="mini-post-box d-flex flex-wrap align-items-center">
                                        <a class="brd-rd5 overflow-hidden" href="product-detail.html" title="">
                                            <img class="img-fluid" width="80px" src="assets/images/logo2.png"
                                                alt="Mini Product Image 1"></a>
                                        <div class="mini-post-info">
                                            <h5 class="mb-0"><a href="product-detail.html" title=""><?php echo strtoupper( $rows['title'])  ?></a></h5>
                                            <span
                                                class="price scndry-clr d-block"><?php echo $rows['place'] ?></span>
                                                <a href="event?e=<?php echo $rows['slug'] ?>" title="">Read more -></a>
                                        </div>
                                    </div>
                                    <?php }}  ?>
                                    

                                </div>
                            </div>

                        </aside><!-- Sidebar -->
                    </div>
                </div>
            </div><!-- Page Wrap -->
        </div>
    </div>
</section>

<sect










<?php
include 'layouts/footer.php';
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Reusable function to load images
    function loadImages(folder, targetDiv, loadMoreButton) {
        let start = $(targetDiv).children().length; // Get the current number of images in the target div
        const limit = 9;

        $.ajax({
            url: 'parts/scan_images.php',
            method: 'POST',
            data: { folder, start, limit },
            success: function(response) {
                if (response.images && response.images.length > 0) {
                    response.images.forEach(function(imageName, index) {
                        const imageUrl = "./uploads/" + folder + '/' + imageName;
                        const title = 'Gallery Image ' + (start + index + 1);

                        const html = `
                            <div class="col-md-6 col-sm-12 col-lg-4">
                                <div class="gallery-box v3 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="${imageUrl}" alt="${title}">
                                    <div class="gallery-info position-absolute">
                                        <h3 class="mb-0">Goalball India</h3>
                                        <a class="d-inline-block" href="${imageUrl}" data-fancybox="gallery"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        `;
                        $(targetDiv).append(html);
                    });

                    start += response.images.length;

                    // Hide the "Load More" button if all images are loaded
                    if (start >= response.total) {
                        $(loadMoreButton).hide();
                    }
                } else {
                    $(loadMoreButton).hide();
                    if (start === 0) {
                        $(targetDiv).html('<p>No images found.</p>');
                    }
                }
            },
            error: function() {
                alert('Failed to load images.');
            }
        });
    }

   
    
});
</script>