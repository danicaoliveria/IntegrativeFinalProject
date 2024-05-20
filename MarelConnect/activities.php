<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <script src="https:://unpkg.com/feather-icons"></script>
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

        html{
            font-size: 62.5%;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
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
            text-align: justify;
            text-indent: 30px;
        }
        .card-content .btn{
            display: inline-block;
            padding: 8px 16px;
            background-color: #55becc;
            text-decoration: none;
            font-size: medium;
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

    <a href="#" class="logo">Activities<span</a>

    <nav class="navbar">
        <a href="admin/admin.php" class="active">Home</a>
    </nav>

</header>

    <div class="card-container">
        <div class="card">
            <img src="images/act1.jpg">
            <div class="card-content">
                <h3>Joint Session</h3>
                <p>16th Joint Session of the Provincial Council with the Municipal Council of Sta. Cruz and the Barangay Council of Buyabod, Sta. Cruz. Attended by officials from the National Power Corporation and MARELCO, led by MARELCO Board President Dir. Christopher M. Morales. Spearheaded by Vice Governor Hon. Adeline M. Angeles, Vice Mayor Hon. Melvin Manuel, and Barangay Captain Hon. Armando Paredes, with their respective councils.</p>
                
            </div> 
        </div>
        <div class="card">
            <img src="images/act3.jpg">
            <div class="card-content">
                <h3>Construction of Poles</h3>
                <p>The construction of poles at Buyabod Port is an important step in preparation for the arrival of Power Barge 113. These technical activities need to be carried out meticulously to ensure the proper flow of electricity in the area. Here are some of the main technical activities being undertaken.</p>
                
            </div>
        </div>
        <div class="card">
            <img src="images/act6.png">
            <div class="card-content">
                <h3>MARELCO Assembly</h3>
                <p>HAPPENING NOW: 44th Annual General Membership Assembly of Marinduque Electric Cooperative (Marelco) with the theme, "Achieving the Goals of Rural Electrification: Recognizing the Role of Enhanced Member Consumers Owners Engagement in Powering Filipino Communities" at Marelco Compound, Ihatub, Boac.</p>
               
            </div>
        </div>
        <div class="card">
            <img src="images/act4.jpg">
            <div class="card-content">
                <h3>Public<br>Conference</h3>
                <p>A successful Public Conference/Forum was held today, April 9, 2024, addressing the current power situation in our province. MARELCO's Board of Directors and management express their gratitude to all the Barangay officials, Barangay Power Association (BAPA) representatives, Local Government Units (LGUs), the Provincial Government, public sector participants, and everyone who joined and engaged with the event.</p>
                
            </div> 
        </div>
        <div class="card">
            <img src="images/act3.jpg">
            <div class="card-content">
                <h3>Construction of Poles</h3>
                <p>MARELCO is working to resolve the current power supply shortage affecting the province, leading to outages in various areas. Last Wednesday, April 17, 2024, Acting General Manager Engr. Gaudencio M. Sol, Jr., and Board President Dir. Christopher M. Morales, along with the Board of Directors, met with NPC President and CEO Mr. Fernando Y. Roxas to find solutions for our power supply issues. </p>
                
            </div>
        </div>
        <div class="card">
            <img src="images/act5.jpg">
            <div class="card-content">
                <h3>Resolve Power Supply shortage</h3>
                <p>Yesterday, March 13, 2024, select MARELCO employees and interns from Marinduque State College and Sta. Cruz Institute conducted a Corporate Social Responsibility activity at St. Raphael the Archangel Parish. This initiative aimed to ensure safety by inspecting and repairing the church building's electrical wiring installation.</p>
                
            </div>
        </div>
        <div class="card">
            <img src="images/act3.jpg">
            <div class="card-content">
                <h3>Construction of Poles</h3>
                <p>The construction of poles at Buyabod Port is an important step in preparation for the arrival of Power Barge 113. These technical activities need to be carried out meticulously to ensure the proper flow of electricity in the area. Here are some of the main technical activities being undertaken.</p>
                
            </div>
        </div>
        <div class="card">
            <img src="images/act6.png">
            <div class="card-content">
                <h3>MARELCO Assembly</h3>
                <p>HAPPENING NOW: 44th Annual General Membership Assembly of Marinduque Electric Cooperative (Marelco) with the theme, "Achieving the Goals of Rural Electrification: Recognizing the Role of Enhanced Member Consumers Owners Engagement in Powering Filipino Communities" at Marelco Compound, Ihatub, Boac.</p>
               
            </div>
        </div>
    </div>

</body>
</html>