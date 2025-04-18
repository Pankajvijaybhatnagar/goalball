<?php include "layouts/header.php"; ?>

<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Gallery Style 3</h1>
                    <ol class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Gallery Style 3</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-110 pb-110 position-relative">
        <div class="container">
            <div class="gallery-wrap v3 text-center position-relative w-100">
                <div class="row mrg30" id="gallery-container">
                    <!-- Images will be loaded here -->
                </div>
                <div class="text-center mt-4">
                    <button id="load-more" class="btn btn-primary">Show More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "layouts/footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    const folder = 'third';
    let start = 0;
    const limit = 9;

    function loadImages() {
        $.ajax({
            url: 'parts/scan_images.php',
            method: 'POST',
            data: { folder, start, limit },
            success: function(response) {
                if (response.images && response.images.length > 0) {
                    response.images.forEach(function(imageName, index) {
                        const imageUrl = "./uploads/"+folder + '/' + imageName;
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
                        $('#gallery-container').append(html);
                    });

                    start += limit;

                    if (start >= response.total) {
                        $('#load-more').hide();
                    }
                } else {
                    $('#load-more').hide();
                    if (start === 0) {
                        $('#gallery-container').html('<p>No images found.</p>');
                    }
                }
            },
            error: function() {
                alert('Failed to load images.');
            }
        });
    }

    // Initial load
    loadImages();

    // Load more on button click
    $('#load-more').on('click', function() {
        loadImages();
    });
});
</script>
