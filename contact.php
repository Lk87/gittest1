<!DOCTYPE HTML>
<html>

<head>
  <title>Contact</title>
  <meta name="description" content="Personal Website" />
  <meta name="keywords" content="Personal, Professional, Blog" />
  <meta charset="UTF-8"/>
        
                               <link rel="stylesheet" type="text/css" href="css/style_new.css" />
                                        
                             <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

       
<body>
  <div id="main">
    <header>
      <div id="logo"><h1> <a href="#"> Lakshmi </a></h1></div>
      <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current"><a href="home.html">Home</a></li>
          <li><a href="about.html"> About me</a></li>
          <li><a href="projects.html"> Projects</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
      
      
    <div id="site_content">
      <div id="sidebar_container">
        <div class="gallery">
          <ul class="images">
            <li class="show"><img width="450" height="450" src="images/1.jpg" alt="photo_one" /></li>
            <li><img width="450" height="450" src="images/2.jpg" alt="photo_two" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
          
          
          
          
        <h1>Contact</h1>
       
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="#"</p>
            <p><span>Email Address</span><input class="contact" type="text" name="#" </p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"></textarea></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
          </div>
        </form>
      </div>
    </div>
        
      <footer>
      <p><a href="home.html">Home</a> | <a href="about.html">About me</a> | <a href="projects.html"> Projects </a> | <a href="blog.html">Blog</a> | <a href="contact.php">Contact</a></p>
      <p>"Stay in touch"</a></p>
    </footer>
  </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</body>
</html>
