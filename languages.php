<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
    <meta charset ="utf-8" />
    <link href ="css/default.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Jeannie Davis: Personal Website</title>
    </head>
<!-- closing head -->
   
    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1>8 Bit Video Game Development </h1>
        </header>
        <hr class="header"/>
        <nav>
            <a href="index.php">Home</a>
            <a href="history.php">History</a>
            <a href="languages.php" class="highlighted">Languages</a>
            <a href="popgames.php">Famous Glitches</a>
            <a href="references.php">References</a>
        </nav>
        <br/>
        <main>
            <figure>
                <img src="img/computer.png" alt="Computer image"/>
            </figure>
            <div>
                <p class="text">
                So now you might be wondering what languages even existed back in the 80s that people used to make these video games.
                A lot of these games were actually programmed in Assembly.
                After doing some research it seems most of the NES video games were programmed on MOS 6502. 
                </p>
           
            </div>
             <div>
                <p class="text">
                Nowadays if someone wanted to create an 8 bit video game, most people would not use Assembly. You would use C/C++ and use a raspberry pi or an emulator to simulate the video game.
                </p>
           
            </div>
         </main>
     </body>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr class="footer">
            CST 336 Internet Programming. 2020&copy; Davis<br/>
            <img src="img/csumblogo.png" alt="csumblogo"/>

        </footer>
        <!-- closing footer -->
        
   
    <!-- closing body -->

</html>