<?php
include "layouts/header.php";
?>

<head>
    <meta charset="UTF-8">
    <title>Equipment and Court Setup in Goalball</title>
    <style>
        /* General Layout Styling */
      

        .gfi_container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .gfi_h1, .gfi_h2 {
            color: #0a284b;
            font-weight: bold;
        }

        .gfi_h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .gfi_h2 {
            font-size: 2rem;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .gfi_section {
            margin-bottom: 40px;
        }

        /* Image Styling */
        .gfi_container img {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto 40px;
            display: block;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* List Styling */
        .gfi_ul {
            list-style: none;
            padding-left: 0;
        }

        .gfi_ul li {
            padding: 12px 0;
            font-size: 1.1rem;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
        }

        .gfi_ul li strong {
            font-weight: bold;
            margin-right: 10px;
        }

        /* Icons and Text Styling */
        .gfi_ul li svg {
            margin-right: 10px;
            font-size: 1.5rem;
            color: #0a284b;
        }

        /* Section Styling */
        .gfi_section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Section Title Styling */
        .gfi_section h2 {
            color: #0a284b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .gfi_h1 {
                font-size: 2rem;
                text-align: center;
            }

            .gfi_h2 {
                font-size: 1.5rem;

            }

            .gfi_container {
                padding: 15px;
            }

            .gfi_ul li {
                font-size: 1rem;
                padding: 10px 0;
            }

            .gfi_container img {
                max-width: 100%;
            }
        }
    </style>
</head>

<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
        <div class="gfi_container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="gfi_h1 mb-0">Equipment and Court Setup</h1>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>

<div class="gfi_container">
    <h1 class="gfi_h1">Equipment and Court Setup in Goalball</h1>
    <img src="goalball-01.jpg" alt="Goalball court and equipment">

    <div class="gfi_section">
        <h2 class="gfi_h2">Introduction</h2>
        <p>Goalball is a specialized sport that requires precise court setup and specific equipment to ensure fairness, accessibility, and safety for blind and visually impaired athletes. Everything from the ball to court markings is designed to be sensed through sound or touch.</p>
    </div>

    <div class="gfi_section">
        <h2 class="gfi_h2">Essential Equipment</h2>
        <ul class="gfi_ul">
            <li><span>🏐</span><strong>Goalball:</strong> A heavy rubber ball weighing approximately 1.25 kg, with holes and bells inside to help players locate it by sound.</li>
            <li><span>🧤</span><strong>Eyeshades:</strong> Worn by all players, ensuring equal visual impairment regardless of vision levels. These must block all light completely.</li>
            <li><span>🛡️</span><strong>Protective Gear:</strong> Players wear knee pads, elbow pads, hip pads, and sometimes chest protection to prevent injury while diving.</li>
            <li><span>👕</span><strong>Uniforms:</strong> Matching team uniforms with large, clear numbers on front and back for identification. No reflective material is allowed.</li>
            <li><span>🩹</span><strong>Eye Patches:</strong> Soft patches are worn under the eyeshades to prevent any light perception.</li>
        </ul>
    </div>

    <div class="gfi_section">
        <h2 class="gfi_h2">Court Setup</h2>
        <ul class="gfi_ul">
            <li><span>📏</span><strong>Dimensions:</strong> The court is 18 meters long and 9 meters wide, the same size as a volleyball court.</li>
            <li><span>🥅</span><strong>Goals:</strong> Stretch across the entire width (9 meters) of each end of the court and are 1.3 meters high.</li>
            <li><span>📌</span><strong>Tactile Lines:</strong> Raised tape with string underneath is used to mark areas like goal lines, team areas, and orientation lines. Players feel these with their hands or feet.</li>
            <li><span>🟧</span><strong>Zones:</strong>
                <ul class="gfi_ul">
                    <li><strong>Team Area (3m):</strong> Closest to the goal, where players defend and throw from.</li>
                    <li><strong>Landing Area (3m):</strong> The ball must land here when thrown.</li>
                    <li><strong>Neutral Area (center 6m):</strong> Ball must pass through to be legal.</li>
                </ul>
            </li>
            <li><span>🔇</span><strong>Quiet Environment:</strong> The entire facility must be silent during play so athletes can hear the ball and team communication.</li>
        </ul>
    </div>

    <div class="gfi_section">
        <h2 class="gfi_h2">Maintenance and Setup Tips</h2>
        <p>Ensure the court surface is clean and free of debris. Tactile lines should be securely taped with consistent height. Balls must be tested for proper bell sound. Eyeshades should be checked for integrity before every session.</p>
    </div>

    <div class="gfi_section">
        <h2 class="gfi_h2">Conclusion</h2>
        <p>Proper equipment and a carefully prepared court are essential for the smooth conduct of Goalball. These standards promote safety, fairness, and competitive balance, making the game accessible and enjoyable for all participants.</p>
    </div>
</div>

<?php
include 'layouts/footer.php';
?>
