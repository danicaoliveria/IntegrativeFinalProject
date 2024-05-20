<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .container{
            display: flex;
            justify-content: center;
            background-color: antiquewhite;
            width: 100%;
            height: 200vh;
            
        }
        .notification-container{
            background-color: #fff;
            width: 800px;
            height: 900px;
            margin: 1rem;
            padding: 1rem 1rem;
            border-radius: 1rem;
            box-shadow: 0px 3px 5px rgba(0,0,0,0.3);
        }
        header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }
        .notification-header{
            display: flex;
            align-items: center;
        }
        #num-of-notif{
            background-color: #b4eaff;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            width: 30px;
            height: 30px;
            border-radius: 0.5rem;
            margin-left: 10px;
        }
        #mark-as-read{
            color: gray;
            cursor: pointer;
            transition: 0.6 ease;
        }
        #mark-as-read:hover{
            color: #ff1a13;
        }
        main{
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .notification-card{
            display: flex;
            align-items: center;
            padding: 0.5rem;
            border-radius: 0.5rem;
           
        }
        .notification-card h2{
            font-size: small;
        }
        img{
            width: 50px;
        }
        .notification-card .description{
            margin-left: 10px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            font-size: small;
        }
        .unread{
            background-color: rgb(231, 231, 231);
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarelConnect Notification</title>
</head>
<body>
    
    <div class="container">
        <div class="notification-container">
            <header>
                <div class="notification-header">
                    <h1>Notification</h1>
                    <span id="num-of-notif"></span>
                </div>
                <p id="mark-as-read">Mark as All Read</p>
            </header>
            <main>
                <div class="notification-card unread">
                    <img alt="photo" src="../images/log2.png">
                    <div class="description">
                        <h2>MarelConnect</h2>
                        <p>There's an ongoing power interruption in portions of Marinduque that may be affecting your servize. The estimated time for restoration is 5/13/2024 8:00pm. We'll send you updates as soon as they become available.</p>
                        <p id="notif-time">1 min ago</p>
                    </div>
                </div>
                <div class="notification-card unread">
                    <img alt="photo" src="../images/weblogo.png">
                    <div class="description">
                        <h2>MarelConnect</h2>
                        <p>Your electricity bill for the current month is due in 3 days. Please make sure to settle your payment to avoid any service interruptions. </p>
                        <p id="notif-time">30 mins ago</p>
                    </div>
                </div>
                <div class="notification-card unread">
                    <img alt="photo" src="../images/log1.png">
                    <div class="description">
                        <h2>MarelConnect</h2>
                        <p>The power interruption in Marinduque that may have affected your area has been restored as of 5/11/2024 6:00pm. If you're still experiencing trouble or for further assistance, please call us at our 24/7 hotline. </p>
                        <p id="notif-time">1 hr ago</p>
                    </div>
                </div>
                <div class="notification-card">
                    <img alt="photo" src="../images/log2.png">
                    <div class="description">
                        <h2>MarelConnect</h2>
                        <p>There's an ongoing power interruption in portions of Marinduque that may be affecting your servize. The estimated time for restoration is 5/3/2024 3:00pm. </p>
                        <p id="notif-time">1 day ago</p>
                    </div>
                </div>
                <div class="notification-card">
                    <img alt="photo" src="../images/weblogo.png">
                    <div class="description">
                        <h2>MarelConnect</h2>
                        <p>Your electricity bill for the current month is due in 3 days. Please make sure to settle your payment to avoid any service interruptions. </p>
                        <p id="notif-time">1 month ago</p>
                    </div>
                </div>
                <div class="notification-card">
                    <img alt="photo" src="../images/log1.png">
                    <div class="description">
                        <h2>MarelConnect</h2>
                        <p>The power interruption in Marinduque that may have affected your area has been restored as of 4/31/2024 6:00pm. If you're still experiencing trouble or for further assistance, please call us at our 24/7 hotline. </p>
                        <p id="notif-time">1 month ago</p>
                    </div>
                </div>
                <button class="back-button" onclick="history.back()">Back</button>
            </main>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>