<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
 </head>

    <style type="text/css">
  
    *{
  
        margin: 0;padding: 0;font-family:'Muli',sans-serif; box-sizing: border-box;
        
    }
.divider-text{
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span{
    padding: 7px;
    font-size: 12px;
    position: relative;
    z-index: 2;
}
.divider-text::after{
    content: "";
    position: absolute;
    width: 100%;
    border-bottom:1px solid #add;
    top: 55%;
    left: 0;
    z-index: 1;

}
.btn-facebook{
    background-color: #405d9d!important;
    color:#fff!important;
}
.btn-gmail{
    background-color: #ea4335!important;
    color:#fff!important;
}


    </style>
<body >
    <?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
$username= mysqli_real_escape_string($con,$_POST['username']);
/*$email= mysqli_real_escape_string($con,$_POST['email[20]']);
$mobile= mysqli_real_escape_string($con,$_POST['mobile[20]']);*/
$password= mysqli_real_escape_string($con,$_POST['password']);
$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

$pass=password_hash($password,PASSWORD_BCRYPT);
$cpass=password_hash($cpassword,PASSWORD_BCRYPT);
$emailquery="select * from registration where email='$email";
$query=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($query);
if($emailcount>0){
    echo"email already exists";
}else{
    if($password===$cpassword){
$insertquery="insert into registration(username,email,mobile,password,cpassword) 
values('$username','$email','$mobile','$pass','$cpass')";
$iquery =mysqli_query($con,$insertquery);

    if($con){
        ?>
        <script>
            alert("Connection Successful");
            </script>
        <?php
    }else{
        ?><script>
        alert(" NO Connection ");
        </script>
    <?php
    }



    }else{
        ?><script>
        alert(" Incorrect password ");
        </script>
    <?php
    }
    
}

    }
   ?> 
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
<h4 class="card-title mt-3 text-center"> Create Account</h4>
<p class=" text-center"> Get started with your free account</p>
<p><a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>
Login Via Gmail</a>
<a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook f"></i>
Login via facebook</a>
</p>
<p class="divider-text">
<span class="big-light">OR</span>

</p>
<form action="home.php" method="POST">
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-user"></i></span>
</div>
<input name="username" class="form-control" placeholder="Full name" type="text" required>
</div>
<div class="form-group input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
    </div>
    <input name="email "class="form-control" placeholder="email adress" type="email" required>
</div>
<div class="form-group input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-phone"></i></span>
    </div>
    <input name="mobile "class="form-control" placeholder="phone number" type="mobile" required>
</div>
<div class="form-group input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-lock"></i></span>
    </div>
    <input class="form-control" placeholder="create password" name="password" type="password" value="" required>
</div>
<div class="form-group input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-lock"></i></span>
    </div>
    <input class="form-control" placeholder="repeat password" name="cpassword" type="password" value="" required>
</div>
<div class="form-group">
    <button type="submit" name="submit" class=" btn btn-primary btn-block">Create Account</button>

    </div>
    <p class="text-center">Have an account?<a href="signin.php">Log In</a></p>
    
</div>
</form>



</body>
</html>