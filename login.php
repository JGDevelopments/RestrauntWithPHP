<DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="ResterauntMain.css">

</head>

<body>
    <div class="container">
        <header>
            <img src="images/logo-adare-restaurant.png" alt="JG's Resteraunt Logo">
        </header>


        <nav>

            <a class="MenuClass" href="index.html">HOME</a>
            <a class="MenuClass" href="https://www.google.com">MENU</a>
            <a class="MenuClass" href="https://www.google.com">VOUCHER</a>
            <a class="MenuClass" href="https://www.google.com">CATERING</a>
            <a class="MenuClass" href="https://www.google.com">CAPACITY</a>
            <a class="MenuClass" href="Contact.html">CONTACT</a>
        </nav>
        <?php 
            session_start(); 

            $username = "PHPIsAwesome"; 
            $password = "password"; 

            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo "<h1 style='color:white;'>You are already logged in silly.</h1>";
            }

            if (isset($_POST['username']) && isset($_POST['password'])) {
                if($_POST['username'] == $username && $_POST['password'] == $password) {
                    $_SESSION['loggedin'] = true;  
                    echo "<h1 style='color:white;'>Welcome to your profile <b>$username.</h1>";
                }
            }

	        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
		    header("Location: Contact.html");
	        }
        ?>
        
        <p>Profile stuff soon to come!!!</p>

    <footer>
        <p class="FootNote"> S. Center Street, Arlington, TX, Copright 2021© </p>
    </footer>

</html>
