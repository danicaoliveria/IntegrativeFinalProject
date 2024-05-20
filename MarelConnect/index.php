<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>
    :root{
         --pink:#11212D;
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

    section{
        padding:2rem 9%;
    }

    .btn{
        display: inline-block;
        margin-top: 1rem;
        border-radius: 5rem;
        background: #333;
        color: #fff;
        padding: .9rem 3.5rem;
        cursor: pointer;
        font-size: 1.7rem;
    }

    .btn:hover{
        background:var(--pink);
    
    } 


    .heading{
        text-align: center;
        font-size: 4rem;
        color: #333;
        padding: 1rem;
        margin: 2rem 0;
        background: rgba(255, 51, 153, .05);
    }

    .heading{
        font-size: 3rem;
    }

    .heading span{
        color: var(--pink);
    }


    .home{
        display: flex;
        align-items: center;
        min-height: 100vh;
        background: url(images/background.png) no-repeat;
        background-size: cover;
        background-position: center;

    }



    .home .content{
        max-width: 50rem;
    }

    .home .content h3{

        font-size: 4rem;
        color: #3F341D;
    }

    .home .content p{

        font-size: 2rem;
        color:var (--pink);
        padding: 1rem 0;
        line-height: 1.5;
    }



    .heading{
        width: 90%;
        display:flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        margin: 20px auto;
    
    }

    .heading h1{
        font-size: 50px;
        color:#000;
        margin-bottom: 25px;
        position: relative;

    }
    .heading h1::after{
        content: "";
        position: absolute;
        width:100%;
        height: 4px;
        display:block;
        margin:0 auto;
        background-color: #4caf50;
    }

    .heading p{
        font-size: 18px;
        color:#666;
        margin-bottom: 35px;
    }

    .container{
        width: 90%;
        margin: 0 auto;
        padding:10px 20px
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarelConnect</title>
    <link href="" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<!-- header starts here -->

<header>

    <a href="#" class="logo">MarelConnect<span</a>

    <nav class="navbar">
        <a href="#Home" class="active">Home</a>
        <a href="about.php">About</a>
        <a href="report/report.php">Report</a>
        <a href="login/index.php">Sign In</a>
        <a href="adlog/index.php">Admin</a>
    </nav>

</header>

<section class="home" id="home">


    <div class="content">
        <h3>Billing Made Bright</h3>
        <p>Manage, Track, and Pay your Electricity bills effortlessly</p>
        <a href="login/index.php" class="btn">Get started</a>

    </div>

</section>
<?php include('footer.php')?>


