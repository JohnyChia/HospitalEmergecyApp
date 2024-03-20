<html>

    <head>
        <meta charset="UTF-8"></meta>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>

    <style>
        /* To full in the background-color, bcs have white space*/
        body
        {
           margin:0px;
           padding:0px;
           position:relative;
        }
        .container
        {
            align-items:center; /*To ajust the navigation bar to center*/
            display:flex;
            background-color:lightblue;
            height:15%;
            padding: 0px 20px;
            justify-content:space-between;
        }
        .container img
        {
            width:auto;
            height:100%;
            margin:auto;
            

        }
        .nav
        {
           height:auto;
           position:fixed;
           z-index:1;
           left:0px;
           overflow-x:hidden;
           transition:0.5s;
           padding-top:30%;

        }
        .nav a
        {
            font-family: "Times New Roman", Times, sans-serif;
            font-weight:bold;
            display:block;
            text-decoration:none;
            color:black;
            font-size:18px;
            padding:20px; /* Top and Bottom (5px), Left and Right (50px)*/
            transition:0.3s;
            background-color:lightgreen;
            

        }
        a:hover
        {
            color:grey;
        }
        .icon
        {
            display:block;
            cursor:pointer;
            padding:5px;
            color:black;
            z-index:3;

        }
        .nav.closebtn
        {
            position:absolute;
            font-size:36px;
            margin-right:50px;
            
        }
        .text
        {
            padding:2%;
            color:#ADFF2F;
            background-color:#004d00;
           
        }
        .text p 
        {
            color:#ffffff;
            font-size:20px;
        }
        .text h2
        {
            text-align:left;
        }
        
        .container2
        {
            text-align:center;
            flex-direction:column;
            align-items:center;
            display:flex;
            margin:0px 250px 0px 250px;
            background-color:#DCDCDC;
        }
        .container2 img
        {
            margin:2%;
            width:20%;
            height:auto;
            border-radius:80%;
        }
        .container2 p
        {
            text-align:center;
            font-size:20px;
        }
        
        h2
        {
            text-align:center;
        }
        .picture
        {
          display:flex;
          justify-content:center;  
        }
        .picture img
        {
            border-radius:40%;
            padding:5%;
            width:25%;
            height:auto;
        }
        .footer
        {
            margin-top:2%;
            padding:2%;
            background-color:brown;
            display:flex;
            flex-direction:column;
            position:relative;
            color:#FAEBD7;
        }
        .contact-info
        {
            display:flex;
            align-items: center;
            margin-top:10px;
        }
        .contact-info i
        {
            margin-right:10px;
        }
        .footer .contact-info p
        {
            font-size: 20px;
            font-weight:bold;
            font-family:"Times New Roman", Times, sans-serif;
        }
        .map
        {
            position:absolute;
            top:50%;
            left:70%;
            width:50%;
            height:auto;
            transform:translateY(-50%);
        }
        .footer img
        {
            width:50%;
            height:auto; 
        }
        .footer h2
        {
            text-align:left;
        }
        /*phone version*/
        @media screen and (max-width:768px)
        {
           
            .text p
            {
                font-size:16px;
            }
            .container
            {
                
                text-align:center;
                height:auto;
                
            }
            .container img
            {
                width:75px;
            }
            .nav
            {
                margin-top:60%;
                padding-top:20%;
                
            }
            .nav a
            {
                font-family: "Times New Roman", Times, sans-serif;
                font-weight:bold;
                font-size:15px;
                margin:0px;
                display:block;
            }
            .icon
            {
                display:block;
                
            }
          
            .container2
            {
                width:70%;
                margin:0px 100px 0px 100px;
            }
            .container2 p
            {
                font-size:16px;
            }
            .footer .contact-info p
            {
               font-size:16px;
            }
            .footer h2
             {
                text-align:center;
             }
            .map 
            {
               width:50%;
               position:relative;
               left:25%;
               transform:translateY(0%);
            }
            .map img
            {
                width:100%;
                height:auto;
            }
           
        }
        
    </style>

    <body>

    <div class="container">
    <a href="#" class="icon" onclick="openNav()"><i class="fa fa-bars"></i></a>

    <img src="cropped-Culture-in-Sports.webp"alt="sportsociety">
    
    <i class="fas fa-search"></i>

        <div class="nav"id="mynav">
                <a href="#"class="closebtn"onclick="closeNav()"><i class="fas fa-window-close"></i></a>
                <a href="#Events">Events</a>
                <a href="#About">About</a>
                <a href="#Contact Us">Contact Us</a>
                <a href="#"onclick="question()">Apply Now</a>
                <a href="#National Competition">National Competition</a>
            </div>

        
    </div>
    
    <div class="text">
         <h1>SPORT SOCIETY</h1>
         <h2>We are one, Join Us !</h2>
         <p>Sport Society is a sports mall. It’s where you belong when you move, refuel, shop and cheer. It’s where we go to win the cup, watch the match, eat fresh and meet our heroes. It’s ours. To inspire and be inspired.</p>
    </div>

    <div class="picture">
        <img src="Sport1.jpg"alt="sport1"/>
        <img src="Sport2.jpg"alt="sport2"/>
        <img src="Sport3.jpg"alt="sport3"/>

    </div>
    <h2>ALL THE AMENITIES YOU NEED</h2>

    <div class="container2">
        <img src="jogging.jpg">
        <h2>Make Sport Society Your Daily Pit-Stop</h2>
        <p>We’ve developed a community experience that makes living well much easier, whether you’re bringing the whole family to watch a game or joining friends for a workout.</p>
    </div>
    
    <div class="container2">
        <img src="929286.png"alt="nursey">
        <h2>Nursery & Daycare</h2>
        <p>On-site daycare and nursery facilities make it easy for Mums and Dads to lead healthy, active lives.</p>
    </div>

    <div class="container2">
        <img src="medical.png"alt="medical">
        <h2>Medical Centre</h2>
        <p>World-class medical professionals and outpatient services are on hand to deal with everyday medical needs.</p>
    </div>
    
    <div class="container2">
        <img src="wifi_PNG62260.png"alt="free wifi">
        <h2>Free WIFI</h2>
        <p>Stay on message and in touch, whether you’re stocking up on organic groceries or hitting the treadmill, with Sport Society free WiFi.</p>
    </div>
    
    <div class="footer">
        <h2>Contact Information</h2>

        <div class="contact-info">
        <i class='fas fa-map-marker-alt' style='font-size:48px;color:red'></i>
        <p>INSTITUT SUKAN NEGARA, Kuala Lumpur Sports City,
        Bukit Jalil, 57000 Kuala Lumpur Malaysia</p>
        </div>

        <div class="contact-info">
        <i class='fas fa-phone-volume' style='font-size:48px;color:lightgreen'></i>
        <p>+603-89914558</p>
        </div>

        <div class="contact-info">
        <i class="fa fa-envelope" style="font-size:48px;color:lightblue"></i>
        <p>info@sportsociety.com</p>
        </div>

        <div class="map">
        <img src="Malaysia Map.jpg"alt="map">
        </div>
    </div>
    <script>
    
        window.onload=function()
        {
           closeNav();
        }

        function openNav()
        {
            document.getElementById("mynav").style.width = "250px";
        }

        function closeNav()
        {
            document.getElementById("mynav").style.width = "0px"; 
        }

        function question()
        {
            var answer=confirm("Are you join the group competition ?\n Click Ok to group application Form or Click Cancel to Individual Application Form");

            if(answer==true)
            {
                window.location.href="group_application.php";
                
            }
            else
            {
                window.location.href="individual_application.php";
            }

        }





    </script>
    </body>
</html>