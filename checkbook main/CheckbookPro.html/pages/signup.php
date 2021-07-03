<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="../js/index.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: rgb(81, 81, 255);
        }
        
        .bigbtn {
            background-color: #5947ff;
            padding: 20px;
            margin: 10px 40px;
            padding-right: 40px;
            border-radius: 10px;
            border: 3px dotted black;
            text-align: center;
            opacity: 0.7;
        }
        
        .bigbtn:hover {
            background-color: #5947ff;
            opacity: 1;
        }
        
        button {
            background-color: transparent;
            border: none;
            color: #3d3d3d;
        }
    </style>
</head>

<body>
    <div class="topnav " id="myTopnav">
        <div class="comp3">

            <a href="javascript:void(0);" style="color: white; padding: 20px;" onclick="openNav()">
                <i style="font-size: x-large;" class="fa fa-bars"></i>
            </a>
            <h1 style="color: white; font-weight: lighter;">Logo</h1>
        </div>

        <div class="icons">
            <button type="button" onclick="document.getElementById('id01').style.display='block'" class="comp7btn2">Sign Up</button>
        </div>

    </div>


    <div id="mySidebar" class="sidebar">
        <div class="side">
            <h1>logo</h1>
            <div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

            </div>

        </div>
    </div>
    <hr>
    <div>

        <div class="default">
            <h1 style="color: white;">Welcome to Checkbook Pro!</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>


        <div id="id01" class="modal">

            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="https://www.w3schools.com/css/paris.jpg" alt="Avatar" class="image1">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Your Name" name="uname" required>

                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Email address" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Your Password" name="psw" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Retype Password" name="psw" required>

                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label><br>
                    <button type="submit" class="cancelbtn2">Login</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Already have an Account?<a href="./AddNewAccount.html"> Login here</a></span>
                </div>
            </form>
        </div>





</body>

</html>