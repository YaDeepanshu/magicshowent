<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<title>Magic Marvels</title>
    <style>
        
        /* Styling for the FAQ section */
        body {
            font-family: Arial, sans-serif;
         background: hsl(207, 19%, 11%);
            color: #FFFFFF;
            text-align: center;
        }

        .faq-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .question {
            font-weight: bold;
            cursor: pointer;
        }

        .answer {
            display: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>WELCOME TO MAGICSHOW ENTERTAINMENT</h1>

    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <div class="question">Q: What movies are currently trending?</div>
            <div class="answer">A: You can find the latest trending movies in our "Trending Movies" section.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: How can I discover new music?</div>
            <div class="answer">A: Explore our "Discover Music" feature to find new and exciting music releases.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: Are there any upcoming game releases?</div>
            <div class="answer">A: Stay updated with the "Upcoming Games" section for the latest game releases.</div>
        </div>
    </div>

    <script>
        // JavaScript to toggle the display of answers
        const questions = document.querySelectorAll('.question');

        questions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script>
    <?php include "footer.php"?>
</body>
</html>
