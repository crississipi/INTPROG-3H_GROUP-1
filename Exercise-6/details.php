<?php
$imgPath1 = 'resources/user1Img.png';
$imgPath2 = 'resources/user2Img.png';
$imgPath3 = 'resources/user3Img.png';
$imgPath4 = 'resources/user4Img.png';
$imgPath5 = 'resources/user5Img.png';

class memberDetails {
    public $image;
    public $name;
    public $fb;
    public $gitHub;
    public $gmail;
    public $linkedin;
    public $age;
    public $bday;
    public $likes;
    public $dislikes;
    public $hobby;
    public $desc;
}

$member1 = new memberDetails();
$member2 = new memberDetails();
$member3 = new memberDetails();
$member4 = new memberDetails();
$member5 = new memberDetails();

$member1->image = $imgPath1;
$member1->fb = "https://m.me/stephanie.binayon.5";
$member1->gitHub = "https://github.com/skywalker244";
$member1->gmail = "mailto:binayonstephanie_bsit@plmun.edu.ph";
$member1->linkedin = "https://www.linkedin.com/in/kawaii-potato-binayon-b43994322?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BKcxD6vLoS1yL3Rlzp%2FCpAw%3D%3D";

$member2->image = $imgPath2;
$member2->fb = "https://m.me/izzy.mconda";
$member2->gitHub = "https://github.com/iceybae02";
$member2->gmail = "mailto:condaizzy_bsit@plmun.edu.ph";
$member2->linkedin = "https://www.linkedin.com/in/izzy-conda-6a69a4322/";

$member3->image = $imgPath3;
$member3->fb = "https://m.me/trisia.fajardo.1";
$member3->gitHub = "https://github.com/AeIsia";
$member3->gmail = "mailto:fajardotrisiamae_bsit@plmun.edu.ph";
$member3->linkedin = "https://www.linkedin.com/in/trisia-mae-fajardo-822088208/";

$member4->image = $imgPath4;
$member4->fb = "https://m.me/crismalipico12";
$member4->gitHub = "https://github.com/crississipi";
$member4->gmail = "mailto:malipicocrisjulius_bsit@plmun.edu.ph";
$member4->linkedin = "https://www.linkedin.com/in/crismalipico12/";

$member5->image = $imgPath5;
$member5->fb = "https://m.me/jenrodriguez25";
$member5->gitHub = "https://github.com/Jen052504";
$member5->gmail = "mailto:rodriguezjennifer_bsit@plmun.edu.ph";
$member5->linkedin = "https://www.linkedin.com/in/jen-rodriguez-9bb9a2322/";

    $member1->name = "Stephanie Binayon";
    $member1->age = "20";
    $member1->bday = date("2003-11-24");
    $member1->likes = "Cats, Sweets, Listening to Music";
    $member1->dislikes = "Crowd and Noisy Places";
    $member1->hobby = "Reading Novels and Playing Games";
    $member1->desc = "I once dreamed of becoming a pastry chef, but that dream had to be set aside when I was forced to take an IT course. Although I may not excel in it and Im a slow learner who easily forgets things. Im doing my best to study and learn as much as I can";

    $member2->name = "Izzy Conda";
    $member2->age = "21";
    $member2->bday = date("2003-07-02");
    $member2->likes = "Listening T.S Songs";
    $member2->dislikes = "Grumpy, Okra and Guyabano";
    $member2->hobby = "Playing Roblox";
    $member2->desc = "I am a swiftie and if someone says I am not nice that's true 'cause darling I am a nightmare dressed like a daydream'.";

    $member3->name = "Trisia Mae Fajardo";
    $member3->age = "21";
    $member3->bday = date("2003-01-15");
    $member3->likes = "Honesty";
    $member3->dislikes = "Liars and Manipulators";
    $member3->hobby = "Reading and Watching";
    $member3->desc = "I am a working student. I love to travel around and make more memories. I am a breadwinner (2nd child).";

    $member4->name = "Cris Julius A. Malipico";
    $member4->age = "22";
    $member4->bday = date("2002-07-12");
    $member4->likes = "Quiet Place";
    $member4->dislikes = "Smell of Cigarette";
    $member4->hobby = "Reading eBooks/Novels";
    $member4->desc = "I enjoy listening to old music. The stuffs I mostly do everyday was reading books and little bit of programming.";

    $member5->name = "Jennifer S. Rodriguez";
    $member5->age = "20";
    $member5->bday = date("2004-05-25");
    $member5->likes = "Faithful";
    $member5->dislikes = "Liar and Smell of Cigarette";
    $member5->hobby = "Watching Movies";
    $member5->desc = "I am focused on learning essential skills for me to be ready and equipped enough on my journey on being part of IT Industry.";
?>