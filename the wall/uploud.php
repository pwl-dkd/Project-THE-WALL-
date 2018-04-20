<?php
include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <div class="login-wrapper">
            <div  id="gedoe">
                <h2 class="title" id="login-title">upload</h2>
            </div>
            <?php
            if (isset ($_GET['message'])) {
                include_once 'includes/message-list.inc.php';
            }
            ?>
            <form class="signup-form" action="includes/upload.inc.php" method="POST">

                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
                </div>
                <div>
                    <button type="submit" name="upload">POST</button>
                </div>


                <input type="text" name="uid" placeholder="Username/e-mail">
                <input type="Password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>


