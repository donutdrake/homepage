<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Duc Le - Hobby Editor & Artist</title>
        <!---
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">  
    </head>

    <body>

        <!--Header-->

        <header>
            <div id="logo">
                <a href="#">
                <i class="fas fa-home"></i>
                   <!-- <img src="img/logo.png" alt="Logo">--->
                </a>
            </div>
        

        <nav id="main-nav">
            <div class="toggle">
            <i class="fas fa-bars menu" aria-hidden="true"></i>
            </div>
            <ul>
                <a href="#home"><li>Home</li></a>
                <a href="#about"><li>About</li></a>
                <a href="#work"><li>Work</li></a>
                <a href="#contact"><li>Contact</li></a>
            </ul>
        </nav>
        </header>
        <!--Home-->
        <section id="home">
            <hr>
            <h1>Welcome to my homepage</h1>
            <h2>Vu Duc Le</h2>
            <a href="#about">
            <img src="img/pfeil.png" alt="Pfeil">    
            </a>
        </section>
        <!--About-->
        <section id="about">
            <h3>About</h3>
            <hr>
            <img src="img/IMG_20190407_163923_873.jp" alt="Avatar">
            <h4>Vu Duc Le or "Duc"</h4>
            <p>Born and raised in Berlin with vietnamese origin.</p>
            <p>Cancel my study "Media Technic" at the TU Berlin in the 2. Semester.</p>
            <p>In the freetime, I edit Videos for the group <a href="https://funky-monkeys.de/">"The Funky Monkeys"</a> and play violin. </p>
            <p>And I'm geek and have passion with technology.</p>


        </section>
        <!--Work-->
        <section id="work">
            <h3>Work</h3>
            <hr>
            <div id="projects">
                <ul>
                <li><a href="https://www.youtube.com/watch?v=wqUi_9khNY8"><img src="img/radio_dance.jpg" alt="R_D"></a></li>
                <li><a href="https://www.youtube.com/watch?v=xYOxKAt12wY&feature=youtu.be"><img src="img/kek.jpg" alt="FOTO"></a></li>
                <li><a href="https://www.youtube.com/watch?v=1TJYy5Q5iHk"><img src="img/kek1.jpg" alt="Uelzen"></a></li>
                <li><a href="https://www.youtube.com/watch?v=d0rtMJEjcV0"><img src="img/meme1.jpg" alt="Meme"></a></li>
                <li><a href="https://www.youtube.com/watch?v=7ACG69vA3d8"><img src="img/zdf.png" alt="ZDF"></a></li>
                <li><a href="#"><img src="https://placehold.it/1280x720" alt="Project_06"></a></li>
                </ul>
            </div>
            
        </section>
        <!--Contact-->
        <section id="contact">
            <h3>Contact</h3>
            <hr>
            <form class="contact-form" action="contactform.php" method="post">
                <input class="input_text" type="name" placeholder="Name">
                <input class="input_text" type="email" tabindex="1" placeholder="E-Mail"><br>
                <input class="input_text" type="subject" tabindex="2" placeholder="Betreff"><br>
                <textarea class="input_text"  tabindex="3" placeholder="Message"></textarea><br>
                <input class ="button" type="submit" name="submit">
            </form>

        </section>
        <!--Footer-->
        <footer>
            <p> 
                <div class="network">
                <a class="network-group" href="https://www.instagram.com/vuduc.le/?hl=de"><i class="fab fa-instagram" ></i></a>
                
                <a class="network-gruop" href="https://www.youtube.com/channel/UCm02GT8BTtzRgSQvqfwRdDw?view_as=subscriber"><i class="fab fa-youtube"></i></a>
                <a class="network-gruop" href="https://github.com/donutdrake"><i class="fab fa-github"></i></a>
                <a class="network-gruop" href="https://www.deviantart.com/donutdrake2"><i class="fab fa-deviantart"></i></a>
            </div>

                &copy;  | 2019 |
                
                <!---
                <a  href="https://www.youtube.com/channel/UCm02GT8BTtzRgSQvqfwRdDw?view_as=subscriber"><img src="img/yt.png" width="32px" height="27px"></img></a>
                <a  href="https://github.com/donutdrake"><img src="img/gh.png" width="30px" height="30px"></img></a>
                <a  href="https://www.instagram.com/vuduc.le/?hl=de"><img src="img/ig.png" width="30px" height="30px"></img></a>
                --->

               

                
            </p>
        </footer>
       <!--- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>-->
       <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
              crossorigin="anonymous"></script>
    
        <script src="js/mobile-menu.js"></script>
        
        
        

    </body>
</html>