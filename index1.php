<!DOCTYPE html>
<html>
    <head>
       <?php include_once('inc/head.php');?>
    </head>

    <body>
        <div class="container">
            <div id="about-sidenav">
                <img src="images/newavatar.png">
                
                <div id="about">
                    <p> ABOUT </p> 
                    <p>I'm a Web Developer with knowledge
                        of HTML5, CSS3 and Javascript for front-end. 
                       &nbsp; Aspiring to be a full-stack developer. <br><br> 
                       <em>Come let's build your imagination
                        into reality </em>
                    </p> 
                </div>
            </div>
            <!-- end of sidenav -->

            <!-- main section -->
            <div id="main">
                <section id="home">
                    <div id="bgimage-content1">
                        <p>Who Am I?</p>
                    </div>
                    <div id="bgimage-content2">
                        <p style="font-size:30px; padding-left: 200px"> I'm Maryam. </p>
                        <p>   
                            <ul>
                                <li> An Hijabi</li>
                                <li>A Software-Developer</li>
                                <li>A FashionPreneur</li>
                            </ul>
                        </p> 
                    </div>
                    <div id="menu-icons">
                        <ul class="menus"> 
                            <li> <a href="#home"> Home </a> </li>
                            <!-- <li> <a href="#about-sidenav"> About </a> </li> -->
                            <li> <a href="#projects"> Projects </a></li>
                            <li> <a href="#skills"> Skills Set </a></li>
                            <li> <a href="#contact"> Contact </a></li>
                        </ul>
                    </div>
                </section>
                <!-- end of home section -->

                <!-- project section here -->
                <section id="projects">
                    <p class="paragraph-header"> <strong> MY PROJECTS </strong> </p>
                    <div id="project-works">
                        <div class="proj"> <img src="images/mirror-conf.png">  <p> Mirror Conf webpage replicate</p></div>
                        <div class="proj"> <img src="images/reg-page.png">     <p> Registration Form </p>  </div>
                        <div class="proj"> <img src="images/login-page.png">   <p> Login Page </p> </div>
                        <div class="proj"> <img src="images/recruit.png">      <p> Recruitment Firm webpage </p> </div>
                        <div class="proj"> <img src="images/newequity1.png">   <p> EquityProject with HTML only </p>  </div>
                        <div class="proj"> <img src="images/newequity2.png">   <p> EquityProject with HTML only   </p></div>
                    </div>
                </section>
                <!-- end of project section -->

                <!-- skills section here -->
                <section class="skills_and_footer" id="skills">
                    <p class="paragraph-header"> <strong> MY SKILLS </strong> </p>
                    <p>
                        <ul class="progress-list">
                            <li> 
                                <h2> HTML </h2>
                                <progress max="100" value="80"></progress>
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
                                <progress max="100" value="30"></progress>
                            </li>
                        </ul>
                    </p>
                </section>
                <!-- end of skills section -->

                <!-- footer section here -->
                <footer class="footer-section">
                    <form id="contact" action="srever.php" method="post">
                        <h2 class="paragraph-header">Contact Me! </h2>
                        <input type="text" name="" id="name" placeholder="Name" class="user-inputs">
                        <input type="text" name="" id="email" placeholder="Email" class="user-inputs">
                        <input type="number" name="" id="phone" placeholder="Phone number" class="user-inputs">
                        <input type="text" name="" id="subject" placeholder="Subject" class="user-inputs">
                        <textarea rows="5" cols="39">Leave a message..</textarea> <br>
                        <button type="submit" name="" id="submit" class="btn btn-primary" onclick="myPortfolio()">Send</button>
                    

                        <section id="contact-address">
                            <p>ZeedLabs Systems </p>
                            <address>
                                163b, Sinari Daranijo street, <br>
                                Victoria-Island, Lagos <br>
                                08088376911
                            </address>
                        </section>
                        <div id="social-icons" style="display:inline-block">
                            <a href="https://www.facebook.com/bello.a.maryam"> <i class="fa fa-facebook"></i> </a>
                            <a href="https://www.linkedin.com/in/maryam-a-o-bello-b179aa169"> <i class="fa fa-linkedin"></i> </a>
                            <a href="https://instagram.com/biemislam"> <i class="fa fa-instagram"></i> </a>
                            <a href="https://wa.me/23408088376911"> <i class="fa fa-whatsapp"></i> </a>
                            <a href=""> <i class="fa fa-github"></i> </a>
                        </div>
                        <p style="color:white; margin: 10px 0px 0px 430px; display: inline-block; font-size:20px">Website developed by &copy; biem, 2019 </p>
                    </form>
                </footer>
                <!-- end of footer section -->

            </div>
        </div>
        <script src="js/portfolio.js"></script>
    </body>
</html>