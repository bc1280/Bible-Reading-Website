<link rel="stylesheet" type="text/css" href="sidenav.css"/>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <img src="banner.jpeg" style="width:90%;" class="w3-round"><br><br>
        <h4 class="w3-padding-0"><b>MENU</b></h4>
        <p class="w3-text-grey">Badger Bible Reading</p>
    </div>

    <a href="index.php" class="w3-padding <?php if($page=="index"){echo 'active';}?>">HOME</a>
    <a href="testimonies.php" class="w3-padding <?php if($page=="testimonies"){echo 'active';}?>">TESTIMONIES</a>
    <a href="questions.php" class="w3-padding <?php if($page=="questions"){echo 'active';}?>">QUESTIONS</a>
    <a href="forms.php" class="w3-padding <?php if($page=="forms"){echo 'active';}?>">SIGN-UP</a>

    <div class="w3-section w3-padding-top w3-large">
        <a href="https://www.facebook.com/ChristianStudentsAtUWMadison" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
    </div>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer;" title="close side menu" id="myOverlay"></div>