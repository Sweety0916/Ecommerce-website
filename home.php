<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home_page</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,800;1,400;1,500;1,600;1,900&display=swap"
        rel="stylesheet">

    <style>
        *{
            margin : 0;
            padding:0;
        }
        body {
            
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .home {
            width: 100%;
            height: 100vh;
            /* background-image:url("/image/h1.jgp.jpg")/; */
            /* background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("./images/h9.jpeg");
             */
            background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.95)), url("https://s24193.pcdn.co/wp-content/uploads/2017/06/sexualized-kids-clothes-ENTITY.jpg");
            
            background-size: cover; 
            background-position: center;
            z-index: -1;
            
            opacity: 0.99;
        }

        .logo {
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo ul li {
            list-style: none;
            display: inline-block;
            margin: 0px 50px;
        }

        .logo ul li a {
            font-family: 'Baloo Bhai 2', cursive;
            font-size: 1.27rem;
            text-decoration: none;
            color: white;
            text-transform: uppercase;

        }

        .logo ul li a:hover {
            color:#FFCCCC;
            /* background-color: black; */
        }

        .logo ul li::after {
            content: icon;
            height: 3px;
            width: 0;
            background: white;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;

        }

        .logo ul li:hover::after {
            width: 100%;

        }

        .content {
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: #FF9966;
        }

        .content h1 {
            font-size: 70px;
            margin-top: 25px;
            font-family: 'Bree Serif', serif;

        }

        .content p {
            margin: 20px auto;
            font-weight: 100;
            line-height: 25px;
            font-size: 2.2rem;
            font-family: 'Baloo Bhai 2', cursive;
color:#FFCCCC;
        }

       

         button {
            text-decoration: none;
            font-size: 25px;
            width: 230px;
            padding: 20px 4px;
            text-align: center;
            margin: 24px 16px;
            border-radius: 16px;
            font-weight: bold;
            border: 3px solid black;
            background: transparent;
            cursor: pointer;
            position: relative;
            text-decoration: none;


        }

        button span {
            text-decoration: none;
            background: #f4f7f6;
            height: 100%;
            width: 0;
            border-radius: 15px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -2;
            transition: 0.2s;

        }

        button:hover span {
            text-decoration: none;
            width: 100%;
background-color:aqua;
        }

        button :hover {
            border: none;

        } 
        #shope{
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="home">
        <div class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Services</a></li>
                
                <li><a href="">Contact Us</a></li>
            </ul>

            <ul>
                <li>
                    <a href="sign.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg></i></a>
        </div>
        </li>
        </ul>


        <div class="content">
            <h1>Welcome To Kids-Emporium</h1>
            <p>Don’t miss your child’s chance to strut their stuff in the family event of the year!</p>
            <div>
               
                 <button id="shope" type="button"><span></span><a href="index.php"> 
                        <bold id="shope" style="text-decoration:none">SHOP NOW</bold>
                    </a></button>  
                <!-- <button type="button"><span></span>suscribe</button>-->

            </div>
        </div>
    </div>
</body>

</html>