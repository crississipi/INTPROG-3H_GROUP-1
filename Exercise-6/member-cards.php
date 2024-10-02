<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Group 1 | Exercise 6</title>
        <link href="styles2.css" rel="stylesheet"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9bd5c7f2ea.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="members">
            <div class="member-container">
                <div class="member-box">

                </div>
            </div>
        </div>
        <script>
            window.onload = function() {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "changedDetails.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("requestData=1");
                xhr.onload = function() {
                    if (xhr.status !== 200) {
                        alert("Error: Request cannot be processed");
                    } else {
                        document.querySelector('.member-box').innerHTML = xhr.responseText;
                    }
                };
            }
            document.querySelector('.member-container').addEventListener('scroll', function() {
                const container = this;
                const elements = document.querySelectorAll('.member-page');

                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const containerHeight = container.clientHeight;
                    if (elementTop < containerHeight - 150) {
                        element.style.opacity = 1;
                        element.style.transform = 'translateY(0)';
                    } else {
                        element.style.opacity = 0;
                        element.style.transform = 'translateY(150px)';
                    }
                });
            });
        </script>
    <?php
        include("footer.php");
    ?>