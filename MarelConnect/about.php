<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a{
            text-decoration: none;
        }
        body, html{
            overflow-x: hidden;
        }
        header{
            width: 100%;
            height: 90vh;
            background-image: url(images/back.jpg);
            background-position: bottom;
            background-size: cover;
            display: flex;
            align-items:center;
            justify-content: center;
            
        }
        .header-content{
            margin-bottom: 150px;
            color: #Ffffff;
            text-align: center;
        }
        .header-content h2{
            font-size: 4vmin;
        }
        .line{
            width: 200px;
            height: 4px;
            background: #151344;
            margin: 10px auto;
            border-radius: 5px;
        }

        .header-content h1{
            font-size: 7vmin;
            margin-top: 50px;
            margin-bottom: 30px;

        }

        .ctn{
            padding: 8px 15px;
            background: black;
            border-radius: 30px;
            color: whitesmoke;
        }
        section{
            width: 80%;
            margin: 80px auto;
        }
        .title{
            text-align: center;
            font-size: 4vmin;
            color: #49497e;
        }
        .row{
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;
        }
        .row .col {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .row .col img{
            width: 80%;
        }

        .events .row{
            margin-top: 50px;
        }
        h4{
            font-size: 3vmin;
            color: #484872;
            margin: 20px auto;
        }

        p{
            color: #7c7c7c;
            padding: 0px 40px;
            justify-content: center;
            text-align: justify;
        }
        .events .ctn{
            margin-top: 30px;
        }
        .explore{
            width: 100%;
            height: 80vh;
            background-image: url(images/marelcoffice.jpg);
            background-position: center;
            background-size:cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
        }
        .explore-content{
            width: 60%;
            padding: 50px;
            color: black;
            display: flex;
            align-items: center;
            flex-direction:column;
        }
        .explore-content h1{
            font-size: 7vmin;
            
        }
        .explore-content .line{
            margin-bottom: 50px;
        }

        .explore-content p{
            color: white;
        }
        .explore-content .ctn{
            margin-top: 40px;
        }

        .content-col{
            width: 40%;
        }
        .image-col{
            width: 60%;
        }
       
        .tours{
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            align-items: center;
            margin-left: 450px;
            margin-top:150px;
        }
        .tours h1{
            text-align: center;
        }
        
        .content-col h1{
            font-size: 7vmin;
            color: #484872;
        }
        .Culture{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
            gap: 9rem;
        }
        .Culture-img img{
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .Culture-text{
            font-size: 22px;
            font-weight: 600;
            color: var(salmon);
            text-transform: uppercase;
            letter-spacing: 6px;
            margin-bottom: 5px;
        }
        .Culture-text h2{
            font-size: var(--h2-font);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
        }
        .Culture-text p{
            font-size: 2rem;
            font-weight: 500;
            line-height: 30px;
            color: #ffffffab;
            margin-bottom: 35px;
        }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarelConnect</title>
    <link href="" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="">

</head>

<body>


    <header>
        <div class="header-content">
            <h2>Trusted Electric Distribution Utility</h2>
            <div class="line"></div>
            <h1>MarelConnect</h1>
            <a href="#" class="ctn">Learn More</a>
        </div>
    </header>

    <section class="events">
        <div class="title">
            <h1>Mission & Vision</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="images/marelcoffice.jpg" alt="">
                <h4>Mission</h4>
                <p> Our Mission is to deliver consistent and dependable electric distribution while embracing innovation to meet the evolving needs of our consumers. We aim to create a sustainable future by incorporating cutting-edge technology, reducing environmental impact, and fostering strong relationship within the communities we serve.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img src="images/marelcoffice.jpg" alt="">
                <h4>Vision</h4>
                <p>Our vision is to to lead the transformation of the electric distribution industry by embracing innovation, sustainability, and a customer-centric approach. We aim to be at the forefront of delivering reliable, efficient and clean energy solutions, contributing to a future where electricity is accessible to our everyday life.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
    </section>

    <section class="explore">
       <div class="explore-content">
        <h1>Sustainable Power Solutions</h1>
        <div class="line"></div>
        <p>The Marinduque Electric Cooperative, Inc.(MARELCO) is a non-stock, non-profit corporation duly organized on March 27, 1973. An electric distribution utility that serves the province of Marinduque in the Philippines.</p>
        <a href="" class="ctn">Learn More</a>
       </div>
    </section>

    <section class="tours">
        <div class="row">
            <div class="col content-col">
                <h1>THE JOURNEY OF MARELCONNECT</h1><br>
                <p>In 1973, Marinduque's Marinduque Electric Cooperative (MARELCO) was established through the efforts of Carmencita O. Reyes and Hon. Edmundo M. Reyes, a prominent couple from Marinduque. Despite initial negative results from a study, Reyes remained determined to ensure the province's development without electricity. With the passage of PD 269, a team from the National Electrification Administration(NEA) and the Cooperative Administration Office established the Provincial Electric Cooperatives Team (PECT) and District Electrification Committees (DECS), with Reyes as the Incorporators and Board of Directors. The Marinduque Electric Cooperativewas registered and incorporated on March 27, 1973, with Registration No. 43.</p>
            </div>
        </div>
    </section>

    <section class="Culture">
        <div class="Culture-text">
            <h5>MARELCONNECT</h5>
            <h2>Pay your bills effortlessly</h2>
        </div>
    </section>

    
    </section>
</body>
</html>
<?php include('footer.php')?>