<!DOCTYPE html>
<html>
   <body>
    <a href="Map.html"></a>

    <style>
        #map
        {
            height:900px;
            width:100%;
        }
    </style>
<?php
// Your PHP code to retrieve user information from the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "hackathon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve user information
$sql = "SELECT name, IC, emergency_call, telephone, address FROM userlogin"; // Select specific columns from the 'userlogin' table

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch user information
    $row = $result->fetch_assoc();
    
    // Assign retrieved values to variables
    $userName = $row['name'];
    $userIC = $row['IC'];
    $userEmergencyCall = $row['emergency_call'];
    $userPhone = $row['telephone'];
    $userAddress = $row['address'];

    // Output JavaScript code with user information
    echo "<script>
    var userName = '$userName';
    var userIC = '$userIC';
    var userEmergencyCall = '$userEmergencyCall';
    var userPhone = '$userPhone';
    var userAddress = '$userAddress';
    
    alert('Your Name: ' + userName + '\\n\\nYour IC: ' + userIC + '\\n\\nYour Emergency Call: ' + userEmergencyCall + '\\n\\nYour Phone: ' + userPhone + '\\n\\nYour Address: ' + userAddress);
    </script>";
} else {
    echo "0 results";
}

$conn->close();
?>


<div id="map"></div>

    <script>

      var hospitalMarkers=[];
      var bounds;
      var map;
      var directionsRenderer;
      var directionService;
      var infowindow;

        function initMap()
        {
            map= new google.maps.Map(document.getElementById("map"),
            {
                 zoom : 15

            });

            directionService= new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            infowindow= new google.maps.InfoWindow();

            bounds= new google.maps.LatLngBounds();

          navigator.geolocation.getCurrentPosition(function(position)
          {
                var userlocation=
                {
                   
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                var userLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                

            var marker=new google.maps.Marker(
                
                {
                    position: userlocation,
                    map:map,
                    title:"Your location",
                    icon:{
                        url:'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
                    }
                    
                }
            );
            map.setCenter(userlocation);

            calculateNearestHospital(userlocation);

            

           
            });

            
        
    function calculateNearestHospital(userlocation)
    {
        var nearestDistance=Number.MAX_VALUE;
        var nearestHospitalIndex=-1;
        
        hospitalMarkers.forEach(function(hospitalMarker) {
        hospitalMarker.setMap(null);
    });

        for(var i=0;i<hospitalMarkers.length;i++)
        {
            var hospitalMarker= hospitalMarkers[i];
            var hospitalLocation= hospitalMarker.getPosition();
            var distance= google.maps.geometry.spherical.computeDistanceBetween(userlocation,hospitalLocation);

            if(distance<nearestDistance)
            {
                nearestDistance= distance;
                nearestHospitalIndex= i;

            }
        }

        if(nearestHospitalIndex !== -1)
        {
            var nearestHospital= hospitalMarkers[nearestHospitalIndex];

            console.log('Nearest Hospital:',nearestHospital.getTitle());
            
            var nearestHospitalEmail = nearestHospital.email;
            var nearestHospitalTelephone = nearestHospital.telephone;

            var userLocation= new google.maps.LatLng(userlocation.lat,userlocation.lng);
            var nearestHospitalLatLng= nearestHospital.getPosition();

            calculateAndDisplayRoute(userLocation, nearestHospitalLatLng);

            nearestHospital.setMap(map);

            var nearestHospitalMarker = new google.maps.Marker({
            position: nearestHospital.getPosition(),
            map: map,
            title: nearestHospital.getTitle(),
            icon: {
                url: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
            },
        });

       
        bounds.extend(nearestHospitalMarker.getPosition()); // Extend bounds to include nearest hospital marker
        infowindow.setContent(nearestHospital.getTitle()+ '<br><br><strong>Email:</strong> ' + nearestHospitalEmail + '<br><br><a><strong>Telephone:</strong></a>' + nearestHospitalTelephone);;
        infowindow.open(map, nearestHospitalMarker); // Open infowindow for nearest hospital marker
        }
    }
    
       
       

        function calculateAndDisplayRoute(origin,destination)
        {
    
       var request = 
       {
        origin: origin,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING
       };

       directionService.route(request, function(result, status) {
    if (status === google.maps.DirectionsStatus.OK) 
    {

           
        
        directionsRenderer.setDirections(result);

    } else {
        console.error('Directions request failed: ' + status);
    }
});
        }

        

   
    

    

    
    

    

        
    

<?php
$servername="localhost";
$username="username";
$password="password";
$dbname="hackathon";




try
{
  $conn= new mysqli($servername,$username,$password,$dbname);

  
if($conn->connect_error)
{
 throw new Exception("Connection Failed : ".$conn->connect_error);
}


 $sql_insert_data1="INSERT INTO locationmap (address, email, telephone,lat,lng) VALUES
 ('Hospital Sultan Idris Shah Serdang, Jalan Puchong, 43000 Kajang Selangor Darul Ehsan', 'hsis@moh.gov.my','60389475555','2.9767722364914944', '101.72077663244214'),

 ('Hospital Sungai Buloh, Jalan Hospital, 47000, Sungai Buloh, Selangor Darul Ehsan', 'contact@crc.gov.my','60361454333','3.2197551023151507', '101.58416471237997'),

 ('Persiaran Kayangan, Seksyen 7, 40000 Shah Alam, Selangor', 'shahalam@moh.gov.my','60355263000','3.071539681904757', '101.49113088539266'),

 ('Jalan Sultan Alam Shah, 42700 Banting, Selangor', 'pengurusanhospitalbanting@moh.gov.my','60331871333','2.803054588000384', '101.4948471393673'),

 ('Hosptal Selayang, Lebuhraya Selayang, Kepong, 68100 Batu Caves, Selangor','hospitalselayang@moh.gov.my','60361263333','3.2424560270642235', '101.64659745976857'),

 ('Jalan Mewah Utara,Taman Pandan Mewah, 68000 Ampang Selangor','hospitalampang@moh.gov.my','60342896000','3.128553256932967', '101.76445875286096'),

 ('Jalan Langat, 41200 Klang, Selangor','hospitalklang@moh.gov.my','60333757000','3.0208843472786713', '101.44114394441034'),

 ('Jalan Hospital, Pekan Kuala Kubu Bharu, 44000 Kuala Kubu Baru, Selangor','h_kkb@moh.gov.my','603606411333','3.5652814372282555', '101.65393636635463'),

 ('Persiaran Multimedia, Cyber 11, 63000 Cyberjaya, Selangor','hospitalcyberjaya@moh.gov.my','60388733500','2.9202190665986243', '101.63159251198572'),

 ('KM 24, Jln Gombak, Wilayah Persekutuan, 53100 Kuala Lumpur, Selangor','hospitalgombak@moh.gov.my','60361892122','3.295753118899578', '101.72946881674248'),

 ('KM8 ,Jalan Sungai Terap 5, 45500 Tanjong Karang, Selangor','htkarang@moh.gov.my','60332682000','3.3961102699224086', '101.21820774121542'),

 ('Jalan Pahang, 50586 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur','hsl@moh.gov.my','60326155555','3.1717396356421097', '101.70374372956988'),

 ('Jalan P9, Presint 7, 62250 Putrajaya, Wilayah Persekutuan Putrajaya','hpj@moh.gov.my','60383124200','2.930124381430147', '101.67481787245582'),

 ('Persiaran Mardi-Upm, 43400 Serdang, Selangor','hsaas.upm.edu.my','60397695500','2.980206200282435', '101.71894734121541'),
 
 ('Jln Prefesor Diraja Ungku Aziz, Seksyen 13, 50603 Petaling Jaya, Selangor','ummc.edu.my','60379494422','3.1128718729125335', '101.65417770258254')";

 $sql_select_data1= "SELECT address, email,telephone,lat, lng FROM locationmap";
 
 
 $result1 = $conn->query($sql_select_data1);

if($result1->num_rows>0)
{
    
   while($row=$result1->fetch_assoc())
  {
    echo "console.log('Email:', '" . addslashes($row['email']) . "', 'Telephone:', '" . addslashes($row['telephone']) . "'); 
    
      var hospitalMarker= new google.maps.Marker(
      {
         position:{lat: ".$row['lat'].",lng:".$row['lng']."},
         map:map,
         title:'<strong>". addslashes($row['address'])."</strong>',
         email: '<strong>". addslashes($row['email'])."</strong>',
         telephone: '<a href=\"tel:". addslashes($row['telephone']) . "\"><strong>". addslashes($row['telephone']) . "</strong></a>'
       
         
       });
       

         
        hospitalMarkers.push(hospitalMarker);
        bounds.extend(hospitalMarker.getPosition());

        google.maps.event.addListener(hospitalMarker, 'click', function() {
            var contentString = '<strong>Address:</strong> ". addslashes($row['address']) . "<br><strong>Email:</strong> " . addslashes($row['email']) . "<br><strong></strong>:" . addslashes($row['telephone']) . "</strong>';
            infowindow.setContent(contentString);
            infowindow.open(map, hospitalMarker);
            

           
        });";
        
       
     
      }
      
      
  }
  else
  {
   echo" console.log('No hospital data found.');";

  }
  

  


$conn->close();
}



catch(Exception $e)
{
echo"console.error('Error".$e->getMessage()."')";
}



?>
    
}


   
       
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_dhMf9LUIzs_eSuVDg6Cux3I7ckciETk&callback=initMap&libraries=places&libraries=places,geometry"async defer ></script>

        








    





    
   </body>
</html>



