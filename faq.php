<?php
include "layouts/header.php";
?>

<head>
    <meta charset="UTF-8">
    <title>Goalball FAQs</title>
    <style>
        /* Custom CSS for FAQ section */
        .gfi_faq_section {
            background-color: #f8f8f8;
            padding: 40px 0;
        }

        .gfi_faq_container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .gfi_faq_title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        .gfi_faq_item {
            background-color: #ffffff;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .gfi_faq_question {
            font-size: 18px;
            font-weight: bold;
            color: #007BFF;
            cursor: pointer;
            margin-bottom: 10px;
            padding: 10px 0;
            border-bottom: 2px solid #007BFF;
            transition: all 0.3s ease;
        }

        .gfi_faq_answer {
            font-size: 16px;
            color: #555;
            padding: 10px 0;
            display: none;
        }

        .gfi_faq_question:hover {
            color: #0056b3;
            border-bottom: 2px solid #0056b3;
        }

        /* Hover effect for FAQ items */
        .gfi_faq_item:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        /* Image styling */
        .gfi_faq_image {
            width: 60%;
            display: block;
            margin: 0 auto 30px auto;
        }
    </style>
</head>
<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Goalball Faqs</h1>
                    <!-- <ol class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="index" title="">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol> -->
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>

<section class="gfi_faq_section">
    <div class="gfi_faq_container">
       

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">1. What is Goalball?</div>
            <div class="gfi_faq_answer">Goalball is a team sport created for athletes who are blind or visually impaired. Players aim to roll a ball with bells into the opponent’s goal while defending their own.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">2. How many players are on each team?</div>
            <div class="gfi_faq_answer">Each team has 3 players on the court at a time, with up to 3 substitutes available during official matches.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">3. Do sighted players wear eyeshades too?</div>
            <div class="gfi_faq_answer">Yes, all players wear eyeshades to ensure total equality in vision, regardless of visual ability.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">4. How do players know where they are on the court?</div>
            <div class="gfi_faq_answer">The court has tactile lines made from tape over string, allowing players to feel their position and orientation during the game.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">5. What is the goalball made of?</div>
            <div class="gfi_faq_answer">The goalball is made of hard rubber, weighs 1.25 kg, has holes in it, and contains bells so players can track it by sound.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">6. How long is a game?</div>
            <div class="gfi_faq_answer">Games are 24 minutes long, divided into two 12-minute halves, with a 5-minute halftime break.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">7. How do teams score?</div>
            <div class="gfi_faq_answer">A goal is scored when the ball completely crosses the opponent’s goal line.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">8. What are some common penalties?</div>
            <div class="gfi_faq_answer">Common penalties include high ball, short ball, noise, illegal defense, and 10-second violations. These result in one-on-one penalty throws.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">9. Where is Goalball played competitively?</div>
            <div class="gfi_faq_answer">Goalball is played internationally, including in the Paralympic Games, IBSA World Championships, and national tournaments worldwide.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">10. Can beginners or kids play Goalball?</div>
            <div class="gfi_faq_answer">Absolutely! There are recreational and youth programs that teach the basics of Goalball in a safe and fun environment.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">11. Is Goalball only for the blind?</div>
            <div class="gfi_faq_answer">It is designed for blind and visually impaired players, but anyone can play recreationally by wearing eyeshades for fairness.</div>
        </div>

        <div class="gfi_faq_item">
            <div class="gfi_faq_question">12. What skills are important in Goalball?</div>
            <div class="gfi_faq_answer">Key skills include sound localization, throwing strength, teamwork, diving technique, and court awareness.</div>
        </div>
    </div>
</section>

<?php
include 'layouts/footer.php';
?>

<script>
    // JavaScript to toggle FAQ answers
    document.querySelectorAll('.gfi_faq_question').forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });
</script>
