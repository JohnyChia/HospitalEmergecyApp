<!DOCTYPE html>

<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
        body
        {
            width:100%;
            position:fixed;
            height:100%;
            background-color:#262626;
            margin:0px;
            color:#ffffff;
            font-family: ui-sans-serif, system-ui,  "Segoe UI", "Noto Sans", sans-serif, "Helvetica Neue", Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        .container
        {
            
            justify-content:space-between;
            display:flex;
            
        }
        .container h2
        {
            margin-left:20%;
        }
      
        .container img
        {
            padding-top:10px;
            width:40px;
            height:50px;
            
        }
        .icon
        {
            cursor: pointer;
        }
        .nav
        {
            height:100%;
            justify-content:space-between;
            transition: 0.5s;
            background-color:green;
            z-index:1;
            position:fixed;
            overflow-x:hidden;
            background-color:#1a1a1a;
            box-sizing:border-box;
        }
       .logo
        {
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:15px;
           
        }
        .logo img
        {
            width:50px;
            height:50px;

        }
        .bar
        {
            
            display:flex;
            padding:15px;
            justify-content:center;
            align-items:center;
            
        }
        .bar a
        {
            color:#ffffff;
            text-decoration:none;
            font-size:20px;
           
        }
        .bar img
        {
            padding:10px;
            width:50px;
            height:50px;
           
        }
        .Issue
        {
           
            
            justify-content:space-between;
            align-items:center;
            
           
        }
       
        .Issue p,.Issue h2
        {
            text-align:center;
            padding:20px;
            font-size:20px;
           
            margin:5px 0px;
            
        }
       
        .Issue img
        {
            
            width:50px;
            border-radius:50px;
            height:50px;
            margin-left:20px;
        }
        .one,.two,.three
        {
            display:flex;
            padding:20px;
            justify-content:center;
        }

        .modal,.Health
        {
            display:none;
            position:fixed;
            z-index:1;
            width:100%;
            height:100%;
            
          
            
        }
        .modal-content
        {
            
            background-color:#404040;
            padding:20px;
            margin:50px;
            width:80%;
            height:100%;
            position:absolute;
            left:50%;
            bottom:25%;
            transform:translate(-50%,-50%);
            overflow-y:auto;
           
        }
        .modal-content .header
        {
            display:flex;
            justify-content:space-between;
        }
        .modal-content img.icon
        {
            float:right;
        }
        .container2
        {
            display:flex;
            align-items:center;
            flex-direction:column;
            margin-left:20%;
            margin-top:5%;
            max-width:100%;
            
           
           
        }
        .container2 img
        {
            width:50px;
            height:50px;

        }
        .title
        {
            display:flex;
            flex-direction:row;
        }
        .container3
        {
            display:flex;
            align-items:center;
            background-color: #333333;
            justify-content:center;
            margin:60px 50px 30px 80px;
            padding:10px 10px;
            width:50%;
            border-radius:50px;
            text-align:center;

          
        }
        .container3 a,.container4 a
        {
            color:#ffffff;
            text-decoration:none;
        }
        .container4
        {
            display:flex;
            align-items:center;
            background-color: #333333;
            justify-content:center;
            margin:60px 50px 30px 80px;
            padding:10px 10px;
            width:50%;
            border-radius:50px;
            text-align:center;
            
        }
        .general
        {
            display:flex;
            flex-direction:row;

        }
        .container5,.container6,.container7,.container8,.container9,.container10,.container11,.container12,.container13,.container14
        {
            position:relative;
            width:100%;
            display: flex;
            flex-direction:column;
           
         }
            
        .container5 img,.container6 img,.container7 img,.container8 img,.container9 img,.container10 img,.container11 img,.container12 img,.container13 img,.container14 img
         {
            margin-left:20px;
            margin-top:20px;
            width: 200px; /* Adjust the width as needed */
            height:150px; /* Maintain aspect ratio */
            margin-bottom: 10px; /* Add some bottom margin for spacing */
        }
       
        
        .container5 p,.container6 p,.container7 p,.container8 p,.container9 p,.container10 p,.container11 p,.container12 p,.container13 p,.container14 p
         {
            text-align: left; 
            margin:20px;
            font-size:20px;
            font-weight:bold;
         }
         .container5 ul li,.container6 ul li,.container7 ul li,.container8 ul li,.container9 ul li,.container10 ul li,.container11 ul li,.container12 ul li,.container13 ul li,.container14 ul li
         {
             text-align: left; 
        }
        .overlay
        {
            padding:10px;
            display:flex;
            margin-left:50px;
            position:relative;
            transition:0.5s ease;
            height:20px;
            width:100px;
            opacity:0;
        }
        .container5:hover .overlay,.container10:hover .overlay
        {
            opacity:1;
        }
        .text
        {
            display:flex;
            position:absolute;
            color:white;
            text-align:center;
            font-size:20px;
            text-decoration:underline;
            top:60%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        

         
        
        .form
        {
            display:flex;
            width:100%;
            height:80%;
            flex-direction:row;
            margin-top:30px;
            margin-left:40%;
        }

        textarea
        {
            font-family: ui-sans-serif, system-ui,  "Segoe UI", "Noto Sans", sans-serif, "Helvetica Neue", Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            display:flex;
            font-weight:bold;
            font-size:15px;
            width:50%;
            height:100px;
            padding:10px;
            box-sizing:border-box;
            
        }
        .form button
        {
            padding:10px 10px;
            margin:10px 10px;
            width:15%;
            border-radius:50px;
            background-color:green;
            color:#ffffff;
            
        }
        .health-modal
        {
            overflow:auto;
            background-color:#404040;
            left:40%;
            width:60%;
            height:100%;
            top:45%;
            position:absolute;
            transform:translate(-50%,-50%);
            overflow-y:auto;
        }
        .health-modal img.icon
        {
            float:right;
        }
        
    
        
       
        
        @media screen and (max-width:768px)
        {
            .container h2
            {
                margin-left:0%;
            }
            .container2
            {
                margin-left:10%;
                display:flex;
                align-items:center;
                flex-direction:column;
                margin-top:20%;
                width:80%;
           
            }
            .container3,.container4
            {
                margin:20px;
                width:80%;
            }
            .modal
            {
                display:none;
                z-index:1;
                width:96%;
                height:100%;
                position:fixed;
           }
           
           .modal-content
           {
             background-color:#404040;
             padding:20px;
             width:96%;
             height:100%;
             position:fixed;
             top:0;
             left:0;
             margin:0;
             transform:none;
             
           }
           .form
        {
            display:flex;
            flex-direction:row;
            margin-left:10%;
           
        }
      
        .form button
        {
            padding:10px 10px 10px 10px;
            margin:10px 10px;
            width:20%;
            height:15%;
            border-radius:30px;
            background-color:green;
            color:#ffffff;
            
        }
        textarea
        {
            overflow:hidden;
            display:flex;
            width:80%;
            height:120px;
            padding:20px;
            box-sizing:border-box;
            
        }
         
            
        .container5 img,.container6 img,.container7 img,.container8 img,.container9 img
         {
            margin-top:50px;
            padding:10px;
            width: 200px; /* Adjust the width as needed */
            height:150px; /* Maintain aspect ratio */
            margin-bottom: 15px; /* Add some bottom margin for spacing */
        }
        .container10 img
        {

            margin-top:65px;
            margin-bottom:32px;
            
        }
        .container11 img
        {
            margin-top:70px;
            margin-bottom:38px;
        }
        .container12 img,.container13 img
        {
            margin-top:80px;
            margin-bottom:42px;
        }
        .container14 img
        {
            margin-top:85px;
        }
        .container14 p
        {
            text-align: left; 
            margin:10px;
            font-size:20px;
            font-weight:bold;
        }
        
        .container5 p,.container6 p,.container7 p,.container8 p,.container9 p,.container10 p,.container10 p,.container11 p,.container12 p,.container13 p
         {
            text-align: left; 
            margin:20px;
            font-size:20px;
            font-weight:bold;
         }
         .container10 p,.container11 p,.container12 p,.container13 p
         {
            text-align: left; 
            margin:15px;
            font-size:20px;
            font-weight:bold;
            
         }
         .container5 ul li,.container6 ul li,.container7 ul li,.container8 ul li,.container9 ul li,.container10 ul li,.container11 ul li,.container12 ul li,.container13 ul li,.container14 ul li
         {
             text-align: left; 
        }
        .container5,.container6,.container7,.container8,.container9,.container10,.container11,.container12,.container13,.container14
        {
            width:100%;
            display: flex;
            flex-direction:column;
           
         }
         .health-modal
        {
            overflow:auto;
            background-color:#404040;
            left:50%;
            width:100%;
            height:100%;
            top:50%;
            position:fixed;
            transform:translate(-50%,-50%);
            overflow-y:auto;
        }
        .health-modal img.icon
        {
            float:right;
        }
        
          
        }
      </style>

    </head>

    <body>
        <div class="container">
            <img class="icon"src="dot.jpg"alt="menu"id="menu"onclick="openNav()">
             
             <h2>Live Chat 4.5</h2>
            
            <img class="icon"src="cancel.png"alt="close"onclick="close()">
            
            <div class="nav"id="sidebar">

                <div class="logo">
                  <img src="9143571.png"alt="livechat">
                  <h2 style="color:#ffffff;margin-left:10%">New chat</h2>
                  <img src="cancel.png"alt="close"onclick="closeNav()">
               </div>

                  <div class="Issue">
                     <h2>Popular Health Issue</h2>
                        <div class="one"><img src="diabetes.jpg"><a id="1"onclick="Issue1()"><p>1. Diabetes</p></a></div>
                        <div class="two"><img src="hypertension.png"><a id="2"onclick="Issue2()"><p>2. Hypertension</p></a></div>
                        <div class="three"><img src="obesity.jpg"><a id="3"onclick="Issue3()"><p>3. Obesity</p></a></div>
                     </div>
                     

                     <div class="bar"><img src="upgrade.png"><a id="open">Upgrade Plan</a></div>

               <div class="modal"id="mymodal">
                      <div class="modal-content">
                         <div class="header">
                             <h2>Upgrade Your Plan</h2>
                             <img class="icon"src="cancel.png"alt="close"onclick="closePlan()">
                          </div>

                          <div class="title1">
                            <h3>Free</h3>
                            <p>RM 0 / month</p>
                            <button onclick="free()"><h4>Your current plan</h4></button>
                            <p>For people just getting started with Live Chat</p>
                            <ul>
                                <li>Unlimited messages, interactions, and history</li>
                                <li>Access to our Live Chat-4.5 model</li>
                                <li>Access on Web</li>
                            </ul>
                            <hr>
                          </div>

                          <div class="title2">
                          <h3>Plus</h3>
                            <p>RM 80 / month</p>
                            <button style="background-color:#009900;"onclick="plus()"><h4 style="color:#ffffff">Upgrade to Plus</h4></button>
                            <p>Everything in Free, and:</p>
                            <ul>
                                <li>Access to Live Chat-5.0, our most capable model</li>
                                <li>Browse, create, and use GPTs</li>
                                <li>Access to additional tools like DALL·E, Browsing, Advanced Data Analysis and more</li>
                            </ul>
                         </div>
                            
                            
                            <div class="title3">
                            <h3>Team</h3>
                            <p>RM 60 per person / month</p>
                            <button style="background-color:#0000ff;"onclick="team()"><h4 style="color:#ffffff">Upgrade to Team</h4></button>
                            <p>Everything in Plus, and:</p>
                            <ul>
                                <li>Higher message caps on Live Chat-5.0 and tools like DALL·E, Browsing, Advanced Data Analysis, and more</li>
                                <li>Create and share Live Chats with your workspace</li>
                                <li>Admin console for workspace management</li>
                                <li>Team data excluded from training by default. Learn more</li>
                            </ul>
                            <hr>
                          </div>
                              
                            </div>
                          </div>
                        </div>
                     </div>
               

        <div class="container2">
            <img src="9143571.png"alt="livechat">
            <h2>How can I help you today?</h2>

        <div class="title">
            <div class="container3">
              <a href="Map.php"><h2>Emergency</h2></a>
           </div>
           
            <div class="container4">
                <a href="#"onclick="Problem()"><h2>General Health Issue</h2></a>
                    <div class="Health"id="health">
                        <div class="health-modal">
                        <img class="icon"src="cancel.png"alt="close"onclick="closeHealth()">

                        <div class="general">
                           <div class="container5">
                             <img src="Headache.jpeg"alt="headache">
                                <div class="overlay">
                                    <div class="text">Headache</div>
                                </div>
            
                            <p>Symptom</p>
                            <ul>
                                <li>Genetics</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Stress</li>
                                <li>Lack of Sleep</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Go to the nearest clinic</li>
                                <li>Have a Panadol</li>
                                <li>Put a cold pack on your forehead</li>
                            </ul>
                          

                         <div class="container6">

                            <img src="Flu.jpg"alt="Flu">
                            <div class="overlay">
                                    <div class="text">Flu</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Diziness</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Weakened immune system</li>
                                <li>Living or working conditions</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Go to the nearest clinic</li>
                                <li>Use saline nasal spray</li>
                                <li>Get plenty of rest</li>
                            </ul>
                       
                      

                        <div class="container7">

                            <img src="Stomach ache.jpeg"alt="Stomachache">
                                <div class="overlay">
                                    <div class="text">Stomach Ache</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Stomach growling or rumbling</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Eating too much</li>
                                <li>Hunger pains</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Drinking water</li>
                                <li>Avoiding lying down</li>
                                <li>Drink ginger water</li>
                            </ul>

                             <div class="container8">

                            <img src="earache.jpeg"alt="earache">
                               <div class="overlay">
                                    <div class="text">Earache</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Muffled hearing</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Ear injury from pressure changes</li>
                                <li>Foreign objects in the ear</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Apply a cold washcloth to the ear</li>
                                <li>Avoid getting the ear wet</li>
                                <li>Sit upright to help relieve ear pressure</li>
                            </ul>

                            <div class="container9">

                            <img src="pink eye.jpeg"alt="pinkeye">
                                <div class="overlay">
                                    <div class="text">Pink Eye</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Itching</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Allergens</li>
                                <li>Chemicals, such as chlorine in pool water or air pollution</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Go to the nearest clinic</li>
                                <li>Stopping contact lenses and makeup</li>
                                <li>Artificial tears</li>

                           
                        </div>
                    </div>
                    </div>
                      </div>
                      </div>
                     

                     <div class="container10">

                            <img src="sore throat.jpeg"alt="sorethroat">
                                <div class="overlay">
                                    <div class="text">Sore Throat</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Pain when swallowing</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Dryness</li>
                                <li>Muscle strain</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Gargle with warm salt water</li>
                                <li>Go to the nearest clinic</li>
                                <li>Take honey</li>
                            </ul>

                              <div class="container11">

                            <img src="cough.jpeg"alt="cough">
                               <div class="overlay">
                                    <div class="text">Cough</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Dry and scratchy throat</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Asthma</li>
                                <li>Lung infections</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Take some honey</li>
                                <li>Drink some hot water</li>
                                <li>Drink saltwater gargle</li>
                            </ul>

                            <div class="container12">

                            <img src="backpain.jpeg"alt="backpain">
                               <div class="overlay">
                                    <div class="text">Back Pain</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Muscle aching to a shooting</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Muscle or ligament strain</li>
                                <li>Bulging or ruptured disks</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Go to the nearest clinic</li>
                                <li>Sleep Better</li>
                                <li>Sit with a good posture</li>
                            </ul>

                            <div class="container13">

                            <img src="nosebleed.jpeg"alt="nosebleed">
                               <div class="overlay">
                                    <div class="text">Nosebleed</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li>Blood coming from one or both nostrils</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Allergic reaction</li>
                                <li>Nose picking</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Sit down at a table</li>
                                <li>Lean forward and firmly pinch the soft part of you</li>
                                <li>Just above your nostrils</li>
                            </ul>

                            <div class="container14">

                            <img src="dizziness.jpeg"alt="dizziness">
                                <div class="overlay">
                                    <div class="text">Dizziness</div>
                                </div>

                            <p>Symptom</p>
                            <ul>
                                <li> Feeling faint</li>
                            </ul>

                            <p>Causes</p>
                            <ul>
                                <li>Low blood pressure</li>
                                <li>Low blood sugar</li>
                            </ul>

                            <p>Solution</p>
                            <ul>
                                <li>Sit or lie down immediate</li>
                                <li>Get plenty of rest</li>
                                <li>Call ambulance</li>
                            </ul>


                        </div>
                    </div>
                     </div>
                         </div>
                           </div>
                         
                            


                        
                        </div>

                    </div>

                       
                 </div>
           </div>
       </div>

       <form action="#" method="POST" class="form">
       <textarea id="result"type="text" name="input" placeholder='Message Live Chat...' <?php echo !empty($input) ? "value='$input'" : ""; ?>></textarea>
          <button type="submit" value="submit">Submit</button>
        </form>

         <p>Live Chat can make mistakes. Consider checking important information.</p>

      
    </div>

    <?php

       $server="localhost";
       $username="user";
       $password="123";
       $dbname="hackathon";

       $conn=new mysqli($server, $username, $password, $dbname);

       if($conn->connect_error)
       {
        die("Connection failed: ".$conn->connect_error);
       }

       $input=' ';

       if($_SERVER["REQUEST_METHOD"]=="POST")
       {
          $input = strtolower($_POST["input"]);

       
            $input = $_POST["input"];

            $keyword = array(
    "Headache"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness= 'Headache'",
    
    "Flu"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Flu'",

    "Stomach ache"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness= 'Stomach ache'",

    "Fever"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Fever'",

    "Sore throat"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Sore throat'",

    "Cough"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness= 'Cough'",

    "Back pain"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Back pain'",

    "Nosebleed"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Nosebleed'",

    "Earache"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Earache'",

    "Pink eye"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Pink eye'",

    "Dizziness"=>"SELECT causes1, causes2, symptom, solution1, solution2, solution3 
     FROM no_emergency
     WHERE sickness = 'Dizziness'"
);



$found = false;
foreach ($keyword as $key => $query) {
    if (stripos($input, $key) !== false) {
        $found = true;
        $result = $conn->query($query);

        if($result)
        {
          if ($result->num_rows > 0)
         {
            echo"<table>";

                while ($row =$result->fetch_assoc())
                 {
                   
                    echo "<script>document.getElementById('result').value = 'Causes: " . $row["causes1"] . ", " . $row["causes2"] . "Symptoms: " . $row["symptom"] . "; Solutions: " . $row["solution1"] . ", " . $row["solution2"] . ", " . $row["solution3"] . "';</script>";
                    $causes = $row["causes1"] . ", " . $row["causes2"];
                    $symptoms = $row["symptom"];
                    $solutions = $row["solution1"] . ", " . $row["solution2"] . ", " . $row["solution3"];
    
                    // Output additional columns as needed
                }
                echo"</table>";
            }

                else
                 {
                    echo "No information found for the keyword: " . $input;
                }
            
           
        } 
        else 
        {
            echo "Error executing the query: " . $conn->error;
        }
        
    }
    
   
}
       }
    
    
    
    // Debug output
   

    
    
      
   


       ?>
       
       
   
       
   


      

    

       
        

        
    </body>

    <script>

        window.onload=function()
        {
            var sidebar= document.getElementById("sidebar");

            if(window.innerWidth>768)
            {
                sidebar.style.width="400px";
            }
            else
            {
                sidebar.style.width="0px";
            }

        }
        function openNav()
        {
            document.getElementById("sidebar").style.width="400px";
        }

        function closeNav()
        {
            document.getElementById("sidebar").style.width="0px";

            if(window.innerWindow<=768)
            {
                side.style.width="0px";
            }
        }
        var modal = document.getElementById("mymodal");

       var open = document.getElementById("open");

      var span = document.querySelector(".modal-content img.icon");


    open.onclick = function() 
    {

        modal.style.display = "block";
    }
    
    span.onclick = function() 
    {
        modal.style.display = "none";
    }

     window.onclick= function(event)
        {
            if(event.target==modal)
            {
                modal.style.display="none";
            }
        }
    
    function free()
    {
        alert("You are using the Current Plan !!!")
    }

    function plus()
    {
        var plus;

        if(confirm("Confirm To Buy The Plus Plan ?"))
        {
            alert("Thank You for purchase the Plus Plan !")
        }
        
    }

    function team()
    {
        var team;

        if(confirm("Confirm To Buy The Team Plan ?"))
        {
            alert("Thank You for purchase the Team Plan !")
        }
        
    }

    function Problem()
    {
        var healthProblem= document.getElementById("health");
        healthProblem.style.display="block";
    }
    function closeHealth() {
        var healthModal = document.querySelector(".Health");
        healthModal.style.display = "none";
    }
    function Issue1()
    {
        var text;

        var text=confirm(("Symptoms ? Prevention? "))

        if (text)
        {
            alert("Symptoms:\n" +
              "- Feeling more thirsty than usual.\n" +
              "- Urinating often.\n" +
              "- Losing weight without trying.\n\n" +
              "Prevention:\n" +
              "- Eat healthy foods. Choose foods lower in fat and calories and higher in fiber. Focus on fruits, vegetables, and whole grains. Eat a variety to keep from feeling bored.\n\n" +
              "- Get more physical activity. Try to get about 30 minutes of moderate aerobic activity on most days of the week.");
        }
        else
        {
            alert("Thanks For Your Response")
        } 
    }
    function Issue2()
    {
        var text;

        var text=confirm(("Symptoms ? Prevention? "))

        if(text)
        {
            alert("Symptoms:\n" +
              "- Headaches\n" +
              "- Shortness of breath\n" +
              "- Nosebleeds\n\n" +
              "Prevention:\n" +
              "- Eat healthy foods. Choose healthy meal and snack options to help you avoid high blood pressure and its complications. Be sure to eat plenty of fresh fruits and vegetables.\n\n" +
              "- Get Enough Sleep. Getting enough sleep is important to your overall health, and enough sleep is part of keeping your heart and blood vessels healthy. Not getting enough sleep on a regular basis is linked to an increased risk of heart disease, high blood pressure, and stroke.\n\n"+
              "- Keep Yourself at a Healthy Weight.Having overweight or obesity increases your risk for high blood pressure. To determine whether your weight is in a healthy range, doctors often calculate your body mass index (BMI). ");

        }
    }
    function Issue3()
    {
        var text;

        var text=confirm(("Symptoms ? Prevention? "))

        if(text)
        {
            alert("Symptoms:\n" +
              "   BMI       	Weight status\n" +
              "Below 18.5	    Underweight\n" +
              "18.5-24.9	    Healthy\n" +
              "25.0-29.9	    Overweight\n" +
              "30.0 and higher	Obesity\n\n" +
              "Prevention:\n" +
              "- Avoid processed foods. Highly processed foods, like white bread and many boxed snack foods, are a common source of empty calories, which tend to add up quickly. \n\n" +
              "- Reduce sugar consumption. It is important to keep your intake of added sugars low. The American Heart Association recommends that the intake of added sugar not exceed six teaspoons daily for women and nine teaspoons daily for men.\n\n"+
              "- Skip saturated fats.Focus instead on sources of healthy fats (monounsaturated and polyunsaturated fats) like avocados, olive oil, and tree nuts. Even healthy fats are recommended to be limited to 20% to 35% of daily calories, and people with elevated cholesterol or vascular disease may need an even lower level.");
        }
    }
    

   
  


       
    </script>
    
</html>