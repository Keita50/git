  
<?php
$name = (!empty($_POST['name'])) ? $_POST['name'] : '';
?>

<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="CSS/stylesheet.css">
            <title>My Profile</title>
            <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>
    <body>
    <?php include("header.php"); ?>

        <main>
        <section class="site-ttl">
                <h1>Keita Igarashi</h1>
                <p>~Portfolio site~</p>
        </section>
        <section class="profile">
            <a id="profile"></a>
            <h2>Profile</h2>
            <ul>   
                <li>Live:東京都</li>
                <li>Age:29</li>
                <li>Job:IT関係</li>
                <li>エンジニア職への転職を考えており、プログラミングを日々勉強中。</li>
                <li>Hobby:旅行、スポーツ観戦、Runnning、飲酒(Beer、Whisky)</li>                
            </ul>
        </section>
        <div class="skills">
            <a id="skills"></a>
            <h2>skills</h2>
                <div class="graph">
                    <div class="html">
                        <span class="bar" style="width:70%;">HTML/CSS</span>
                    </div>
                    <div class="PHP">
                            <span class="bar" style="width:20%;">PHP</span>
                    </div>
                    <div class="JQuery">
                        <span class="bar" style="width:15%;">JQuery</span> 
                    </div>
                    <div class="Passion">
                        <span class="bar" style="width:100%;">Passion</span>
                    </div>
                </div>
            </div>
        <div class="works">
            <a id="works"></a>
            <h2>Works</h2>
            <p>No Image</p>
        </div>
        </main>
        <?php include("footer.php"); ?>
    </body> 
</html>       


