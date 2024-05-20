<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            position: relative;
            width: 100%;
            height: 100vh;
            background-color: #ccd0cf;
            display: flex;
            justify-content: center;
            align-items:center;
        }

        .item{
            width: 100%;
            height: 550px;
            max-width: 820px;
            background: #03395f;
            border-radius: 20px;
            box-shadow: 0 0 10px 5px rgba(0,0,0,.4);
            overflow: hidden;
            grid-template-columns: repeat(2, 1fr);
            display: grid;
            z-index: 1000;
        }

        .contacts{
            background: #fff;
        }

        .submit-form{
            background: #11212D;
    
        }

        .first-text{
            padding-left:20px;
            padding-top: 20px;
            font-size: 25px;
            color: #11212D;
            font-weight: 600;
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

        ul li{
            padding-left: 15px;
            font-size: 20px;
            margin-top: 10px;

        }
        i{
            background:#03395f;
            padding: 5px;
            border-radius: 5px;
            transition: .3s;
            color: #fff;
        }

        .social-media i:hover{
            background:#fff;
            color:#11212D;
        }

        .secnd-text{
            font-weight: 500;
            color:#11212D;
            padding-left: 20px;
        }

        .third-text{
            font-size: 25px;
            position: relative;
            top: 20px;
            left: 20px;
            padding-top: 10px;
            color: #fff;
        }
        form{
            padding: 0 50px;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .input-box{
            height: 40px;
            width: 70%;
            margin: 30px 0;
            position: relative;
        }

        .input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: 2px solid #fff;
            border-radius:20px;
            outline: none;
            padding-left: 10px;
            color: #fff;
            font-size: 16px;
        }

        .input-box label{
            position: absolute;
            top: 50%;
            left: 10px;
            padding-left: 10px;
            transform: translateY(-50%);
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            transition:.3s;
        }
        .input-box .input:focus ~ label,
        .input-box .input:valid ~ label{
            top: 1px;
            left: 10px;
            background: #11212D;
            font-weight: 500;
            font-size: 12px;
            padding: 5px;
        }

        textarea.input{
            resize: none;
            min-height: 150px;
            overflow: auto;
        }
        .btn{
            position: relative;
            top: 100px;
            background: #fff;
            outline: none;
            border: none;
            border-radius: 4px;
            height: 45px;
            width: 30%;
            font-size: 16px;
            color: #8f50ec;
            cursor: pointer;
            font-weight: 500;
        }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarelConnect</title>
    <link href="" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="container">
        <div class="item">
            <div class="contacts">
                <div class="first-text">Let's get in touch</div>
                <img src="3dimage.png" alt="" class="image">
                <div class="social-links">
                    <span class="secnd-text">Connect with Us:</span>
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.x.com"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.youtube.com"><i class='bx bxl-youtube'></i></a></li>
                        <li><a href="https://www.instagram.com"><i class='bx bxl-instagram'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="submit-form">
                <h4 class="third-text">Contact Us</h4>
                <form action="">
                    <div class="input-box">
                        <input type="text" class="input" required>
                        <label for="">Name</label>
                    </div>
                    <div class="input-box">
                        <input type="email" class="input" required>
                        <label for="">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="tel" class="input" required>
                        <label for="">Phone</label>
                    </div>
                    <div class="input-box">
                        <textarea name="" class="input" required id="message" cols="30" rows="10"></textarea>
                        <label for="">Message</label>
                    </div>
                    <input type="submit" class="btn" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
