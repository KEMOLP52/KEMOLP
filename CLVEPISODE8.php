<?php include "connexion.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title> KEMOLP </title>
<link rel="icon" type="image/png" href="icone1.png">
<link rel="stylesheet" type="text/css" media="screen" href="KEMOLP.css" />
</head>
<body>
<image src="mecolp.png" alt="Image" height="50" width="300">
<hr>
<center>
<div class="column">
<a href="FILM.html"><h1>FILMS</h1></a>
</div>
<div class="column">
<a href="SERIE.html"><h1>SERIE</h1></a>
</div>
<div class="column">
<a href="COURT-METRAGE.html"><h1>COURT-METRAGE</h1></a>
</div>
<div class="column">
<a href="KEMOLP.html"><h1>MASHINIMA</h1></a>
</div>
</center>
<br>
<br>
<br>
<br>
<hr>
<br>
<center>
    <IFRAME SRC="https://uqload.io/embed-rrsldy34qi9v.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=1000 HEIGHT=562 allowfullscreen></IFRAME>
    <h4>EPISODE 8</h4>
    </div>
    <br>
    <?php
    $sql = "UPDATE `streaming` SET vues = vues+1 WHERE id = 8";
    $conn->query($sql);

    $sql = "SELECT vues FROM `streaming` WHERE id = 8";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["vues"];
        }
    } else {
        echo "no results";
    }
    
    $conn->close();
?>
</center>
<br>
<hr>
<br>
<div class="column">
    <a href="CLVEPISODE1.php">
    <img src ="CLEM MINIATURE/EPISODE 1.png" height="100%" width="100%">
    <h4>EPISODE 1</h4>
    </div>
<div class="column">
    <a href="CLVEPISODE2.php">
    <img src ="CLEM MINIATURE/EPISODE 2.png" height="100%" width="100%">
    <h4>EPISODE 2</h4>
    </div>
    <div class="column">
        <a href="CLVEPISODE3.php">
        <img src ="CLEM MINIATURE/EPISODE 3.png" height="100%" width="100%">
        <h4>EPISODE 3</h4>
        </div>
        <div class="column">
            <a href="CLVEPISODE4.php">
            <img src ="CLEM MINIATURE/EPISODE 4.png" height="100%" width="100%">
            <h4>EPISODE 4</h4>
            </div>
            <div class="column">
                <a href="CLVEPISODE5.php">
                <img src ="CLEM MINIATURE/EPISODE 5.png" height="100%" width="100%">
                <h4>EPISODE 5</h4>
                </div>
                <div class="column">
                    <a href="CLVEPISODE6.php">
                    <img src ="CLEM MINIATURE/EPISODE 6.png" height="100%" width="100%">
                    <h4>EPISODE 6</h4>
                    </div>
                    <div class="column">
                        <a href="CLVEPISODE7.php">
                        <img src ="CLEM MINIATURE/EPISODE 7.png" height="100%" width="100%">
                        <h4>EPISODE 7</h4>
                        </div>
    </html>