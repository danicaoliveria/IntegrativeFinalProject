<!DOCTYPE html>
<html lang="en">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

:root{
    --color-primary: #6C9BCF;
    --color-danger: #FF0060;
    --color-success: #1B9C85;
    --color-warning: #F7D060;
    --color-white: #fff;
    --color-info-dark: #7d8da1;
    --color-dark: #363949;
    --color-light: rgba(132, 139, 200, 0.18);
    --color-dark-variant: #677483;
    --color-background: #f6f6f9;

    --card-border-radius: 2rem;
    --border-radius-1: 0.4rem;
    --border-radius-2: 1.2rem;

    --card-padding: 1.8rem;
    --padding-1: 1.2rem;

    --box-shadow: 0 2rem 3rem var(--color-light);
}

.dark-mode-variables{
    --color-background: #181a1e;
    --color-white: #202528;
    --color-dark: #edeffd;
    --color-dark-variant: #a3bdcc;
    --color-light: rgba(0, 0, 0, 0.4);
    --box-shadow: 0 2rem 3rem var(--color-light);
}

*{
    margin: 0;
    padding: 0;
    outline: 0;
    appearance: 0;
    border: 0;
    text-decoration: none;
    box-sizing: border-box;
}

html{
    font-size: 14px;
}

body{
    width: 100vw;
    height: 100vh;
    font-family: 'Poppins', sans-serif;
    font-size: 0.88rem;
    user-select: none;
    overflow-x: hidden;
    color: var(--color-dark);
    background-color: var(--color-background);
}

a{
    color: var(--color-dark);
}

img{
    display: block;
    width: 100%;
    object-fit: cover;
}

h1{
    font-weight: 800;
    font-size: 1.8rem;
}

h2{
    font-weight: 600;
    font-size: 1.4rem;
}

h3{
    font-weight: 500;
    font-size: 0.87rem;
}

small{
    font-size: 0.76rem;
}

p{
    color: var(--color-dark-variant);
}

b{
    color: var(--color-dark);
}

.text-muted{
    color: var(--color-info-dark);
}

.primary{
    color: var(--color-primary);
}

.danger{
    color: var(--color-danger);
}

.success{
    color: var(--color-success);
}

.warning{
    color: var(--color-warning);
}

.container{
    display: grid;
    width: 96%;
    margin: 0 auto;
    gap: 1.8rem;
    grid-template-columns: 12rem auto 23rem;
}

aside{
    height: 100vh;
}

aside .toggle{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 1.4rem;
}

aside .toggle .logo{
    display: flex;
    gap: 0.5rem;
}

aside .toggle .logo img{
    width: 2rem;
    height: 2rem;
}

aside .toggle .close{
    padding-right: 1rem;
    display: none;
}

aside .sidebar{
    display: flex;
    flex-direction: column;
    background-color: var(--color-white);
    box-shadow: var(--box-shadow);
    border-radius: 15px;
    height: 88vh;
    position: relative;
    top: 1.5rem;
    transition: all 0.3s ease;
}

aside .sidebar:hover{
    box-shadow: none;
}

aside .sidebar a{
    display: flex;
    align-items: center;
    color: var(--color-info-dark);
    height: 3.7rem;
    gap: 1rem;
    position: relative;
    margin-left: 2rem;
    transition: all 0.3s ease;
}

aside .sidebar a span{
    font-size: 1.6rem;
    transition: all 0.3s ease;
}

aside .sidebar a:last-child{
    position: absolute;
    bottom: 2rem;
    width: 100%;
}

aside .sidebar a.active{
    width: 100%;
    color: var(--color-primary);
    background-color: var(--color-light);
    margin-left: 0;
}

aside .sidebar a.active::before{
    content: '';
    width: 6px;
    height: 18px;
    background-color: var(--color-primary);
}

aside .sidebar a.active span{
    color: var(--color-primary);
    margin-left: calc(1rem - 3px);
}

aside .sidebar a:hover{
    color: var(--color-primary);
}

aside .sidebar a:hover span{
    margin-left: 0.6rem;
}

aside .sidebar .message-count{
    background-color: var(--color-danger);
    padding: 2px 6px;
    color: var(--color-white);
    font-size: 11px;
    border-radius: var(--border-radius-1);
}

main{
    margin-top: 1.4rem;
}


main table tbody td{
    height: 2.8rem;
    border-bottom: 1px solid var(--color-light);
    color: var(--color-dark-variant);
}

main table tbody tr:last-child td{
    border: none;
}

main .recent-orders a{
    text-align: center;
    display: block;
    margin: 1rem auto;
    color: var(--color-primary);
}

.right-section{
    margin-top: 1.4rem;
}

.right-section .nav{
    display: flex;
    justify-content: end;
    gap: 2rem;
}

.right-section .nav button{
    display: none;
}
.right-section .dark-mode{
    background-color: var(--color-light);
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 1.6rem;
    width: 4.2rem;
    cursor: pointer;
    border-radius: var(--border-radius-1);
}

.right-section .dark-mode span{
    font-size: 1.2rem;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.right-section .dark-mode span.active{
    background-color: var(--color-primary);
    color: white;
    border-radius: var(--border-radius-1);
}




/* Timeline styles for the history page */
.container {
    display: grid;
    width: 96%;
    margin: 0 auto;
    gap: 1.8rem;
    grid-template-columns: 12rem auto 23rem;
    grid-template-areas: 
        "sidebar mission"
        "sidebar content";
}

/* Sidebar remains the same */
aside {
    grid-area: sidebar;
    height: 100vh;
}

/* Mission and Vision Section */
.mission-vision {
    grid-area: mission;
    background-color: var(--color-white);
    padding: 1.5rem;
    border-radius: var(--border-radius-1);
    box-shadow: var(--box-shadow);
    margin-top: 1rem;
    position: absolute;
    top: 0;
    right: 1rem;
    width: 23rem;
}

.mission-vision h1 {
    font-size: 1.8rem;
    color: var(--color-primary);
    margin-bottom: 1rem;
}

.mission-vision h2 {
    font-size: 1.2rem;
    color: var(--color-dark);
    margin-bottom: 0.5rem;
}

.mission-vision p {
    font-size: 1rem;
    color: var(--color-dark-variant);
    margin-bottom: 1rem;
}

/* History Page Styles */
.history {
    grid-area: content;
    padding: 2rem;
    background-color: var(--color-white);
    border-radius: var(--border-radius-1);
    box-shadow: var(--box-shadow);
    margin-top: 2rem;
}

.history h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: var(--color-dark);
}

.history p {
    font-size: 1rem;
    margin-bottom: 1.5rem;
    color: var(--color-dark-variant);
}

.sustainable-power img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius-1);
    margin-bottom: 1rem;
}

/* Updated Container Styles */
.container {
    display: grid;
    width: 96%;
    margin: 0 auto;
    gap: 1.8rem;
    grid-template-columns: 12rem auto 23rem;
    grid-template-areas: 
        "sidebar mission"
        "sidebar content";
}

/* Sidebar remains the same */
aside {
    grid-area: sidebar;
    height: 100vh;
}

/* Mission and Vision Section */
.mission-vision {
    grid-area: mission;
    background-color: var(--color-white);
    padding: 1.5rem;
    border-radius: var(--border-radius-1);
    box-shadow: var(--box-shadow);
    margin-top: 1rem;
    position: absolute;
    top: 0;
    right: 1rem;
    width: 23rem;
    margin-top: 50px;
}

.mission-vision h1 {
    font-size: 1.8rem;
    color: var(--color-primary);
    margin-bottom: 1rem;
}

.mission-vision h2 {
    font-size: 1.2rem;
    color: var(--color-dark);
    margin-bottom: 0.5rem;
}

.mission-vision p {
    font-size: 1rem;
    color: var(--color-dark-variant);
    margin-bottom: 1rem;
}

/* History Page Styles */
.history {
    grid-area: content;
    padding: 2rem;
    background-color: var(--color-white);
    border-radius: var(--border-radius-1);
    box-shadow: var(--box-shadow);
    margin-top: 2rem;
}

.history h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: var(--color-dark);
}

.history p {
    font-size: 1rem;
    margin-bottom: 1.5rem;
    color: var(--color-dark-variant);
}

.sustainable-power, .journey {
    margin-bottom: 2rem;
}
.mission-vision img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius-1);
    margin-top: 1rem;
}



@media screen and (max-width: 1200px) {
    .container{
        width: 95%;
        grid-template-columns: 7rem auto 23rem;
    }

    aside .logo h2{
        display: none;
    }

    aside .sidebar h3{
        display: none;
    }

    aside .sidebar a{
        width: 5.6rem;
    }

    aside .sidebar a:last-child{
        position: relative;
        margin-top: 1.8rem;
    }

    main .analyse{
        grid-template-columns: 1fr;
        gap: 0;
    }

    main .new-users .user-list .user{
        flex-basis: 40%;
    }

    main .recent-orders {
        width: 94%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin: 2rem 0 0 0.8rem;
    }

    main .recent-orders table{
        width: 83vw;
    }

    main table thead tr th:last-child,
    main table thead tr th:first-child{
        display: none;
    }

    main table tbody tr td:last-child,
    main table tbody tr td:first-child{
        display: none;
    }

}

@media screen and (max-width: 768px) {
    .container{
        width: 100%;
        grid-template-columns: 1fr;
        padding: 0 var(--padding-1);
    }

    aside{
        position: fixed;
        background-color: var(--color-white);
        width: 15rem;
        z-index: 3;
        box-shadow: 1rem 3rem 4rem var(--color-light);
        height: 100vh;
        left: -100%;
        display: none;
        animation: showMenu 0.4s ease forwards;
    }

    @keyframes showMenu {
       to{
        left: 0;
       } 
    }

    aside .logo{
        margin-left: 1rem;
    }

    aside .logo h2{
        display: inline;
    }

    aside .sidebar h3{
        display: inline;
    }

    aside .sidebar a{
        width: 100%;
        height: 3.4rem;
    }

    aside .sidebar a:last-child{
        position: absolute;
        bottom: 5rem;
    }

    aside .toggle .close{
        display: inline-block;
        cursor: pointer;
    }

    main{
        margin-top: 8rem;
        padding: 0 1rem;
    }
   

    .right-section{
        width: 94%;
        margin: 0 auto 4rem;
    }

    .right-section .nav{
        position: fixed;
        top: 0;
        left: 0;
        align-items: center;
        background-color: var(--color-white);
        padding: 0 var(--padding-1);
        height: 4.6rem;
        width: 100%;
        z-index: 2;
        box-shadow: 0 1rem 1rem var(--color-light);
        margin: 0;
    }

    .right-section .nav .dark-mode{
        width: 4.4rem;
        position: absolute;
        left: 66%;
    }
    @media screen and (max-width: 1200px) {
    .container {
        width: 95%;
        grid-template-columns: 7rem auto 23rem;
        grid-template-areas: 
            "sidebar mission"
            "sidebar content";
    }

    aside .logo h2 {
        display: none;
    }

    aside .sidebar h3 {
        display: none;
    }

    aside .sidebar a {
        width: 5.6rem;
    }

    aside .sidebar a:last-child {
        position: relative;
        margin-top: 1.8rem;
    }

    main .analyse {
        grid-template-columns: 1fr;
        gap: 0;
    }

    main .new-users .user-list .user {
        flex-basis: 40%;
    }

    main .recent-orders {
        width: 94%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin: 2rem 0 0 0.8rem;
    }

    main .recent-orders table {
        width: 83vw;
    }

    main table thead tr th:last-child,
    main table thead tr th:first-child {
        display: none;
    }

    main table tbody tr td:last-child,
    main table tbody tr td:first-child {
        display: none;
    }
}

@media screen and (max-width: 768px) {
    .container {
        width: 100%;
        grid-template-columns: 1fr;
        grid-template-areas: 
            "sidebar"
            "mission"
            "content";
        padding: 0 var(--padding-1);
    }

    aside {
        position: fixed;
        background-color: var(--color-white);
        width: 15rem;
        z-index: 3;
        box-shadow: 1rem 3rem 4rem var(--color-light);
        height: 100vh;
        left: -100%;
        display: none;
        animation: showMenu 0.4s ease forwards;
    }

    @keyframes showMenu {
        to {
            left: 0;
        }
    }

    aside .logo {
        margin-left: 1rem;
    }

    aside .logo h2 {
        display: inline;
    }

    aside .sidebar h3 {
        display: inline;
    }

    aside .sidebar a {
        width: 100%;
        height: 3.4rem;
    }

    aside .sidebar a:last-child {
        position: absolute;
        bottom: 5rem;
    }

    aside .toggle .close {
        display: inline-block;
        cursor: pointer;
    }

    .mission-vision {
        position: relative;
        top: 0;
        right: 0;
        width: 100%;
        margin-top: 2rem;
    }

    .history {
        margin-top: 2rem;
    }
}

@media screen and (max-width: 1200px) {
    .container {
        width: 95%;
        grid-template-columns: 7rem auto 23rem;
        grid-template-areas: 
            "sidebar mission"
            "sidebar content";
    }

    aside .logo h2 {
        display: none;
    }

    aside .sidebar h3 {
        display: none;
    }

    aside .sidebar a {
        width: 5.6rem;
    }

    aside .sidebar a:last-child {
        position: relative;
        margin-top: 1.8rem;
    }

    main .analyse {
        grid-template-columns: 1fr;
        gap: 0;
    }

    main .new-users .user-list .user {
        flex-basis: 40%;
    }

    main .recent-orders {
        width: 94%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin: 2rem 0 0 0.8rem;
    }

    main .recent-orders table {
        width: 83vw;
    }

    main table thead tr th:last-child,
    main table thead tr th:first-child {
        display: none;
    }

    main table tbody tr td:last-child,
    main table tbody tr td:first-child {
        display: none;
    }
}

@media screen and (max-width: 768px) {
    .container {
        width: 100%;
        grid-template-columns: 1fr;
        grid-template-areas: 
            "sidebar"
            "mission"
            "content";
        padding: 0 var(--padding-1);
    }

    aside {
        position: fixed;
        background-color: var(--color-white);
        width: 15rem;
        z-index: 3;
        box-shadow: 1rem 3rem 4rem var(--color-light);
        height: 100vh;
        left: -100%;
        display: none;
        animation: showMenu 0.4s ease forwards;
    }

    @keyframes showMenu {
        to {
            left: 0;
        }
    }

    aside .logo {
        margin-left: 1rem;
    }

    aside .logo h2 {
        display: inline;
    }

    aside .sidebar h3 {
        display: inline;
    }

    aside .sidebar a {
        width: 100%;
        height: 3.4rem;
    }

    aside .sidebar a:last-child {
        position: absolute;
        bottom: 5rem;
    }

    aside .toggle .close {
        display: inline-block;
        cursor: pointer;
    }

    .mission-vision {
        position: relative;
        top: 0;
        right: 0;
        width: 100%;
        margin-top: 2rem;
    }

    .history {
        margin-top: 2rem;
    }
}

}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="">
    <title>About</title>
</head>

<body>

    <div class="container">
        
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/weblogo.png">
                    <h2>Marel<span class="danger">Connect</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

          
            <div class="sidebar">
                <a href="admin/admin.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="reports.php">
                    <span class="material-icons-sharp">
                        history_edu
                    </span>
                    <h3>Reports</h3>
                </a>
                <a href="adminabout.php" class="active">
                    <span class="material-icons-sharp">
                        handshake
                    </span>
                    <h3>About</h3>
                </a>
                <a href="activities.php">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Activities</h3>
                </a>

                
               
                <a href="logout.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->


        <main>
            <div class="history">
                <section class="mission-vision">
                    <h1>Mission and Vision</h1>
                    <h2>Mission</h2>
                    <p>Our Mission is to deliver consistent and dependable electric distribution while embracing innovation to meet the evolving needs of our consumers. We aim to create a sustainable future by incorporating cutting-edge technology, reducing environmental impact, and fostering strong relationships within the communities we serve.</p>
                    <h2>Vision</h2>
                    <p>Our vision is to lead the transformation of the electric distribution industry by embracing innovation, sustainability, and a customer-centric approach. We aim to be at the forefront of delivering reliable, efficient, and clean energy solutions, contributing to a future where electricity is accessible to our everyday life.</p>
                    <img src="images/marelcoffice.jpg" alt="Mission and Vision Image">
                </section>
                
                <section class="sustainable-power">
                    <img src="images/back.jpg" alt="Sustainable Power Solutions">
                    <h2>Sustainable Power Solutions</h2>
                    <p>The Marinduque Electric Cooperative, Inc. (MARELCO) is a non-stock, non-profit corporation duly organized on March 27, 1973. An electric distribution utility that serves the province of Marinduque in the Philippines.</p>
                </section>
                
                <section class="journey">
                    <h2>The Journey of MarelConnect</h2>
                    <p>In 1973, Marinduque's Marinduque Electric Cooperative (MARELCO) was established through the efforts of Carmencita O. Reyes and Hon. Edmundo M. Reyes, a prominent couple from Marinduque. Despite initial negative results from a study, Reyes remained determined to ensure the province's development without electricity. With the passage of PD 269, a team from the National Electrification Administration (NEA) and the Cooperative Administration Office established the Provincial Electric Cooperatives Team (PECT) and District Electrification Committees (DECS), with Reyes as the Incorporators and Board of Directors. The Marinduque Electric Cooperative was registered and incorporated on March 27, 1973, with Registration No. 43.</p>
                </section>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>