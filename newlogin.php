<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(backimg1.jpeg);
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 8.76;
        }

        .loginbox {
            border: 3px solid white;
            /* background-image: url(https://source.unsplash.com/1600x900/?nature,water);*/
            padding: 20px;
            margin: 8% auto 0;
            height: 300px;
            width: 300px;
            text-align: center;
            border-radius: 30px;
            z-index: -1;
            opacity: 0.76;
        }

        #logo {
            height: 70px;
            width: 70px;
            padding: 5px;
            border-radius: 100px;
            align-self: center;
        }
        
        .signup-btn{
            font-size: 1.1rem;
            font-family: 'Baloo Bhai 2', cursive;
            
        }
        .input-box {
            text-align: center;
            font-size: 1.1rem;
            font-family: 'Baloo Bhai 2', cursive;
            border-radius: 14px;
            padding: 10px;
            margin: 10px 2px;
            width: 75%;
            border: 2px solid black;
            outline: none;
        }

        button {
            color: black;
            width: 100%;
            padding: 10px;
            border-radius: 14px;
            cursor: pointer;
            border: 2px solid black;
            text-align: center;
        }
#text p {
    color: blanchedalmond;
    background-color: white;
}
        hr {
            color: black
        }

        .or {
            color: white;
            width: 30px;
            margin: -17px auto 10px;

        }
    </style>
<body>
 
 <?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['password']) 
        ) {
        
            $email = $_POST['email'];
        $password = $_POST['password'];
        
        
       

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "signup";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM login WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO login(email, password ) values(?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ss", $email,$password);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
  
 <!-- <form action="" method="POST">
 
 <table>
   
   
   <tr>
    
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>


  </table>
 </form>-->
 <form action="" method="POST">
<div class="loginbox">

<img src="userlogo.jpg"id="logo"><br>

 
 <tr>
    
    <tr>
     <td>Email :</td>
     <td><input type="email" class="input-box"placeholder="Email Id" name="email" required></td>
    </tr> 
    <tr>
     <td>Password :</td>
     <td><input type="password" class="input-box"placeholder="Password" name="password" required></td>
    </tr>
    
    
    <tr>
    <td><input type="submit" value="submit" name="submit" class="input-box"></td><br>
    <a href="sign.php">don't acc</a><br>
    <a href="index.php">login</a>
   </tr>
    </div>



</dev>
</form>
</body>
</html>