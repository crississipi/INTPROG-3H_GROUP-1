<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finals Lab Exam</title>
    <script src="https://kit.fontawesome.com/9bd5c7f2ea.js" crossorigin="anonymous"></script>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: .3s linear;
        }
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
            background: aliceblue;
        }
        header{
            width: 100%;
            height: 70px;
            display: flex;
            justify-content: space-between;
            padding: 0 1.5rem;
            align-items: center;
        }
        h3{
            font-size: 2rem;
        }
        #toggleMode{
            height: 40px;
            width: 100px;
            border-radius: 25px;
            background: white;
            padding: 3px;
            cursor: pointer;
            border: 2px solid white;
            display: flex;
            align-items: center;
            justify-content: left;
        }
        #circle{
            height: 30px;
            width: 30px;
            border-radius: 50%;
            background: yellow;
        }
        #toggleMode:hover{
            border: 2px solid #dddddd;
        }
        #sideNav{
            height: 100%;
            width: 200px;
            display: flex;
            flex-direction: column;
            padding: 0 1rem;
        }
        .userprofile{
            margin-top: 3rem;
            height: 150px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .img{
            height: 85px;
            width: 85px;
            border-radius: 50%;
            background: #dddddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .img i{
            font-size: 2.5rem;
        }
        .nav{
            height: 40px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            flex-direction: row-reverse;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1rem;
            border-left: 5px solid transparent;
            margin-bottom: .2rem;
        }
        .nav i{
            font-size: 1.3rem;
        }
        .nav.active{
            border-left: 5px solid lightseagreen;
            background: lightblue;
        }
        .nav.active i{
            color: teal;
        }
        .nav:hover{
            background: #dddddd;
            border-left: 5px solid #dddddd;
        }
        .holder{
            height: 90%;
            width: 85.2%;
            display: flex;
            flex-wrap: wrap;
            background: white;
            padding: 1.5rem;
            align-items: start;
        }
        .small-card{
            width: 250px;
            height: 15%;
            border-radius: 5px;
            margin-right: 1rem;
            box-shadow: 0 0 5px 1px #dddddd;
            display: flex;
            align-items: center;
            overflow: hidden;
        }
        .sideline{
            height: 100%;
            width: 5px;
            background: lightseagreen;
            margin-right: 1rem;
        }
        .small-card i{
            font-size: 2.5rem;
            color: #dddddd;
        }
        .group-card{
            width: 100%;
            height: 85%;
            display: flex;
            flex-wrap: wrap;
        }
        .big-card{
            height: 90%;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .big-card i{
            font-size: 15rem;
            color: #dddddd;
        }
        .m-box{
            height: 90%;
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            padding: 4rem 0 1rem;
            align-items: end;
            gap: 1rem;
            justify-content: center;
        }
        .m-card{
            height: 180px;
            width: 265px;
            border-radius: 5px;
            box-shadow: 0 0 5px 1px #dddddd;
            overflow: hidden;
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        .m-card i{
            font-size: 7rem;
            margin: 0 auto;
            color: #dddddd;
        }
        .small-card:hover, .m-card:hover{
            box-shadow: 0 0 5px 2px #aaaaaa;
        }
        .small-card:hover i, .big-card:hover i, .m-card:hover i{
            color: #777777;
        }
        body.night{
            background: #777777;
        }
        body.night h3{
            color: white;
        }
        body.night #sideNav{
            background: #777777;
        }
        body.night .img{
            background: #aaaaaa;
        }
        body.night .img i{
            color: white;
        }
        body.night .nav{
            color: white;
        }
        body.night .nav:hover{
            background: #888888;
        }
        body.night .active{
            background: lightslategray;
            border-left: 5px solid darkturquoise;
        }
        body.night .active{
            color: white;
        }
        body.night .nav.active i{
            color: darkturquoise;
        }
        body.night .holder{
            background: #333333;
        }
        body.night .small-card i{
            color: #888888;
        }
        body.night .sideline{
            background: darkturquoise;
        }
        body.night .big-card i{
            color: #888888;
        }
        body.night .m-card i{
            color: #888888;
        }
        body.night input::placeholder, body.night input{
            color: white;
        }
        body.night .search i{
            color: white;
        }
        body.night .small-card:hover, body.night .m-card:hover{
            box-shadow: 0 0 5px 2px #ffffff;
        }
        body.night .small-card:hover i, body.night .big-card:hover i, body.night .m-card:hover i{
            color: #ffffff;
        }
        #toggleMode.night{
            justify-content: right;
            background: #aaaaaa;
            border: 2px solid #aaaaaa;
        }
        #toggleMode.night #circle{
            background: black;
        }
        .upperbox{
            height: 15%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: end;
        }
        .category{
            height: 50px;
            width: 600px;
            display: flex;
            align-items: center;
            gap: .3rem;
        }
        .category .small-card{
            height: 100%;
            width: 200px;
            cursor: pointer;
        }
        .category .small-card:hover i{
            color: #333333;
        }
        .category .small-card i{
            font-size: 1.5rem;
        }
        .search{
            height: 40px;
            width: 300px;
            border-radius: 3rem;
            box-shadow: 0 0 5px 1px #dddddd;
            display: flex;
            align-items: center;
            padding: 0 1rem;
            gap: .5rem;
        }
        input{
            border: none;
            font-size: 1rem;
            width: 100%;
            padding: 0 .3rem;
            height: 100%;
            background: transparent;
        }
        input:focus{
            outline: none;
        }
        .inventory-list{
            width: 100%;
            height: 70%;
            display: flex;
            flex-wrap: wrap;
            gap: .8rem;
            align-items: start;
        }
        #inventory .category{
            width: 700px;
        }
        #inventory .small-card{
            width: 250px;
        }
        #inventory .inventory-list .small-card .sideline{
            background: #888888;
        }
        #inventory .inventory-list .small-card:hover .sideline{
            background: darkturquoise;
        }
        #profile input{
            font-size: 1.1rem;
        }
        .left-card{
            width: 70%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .upper-card, .lower-card{
            width: 100%;
            height: 50%;
            display: flex;
            flex-wrap: wrap;
            align-items: end;
            gap: .5rem;
            padding: 2.5rem 0;
        }
        .left-card .small-card{
            height: 50px;
            width: 47.3%;
            padding: 0 1rem;
        }
        .left-card .small-card i{
            font-size: 1.5rem;
            margin-right: 1rem;
        }
        .right-card{
            height: 100%;
            width: 30%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            row-gap: .5rem;
        }
        .right-card .m-card{
            height: 200px;
            width: 200px;
            margin-bottom: 2rem;
        }
        .right-card .small-card{
            height: 40px;
            width: 250px;
            margin-left: 1rem;
            padding: 0 1rem;
        }
        .right-card .small-card i{
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <header>
        <h3>Mainpage</h3>
        <div id="toggleMode" onclick="switchMode()">
            <div id="circle"></div>
        </div>
    </header>
    <div id="sideNav">
        <div class="userprofile">
            <div class="img"><i class="fa-regular fa-user"></i></div>
        </div>
        <div class="nav active" onclick="dashboard()"><i class="fa-solid fa-table-columns"></i><p>Dashboard</p></div>
        <div class="nav" onclick="products()"><i class="fa-solid fa-box"></i><p>Products</p></div>
        <div class="nav" onclick="inventory()"><i class="fa-solid fa-cart-flatbed"></i><p>Inventory</p></div>
        <div class="nav" onclick="profile()"><i class="fa-solid fa-gears"></i><p>Profile</p></div>
    </div>
    <div class="holder" id="dashboard">
        <div class="small-card">
            <div class="sideline"></div>
            <i class="fa-solid fa-dollar-sign"></i>
        </div>
        <div class="small-card">
            <div class="sideline"></div>
            <i class="fa-solid fa-users"></i>
        </div>
        <div class="small-card">
            <div class="sideline"></div>
            <i class="fa-solid fa-boxes-stacked"></i>
        </div>
        <div class="group-card">
            <div class="big-card">
                <i class="fa-solid fa-chart-pie"></i>
            </div>

            <div class="m-box">
                <div class="m-card">
                    <i class="fa-solid fa-chart-column"></i>
                </div>
                <div class="m-card">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div class="m-card">
                    <i class="fa-solid fa-chart-bar"></i>
                </div>
                <div class="m-card">
                    <i class="fa-solid fa-chart-area"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="holder" id="products" style="display: none;">
        <div class="upperbox">
            <div class="category">
                <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-utensils"></i></div>
                <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-burger"></i></div>
                <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-mug-saucer"></i></div>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search...">
            </div>
        </div>
        <div class="inventory-list">
            <div class="m-card"><i class="fa-regular fa-image"></i></div>
            <div class="m-card"><i class="fa-regular fa-image"></i></div>
            <div class="m-card"><i class="fa-regular fa-image"></i></div>
            <div class="m-card"><i class="fa-regular fa-image"></i></div>
            <div class="m-card"><i class="fa-regular fa-image"></i></div>
            <div class="m-card"><i class="fa-regular fa-image"></i></div>
        </div>
    </div>
    <div class="holder" id="inventory" style="display: none;">
        <div class="upperbox">
            <div class="category">
                <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-pepper-hot"></i></div>
                <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-drumstick-bite"></i></div>
                <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-carrot"></i></div>
                <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-shrimp"></i></div>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search...">
            </div>
        </div>
        <div class="inventory-list">
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-pepper-hot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-drumstick-bite"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-carrot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-shrimp"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-pepper-hot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-drumstick-bite"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-carrot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-shrimp"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-pepper-hot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-drumstick-bite"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-carrot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-shrimp"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-pepper-hot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-drumstick-bite"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-carrot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-shrimp"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-pepper-hot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-drumstick-bite"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-carrot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-shrimp"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-pepper-hot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-drumstick-bite"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-carrot"></i></div>
            <div class="small-card"><div class="sideline"></div><i class="fa-solid fa-shrimp"></i></div>
        </div>
    </div>
    <div class="holder" id="profile" style="display: none;">
        <div class="left-card">
            <div class="upper-card">
                
            </div>
            <div class="lower-card">
                <div class="small-card"><i class="fa-brands fa-facebook"></i><input type="text" placeholder="Facebook"></div>
                <div class="small-card"><i class="fa-brands fa-linkedin"></i><input type="text" placeholder="LinkedIn"></div>
                <div class="small-card"><i class="fa-brands fa-instagram"></i><input type="text" placeholder="Instagram"></div>
                <div class="small-card"><i class="fa-brands fa-tiktok"></i><input type="text" placeholder="TikTok"></div>
                <div class="small-card"><i class="fa-brands fa-square-x-twitter"></i><input type="text" placeholder="Twitter"></div>
                <div class="small-card"><i class="fa-brands fa-github"></i><input type="text" placeholder="Github"></div>
            </div>
        </div>
        <div class="right-card">
            <div class="m-card"><i class="fa-solid fa-image"></i></div>
            <div class="small-card"><i class="fa-solid fa-camera-retro"></i></div>
            <div class="small-card"><i class="fa-solid fa-floppy-disk"></i></div>
            <div class="small-card"><i class="fa-solid fa-circle-info"></i></div>
            <div class="small-card"><i class="fa-solid fa-right-from-bracket"></i></div>
        </div>
    </div>

    <script>
        window.onload = function() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("checkMode=1");
            xhr.onload = function() {
                if (xhr.status !== 200) {
                    alert("Error: Unable to process the request.");
                } else {
                    if (parseInt(xhr.responseText) == 1) {
                        document.getElementById('toggleMode').classList.add('night');
                        document.body.classList.add('night');
                    } else if (parseInt(xhr.responseText) == 0) {
                        document.getElementById('toggleMode').classList.remove('night');
                        document.body.classList.remove('night');
                    }
                }
            };
        }
        function dashboard(){
            if (document.getElementById('dashboard').style.display !== "flex") {
                document.getElementById('dashboard').style.display = "flex";
                document.getElementById('inventory').style.display = "none";
                document.getElementById('products').style.display = "none";
                document.getElementById('profile').style.display = "none";
            }
        }
        function products() {
            if (document.getElementById('products').style.display !== "flex") {
                document.getElementById('products').style.display = "flex";
                document.getElementById('inventory').style.display = "none";
                document.getElementById('dashboard').style.display = "none";
                document.getElementById('profile').style.display = "none";
            }
        }
        function inventory() {
            if (document.getElementById('inventory').style.display !== "flex") {
                document.getElementById('inventory').style.display = "flex";
                document.getElementById('dashboard').style.display = "none";
                document.getElementById('products').style.display = "none";
                document.getElementById('profile').style.display = "none";
            }
        }
        function profile() {
            if (document.getElementById('profile').style.display !== "flex") {
                document.getElementById('profile').style.display = "flex";
                document.getElementById('inventory').style.display = "none";
                document.getElementById('products').style.display = "none";
                document.getElementById('dashboard').style.display = "none";
            }
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("profile=1");
            xhr.onload = function() {
                if (xhr.status !== 200) {
                    alert("Error: Unable to process the request.");
                } else {
                    document.querySelector('.upper-card').innerHTML = xhr.responseText;
                }
            };
        }
        document.querySelectorAll('.nav').forEach(nav => {
            nav.addEventListener('click', function() {
                if(nav.classList.contains('active')) {
                    nav.classList.remove('active');
                    nav.style.pointerEvents = "auto";
                    document.querySelectorAll('.nav').forEach(notselected => {
                        if (nav !== notselected) {
                            notselected.classList.remove('active');
                            notselected.style.pointerEvents = "auto";
                        }
                    });
                } else {
                    nav.classList.add('active');
                    nav.style.pointerEvents = "none";
                    document.querySelectorAll('.nav').forEach(notselected => {
                        if (nav !== notselected) {
                            notselected.classList.remove('active');
                            notselected.style.pointerEvents = "auto";
                        }
                    });
                }
            });
        });
        function switchMode() {
            var mode = 0;
            var tick = document.getElementById('toggleMode').classList;
            if (tick.contains('night')) {
                document.getElementById('toggleMode').classList.remove('night');
                document.body.classList.remove('night');
                mode = 0;
            } else {
                document.getElementById('toggleMode').classList.add('night');
                document.body.classList.add('night');
                mode = 1;
            }
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("switch=1&mode=" + mode);
            xhr.onload = function() {
                if (xhr.status !== 200) {
                    alert("Error: Unable to process the request.");
                }
            };
        }
    </script>
</body>
</html>