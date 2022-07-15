<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="style.css">

<script src="contactus.js"></script>
<div align="center" class="image">

        <a href="homepage.html"><h1 class="defaulthomepagetitle">Website Builder</h1></a>
    </div>

    <style>
        a:link { text-decoration: none;}
a:visited { text-decoration: none; }
a:hover { text-decoration: none; }
a:active { text-decoration: none; }
body{background: rgb(242,242,241);
    background: linear-gradient(90deg, rgba(242,242,241,1) 9%, rgba(222,224,216,1) 26%, rgba(252,252,252,1) 63%, rgba(255,249,236,1) 94%);}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.flex-container { 
  display: flex;
  flex-flow:row wrap;
  background-color: rgb(177, 206, 237);
  text-align: center;
  
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: auto;
  padding: 10px;
  font-size:30px;
  width:10px;
  flex:1 100%;
}

</style>
 <head>
 <nav> <ul>
        <li><a href="homepage.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="serve.html">Services</a></li>
        <li><a href="call.html">Help</a></li>
      </ul>
    </nav>
    <title>Contact Form</title>

</head>
<body>
    <div>
<h1 class="formtitles">Contact Form</h1>
    <form action="insert.php" method="post" onsubmit="return false">

    <center>
        <input type="text" placeholder="Enter your last name" name="Last_Name" id="lastName" />
<br><br>

<input type="text" placeholder="Enter your first name" name="First_Name" id="firstName" />
<br><br>

<input type="radio" id="male" name="Gender" value="male"> Male
<input type="radio" id="female" name="Gender" value="female"> Female
<br><br>

<input type="email" placeholder="Enter your email" name="Email" id="email" />
<br><br>

<input type="text" placeholder="Address" name="House_Address" id="address" />
&nbsp;&nbsp;&nbsp;
<input type="number" placeholder="House number" name="House_Number" id="houseNumber" />


&nbsp;&nbsp;&nbsp;
<select name= "Country" id="country">
 <option disabled selected value> -- select a country -- </option>
 <option value="Malaysia">Malaysia</option>
 <option value="Singapore">Singapore</option>
 <option value="United Kingdom">United Kingdom</option>
</select>
<br><br>

<option disabled selected value> -- select a country -- </option>

<span>What is your question?</span>
<br>
<textarea name="Query" id="question" rows="4"></textarea>
<br><br>

<input type="button" value="Submit" id="submit" onclick="sendContact()" class="submitButton">
</center>
</div>
</form>
    

 
 
 </body>

 <footer>
<br>
 <a href='call.html' class="myButton">Back</a><br>
 <small><i>Copyright &copy; 2022 Web Builder Company</i></small><br>

    <i>Reach Out To Us Today!!!!</i><br>
        
            <i>E-mail: webbuilder_147@gmail.com</i><br>
            <i>Phone: 014-321-1134</i>    
</footer>
</html>