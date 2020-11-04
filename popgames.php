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
            <a href="languages.php">Languages</a>
            <a href="popgames.php" class="highlighted">Famous Glitches</a>
            <a href="references.php">References</a>
        </nav>
        <br/>
        <main>
            <figure>
                <img src="img/mario.jpg" alt="mario"/>
            </figure>
            <div>
                <p class="text">
                   Now let's look at some famous glitches from the 8 bit era:
                </p>
            </div>
            <div>
                <p class="text">
                    The Minus World (Super Mario Bros - NES)
                </p>
                <p class="text">
                    One of the most well earliest and well known glitches is an endlessly repeating underwater glitch level. 
                    The level is accessed by making use of a "walk-through-walls" glitch to access a hidden warp room. 
                    One of the pipes in said warp room leads to the minus world. 
                    The minus world is identical to World 1-2, with the exception that the pipe at the end of the level leads back to the start point. 
                    The player is, thus, doomed to endlessly repeat the level until time (and their lives) run out.
                </p>
            </div>
             <div>
                <p class="text">
                    MissingNo (Pokemon Red/Blue- GB)
                </p>
                <p class="text">
                   The most common way to encounter Missingno. in the Red and Blue versions of Pokémon is to do the following:

Go to the northern part of Viridian City, and watch the Old Man's demonstration on how to catch a Pokémon.
Fly to Cinnabar Island
Surf up and down along the east coast of the island until Missingno. appears.
                </p>
            </div>
            <div>
                <p class="text">
                    Glitch World (Link's Awakening- GB)
                </p>
                <p class="text">
                   Players who reach Airman's room for the boss fight can try jumping back toward the boss gate using the floating platforms of Item-1. 
                   The glitch world you enter depends on how many enemies you have killed beforehand. <br>
                    <ul class="facts">
                        <li> Kill a number of enemies anywhere in Koholint Island. </li>
                        <li> Go to Madam Meow Mow's House and go behind the kennel.</li>
                        <li> Push down on the D-Pad and tap right until you go down the side of the kennel (going through the top-right corner). 
                        Because of how solid object tiles work in the game, they do not fully push Link out of them when going into corners, unlike A Link to the Past.</li>
                        <li> You should now be clipped into the kennel roof tile more than usual, press Left to enter the kennel from the back.)</li>
                        <li> You should arrive in a glitch world, press Up and Left to start looking around. The tiles and blocks behave differently depending on the number of enemies killed. 
                        A certain numbers of enemies killed causes Link to be in a glitch world and then immediately back in the overworld, or repeatedly falling down the hole due to the tiles. 
                        Tiles will behave normally if you killed exactly 1 enemy.)</li>
                     </ul>
                   
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