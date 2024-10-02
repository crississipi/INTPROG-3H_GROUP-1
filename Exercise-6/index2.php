<?php 
include("details.php");
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
        <header class="header">
            <section class="sec">
                <a href="#home" class="logo">GROUP 1</a>
                <nav class="menu">
                        <a href="#home">Home</a>
                        <a href="#members">Team</a>
                </nav>
                <div id="menu-btn" class="fas fa-bars"></div>
            </section>
        </header>

        <section id="home">
            <div class="poster">
                <div class="poster-holder"></div>
            </div>
            <div class="container">
                <h1>Group 1</h1>
                <h3>—"Excellence at its finest"</h3>
                <div class="cards">
                </div>
                <a href="#members">The Team</a>
            </div>
        </section>
        <section id="members">
            <div class="mem">
                <button id="editInfo" style="display: none;">Edit Member Info</button>
                <h2>The Team</h2>
            </div>
            <div class="member-container">
                <div class="member-forms" id="memForms">
                    <div class="mem-select">
                        <button id="mem1">Member 1</button>
                        <button id="mem2">Member 2</button>
                        <button id="mem3">Member 3</button>
                        <button id="mem4">Member 4</button>
                        <button id="mem5">Member 5</button>
                    </div>
                    <form action="#" method="post">
                        <div class="mem-pages">
                            <div class="card-form" id="cardForm1">
                                <div class="group-input">
                                    <label for="name1">Name</label>
                                    <input type="text" name="name1" id="name1" required value="<?php echo $member1->name; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="age1">Age</label>
                                    <input type="number" name="age1" id="age1" required value="<?php echo $member1->age; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="bday1">Birthday</label>
                                    <input type="date" name="bday1" id="bday1" required value="<?php echo $member1->bday; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="likes1">Likes</label>
                                    <input type="text" name="likes1" id="likes1" required value="<?php echo $member1->likes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="dislikes1">Dislikes</label>
                                    <input type="text" name="dislikes1" id="dislikes1" required value="<?php echo $member1->dislikes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="hobbies1">Hobbies</label>
                                    <input type="text" name="hobbies1" id="hobbies1" required value="<?php echo $member1->hobby; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="desc1">Description</label>
                                    <textarea name="desc1" id="desc1" required><?php echo $member1->desc; ?></textarea>
                                </div>
                            </div>

                            <div class="card-form" id="cardForm2">
                                <div class="group-input">
                                    <label for="name2">Name</label>
                                    <input type="text" name="name2" id="name2" required value="<?php echo $member2->name; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="age2">Age</label>
                                    <input type="number" name="age2" id="age2" required value="<?php echo $member2->age; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="bday2">Birthday</label>
                                    <input type="date" name="bday2" id="bday2" required value="<?php echo $member2->bday; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="likes2">Likes</label>
                                    <input type="text" name="likes2" id="likes2" required value="<?php echo $member2->likes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="dislikes2">Dislikes</label>
                                    <input type="text" name="dislikes2" id="dislikes2" required value="<?php echo $member2->dislikes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="hobbies2">Hobbies</label>
                                    <input type="text" name="hobbies2" id="hobbies2" required value="<?php echo $member2->hobby; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="desc2">Description</label>
                                    <textarea name="desc2" id="desc2" required><?php echo $member2->desc; ?></textarea>
                                </div>
                            </div>

                            <div class="card-form" id="cardForm3">
                                <div class="group-input">
                                    <label for="name3">Name</label>
                                    <input type="text" name="name3" id="name3" required value="<?php echo $member3->name; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="age3">Age</label>
                                    <input type="number" name="age3" id="age3" required value="<?php echo $member3->age; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="bday3">Birthday</label>
                                    <input type="date" name="bday3" id="bday3" required value="<?php echo $member3->bday; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="likes3">Likes</label>
                                    <input type="text" name="likes3" id="likes3" required value="<?php echo $member3->likes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="dislikes3">Dislikes</label>
                                    <input type="text" name="dislikes3" id="dislikes3" required value="<?php echo $member3->dislikes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="hobbies3">Hobbies</label>
                                    <input type="text" name="hobbies3" id="hobbies3" required value="<?php echo $member3->hobby; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="desc3">Description</label>
                                    <textarea name="desc3" id="desc3" required><?php echo $member3->desc; ?></textarea>
                                </div>
                            </div>

                            <div class="card-form" id="cardForm4">
                                <div class="group-input">
                                    <label for="name4">Name</label>
                                    <input type="text" name="name4" id="name4" required value="<?php echo $member4->name; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="age4">Age</label>
                                    <input type="number" name="age4" id="age4" required value="<?php echo $member4->age; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="bday4">Birthday</label>
                                    <input type="date" name="bday4" id="bday4" required value="<?php echo $member4->bday; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="likes4">Likes</label>
                                    <input type="text" name="likes4" id="likes4" required value="<?php echo $member4->likes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="dislikes4">Dislikes</label>
                                    <input type="text" name="dislikes4" id="dislikes4" required value="<?php echo $member4->dislikes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="hobbies4">Hobbies</label>
                                    <input type="text" name="hobbies4" id="hobbies4" required value="<?php echo $member4->hobby; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="desc4">Description</label>
                                    <textarea name="desc4" id="desc4" required><?php echo $member4->desc; ?></textarea>
                                </div>
                            </div>

                            <div class="card-form" id="cardForm5">
                                <div class="group-input">
                                    <label for="name5">Name</label>
                                    <input type="text" name="name5" id="name5" required value="<?php echo $member5->name; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="age5">Age</label>
                                    <input type="number" name="age5" id="age5" required value="<?php echo $member5->age; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="bday5">Birthday</label>
                                    <input type="date" name="bday5" id="bday5" required value="<?php echo $member5->bday; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="likes5">Likes</label>
                                    <input type="text" name="likes5" id="likes5" required value="<?php echo $member5->likes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="dislikes5">Dislikes</label>
                                    <input type="text" name="dislikes5" id="dislikes5" required value="<?php echo $member5->dislikes; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="hobbies5">Hobbies</label>
                                    <input type="text" name="hobbies5" id="hobbies5" required value="<?php echo $member5->hobby; ?>">
                                </div>
                                <div class="group-input">
                                    <label for="desc5">Description</label>
                                    <textarea name="desc5" id="desc5" required><?php echo $member5->desc; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="submit-field">
                        <input type="submit" id="submitBtn" value="Submit">
                    </div>
                </div>
            </div>
        </section>
        <script>
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

            let lastScrollTop = 0;
            const header = document.querySelector('header');
            const btn1 = document.getElementById('mem1');
            const btn2 = document.getElementById('mem2');
            const btn3 = document.getElementById('mem3');
            const btn4 = document.getElementById('mem4');
            const btn5 = document.getElementById('mem5');
            const card1 = document.getElementById('cardForm1');
            const card2 = document.getElementById('cardForm2');
            const card3 = document.getElementById('cardForm3');
            const card4 = document.getElementById('cardForm4');
            const card5 = document.getElementById('cardForm5');
            const editBtn = document.getElementById('editInfo');
            const submitBtn = document.getElementById('submitBtn');

            card1.style.display = "flex";
            card2.style.display = "none";
            card3.style.display = "none";
            card4.style.display = "none";
            card5.style.display = "none";
            btn1.classList.toggle('active');
            btn2.classList.remove('active');
            btn3.classList.remove('active');
            btn4.classList.remove('active');
            btn5.classList.remove('active');

            window.addEventListener('scroll', function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    header.style.opacity = 0;
                } else {
                    header.style.opacity = 1;
                }

                lastScrollTop = scrollTop;
            });

            btn1.addEventListener('click', function() {
                if (card1.style.display !== "flex") {
                    card1.style.display = "flex";
                    card2.style.display = "none";
                    card3.style.display = "none";
                    card4.style.display = "none";
                    card5.style.display = "none";
                    btn1.classList.toggle('active');
                    btn2.classList.remove('active');
                    btn3.classList.remove('active');
                    btn4.classList.remove('active');
                    btn5.classList.remove('active');
                }
            });

            btn2.addEventListener('click', function() {
                if (card2.style.display !== "flex") {
                    card2.style.display = "flex";
                    card1.style.display = "none";
                    card3.style.display = "none";
                    card4.style.display = "none";
                    card5.style.display = "none";
                    btn2.classList.toggle('active');
                    btn1.classList.remove('active');
                    btn3.classList.remove('active');
                    btn4.classList.remove('active');
                    btn5.classList.remove('active');
                }
            });

            btn3.addEventListener('click', function() {
                if (card3.style.display !== "flex") {
                    card3.style.display = "flex";
                    card2.style.display = "none";
                    card1.style.display = "none";
                    card4.style.display = "none";
                    card5.style.display = "none";
                    btn3.classList.toggle('active');
                    btn2.classList.remove('active');
                    btn1.classList.remove('active');
                    btn4.classList.remove('active');
                    btn5.classList.remove('active');
                }
            });

            btn4.addEventListener('click', function() {
                if (card4.style.display !== "flex") {
                    card4.style.display = "flex";
                    card2.style.display = "none";
                    card3.style.display = "none";
                    card1.style.display = "none";
                    card5.style.display = "none";
                    btn4.classList.toggle('active');
                    btn2.classList.remove('active');
                    btn3.classList.remove('active');
                    btn1.classList.remove('active');
                    btn5.classList.remove('active');
                }
            });

            btn5.addEventListener('click', function() {
                if (card5.style.display !== "flex") {
                    card5.style.display = "flex";
                    card2.style.display = "none";
                    card3.style.display = "none";
                    card4.style.display = "none";
                    card1.style.display = "none";
                    btn5.classList.toggle('active');
                    btn2.classList.remove('active');
                    btn3.classList.remove('active');
                    btn4.classList.remove('active');
                    btn1.classList.remove('active');
                }
            });

            editBtn.addEventListener('click', function() {
                if (document.getElementById('memForms').style.display !== "flex") {
                    document.getElementById('memForms').style.display = "flex";
                    document.querySelector('.member-box').style.display = "none";
                    document.getElementById('editInfo').style.display = "none";
                }
            });

            submitBtn.addEventListener('click', function() {
                passValues();
            });

            function passValues() {
                var n1 = document.getElementById('name1').value;
                var n2 = document.getElementById('name2').value;
                var n3 = document.getElementById('name3').value;
                var n4 = document.getElementById('name4').value;
                var n5 = document.getElementById('name5').value;

                var a1 = document.getElementById('age1').value;
                var a2 = document.getElementById('age2').value;
                var a3 = document.getElementById('age3').value;
                var a4 = document.getElementById('age4').value;
                var a5 = document.getElementById('age5').value;

                var b1 = document.getElementById('bday1').value;
                var b2 = document.getElementById('bday2').value;
                var b3 = document.getElementById('bday3').value;
                var b4 = document.getElementById('bday4').value;
                var b5 = document.getElementById('bday5').value;

                var l1 = document.getElementById('likes1').value;
                var l2 = document.getElementById('likes2').value;
                var l3 = document.getElementById('likes3').value;
                var l4 = document.getElementById('likes4').value;
                var l5 = document.getElementById('likes5').value;

                var dl1 = document.getElementById('dislikes1').value;
                var dl2 = document.getElementById('dislikes2').value;
                var dl3 = document.getElementById('dislikes3').value;
                var dl4 = document.getElementById('dislikes4').value;
                var dl5 = document.getElementById('dislikes5').value;

                var h1 = document.getElementById('hobbies1').value;
                var h2 = document.getElementById('hobbies2').value;
                var h3 = document.getElementById('hobbies3').value;
                var h4 = document.getElementById('hobbies4').value;
                var h5 = document.getElementById('hobbies5').value;

                var d1 = document.getElementById('desc1').innerHTML;
                var d2 = document.getElementById('desc2').innerText;
                var d3 = document.getElementById('desc3').innerText;
                var d4 = document.getElementById('desc4').innerText;
                var d5 = document.getElementById('desc5').innerText;

                var memdet1 = "";
                var memdet2 = "";
                var memdet3 = "";
                var memdet4 = "";
                var memdet5 = "";

                memdet1 = "n1=" + n1 + "&a1=" + a1 + "&b1=" + b1 + "&l1=" + l1 + "&dl1=" + dl1 + "&h1=" + h1 + "&d1=" + d1;
                memdet2 = "&n2=" + n2 + "&a2=" + a2 + "&b2=" + b2 + "&l2=" + l2 + "&dl2=" + dl2 + "&h2=" + h2 + "&d2=" + d2;
                memdet3 = "&n3=" + n3 + "&a3=" + a3 + "&b3=" + b3 + "&l3=" + l3 + "&dl3=" + dl3 + "&h3=" + h3 + "&d3=" + d3;
                memdet4 = "&n4=" + n4 + "&a4=" + a4 + "&b4=" + b4 + "&l4=" + l4 + "&dl4=" + dl4 + "&h4=" + h4 + "&d4=" + d4;
                memdet5 = "&n5=" + n5 + "&a5=" + a5 + "&b5=" + b5 + "&l5=" + l5 + "&dl5=" + dl5 + "&h5=" + h5 + "&d5=" + d5;

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "changedDetails.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("pass=1&" + memdet1 + memdet2 + memdet3 + memdet4 + memdet5);
                xhr.onload = function() {
                    if (xhr.status !== 200) {
                        alert("Error: Connection Failed.");
                    } else{
                        window.location.href = "member-cards.php";
                    }
                };
            }
        </script>
    </body>
</html>
