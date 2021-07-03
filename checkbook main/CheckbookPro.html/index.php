<?php
require './pages/connection.php';

if (isset($_POST['submit'])) {

    $cname = $_POST['cname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $fullname = $_POST['fname'];

    $hashedpas=password_hash($psw,PASSWORD_DEFAULT);



    $query = "INSERT INTO users (companyName,username,email,password,FullName) values ('$cname','$uname','$email','$hashedpas','$fullname')";
    // $exec = mysqli_query($conn, $query);

    if ($stmt = $conn->prepare('SELECT username from users where username=?')) {
        $stmt->bind_param('s', $uname);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            header('location:index.php?message=user_already_exist');
        } else {
            if (strlen($psw) >= 8) {
                $exec = mysqli_query($conn, $query);
                if ($exec) {
                    header('location:./pages/login.php?message=account_created_successfully');
                } else {
                    header('location:index.php?message=account_not_created');
                }
            } else {
                header('location:index.php?message2=passsword_must_be_8_characters_long');
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/signup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="./js/index.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #3d3d3d;
        }

        .bigbtn {
            background-color: white;
            padding: 20px 60px;
            margin: 10px 40px;
            width: 50%;
            border-radius: 10px;
            opacity: 0.7;
            color: black;
        }

        .bigbtn:hover {
            background-color: #5947ff;
            opacity: 1;
            color: aliceblue;
        }

        button {
            background-color: transparent;
            border: none;
            color: #3d3d3d;
        }
    </style>
</head>

<body>

    <?php
    if (isset($_GET["message"])) {
        echo '<div id="id03">';
        echo ' <div class="imgcontainer">
            <span onclick="closediv()" style= "font-size:40px;float:right;padding:10px 20px;cursor-pointer:pointer;color:white;cursor:pointer;"  title="Close Modal">&times;</span>
            </div>';
        echo '<div  style="background-color:red;font-style:italic; text-align:center; padding:20px;">
            <div style="display:flex;justify-content:center;">             
            <strong>message!</strong> ' . $_GET["message"] . '
            </div>
                     </div>
                ';
        echo '</div>';
    }
    ?>

    <div class="topnav " id="myTopnav">
        <div class="comp3">
            <h1 style="color: white; font-weight: lighter;padding:0px 20px;">Logo</h1>
        </div>

        <div class="icons" style="margin-bottom:25px;">
            <a href="./pages/settings.html"><button type="button" class="diamond-shape3"> <i class="fa fa-cog" style="font-size:30px;;color: red;transform: rotate(-45deg) translateY(-11px) translateX(-3px);" aria-hidden="true"></i></i></button></a>
            <button type="submit" onclick="document.getElementById('id01').style.display='block';" class="diamond-shape3"><i class="fa fa-question" style="font-size:30px;color: red; transform: rotate(-45deg) translateY(-10px);;"></i></button>
        </div>

    </div>


    <div id="id01" class="modal2">

        <div class="modal-content2 animate" action="/action_page.php" method="post">
            <div class="imgcontainer2">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <video height="600px" width="70%" style="background-color: black;" controls>
                    <source src="./pages/movie.mp4" type="video/mp4">
                    <source src="./pages/movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>

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
            <h1 style="color: white;text-align: center;">Welcome to Checkbook Pro!</h1>
        </div>
    </div>

    <div class="row">
        <?php
        if (isset($_GET["message2"])) {
            echo '<div id="id03">';
            echo ' <div class="imgcontainer">
            <span onclick="closediv()" style= "font-size:40px;float:right;padding:10px 20px;cursor-pointer:pointer;color:white;cursor:pointer;"  title="Close Modal">&times;</span>
            </div>';
            echo '<div  style="background-color:red;font-style:italic; text-align:center; padding:20px;">
            <div style="display:flex;justify-content:center;">             
            <strong>message!</strong> ' . $_GET["message2"] . '
            </div>
                     </div>
                ';
            echo '</div>';
        }
        ?>


        <div class="col">
            <button onclick="shift()" class="bigbtn">Sign In</button></a>
        </div>
        <div class="col">
            <button onclick="document.getElementById('id02').style.display='block';" class="bigbtn"> Sign Up</button>
        </div>
        <!--
        <div class="col">
            <button onclick="document.getElementById('id03').style.display='block';" class="bigbtn"><b> SignIn With Google</b></button>
        </div>-->
    </div>



    <div id="id02" class="modal">

        <form class="modal-content animate" action="" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <label for="fname"><b>Full Name</b></label>
                <input type="text" placeholder="Full Name" name="fname" required>

                <label for="uname"><b>Company Name</b></label>
                <input type="text" placeholder="company Name" name="cname" required>

                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="username" name="uname" required>


                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Email address" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Your Password" name="psw" id="pass" required>


                <button type="submit" name="submit" class="cancelbtn2">Login</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Already have an Account?<a href="./pages/login.php"> Login here</a></span>
            </div>
        </form>
    </div>



</body>

</html>