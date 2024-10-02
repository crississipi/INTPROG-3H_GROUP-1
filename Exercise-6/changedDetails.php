<?php
include("details.php");
session_start();

if (isset($_POST['pass'])) {  
        $_SESSION["name-1"] = $_POST['n1'];
        $_SESSION["name-2"] = $_POST['n2'];
        $_SESSION["name-3"] = $_POST['n3'];
        $_SESSION["name-4"] = $_POST['n4'];
        $_SESSION["name-5"] = $_POST['n5'];

        $_SESSION["age-1"] = $_POST['a1'];
        $_SESSION["age-2"] = $_POST['a2'];
        $_SESSION["age-3"] = $_POST['a3'];
        $_SESSION["age-4"] = $_POST['a4'];
        $_SESSION["age-5"] = $_POST['a5'];

        $_SESSION["bday-1"] = $_POST['b1'];
        $_SESSION["bday-2"] = $_POST['b2'];
        $_SESSION["bday-3"] = $_POST['b3'];
        $_SESSION["bday-4"] = $_POST['b4'];
        $_SESSION["bday-5"] = $_POST['b5'];

        $_SESSION["likes-1"] = $_POST['l1'];
        $_SESSION["likes-2"] = $_POST['l2'];
        $_SESSION["likes-3"] = $_POST['l3'];
        $_SESSION["likes-4"] = $_POST['l4'];
        $_SESSION["likes-5"] = $_POST['l5'];

        $_SESSION["dislikes-1"] = $_POST['dl1'];
        $_SESSION["dislikes-2"] = $_POST['dl2'];
        $_SESSION["dislikes-3"] = $_POST['dl3'];
        $_SESSION["dislikes-4"] = $_POST['dl4'];
        $_SESSION["dislikes-5"] = $_POST['dl5'];

        $_SESSION["hobby-1"] = $_POST['h1'];
        $_SESSION["hobby-2"] = $_POST['h2'];
        $_SESSION["hobby-3"] = $_POST['h3'];
        $_SESSION["hobby-4"] = $_POST['h4'];
        $_SESSION["hobby-5"] = $_POST['h5'];

        $_SESSION["desc-1"] = $_POST['d1'];
        $_SESSION["desc-2"] = $_POST['d2'];
        $_SESSION["desc-3"] = $_POST['d3'];
        $_SESSION["desc-4"] = $_POST['d4'];
        $_SESSION["desc-5"] = $_POST['d5'];
}

if (isset($_POST['requestData'])) {
    $n1 = $_SESSION["name-1"];
    $a1 = $_SESSION["age-1"];
    $b1 = $_SESSION["bday-1"];
    $l1 = $_SESSION["likes-1"];
    $dl1 = $_SESSION["dislikes-1"];
    $h1 = $_SESSION["hobby-1"];
    $d1 = $_SESSION["desc-1"];

    $n2 = $_SESSION["name-2"];
    $a2 = $_SESSION["age-2"];
    $b2 = $_SESSION["bday-2"];
    $l2 = $_SESSION["likes-2"];
    $dl2 = $_SESSION["dislikes-2"];
    $h2 = $_SESSION["hobby-2"];
    $d2 = $_SESSION["desc-2"];

    $n3 = $_SESSION["name-3"];
    $a3 = $_SESSION["age-3"];
    $b3 = $_SESSION["bday-3"];
    $l3 = $_SESSION["likes-3"];
    $dl3 = $_SESSION["dislikes-3"];
    $h3 = $_SESSION["hobby-3"];
    $d3 = $_SESSION["desc-3"];

    $n4 = $_SESSION["name-4"];
    $a4 = $_SESSION["age-4"];
    $b4 = $_SESSION["bday-4"];
    $l4 = $_SESSION["likes-4"];
    $dl4 = $_SESSION["dislikes-4"];
    $h4 = $_SESSION["hobby-4"];
    $d4 = $_SESSION["desc-4"];

    $n5 = $_SESSION["name-5"];
    $a5 = $_SESSION["age-5"];
    $b5 = $_SESSION["bday-5"];
    $l5 = $_SESSION["likes-5"];
    $dl5 = $_SESSION["dislikes-5"];
    $h5 = $_SESSION["hobby-5"];
    $d5 = $_SESSION["desc-5"];

    header("Content-type: text/html");
    echo "

                    <div class=\"member-page mem-1\">
                        <div class=\"mem-card\">
                            <div class=\"mem-holder\">
                                <div class=\"image-box\">
                                    <div class=\"mem-img\" style='background: url($member1->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain';></div>
                                </div>
                                <div class=\"bubbles\">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class=\"mem-info\">
                                <p><strong>$n1</strong></p>
                                <p><em>Leader</em></p>
                                <div class=\"social-acc\">
                                    <a href='$member1->fb'><i class=\"fa-brands fa-square-facebook\"></i></a>
                                    <a href='$member1->gitHub'><i class=\"fa-brands fa-square-github\"></i></a>
                                    <a href='$member1->gmail'><i class=\"fa-solid fa-square-envelope\"></i></a>
                                    <a href='$member1->linkedin'><i class=\"fa-brands fa-linkedin\"></i></a>
                                    <div class=\"acc-info\">
                                        <span class=\"links\"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"more-info\">
                            <div class=\"mem-det\">
                                <div class=\"description\">
                                    <p class=\"det\">
                                        <span><strong>Age: </strong>$a1</span>
                                        <span><strong>Birthday: </strong>$b1</span>
                                        <span><strong>Likes: </strong>$l1</span>
                                        <span><strong>Dislikes: </strong>$dl1</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$h1</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$d1</span>
                                    </p>
                                </div>
                                <div class=\"fam\">
                                    <div class=\"all-bars\">
                                        <span class=\"per-bar\">
                                            <p><strong>HTML</strong><strong>60%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr1\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr2\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>BOOTSTRAP</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr3\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>JAVASCRIPT</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr4\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>PHP</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr5\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
        
                    <div class=\"member-page mem-2\">
                        <div class=\"mem-card\">
                            <div class=\"mem-holder\">
                                <div class=\"image-box\">
                                    <div class=\"mem-img\" style='background: url($member2->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain'></div>
                                </div>
                                <div class=\"bubbles\">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class=\"mem-info\">
                                <p><strong>$n2</strong></p>
                                <p><em>Member</em></p>
                                <div class=\"social-acc\">
                                    <a href='$member2->fb'><i class=\"fa-brands fa-square-facebook\"></i></a>
                                    <a href='$member2->gitHub'><i class=\"fa-brands fa-square-github\"></i></a>
                                    <a href='$member2->gmail'><i class=\"fa-solid fa-square-envelope\"></i></a>
                                    <a href='$member2->linkedin'><i class=\"fa-brands fa-linkedin\"></i></a>
                                    <div class=\"acc-info\">
                                        <span class=\"links\"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"more-info\">
                            <div class=\"mem-det\">
                                <div class=\"description\">
                                    <p class=\"det\">
                                        <span><strong>Age: </strong>$a2</span>
                                        <span><strong>Birthday: </strong>$b2</span>
                                        <span><strong>Likes: </strong>$l2</span>
                                        <span><strong>Dislikes: </strong>$dl2</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$h2</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$d2</span>
                                    </p>
                                </div>
                                <div class=\"fam\">
                                    <div class=\"all-bars\">
                                        <span class=\"per-bar\">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr1\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr2\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>BOOTSTRAP</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr3\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>JAVASCRIPT</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr4\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>PHP</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr5\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class=\"member-page mem-3\">
                        <div class=\"mem-card\">
                            <div class=\"mem-holder\">
                                <div class=\"image-box\">
                                    <div class=\"mem-img\" style='background: url($member3->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain'></div>
                                </div>
                                <div class=\"bubbles\">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class=\"mem-info\">
                                <p><strong>$n3</strong></p>
                                <p><em>Member</em></p>
                                <div class=\"social-acc\">
                                    <a href='$member3->fb'><i class=\"fa-brands fa-square-facebook\"></i></a>
                                    <a href='$member3->gitHub'><i class=\"fa-brands fa-square-github\"></i></a>
                                    <a href='$member3->gmail'><i class=\"fa-solid fa-square-envelope\"></i></a>
                                    <a href='$member3->linkedin'><i class=\"fa-brands fa-linkedin\"></i></a>
                                    <div class=\"acc-info\">
                                        <span class=\"links\"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"more-info\">
                            <div class=\"mem-det\">
                                <div class=\"description\">
                                    <p class=\"det\">
                                        <span><strong>Age: </strong>$a3</span>
                                        <span><strong>Birthday: </strong>$b3</span>
                                        <span><strong>Likes: </strong>$l3</span>
                                        <span><strong>Dislikes: </strong>$dl3</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$h3</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$d3</span>
                                    </p>
                                </div>
                                <div class=\"fam\">
                                    <div class=\"all-bars\">
                                        <span class=\"per-bar\">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr1\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr2\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>BOOTSTRAP</strong><strong>10%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr3\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>JAVASCRIPT</strong><strong>30%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr4\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>PHP</strong><strong>30%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr5\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class=\"member-page mem-4\">
                        <div class=\"mem-card\">
                            <div class=\"mem-holder\">
                                <div class=\"image-box\">
                                    <div class=\"mem-img\" style='background: url($member4->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain'></div>
                                </div>
                                <div class=\"bubbles\">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class=\"mem-info\">
                                <p><strong>$n4</strong></p>
                                <p><em>Member</em></p>
                                <div class=\"social-acc\">
                                    <a href='$member4->fb'><i class=\"fa-brands fa-square-facebook\"></i></a>
                                    <a href='$member4->gitHub'><i class=\"fa-brands fa-square-github\"></i></a>
                                    <a href='$member4->gmail'><i class=\"fa-solid fa-square-envelope\"></i></a>
                                    <a href='$member4->linkedin'><i class=\"fa-brands fa-linkedin\"></i></a>
                                    <div class=\"acc-info\">
                                        <span class=\"links\"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"more-info\">
                            <div class=\"mem-det\">
                                <div class=\"description\">
                                    <p class=\"det\">
                                        <span><strong>Age: </strong>$a4</span>
                                        <span><strong>Birthday: </strong>$b4</span>
                                        <span><strong>Likes: </strong>$l4</span>
                                        <span><strong>Dislikes: </strong>$dl4</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$h4</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$d4</span>
                                    </p>
                                </div>
                                <div class=\"fam\">
                                    <div class=\"all-bars\">
                                        <span class=\"per-bar\">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr1\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr2\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>BOOTSTRAP</strong><strong>10%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr3\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>JAVASCRIPT</strong><strong>20%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr4\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>PHP</strong><strong>40%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr5\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class=\"member-page mem-5\">
                        <div class=\"mem-card\">
                            <div class=\"mem-holder\">
                                <div class=\"image-box\">
                                    <div class=\"mem-img\" style='background: url($member5->image) no-repeat center; image-rendering: optimizeQuality; background-size: contain'></div>
                                </div>
                                <div class=\"bubbles\">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class=\"mem-info\">
                                <p><strong>$n5</strong></p>
                                <p><em>Member</em></p>
                                <div class=\"social-acc\">
                                    <a href='$member5->fb'><i class=\"fa-brands fa-square-facebook\"></i></a>
                                    <a href='$member5->gitHub'><i class=\"fa-brands fa-square-github\"></i></a>
                                    <a href='$member5->gmail'><i class=\"fa-solid fa-square-envelope\"></i></a>
                                    <a href='$member5->linkedin'><i class=\"fa-brands fa-linkedin\"></i></a>
                                    <div class=\"acc-info\">
                                        <span class=\"links\"><span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"more-info\">
                            <div class=\"mem-det\">
                            <div class=\"description\">
                                    <p class=\"det\">
                                        <span><strong>Age: </strong>$a5</span>
                                        <span><strong>Birthday: </strong>$b5</span>
                                        <span><strong>Likes: </strong>$l5</span>
                                        <span><strong>Dislikes: </strong>$dl5</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$h5</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$d5</span>
                                    </p>
                                </div>
                                <div class=\"fam\">
                                    <div class=\"all-bars\">
                                        <span class=\"per-bar\">
                                            <p><strong>HTML</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr1\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>CSS</strong><strong>50%</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr2\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>BOOTSTRAP</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr3\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>JAVASCRIPT</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr4\"></span>
                                            </span>
                                        </span>
                                        <span class=\"per-bar\">
                                            <p><strong>PHP</strong><strong>0</strong></p>
                                            <span class=\"bar\">
                                                <span class=\"percent pr5\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    ";
}
?>