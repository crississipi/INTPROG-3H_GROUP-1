<?php
include("details.php");

if (isset($_POST['n1'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];

    $member1->name = $n1;
    $member2->name = $n2;
    $member3->name = $n3;
    $member4->name = $n4;
    $member5->name = $n5;

    $member1->age = $_POST['a1'];
    $member2->age = $_POST['a2'];
    $member3->age = $_POST['a3'];
    $member4->age = $_POST['a4'];
    $member5->age = $_POST['a5'];

    $member1->bday = $_POST['b1'];
    $member2->bday = $_POST['b2'];
    $member3->bday = $_POST['b3'];
    $member4->bday = $_POST['b4'];
    $member5->bday = $_POST['b5'];

    $member1->likes = $_POST['l1'];
    $member2->likes = $_POST['l2'];
    $member3->likes = $_POST['l3'];
    $member4->likes = $_POST['l4'];
    $member5->likes = $_POST['l5'];

    $member1->dislikes = $_POST['dl1'];
    $member2->dislikes = $_POST['dl2'];
    $member3->dislikes = $_POST['dl3'];
    $member4->dislikes = $_POST['dl4'];
    $member5->dislikes = $_POST['dl5'];

    $member1->hobby = $_POST['h1'];
    $member2->hobby = $_POST['h2'];
    $member3->hobby = $_POST['h3'];
    $member4->hobby = $_POST['h4'];
    $member5->hobby = $_POST['h5'];

    $member1->desc = $_POST['d1'];
    $member2->desc = $_POST['d2'];
    $member3->desc = $_POST['d3'];
    $member4->desc = $_POST['d4'];
    $member5->desc = $_POST['d5'];

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
                                <p><strong>$member1->name</strong></p>
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
                                        <span><strong>Age: </strong>$member1->age</span>
                                        <span><strong>Birthday: </strong>$member1->bday</span>
                                        <span><strong>Likes: </strong>$member1->likes</span>
                                        <span><strong>Dislikes: </strong>$member1->dislikes</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$member1->hobby</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$member1->desc</span>
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
                                <p><strong>$member2->name</strong></p>
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
                                        <span><strong>Age: </strong>$member2->age</span>
                                        <span><strong>Birthday: </strong>$member2->bday</span>
                                        <span><strong>Likes: </strong>$member2->likes</span>
                                        <span><strong>Dislikes: </strong>$member2->dislikes</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$member2->hobby</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$member2->desc</span>
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
                                <p><strong>$member3->name</strong></p>
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
                                        <span><strong>Age: </strong>$member3->age</span>
                                        <span><strong>Birthday: </strong>$member3->bday</span>
                                        <span><strong>Likes: </strong>$member3->likes</span>
                                        <span><strong>Dislikes: </strong>$member3->dislikes</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$member3->hobby</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$member3->desc</span>
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
                                <p><strong>$member4->name</strong></p>
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
                                        <span><strong>Age: </strong>$member4->age</span>
                                        <span><strong>Birthday: </strong>$member4->bday</span>
                                        <span><strong>Likes: </strong>$member4->likes</span>
                                        <span><strong>Dislikes: </strong>$member4->dislikes</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$member4->hobby</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$member4->desc</span>
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
                                <p><strong>$member5->name</strong></p>
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
                                        <span><strong>Age: </strong>$member5->age</span>
                                        <span><strong>Birthday: </strong>$member5->bday</span>
                                        <span><strong>Likes: </strong>$member5->likes</span>
                                        <span><strong>Dislikes: </strong>$member5->dislikes</span>
                                    </p>
                                    <p><span><strong>Hobbies: </strong>$member5->hobby</span></p>
                                    <p>
                                        <span><strong>Short Description</strong></span>
                                        <span>$member5->desc</span>
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