<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>

    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            background-color: #f0f0f0;
        }
        *{
            margin: 0; padding: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            outline: none; border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }

        html{
            font-size: 62.5%;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }

        header{
            position: fixed;
            top:0; left:0; right: 0;
            background: #fff;
            padding:2rem 9%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
            }

        header .logo{
            font-size: 3rem;
            color: #333;
            font-weight: bolder;
        }

        header .logo span{
            color: var(--pink);
        }

        header .navbar a{
            font-size: 2rem;
            padding: 0 1.5rem;
            color: #666;
    
        }

        header .navbar a:hover{
            color:var(--pink);

        }

        .card-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 100px;
        }
        .card{
            width:325px;
            background-color: #f0f0f0;
            border-radius:8px;
            overflow: hidden;
            box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
            margin:20px;
        }
        .card img{
            width: 100%;
            height: auto;
        }
        .card-content{
            padding:16px;
        }
        .card-content h3{
            font-size: 28px;
            margin-bottom: 8px;
        }
        .card-content p{
            color: #666;
            font-size: 15px;
            line-height: 1.3;
        }
        .card-content .btn{
            display: inline-block;
            padding: 8px 16px;
            background-color: #333;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 16px;
            color: #fff;
        }
        @media screen and (max-width: 768px){
        .heading{
            padding:0px 20px;
        }
        .heading h1{
            font-size:36px;
        }
        .heading p{
            font-size:17px;
            margin-bottom: 0px;
        }
        .container{
            padding:0px 20px;
        }
        


    }



    @media (max-width:991px){
        html{
            font-size: 55%;
        }

        header{
            padding: 2rem;
        }

        section{
            padding: 2rem;
        }
    }

    @media (max-width:768px){

        header .navbar{
            position: absolute;
            top: 100%; left: 0; right: 0;
            background:#eee;
            border-top: .1rem solid rgba(0,0,0,.1);
        }

        header .navbar a{
            margin: 1.5rem;
            padding: 1.5rem;
            background: #fff;
            border: .1rem solid rgba(0,0,0,.1);
            display: block;
        }

        .home content h3{
            font-size: 5rem;
        }

        .home content span{
            font-size: 2.5rem;
        }
    }


    @media (max-width:450px){
        html{
            font-size: 50%;
        }

        .heading{
            font-size: 3rem;
        }
    }

    </style>

<header>

    <a href="#" class="logo">MarelConnect<span</a>

    <nav class="navbar">
        <a href="accountsettings.php">Settings</a>
        <a href="notif/notification.php">Notification</a>
        <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');">Log Out</a>
    </nav>

</header>

    <div class="card-container">
        <div class="card">
            <img src="images/icon1.jpg">
            <div class="card-content">
                <h3>Balance</h3>
                <p>View your balance</p>
                <a href="pay/balance.php" class="btn">View Balance</a>
            </div> 
        </div>
        <div class="card">
            <img src="images/icon2.jpg">
            <div class="card-content">
                <h3>Payment History</h3>
                <p>Provide's a seamless and secure experience for users.</p>
                <a href="history.php" class="btn">View</a>
            </div>
        </div>
        <div class="card">
            <img src="images/icon3.jpg">
            <div class="card-content">
                <h3>Appliace Calculator</h3>
                <p>Monitor Your Electricity Usage Efficiently</p>
                <a href="calculate.php" class="btn">Calculate</a>
            </div>
        </div>
    </div>
</body>
</html>

