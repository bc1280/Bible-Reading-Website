<!DOCTYPE html>
<html>
<title>Badger Bible Reading</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-tag {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
    .w3-sidenav a,.w3-sidenav h4 {font-weight:bold}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<?php $page = 'index'; include ("sidenav.php"); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

    <?php $page = 'index'; include ("header.php"); ?>

    <div class="w3-row">
        <div class="w3-col" style="width:20%"><p></p></div>
        <div class="w3-col" style="width:60%"><p>

            <!-- Slideshow -->
            <div class="w3-display-container mySlides">
                <img src="2%20Timothy%203_16_17.jpg" style="width:100%;">
                <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
                </div>
            </div>
            <div class="w3-display-container mySlides">
                <img src="psalms110_3.jpg" style="width:100%;">
                <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
                </div>
            </div>
            <div class="w3-display-container mySlides">
                <img src="john12_24.jpg" style="width:100%;">
                <div class="w3-display-bottomleft w3-text-white w3-container w3-padding-32 w3-hide-small">
                </div>
            </div>

            <!-- Slideshow next/previous buttons -->
            <div class="w3-container w3-dark-grey w3-padding-8">
                <div class="w3-left w3-hover-text-teal w3-large" onclick="plusDivs(-1)"><i class="fa fa-arrow-left"></i></div>
                <div class="w3-right w3-hover-text-teal w3-large" onclick="plusDivs(1)"><i class="fa fa-arrow-right"></i></div>

                <div class="w3-center">
                    <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>

            <!-- Contents -->
            <div class="w3-padding-32">
                <div class="w3-container">
                    <h4 class="w3-text-teal"><b>Would you like to complete a Bible-reading milestone this summer?</b></h4>
                    <p>Whether reading the Bible is something you have ever done before or not, Christian Students at UW-Madison
                        has a Challenge for you!</p>
                    <h4 class="w3-text-teal"><b>By signing up for the Challenge you can...</b></h4>
                    <li>Receive each day's reading portion directly in your e-mail inbox</li>
                    <li>Track your progress online</li>
                    <li>Win prizes for completing important milestones</li>
                    <h4 class="w3-text-teal"><b><a href="forms.php">Sign-up for the Badger Bible Reading Challenge</a></b></h4>
                    <p>If you want to view your reading progress or change the version you're reading, go to the <a href="http://www.biblechallenges.com/member/challenges">Bible Challenge Website</a></p>
                </div>
            </div>


            </p></div>
        <div class="w3-col" style="width:20%"><p></p></div>
    </div>

    <?php include ("footer.php"); ?>

    <!-- End page content -->
</div>

<script src="slides.js"></script>
<script src="sidenav.js"></script>

</body>
</html>
