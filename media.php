<?php include "layouts/header.php"; ?>

<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Gallery/Media </h1>
                    <ol class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item ">Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 1 -->
<section>
    <div class="w-100 pt-110 pb-50 position-relative">
        <div class="container">
            <h4 class="mb-3">1st National Goalball Championship 2017</h4>
            <div class="gallery-wrap v3 text-center position-relative w-100">
                <div class="row mrg30" id="gallery-container-1">
                    <!-- Images for Section 1 will be loaded here -->
                </div>
                <div class="text-center mt-4">
                    <button id="load-more-1" class="btn btn-primary">Show More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section>
    <div class="w-100 pt-110 pb-50 position-relative">
        <div class="container">
            <h4 class="mb-3">2nd National Goalball Championship 2022-23</h4>
            <div class="gallery-wrap v3 text-center position-relative w-100">
                <div class="row mrg30" id="gallery-container-2">
                    <!-- Images for Section 2 will be loaded here -->
                </div>
                <div class="text-center mt-4">
                    <button id="load-more-2" class="btn btn-primary">Show More</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 3 -->
<section>
    <div class="w-100 pt-110 pb-110 position-relative">
        <div class="container">
            <h4 class="mb-3">3rd National Goalball Championship 2023-24</h4>

            <div class="gallery-wrap v3 text-center position-relative w-100">
                <div class="row mrg30" id="gallery-container-3">
                    <!-- Images for Section 2 will be loaded here -->
                </div>
                <div class="text-center mt-4">
                    <button id="load-more-3" class="btn btn-primary">Show More</button>
                </div>
            </div>
        </div>
    </div>
</section>






<?php include "layouts/footer.php"; ?>

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
            data: {
                folder,
                start,
                limit
            },
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

    // Initial load for all sections
    loadImages('first', '#gallery-container-1', '#load-more-1');
    loadImages('second', '#gallery-container-2', '#load-more-2');
    loadImages('third', '#gallery-container-3', '#load-more-3');

    // Load more on button click for Section 1
    $('#load-more-1').on('click', function() {
        loadImages('first', '#gallery-container-1', '#load-more-1');

    });

    // Load more on button click for Section 2
    $('#load-more-2').on('click', function() {
        loadImages('second', '#gallery-container-2', '#load-more-2');

    });
    $('#load-more-3').on('click', function() {
    loadImages('third', '#gallery-container-3', '#load-more-3');
        
    });
});
</script>