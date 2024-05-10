<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Date</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #444444;
            color: white;
            text-align: center;
        }

        div {
            display: flex;
        }

        svg {
            flex: 1;
            opacity: 0.8;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #999999;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #16811C;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #999999;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #16811C;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0F6814;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .text-center {
            text-align: center;
        }

        .create-account-link {
            color: #16811C;
            text-decoration: none;
        }

        .create-account-link:hover {
            text-decoration: underline;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            margin-right: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: -20px;
            background-color: #333;
            min-width: 180px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #111;
        }

        #randomDate {
            font-size: 24px;
            margin-top: 20px;
        }

        svg {
            width: 300px;
            height: 300px;
            margin-top: 20px;
        }

        button {
            width: 100px;
            height: 30px;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://www.instagram.com/stuart_moore8/">Creator's instagram</a></li>
    </ul>
    <div class="dropdown">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlS7eNSy0G_FmGzVi14nYpDgEgOuueBmvi9u3w6A0X_A&s" alt="User Menu" width="40" height="40">
        <div class="dropdown-content">
            <a href="Dates-Sign-Up.php">Sign Up</a>
            <a href="Dates-Log-In.php">Log In</a>
        </div>
    </div>
</nav>

<h1>Welcome to "How long has it been since"</h1>
    
<h5>If you would like to save one of your times</h5>
<h5>you need to sign up</h5>

<div id="randomDate"></div>

<svg id='clock' viewBox='0 36 250 36' xmlns='http://www.w3.org/2000/svg'>

    <text x="50%" y="0" text-anchor="middle" id="It has been" font-size="50px">It has been</text>
    <text x="50%" y="25" text-anchor="middle" id="days" font-size="25px">0 days</text>

    <g id='seconds' transform='scale(2) translate(0, -20)'>

        <g>
            <path id='f7' d='M106,69l3-3h6l3,3c0,0-1,1-3,1h-6C107,70,106,69,106,69z'/>
            <path id='f6' d='M119,55l-3,2v8l3,3c0,0,1-1,1-3v-7C120,56,119,55,119,55z'/>
            <path id='f5' d='M105,55l3,2v8l-3,3c0,0-1-1-1-3v-7C104,56,105,55,105,55z'/>
            <polygon id='f4' points='109,52 115,52 118,54 115,56 109,56 106,54'/>
            <path id='f3' d='M119,40l-3,3v8l3,2c0,0,1-1,1-3v-7C120,41,119,40,119,40z'/>
            <path id='f2' d='M105,40l3,3v8l-3,2c0,0-1-1-1-3v-7C104,41,105,40,105,40z'/>
            <path id='f1' d='M106,39l3,3h6l3-3c0,0-1-1-3-1h-6C107,38,106,39,106,39z'/>
        </g>
        <g>
            <path id='e7' d='M88,69l3-3h6l3,3c0,0-1,1-3,1h-6C89,70,88,69,88,69z'/>
            <path id='e6' d='M101,55l-3,2v8l3,3c0,0,1-1,1-3v-7C102,56,101,55,101,55z'/>
            <path id='e5' d='M87,55l3,2v8l-3,3c0,0-1-1-1-3v-7C86,56,87,55,87,55z'/>
            <polygon id='e4' points='91,52 97,52 100,54 97,56 91,56 88,54'/>
            <path id='e3' d='M101,40l-3,3v8l3,2c0,0,1-1,1-3v-7C102,41,101,40,101,40z'/>
            <path id='e2' d='M87,40l3,3v8l-3,2c0,0-1-1-1-3v-7C86,41,87,40,87,40z'/>
            <path id='e1' d='M88,39l3,3h6l3-3c0,0-1-1-3-1h-6C89,38,88,39,88,39z'/>
        </g>
    </g>
    <g id='minutes' transform='scale(2) translate(0, -20)'>
        <g>
            <path id='d7' d='M64,69l3-3h6l3,3c0,0-1,1-3,1h-6C65,70,64,69,64,69z'/>
            <path id='d6' d='M77,55l-3,2v8l3,3c0,0,1-1,1-3v-7C78,56,77,55,77,55z'/>
            <path id='d5' d='M63,55l3,2v8l-3,3c0,0-1-1-1-3v-7C62,56,63,55,63,55z'/>
            <polygon id='d4' points='67,52 73,52 76,54 73,56 67,56 64,54'/>
            <path id='d3' d='M77,40l-3,3v8l3,2c0,0,1-1,1-3v-7C78,41,77,40,77,40z'/>
            <path id='d2' d='M63,40l3,3v8l-3,2c0,0-1-1-1-3v-7C62,41,63,40,63,40z'/>
            <path id='d1' d='M64,39l3,3h6l3-3c0,0-1-1-3-1h-6C65,38,64,39,64,39z'/>
        </g>
        <g>
            <path id='c7' d='M46,69l3-3h6l3,3c0,0-1,1-3,1h-6C47,70,46,69,46,69z'/>
            <path id='c6' d='M59,55l-3,2v8l3,3c0,0,1-1,1-3v-7C60,56,59,55,59,55z'/>
            <path id='c5' d='M45,55l3,2v8l-3,3c0,0-1-1-1-3v-7C44,56,45,55,45,55z'/>
            <polygon id='c4' points='49,52 55,52 58,54 55,56 49,56 46,54'/>
            <path id='c3' d='M59,40l-3,3v8l3,2c0,0,1-1,1-3v-7C60,41,59,40,59,40z'/>
            <path id='c2' d='M45,40l3,3v8l-3,2c0,0-1-1-1-3v-7C44,41,45,40,45,40z'/>
            <path id='c1' d='M46,39l3,3h6l3-3c0,0-1-1-3-1h-6C47,38,46,39,46,39z'/>
        </g>
    </g>
    <g id='hours' transform='scale(2) translate(0, -20)'>
        <g>
            <path id='b7' d='M22,69l3-3h6l3,3c0,0-1,1-3,1h-6C23,70,22,69,22,69z'/>
            <path id='b6' d='M35,55l-3,2v8l3,3c0,0,1-1,1-3v-7C36,56,35,55,35,55z'/>
            <path id='b5' d='M21,55l3,2v8l-3,3c0,0-1-1-1-3v-7C20,56,21,55,21,55z'/>
            <polygon id='b4' points='25,52 31,52 34,54 31,56 25,56 22,54'/>
            <path id='b3' d='M35,40l-3,3v8l3,2c0,0,1-1,1-3v-7C36,41,35,40,35,40z'/>
            <path id='b2' d='M21,40l3,3v8l-3,2c0,0-1-1-1-3v-7C20,41,21,40,21,40z'/>
            <path id='b1' d='M22,39l3,3h6l3-3c0,0-1-1-3-1h-6C23,38,22,39,22,39z'/>
        </g>
        <g>
            <path id='a7' d='M4,69l3-3h6l3,3c0,0-1,1-3,1h-6C5,70,4,69,4,69z'/>
            <path id='a6' d='M17,55l-3,2v8l3,3c0,0,1-1,1-3v-7C18,56,17,55,17,55z'/>
            <path id='a5' d='M3,55l3,2v8l-3,3c0,0-1-1-1-3v-7C2,56,3,55,3,55z'/>
            <polygon id='a4' points='7,52 13,52 16,54 13,56 7,56 4,54'/>
            <path id='a3' d='M17,40l-3,3v8l3,2c0,0,1-1,1-3v-7C18,41,17,40,17,40z'/>
            <path id='a2' d='M3,40l3,3v8l-3,2c0,0-1-1-1-3v-7C2,41,3,40,3,40z'/>
            <path id='a1' d='M4,39l3,3h6l3-3c0,0-1-1-3-1h-6C5,38,4,39,4,39z'/>
        </g>
    </g>
    <g id='dots' transform='scale(2) translate(0, -20)'>
        <g>
            <circle cx='82' cy='50' r='2'/>
            <circle cx='82' cy='58' r='2'/>
        </g>
        <g>
            <circle cx='40' cy='50' r='2'/>
            <circle cx='40' cy='58' r='2'/>
        </g>
    </g>

    <text x="50%" y="140" text-anchor="middle" id="cbajo" font-size="50px" >Since</text>
    <text x="50%" y="170" text-anchor="middle" id="date" font-size="25px" >Date</text>
</svg>


<br>
<br>
<center><button id="saveButton">Save Date</button></center>



<script>

    let isLoggedIn = false;

    function loggedIn() {
        isLoggedIn = true;
        
        alert("You are now logged in!");
    }

    function getDateAndDiff() {
        var date2 = new Date();
        var time = Math.random() * 1000 * 365 * 24 * 60 * 60 * 1000;
        var date1 = new Date(date2.getTime() - time);
        
        var Difference_In_Time = date2.getTime() - date1.getTime();
        
        var Difference_In_Days = Math.round(Difference_In_Time / (1000 * 3600 * 24));
        
        console.log("Total number of days between dates:\n" + date1.toDateString() + " and " + date2.toDateString() + " is: " + Difference_In_Days + " days");

        document.getElementById('days').textContent = Difference_In_Days + " days";
        document.getElementById('date').textContent = date1.toDateString();
    }


    (function() {
        function display(a, n) {
            number = [
            [1, 1, 1, 0, 1, 1, 1],
            [0, 0, 1, 0, 0, 1, 0],
            [1, 0, 1, 1, 1, 0, 1],
            [1, 0, 1, 1, 0, 1, 1],
            [0, 1, 1, 1, 0, 1, 0],
            [1, 1, 0, 1, 0, 1, 1],
            [1, 1, 0, 1, 1, 1, 1],
            [1, 0, 1, 0, 0, 1, 0],
            [1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 0, 1, 1] 
            ]

            n = number[n]
            i = 0
            while (i < n.length) {
            crystal = document.getElementById(a + (i + 1))
            if (n[i] === 0) {
                crystal.style.opacity = '0.125'
            }
            else {
                crystal.style.opacity = '1'
            }
            i++
            }
        }

        function format(value) {
            value = value + ''

            if (value.length === 1) {
            return '0' + value
            }

            return value
        }

        (function update() {
            date = new Date()
            hours = format(date.getHours())
            minutes = format(date.getMinutes())
            seconds = format(date.getSeconds())

            setTimeout(function() {
            display('a', hours[0])
            display('b', hours[1])
            display('c', minutes[0])
            display('d', minutes[1])
            display('e', seconds[0])
            display('f', seconds[1])
            update()
            }, 1000)
        })()
        })()
    getDateAndDiff();

    function saveDate() {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_date.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send("date=" + encodeURIComponent(document.getElementById('date').textContent));
    }

    document.getElementById('saveButton').addEventListener('click', saveDate);

    function saveDate() {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_date.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                } else {
                    alert("Failed to save date.");
                }
            }
        };
        xhr.send("date=" + encodeURIComponent(document.getElementById('date').textContent));
    }

    document.getElementById('saveButton').addEventListener('click', function () {

        if (isLoggedIn) {
            saveDate();
        } else {
            alert("You need to sign up or log in to save a date");
        }
    });

</script>

</body>
</html>
