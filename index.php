<!DOCTYPE html>




<html>
<title>Jordin Medina</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif;
    }
    
    body,
    html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }
    /* Create a Parallax Effect */
    
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    /* First image (Logo. Full height) */
    
    .bgimg-1 {
        background-image: url("/photos/Me.JPG");
        min-height: 75%;
    }
    /* Second image (Portfolio) */
    
    .bgimg-2 {
        background-image: url("/photos/candid.JPG");
        min-height: 400px;
    }
    /* Third image (Contact) */
    
    .bgimg-3 {
        background-image: url("/photos/nyc.JPG");
        min-height: 400px;
    }
    
    .w3-wide {
        letter-spacing: 10px;
    }
    
    .w3-hover-opacity {
        cursor: pointer;
    }
    /* Turn off parallax scrolling for tablets and phones */
    
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1,
        .bgimg-2,
        .bgimg-3 {
            background-attachment: scroll;
        }
    }
</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#home" class="w3-bar-item w3-button">HOME</a>
            <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#experience" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> EXPERIENCE</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
                <i class="fa fa-search"></i>
            </a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
            <a href="#experience" class="w3-bar-item w3-button" onclick="toggleFunction()">EXPERIENCE</a>
            <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
            <a href="#" class="w3-bar-item w3-button">SEARCH</a>
        </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-large w3-wide w3-animate-opacity w3-center"> <span class="w3-hide-small">Jordin Medina's </span>Digital Resume </span>
        </div>


    </div>

    <!--Code that displays name input-->
    <div class=" w3-panel w3-display-container w3-padding-8 w3-red">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;
        </span>

        <center>
            <form>

                <br/>What is your name: <input class="w3-input w3-border-0 w3-pale-green" style="width:25%" type="text" id="name" />
                <input type="button" class="w3-btn w3-gray w3-border-2" value="done" onclick="write_name(); this.parentElement.style.display='none'; " />
            </form>

            <h4 id=welcome></h4>
            <h6>Thank you so much for taking the time to visit my page. If you liked my page or have any questions, comments, or suggestions please fill out the survey in the CONTACT section.</h6>
        </center>
    </div>


    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h3 class="w3-center">ABOUT ME</h3>
        <p class="w3-center"><em>I am a programmer</em></p>
        <p>My name is Jordin Medina. I am 19 years old and I am a Junior currently in my second year at Florida Gulf Coast University. I study under the FGCU Whitaker College of Engineering and aspire to become a Software Engineer upon graduating. I was
            born and raised in Naples, Florida. Growing up in the swampy, nature-engulfed wonderland that is Florida, nature and the preservation of it has been symbiotic with my morals and core values. I hope to one day incorporate my childhood and professional
            passions for technology, innovation, and sustainability into what I produce as Software Engineer.
        </p>
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <p><b><i class="fa fa-user w3-margin-right"></i>Jordin Medina</b></p><br>
                <img src="/photos/casual.jpg" class="w3-round w3-image  w3-hover-opacity" alt="Photo of Me" width="500" height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <p>I created this website as a compilation of the many skills that I learned so far through the Software Engineering program at Florida Gulf Coast University - as well as in my own time.</p>
                </br>
                <h4>Inspiration</h4>
                <p>I can confidently say that my idol in the world of technology and sustainability is Elon Musk. The main reason why I admire Elon Musk is because he followed his childhood dreams and through that he has made a way for himself in revolutionizing
                    multiple fields for the good of humanity. He is someone who I connect myself with on many scales and for many reason. If I had a Bitcoin for every time that someone has told me “How does an aspiring Computer Software Engineer like
                    yourself fit into the world of environmental sustainability?” I would have the same net worth as my idol at this point. With the both of us coming from a technologically-obsessed childhood, on top of a burning passion to be the best
                    at what we do, I can’t help but feel that the scale of my programming and innovations will hold to the same standards as Elon Musk one day – or even higher.</p>
            </div>
        </div>
        <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
        <p class="w3-wide"><i class="fa fa-laptop"></i>General Computer/Program Operational Knowledge</p>
        <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:95%">95%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-user"></i>Interpersonal Communicational Skills</p>
        <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-laptop"></i>Java/Javascript/HTML Programming</p>
        <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:80%">80%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-laptop"></i>Computer Hardware</p>
        <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:80%">80%</div>
        </div>
    </div>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">2+ years</span><br> Customer Service/Hospitality
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">30+</span><br> Java/Javascript/HTML files
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">3+</span><br> Custom PC Builds
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">15+ years</span><br> Nerd
        </div>
    </div>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">EXPERIENCE</span>
        </div>
    </div>



    <!-- Container (Experience Section) -->
    <div class="w3-content w3-container w3-padding-64" id="experience">

        <!--Work Experience and Education-->
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
            <div class="w3-container">
                <h5 class="w3-opacity"><b>Student Assistant - Center for Environmental and Sustainability Education</b></h5>
                <h6 class="w3-opacity"><b>Florida Gulf Coast University</b></h6>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>May 2017 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                <p>Duties include verbal and electronic communications, collaborative discussions and projects, setting up tabling events, and technological integration</p>
                <p>Lead student assistant mentor of Student Associates for a Greener Environment (SAGE) program.</p>
                <hr>
            </div>
            <div class="w3-container">
                <h5 class="w3-opacity"><b>Manager - Tropical Smoothie Cafe</b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>July 2014 - Aug 2017</h6>
                <p>Shift leader, food handler, and cashier at Tropical Smoothie in Naples for over two years.</p>
                <hr>
            </div>

        </div>

        <div class="w3-container w3-card w3-white">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
            <div class="w3-container">
                <h5 class="w3-opacity"><b>Florida Gulf Coast University</b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2016 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                <p>Software Engineering</p>
                <hr>
            </div>
            <div class="w3-container">
                <h5 class="w3-opacity"><b>Florida Southwestern State College</b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2014 - 2016</h6>
                <p>High School Dual Enrollment (Junior and Senior years)</p>
                <hr>
            </div>
            <div class="w3-container">
                <h5 class="w3-opacity"><b>Lely High School</b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2012 - 2016</h6>
                <p>High School Diploma</p><br>
            </div>
        </div>


        <h3 class="w3-center">MY WORK</h3>
        <p class="w3-center"><em>Here are some of my latest works...<br> Click on the images to make them bigger</em></p><br>

        <!-- cells that hold pictures -->

        <div class="w3-cell-row">
            <div class="w3-container  w3-cell">
                <H5 style="width:50%">Code that keeps track of time sheets for a tutoring service. The service runs Monday through Wednesday. </H5>
                <img src="/photos/code.png" style="width:50%" onclick="onClick(this)" class="w3-hover-opacity" alt="HW4 code">
                <img src="/photos/output.png" style="width:50%" onclick="onClick(this)" class="w3-hover-opacity" alt="HW4 output">
            </div>
            <div class="w3-container  w3-cell">
                <H2>More program examples to be added...</H2>
            </div>
        </div>

        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
            <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption" class="w3-opacity w3-large"></p>
            </div>
        </div>

        <!--Script for modal-->
        <script>
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
            }
        </script>

        <!--Currently working on-->
        <div class="w3-content w3-container w3-padding-64 ">
            <center>
                <h3>What I am Currently Working on:</h3>
                <h5>A look into what I do in my free time</h5>
                <h5>Last updated: Dec 26, 2017</h5>
                <ul class="w3-ul w3-card-4 w3-purple" style="width:50%">
                    <li>Preparing for and applying to Internships</li>
                    <li>Learning PHP</li>
                    <li>Learning Swift</li>
                    <li>Updating this website</li>
                </ul>
            </center>
        </div>

        <!-- Third Parallax Image with Portfolio Text -->
        <div class="bgimg-3 w3-display-container w3-opacity-min ">
            <div class="w3-display-middle ">
                <span class="w3-xxlarge w3-text-white w3-wide ">CONTACT</span>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64 " id="contact">
            <h3 class="w3-center ">CONTACT INFO</h3>
            <p class="w3-center "><em>Feel free to get in contact with me!</em></p>

            <div class="w3-row w3-padding-32 w3-section "></div>



            <div class="w3-large w3-margin-bottom w3-center">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right "></i>Naples, Florida<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right "></i>Phone: (239)572-0700<br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right "></i>Email: jordin513@gmail.com<br>
                <i>I am also on LinkedIn: </i>
                <a href="https://www.linkedin.com/in/jordin-medina-6a8799153/" class=" fa fa-linkedin w3-hover-opacity"> </a><br><br>

                <!--modal-->
                <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Please take my survey</button>

                <div id="id01" class="w3-modal ">
                    <div class="w3-modal-content w3-black w3-card-4">
                        <header class="w3-container w3-animate-top w3-teal">
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                            <h2>Visitor Survey</h2>
                        </header>
                        <div class="w3-container w3-animate-zoom w3-black">
                            <?php
                                        include 'survey.php';
                                    ?>
                        </div>
                        <footer class="w3-container w3-animate-bottom w3-teal">
                            <p>Thank you for Your participation</p>
                        </footer>
                    </div>


                </div>

            </div>

        </div>

        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off ">
            <a href="#home " class="w3-button w3-light-grey "><i class="fa fa-arrow-up w3-margin-right "></i>To the top</a>
            <div class="w3-xlarge w3-section ">


                <a href="https://www.linkedin.com/in/jordin-medina-6a8799153/" class=" fa fa-linkedin w3-hover-opacity"> </a>
            </div>

            <p>Powered by <a href=" https://www.w3schools.com/w3css/default.asp " title="W3.CSS " target="_blank " class="w3-hover-text-green ">w3.css</a></p>
        </footer>

        <script type="text/javascript" src="js.js"></script>

</body>

</html>