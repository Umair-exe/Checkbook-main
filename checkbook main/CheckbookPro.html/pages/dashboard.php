<?php
session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('location:login.php?message=Login_First!');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        /* var re1= /^[0-9]{17}$/  account number
    var re2= /^[0-9]{22-24}$/ IBAN 
    var re3= /^[A-Z][a-z]{20}$/ Account Title
    var re4= /^[A-Z][a-z]{20}$/ Branch Name
    var re5= /^[0-9]{4}$/ Branch Code
    var re6= /^[0-9]{20}$/ Bank Balance
    var re7= /^[0-9]{20}$/ Cheque Balance
    */
    </script>

    <script type="text/javascript" src="../js/index.js"></script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: linear-gradient(180deg, rgb(81, 81, 255), rgb(255, 130, 151));
        }

        input {
            width: 200px;
        }

        .categories {
            display: flex;
            justify-content: center;
        }

        @media (max-width:480px) {
            select {
                width: 200px;
            }

            input {
                width: 200px;
            }

        }
    </style>
</head>


<body>


    <div class="topnav " id="myTopnav">
        <div class="comp3">
            <h1 style="color: white; font-weight: lighter;padding:0px 20px;">Logo</h1>
        </div>

        <div class="icons">
            <a href="./logout.php"> <button type="button" onclick="document.getElementById('id01').style.display='block'" style="margin-top: 10px;" class="comp7btn2">Logout</button></a>
        </div>

    </div>
    <hr>
    
    <div>
        <div class="default">
            <h1 style="color: white;text-align: center;">Welcome to Checkbook Pro! <?php echo $_SESSION['fullname'] ?></h1>
        </div>
    </div>

    <!--
    <div class="comp1">
        <input class="search" type="text" name="search" id="search" placeholder="SEARCH">
    </div>


    
    <div class="comp7">
        <input type="button" class="comp7btn" name="Debit" value="Debit Categories" />
        <a href="AddNewCategory(credit).html"><input type="button" class="comp7btn" name="Debit" value="Credit Categories" /></a>
    </div>
    <h3 style="color:white;margin-top: 60px; text-align: center;">Categories_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </h3><br>
-->


    <div class="categories">
        <div class="comp8">
            <div class="comp8a">
                <button class="comp7btn2" onclick="document.getElementById('id02').style.display='block';">
                    <h4 style="color: #3d3d3d;">Setup Comapany</h4>
                </button>
            </div>
        </div>
    </div>



    <div id="id02" class="modal3">

        <form class="modal-content3 animate" action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="imgcontainer2">
                <span style="font-size: 30px; cursor:pointer;" onclick="document.getElementById('id02').style.display='none'" class="close2" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <div class="categories">
                    <div class="comp8">
                        <h4 style="color: #3d3d3d;">Select Bank</h4>
                        <div class="comp8">
                            <select style="padding:10px; border-radius:10px; ;" name="banks">
                                <option>The Bank of Punjab</option>
                                <option>Dubai ISlamic Bank</option>
                                <option>Al Barka Bank</option>
                                <option>United Bank Limited</option>
                                <option>Habib Metro Bank</option>
                                <option>Bank Al Habib Limited</option>
                                <option>Alfalah Bank Limited</option>
                                <option>Standard Chartered</option>
                                <option>Zarai Taraqiyati Bank Limited</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <div class="comp8b">
                                <h4 style="color: #3d3d3d;margin-right:60px;">Account #</h4>
                                <input style="padding:10px; border-radius:10px;" type="text" name="Accountnumber" placeholder="Enter you Account Number" required id="msg1" /><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <h4 style="color: #3d3d3d;margin-right:70px;">IBAN #</h4>
                            <input style="padding:10px; border-radius:10px;" type="text" name="IBAN" placeholder="Enter your Acoount IBAN" id="msg2" required /><br>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <h4 style="color: #3d3d3d;margin-right:20px;">Account Title</h4>
                            <input style="padding:10px; border-radius:10px; " type="text" name="Accounttitle" placeholder="Enter your Account Title" id="msg3" required /><br>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <h4 style="color: #3d3d3d;margin-right:20px;">Branch Name</h4>
                            <input style="padding:10px; border-radius:10px;" type="text" name="Branchname" placeholder="Enter yiur Branch Name" id="msg4" required /><br>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <h4 style="color: #3d3d3d;margin-right:20px;">Branch Code</h4>
                            <input style="padding:10px; border-radius:10px;" type="text" name="Branchcode" placeholder="Enter your Branch Code" id="msg5" required /><br>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <h4 style="color: #3d3d3d;margin-right:20px;">Bank Balance</h4>

                            <input style="padding:10px; border-radius:10px;" type="text" name="Bankbalance" placeholder="Enter your Bank Balance" id="msg6" required /><br>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <h4 style="color: #3d3d3d;margin-right:20px;"> Cheque Balance</h4>
                            <input style="padding:10px; border-radius:10px; " type="text" name="Chequebalance" placeholder="Enter your Cheque Balance" id="7" required /><br>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div class="comp8">
                        <div class="comp8a">
                            <h4 style="color: #3d3d3d;margin-right:20px;">Upload Sign</h4>
                            <input style="padding:10px; border-radius:10px; " type="File" name="uploadfile" accept="images/*" id="image">
                        </div>
                    </div>
                </div>

                <div style="display:flex;justify-content:center;">
                    <input type="submit" name="submit" class="comp7btn2" value="Save" />
                </div>

        </form>

    </div>
    </div>



</body>

</html>