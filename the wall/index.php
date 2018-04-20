<?php
    include_once 'header.php';
?>

<section class="main-container">
    <h2 class="title" >Home</h2>
    <?php
    if (isset ($_GET['message'])) {
        include_once 'includes/message-list.inc.php';
    }
    ?>
    <div class="main-wrapper">
        <div class="masonry">
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>
            <div class="item"><img class="foto" src="https://cdn.discordapp.com/attachments/314575587236642826/433841236781039617/image.jpg" ></div>
            <div class="item"><img class="foto" src="https://cdn.discordapp.com/attachments/430002263956914188/431882373257232394/image.jpg" ></div>
            <div class="item"><img class="foto" src="https://cdn.discordapp.com/attachments/314575587236642826/433492156150317066/image.jpg" ></div>
            <div class="item"><img class="foto" src="https://cdn.discordapp.com/attachments/430002263956914188/432017517964296192/image.jpg" ></div>
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>
            <div class="item"><img class="foto" src="data:image/jpeg;base64,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" ></div>
            <div class="item"><img class="foto" src="https://cdn.discordapp.com/attachments/314575587236642826/433800780408029195/image.jpg" ></div>
            <div class="item"><img class="foto" src="https://cdn.discordapp.com/attachments/314575587236642826/433837116519219220/image.jpg" ></div>
            <div class="item"><img class="foto" src="https://media.giphy.com/media/26xBGd4ho9zZptWbC/giphy.gif" ></div>
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>
            <div class="item"><img class="foto" src="http://www.malayalees.ch/wp-content/uploads/2018/03/train-selfie.jpg" ></div>

        </div>
    </div>
</section>




<?php
include_once 'footer.php';
?>


<script>
    function openSlideMenu(){
        document.getElementById('side-menu').style.width = '250px';
    }

    function closeSlideMenu(){
        document.getElementById('side-menu').style.width = '0';
    }
</script>

