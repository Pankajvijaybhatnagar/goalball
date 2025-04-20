

<?php
include "layouts/header.php";
?>

<?php
// Event Data Array (you can fetch from DB later if needed)
$events = [
    [
        "title" => "4th National Goalball Championship 2024-25",
        "location" => "Zila Kida Sankul Bhawan, Gondia, Maharashtra",
        "date" => "26-28 Dec 2024"
    ],
    [
        "title" => "3rd National Goalball Championship 2023-24",
        "location" => "Dr. Bhim Rao Ambedkar Sports Stadium, Saharanpur, Uttar Pradesh",
        "date" => "26-28 Mar 2024"
    ],
    [
        "title" => "2nd National Goalball Championship 2022-23",
        "location" => "MDU Rohtak",
        "date" => "14-16 Oct 2024"
    ],
    [
        "title" => "Goalball Federation Cup 2021",
        "location" => "Dharamshala, Himachal Pradesh",
        "date" => "27-28 Dec 2021"
    ],
    [
        "title" => "PRERNA Goalball Event 2019",
        "location" => "Maharaja Sayajirao University of Baroda, Gujarat",
        "date" => "03-04 Aug 2019"
    ],
    [
        "title" => "PRERNA Goalball Event 2019",
        "location" => "Maharaja Sayajirao University of Baroda, Gujarat",
        "date" => "03-04 Aug 2019"
    ],
    [
        "title" => "1st National Goalball Seminar with IBSA Support 2018",
        "location" => "Thyagraj Stadium, New Delhi",
        "date" => "11-13 Dec 2018"
    ],
    [
        "title" => "1st National Goalball Championship 2017",
        "location" => "Indoor Rohru, Himachal Pradesh",
        "date" => "16-17 Sep 2017"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>National Goalball Championships</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CDN or local -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-banner {
            height: 400px;
            position: relative;
            overflow: hidden;
        }
        .hero-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .banner-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 30px 60px;
            border-radius: 10px;
        }
        .banner-overlay h2, .banner-overlay p {
            color: #fff;
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<!-- Header -->
<!-- <header class="bg-dark text-white py-3">
    <div class="container text-center">
        <h1>National Goalball Championship Events</h1>
        <p class="mb-0">Organized Nationwide with Passion & Purpose</p>
    </div>
</header> -->

<!-- Hero Banner -->
<section class="hero-banner">
    <!-- <img src="assets/images/goalball-banner.jpg" alt="Goalball Banner"> -->
    <div class="banner-overlay text-center">
        <h2 class="display-5 fw-bold">National Goalball Championships</h2>
        <p class="lead">Uniting Passion, Power & Performance</p>
    </div>
</section>

<!-- Event Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="text-primary">Event History</h2>
            <p class="text-muted">Discover past events from 2017 to 2024</p>
        </div>
        <div class="row">
            <?php foreach ($events as $event): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($event['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($event['location']); ?></p>
                            <p class="text-muted">Dates: <?php echo htmlspecialchars($event['date']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Footer -->
<!-- <footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p class="mb-1">&copy; <?php echo date("Y"); ?> National Goalball Federation</p>
        <small>Designed & Developed by Your Team</small>
    </div>
</footer> -->

<!-- Optional JS for Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>











<?php
include 'layouts/footer.php';
?>