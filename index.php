<!DOCTYPE html>
<html>
    <head>
       <?php include_once('inc/head.php');?>
    </head>

    <body>
        <?php include_once('inc/header.php');?>

        <div class="container-fluid">
            <!-- hero image section -->
            <div class="row">
                <div class="col-md-12 img-div">
                    <img src="assets/images/newme.jpg" width="1686" height="1000">
                </div>
                <div class="col-md-12 text-center introduction-div">
                   <p class="name">Hello, I'm <span class="h1" style="color: white"> Maryam Bello </span> </p>
                   <p>A Front-end Developer. Aspiring to be a full-stack developer. <br> Intermediate 
                        level in the use of some web technologies to build <br> responsive and interactive websites.
                    </p> <br>
                    <input  type="button" class="btn more" id="more" value="More on me">
                </div>
            </div>
            <!-- hero image section -->

            <!-- about section starts here -->
            <div class="div-sections row" id="about">
                <div class="col-md-1"> </div>
                <div class="col-md-10"> 
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/images/newme.jpg" width="750" height="600">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="mt-5 col-md-5 aboutme">
                            <hr class="horizontal">
                            <p class="h2"> About <span class="font-weight-bold"> Me</span></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure blanditiis, dolorum quisquam consectetur 
                                repudi harum velit saepe tempora libero repellendus totam distinctio porro aperiam. Eum inventore cumque 
                                rerum.</p> <br>
                            <a href="#contact"> <input  type="button" class="btn more" id="more" value="Hire me"> </a>
                
                        </div>
                    </div>   
                </div>
                <div class="col-md-1"> </div>
            </div>
            <!-- end of about section -->

            <!-- skills section start here -->
            <div class="div-sections row" id="skill">
                <div class="col-md-3" id="skill-horizontal"> 
                    <hr class="horizontal">
                    <p class="h2"> My <span class="font-weight-bold"> SKILLS </span></p>
                </div>
                <div class="col-md-9" id="progress-skills">                   
                    <ul class="progress-list">
                        <li> 
                            <h2> HTML5 </h2>
                            <progress max="100" value="90"></progress>
                        </li>
                        <li> 
                            <h2> CSS </h2>
                            <progress max="100" value="65"></progress>
                        </li>
                        <li> 
                            <h2> JAVASCRIPT </h2>
                            <progress max="100" value="40"></progress>
                        </li>
                        <li> 
                            <h2> Wordpress and Joomla </h2>
                            <progress max="100" value="50"></progress>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end of skill section -->
            
        </div>
    </body>
</html>