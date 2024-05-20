<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        :root{
            --color-background:#141414;
            --color-text-white:#FFFFFF;
            --color-placeholder:: #C4C4C4;
            --color-light-black: #29384D;
            --color-background-input-field: #242424;
            --color-border-1: #383838;
            --color-actions: #38E078;
            --color-border:#E5E8EB;
        }
        body{
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            box-sizing:border-box;
            background-color: var(--color-background);
            color: var(--color-text-white);
        }
        .btn{
            height: 40px;
            border: none;
            padding: 10px 16px;
            border-radius: 12px;
            letter-spacing: 0.5px;
            cursor: pointer;
        }
        .contact-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
            margin-top: 36px;
        }
        input{
            height: 56px;
            border-radius: 12px;
            border: 1px solid var(--color-border-1);
            outline: none;
            width: 456px;
            padding: 0 8px 0 16px;
            background-color: var(--color-background-input-field);
            color: var(--color-text-white);
        }
        .input-name{
            display: flex;
            gap: 24px;
        }
        .input-name input{
            width: 204px;
        }
        .btn-submit{
            background-color: var(--color-actions);
            width: 480px;
        }
        .social-contact{
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .social{
            width: 432px;
            height: 64px;
            border: 1px solid var(--color-border-1);
            border-radius: 0 12px;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .social-action{
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--color-actions);
            cursor: pointer;
        }
        ::placeholder, .handle, .or-text{
            color: var(--color-placeholder);
        }
        .social-action{
            display: flex;
            list-style: none;
            color: #38E078;
        }
        .social-action i:hover{
            background:#38E078;
            color:#FFFFFF;
            border-radius: 3px;
           
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarelConnect Report</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form class="contact-container" method="post" action="submit.php">
        <h1>Report</h1>
        <div class="input-name">
            <input type="text" name="fName" placeholder="First Name">
            <input type="text"  name="lName" placeholder="Last Name">
        </div>
        <div class="input-email">
            <input type="email"  name="email" placeholder="Email" required>
        </div>
        <div class="input-subject">
            <input type="address"  name="address" placeholder="Address" required>
        </div>
        <div class="input-message">
            <input type="message"  name="message" placeholder="Message">
        </div>
        <div class="action-btn">
            <button class="btn btn-submit">Submit</button>
        </div>
        <div class="or-text">Or Contact us on our socials</div>
        <div class="social-contact">
            <div class="social">
                <div class="handle">@MarelConnect</div>
                <div class="social-action">
                    <li><a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a></li>
                    <span class="material-symbols-rounded">arrow_right_alt</span>
                </div>
            </div>
            <div class="social-contact">
                <div class="social">
                    <div class="handle">@MarelConnect</div>
                    <div class="social-action">
                        <li><a href="https://www.instagram.com"><i class='bx bxl-instagram'></i></a></li>
                        <span class="material-symbols-rounded">arrow_right_alt</span>
                    </div>
                </div>

        </div>
    </form>
 
</body>
</html>