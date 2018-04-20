<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <span class="open-slide">
                    <a id="side-open" href="#" onclick="openSlideMenu()">
                        <svg width="40" height="40">
                           <path d="M0,5 30,5" stroke="#000000" stroke-width="5"/>
                            <path d="M0,14 30,14" stroke="#000000" stroke-width="5"/>
                            <path d="M0,23 30,23" stroke="#000000" stroke-width="5"/>
                        </svg>
                    </a>
                </span>
                <a href="index.php"><img src="fotos/logo5.png" id="logo" height="40"></a>
            </ul>
            <div class="nav-login">
                <?php
                if (isset($_SESSION['u_id'])) {
//                    echo '<span class="open-slide">
//                    <a id="side-open" href="#" onclick="openSlideMenu()">
//                        <svg width="40" height="40">
//                           <path d="M0,5 30,5" stroke="#000000" stroke-width="5"/>
//                            <path d="M0,14 30,14" stroke="#000000" stroke-width="5"/>
//                            <path d="M0,23 30,23" stroke="#000000" stroke-width="5"/>
//                        </svg>
//                    </a>
//                </span>';
                    echo '<a class="balk-knopies" href="index.php">Home</a>';
                    echo '<a class="balk-knopies" href="uploud.php">Upload</a>';
                    echo '<form action="includes/logout.inc.php" method="POST">
                            <button id="hallo" type="submit" name="submit">Logout</button>
                        </form>';
                } else {
//                    echo '<span class="open-slide">
//                    <a id="side-open" href="#" onclick="openSlideMenu()">
//                        <svg width="30" height="30">
//                            <path d="M0,5 30,5" stroke="#000000" stroke-width="5"/>
//                            <path d="M0,14 30,14" stroke="#000000" stroke-width="5"/>
//                            <path d="M0,23 30,23" stroke="#000000" stroke-width="5"/>
//                        </svg>
//                    </a>
//                </span>';
                    echo '<a class="balk-knopies" href="index.php">Home</a>
                        <a class="balk-knopies" href="login.php">inloggen</a>
                        <a class="balk-knopies" href="signup.php">Sign up</a>';
                }
                ?>

            </div>
        </div>
    </nav>


    <div id="side-menu" class="side-nav">
        <?php
        echo '<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>';
        if (isset($_SESSION['u_id'])) {
            echo '<a class="balk-knopies" href="index.php">Home</a>';
            echo '<a class="balk-knopies" href="uploud.php">Upload</a>';
            echo '<form action="includes/logout.inc.php" method="POST">
                            <button id="hallo" type="submit" name="submit">Logout</button>
                        </form>';
        } else {
            echo '<a class="balk-knopies" href="index.php">Home</a>
                        <a class="balk-knopies" href="login.php">inloggen</a>
                        <a class="balk-knopies" href="signup.php">Sign up</a>';
        }
        ?>

    </div>
</header>
