<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
}

.footer {
    background-color: #333;
    color: #f2f2f2;
    text-align: left;
    padding: 20px 0;
}

.footer-content {
    display: flex;
    justify-content: space-around;
    margin: 0 auto;
    padding: 20px;
}

.footer-section {
    margin: 10px;
    padding: 20px;
}

.footer-section h3 {
    color: #fff;
}

.footer-section p,
.footer-section ul,
.footer-section form {
    color: #ccc;
}

.footer-section ul {
    list-style-type: none;
}

.footer-section ul li a {
    color: #ccc;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: #fff;
}

.socials a {
    margin-right: 10px;
}

.image{
    max-height:100%;
    max-width:100%;
    margin-bottom: 7px;
    margin-top: 30px;
}
.social-media{
    display: flex;
    list-style: none;
}

.footer-bottom {
    text-align: center;
    padding: 20px;
}

button:hover {
    background-color: #666;
}

    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website Footer</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>MarelConnect</h3>
                <div class="socials">
                <ul class="social-media">
                        <li><a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.x.com"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.instagram.com"><i class='bx bxl-instagram'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="offices">
                <h3>Area Offices</h3>
                <p>Buenavista Office - (042) 754 1601</p>
                <p>Gasan Office - (042) 342 1090</p>
                <p>Boac Office - (042) 332 1934</p>
                <p>Mogpog Office - (042) 332 3222</p>
                <p>Sta. Cruz Office - (042) 332 0919</p>
                <p>Torrijos Office - (042) 754 1510</p>
            </div>

            <div class="contact">
                <h3>Contact Us</h3>
                <p>Address : Ihatub, Boac, Marinduque</p>
                <p>Phone : (042) 332 2266</p>
                <p>Email : marelco_inc@yahoo.com</p>
            </div>
            
        </div>
        <div class="footer-bottom">
            &copy; 2024 MarelConnect | Designed by:<br> Alessandra Mingi <br> Danica Oliveria <br> BSI/T 2A
        </div>
    </footer>

</body>
</html>
