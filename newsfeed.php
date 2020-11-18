<!DOCTYPE html>

<html>
<?php include('Templates/header.php'); ?> 
<head>
        <title>Blogger</title>
    </head>

    <body>
       
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-theme-d2 w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2"  href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class=" w3-margin-right fas fa-user-circle"></i>My Profile</a>
                <div class="w3-bar-item  w3-padding-large"> View by:</div>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Recent"><i class="fas fa-clock"></i> Recent</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Most_Viewed"><i class="fas fa-users"></i>Most Viewed</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Last_month"><i class="fas fa-calendar-week"></i>Best of Last Month</a>
                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-button w3-padding-large" title="Tags"><i class="fas fa-tags"></i>About...</button>     
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                        <a href="#" class="w3-bar-item w3-button">Cars</a>
                        <a href="#" class="w3-bar-item w3-button">Beauty</a>
                        <a href="#" class="w3-bar-item w3-button">Lifestyle</a>
                    </div>
                </div>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="New_post"><i class="far fa-newspaper"></i> Write your thoughts</a>
            </div>
        </div>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
          <a href="#" class="w3-bar-item w3-button w3-padding-large">Recent</a>
          <a href="#" class="w3-bar-item w3-button w3-padding-large">Most Viewed</a>
          <a href="#" class="w3-bar-item w3-button w3-padding-large">Best of Last Month</a>
          <div class="w3-dropdown-hover w3-button w3-hide-small">
                    <button class="w3-button w3-padding-large" title="Tags"><i class="fas fa-tags"></i>About...</button>     
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                        <a href="#" class="w3-bar-item w3-button">Cars</a>
                        <a href="#" class="w3-bar-item w3-button">Beauty</a>
                        <a href="#" class="w3-bar-item w3-button">Lifestyle</a>
                    </div>
            </div>
        </div>

        <section class="w3-padding-48 header">
            <h1>Be inspired</h1>
            
        </section>
        <hr>
        <section class="content-container">
            <div class="left-content">
                <h2>Article</h2>
                <div class="article">
                    <img src = "Pictures/mountains-draw.png" alt="Image">
                    
                
                <h3>Heading</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href = "article.php"><button class="btn read-more-btn">Read more</button></a>
                </div>
            </div>
        </section>
    <script>
    function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
    }
    </script>
    </body>

</html>