<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

            
            $conn = mysqli_connect("localhost", "root", "", "dbDio");
            
            
            if($conn === false){
                die("ERROR: Fail to connect. " . mysqli_connect_error());
            }
            
            if(isset($_POST['submit']))
            {
                $Last_Name = $_POST['Last_Name'];
                $First_Name = $_POST['First_Name'];
                $Gender = $_POST['Gender'];
                $Email = $_POST['Email'];
                $House_Address = $_POST['House_Address'];
                $House_Number = $_POST['House_Number'];
                $Country = $_POST['Country'];
                $Query = $_POST['Query'];
                
                
                $sql = "INSERT INTO tbcontact (Last_Name, First_Name, Gender, Email, House_Address, House_Number, Country, Query)
                VALUES ('$Last_Name','$First_Name','$Gender','$Email','$House_Address', '$House_Number', '$Country', '$Query' )";
                
                if(mysqli_query($conn, $sql)){
                    echo "<h3>Data saved successfully.</h3>";

                    
                } else{
                    echo "ERROR: $sql. " . mysqli_error($conn);
                }
                
                
                mysqli_close($conn);
            }
		?>
	</center>
</body>

</html>

