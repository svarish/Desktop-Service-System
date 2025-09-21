<?php
  session_start();

  $firstName =$_POST['firstName'];
	$email = $_SESSION['login_user'];
  $isas = $_POST['Issue'];
  $dsp =$_POST['desp'];
  
	$number = $_POST['number'];
	
  $user = uniqid();
  $dat= date("d.m.Y");
  date_default_timezone_set('Asia/Kolkata'); 
  $time= date("h:i:sa");
  $aq = "Pending";
  

	// Database connection
	$conn = new mysqli('localhost','root','','saved');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO registration(firstName,email,number,UniqID,dvt,time,Comments,issue,Desp) values(?, ?, ?, ?, ?, ?,?,?,?)");
		$stmt->bind_param("sssssssss", $firstName,$email,$number,$user,$dat,$time,$aq,$isas,$dsp);
	  $stmt->execute();
		
		echo "Registration successfully...";
  
		$stmt->close();
		$conn->close();
	}
?>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
 <style>
     button { 
       background-color:crimson;
         
color:white; 
        padding: 8px; 
        margin: 2px 1px; 
        border: none; 
        cursor: pointer; 
        align-items:centre;
         } 
   .ilg{
     font-family: "DM Sans";
   }

    ul {
  list-style-type: none;
  margin: 0;
  padding: 3%;
  overflow: hidden;
  background-color: #333;
  font-family: "Work Sans";
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:crimson;
}

.active {
  background-color:#111;
}

.container {
      position:absolute;
      padding:13px 30px;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      background: whitesmoke;
  }
  .p{
        border-left: 6px solid red;
       }
  #next {
  left: 129px;
  width: 43px;
  background: url(user.png) ;
  
}
</style>
</head>
<body>
 <ul>
  <li><div class="p"><img src = srmlogo.jpeg width="55" height="50"></div></li>
  <li style="float:left"><a class="active" href="#about">SRM VALLIAMMAI ENGINNERING COLLEGE </a></li>
  <li style="float:right"><a href="#home"></a></li>
  <li style="float:right"><a href="#home"></a></li>
  <li style="float:right"><a href="#news"></a></li>
  <li style="float:right"><a href="Register.HTML">< Back</a></li>
</body>

</html>