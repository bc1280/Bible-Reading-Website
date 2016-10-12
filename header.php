<link rel="stylesheet" type="text/css" href="header.css"/>

<!-- Header -->
<header class="w3-container">
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()" style="position: fixed; z-index: 1;"><i class="fa fa-bars"></i></span>
    <h1><b id="title" style="margin-left:50px">Badger Bible Reading</b></h1>
</header>

<!-- TopNavbar -->
<ul class="w3-navbar w3-left-align w3-light-grey w3-center w3-large w3-bottombar" id="nav">
    <li class="w3-left <?php if($page=="index"){echo 'active';}?>" style="width:25% !important"><a href="index.php">H O M E</a></li>
    <li class="w3-left <?php if($page=="testimonies"){echo 'active';}?>" style="width:25% !important"><a href="testimonies.php">T E S T I M O N I E S</a></li>
    <li class="w3-left <?php if($page=="questions"){echo 'active';}?>" style="width:25% !important"><a href="questions.php">Q U E S T I O N S</a></li>
    <li class="w3-left <?php if($page=="forms"){echo 'active';}?>" style="width:25% !important"><a href="forms.php">S I G N - U P</a></li>
</ul><br>
