<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: linear-gradient(180deg, rgb(81, 81, 255), rgb(255, 130, 151));
        }
    </style>
</head>


<body>

    <div class="topnav " id="myTopnav">
        <div class="comp3">
            <h1 style="color: white; padding:0px 20px; font-weight: lighter;">Logo</h1>
        </div>

        <div class="icons">
            <a href="./pages/settings.html"><button type="button" class="diamond-shape3"> <i class="fa fa-cog" style="font-size:30px;;color: red;transform: rotate(-45deg) translateY(1px);" aria-hidden="true"></i></i></button></a>
            <button type="submit" onclick="document.getElementById('id01').style.display='block';" class="diamond-shape3"><i class="fa fa-question" style="font-size:30px;color: red; transform: rotate(-45deg) translateY(1px);"></i></button>
        </div>

    </div>
    <hr>

    <div class="comp4">
        <div class="comp4b">
            <h1>Login</h1>
        </div>
    </div>

    <div class="comp6">
        <form class="form" action="auth.php" method="Post">
            <input type="text" name="username" placeholder="Enter Username" required /><br>
            <input type="password" name="password" placeholder="Enter Password" id="myInput" required /><br>

            <div class="loginFooter">
                <a href="../index.php"><button type="button" class="diamond-shape"><i class="fa fa-remove" style="font-size:24px;color: white;transform: rotate(45deg)"></i></button></a>
                <button type="submit" class="diamond-shape2"><i class="fa fa-check" style="font-size:40px;color: white; transform: rotate(-45deg);"></i></button>
            </div>
        </form>
    </div>


    <?php
    if (isset($_GET["message"])) {
        echo '<div id="id03" style="display:flex;justify-content:center;align-items:center; ">';
        echo '<div  style="background-color:red;font-style:italic; text-align:center;padding:20px ;border-radius:15px;">
            <div style="display:flex;justify-content:center;transform:translateY(12px);">
            <span onclick="closediv()" style= "font-size:40px;padding:0px 10px:pointer;color:white;cursor:pointer;transform:translateY(-12px);"  title="Close Modal">&times;</span>             
            <strong style="margin-left:20px; ">message! </strong> ' . " " . $_GET["message"] . '
            </div>
                     </div>
                ';
    }
    ?>


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


    <script>
        function myFunction2() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>






</body>

</html>