<!DOCTYPE html>
<html>
<title>Badger Bible Reading</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="questions.css" />
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-tag {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
    .w3-sidenav a,.w3-sidenav h4 {font-weight:bold}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<?php $page = 'questions'; include ("sidenav.php"); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

    <?php $page = 'questions'; include ("header.php"); ?>


    <div class="w3-row">
        <div class="w3-col" style="width:20%"><p></p></div>
        <div class="w3-col" style="width:60%"><p>
            <input type="text" id="myInput" onkeyup="searchKey()" placeholder="Search for a book..." title="Type in a name">

            <ul id="myUL">
                <li><a class="header">Old Testament</a></li>
                <li><a href="genesis.php">Genesis</a></li>
                <!--
                <li><a href="#">Exodus</a></li>
                <li><a href="#">Leviticus</a></li>
                <li><a href="#">Numbers</a></li>
                <li><a href="#">Deuteronomy</a></li>
                <li><a href="#">Joshua</a></li>
                <li><a href="#">Judges</a></li>
                <li><a href="#">Ruth</a></li>
                <li><a href="#">1 Samuel</a></li>
                <li><a href="#">2 Samuel</a></li>
                <li><a href="#">1 King</a></li>
                <li><a href="#">2 King</a></li>
                <li><a href="#">1 Chronicles</a></li>
                <li><a href="#">2 Chronicles</a></li>
                <li><a href="#">Ezra</a></li>
                <li><a href="#">Nehemiah</a></li>
                <li><a href="#">Esther</a></li>
                <li><a href="#">Job</a></li>
                <li><a href="#">Psalms</a></li>
                <li><a href="#">Proverbs</a></li>
                <li><a href="#">Ecclesiastes</a></li>
                <li><a href="#">Song of Songs</a></li>
                <li><a href="#">Isaiah</a></li>
                <li><a href="#">Jeremiah</a></li>
                <li><a href="#">Lamentations</a></li>
                <li><a href="#">Ezekiel</a></li>
                <li><a href="#">Daniel</a></li>
                <li><a href="#">Hosea</a></li>
                <li><a href="#">Joel</a></li>
                <li><a href="#">Amos</a></li>
                <li><a href="#">Obadiah</a></li>
                <li><a href="#">Jonah</a></li>
                <li><a href="#">Micah</a></li>
                <li><a href="#">Nahum</a></li>
                <li><a href="#">Habakkuk</a></li>
                <li><a href="#">Zephaniah</a></li>
                <li><a href="#">Haggai</a></li>
                <li><a href="#">Zechariah</a></li>
                <li><a href="#">Malachi</a></li>
                --->

                <li><a class="header">New Testament</a></li>
                <li><a href="matthew.php">Matthew</a></li>
                <li><a href="mark.php">Mark</a></li>
                <li><a href="luke.php">Luke</a></li>
                <li><a href="john.php">John</a></li>
                <li><a href="acts.php">Acts</a></li>
                <li><a href="romans.php">Romans</a></li>
                <li><a href="1corinthians.php">1 Corinthians</a></li>
                <li><a href="2corinthians.php">2 Corinthians</a></li>
                <li><a href="galatians.php">Galatians</a></li>
                <li><a href="ephesians.php">Ephesians</a></li>
                <li><a href="philippians.php">Philippians</a></li>
                <li><a href="colossians.php">Colossians</a></li>
                <li><a href="1thessalonians.php">1 Thessalonians</a></li>
                <li><a href="2thessalonians.php">2 Thessalonians</a></li>
                <li><a href="1timothy.php">1 Timothy</a></li>
                <li><a href="2timothy.php">2 Timothy</a></li>
                <li><a href="titus.php">Titus</a></li>
                <li><a href="philemon.php">Philemon</a></li>
                <li><a href="hebrews.php">Hebrews</a></li>
                <li><a href="james.php">James</a></li>
                <li><a href="1peter.php">1 Peter</a></li>
                <li><a href="2peter.php">2 Peter</a></li>
                <li><a href="1john.php">1 John</a></li>
                <li><a href="2john.php">2 John</a></li>
                <li><a href="3john.php">3 John</a></li>
                <li><a href="jude.php">Jude</a></li>
                <li><a href="revelation.php">Revelation</a></li>
            </ul>
        </p></div>
        <div class="w3-col" style="width:20%"><p></p></div>
    </div>
    <?php include ("footer.php"); ?>

    <!-- End page content -->
</div>

<script src="search.js"></script>
<script src="sidenav.js"></script>

</body>
</html>


