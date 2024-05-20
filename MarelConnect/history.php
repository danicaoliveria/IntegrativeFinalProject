<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            min-height: 100vh;
            background: url(images/image.png) center / cover; 
            display: flex;
            justify-content: center;
            align-items: center;
        }
        main.table{
            width: 82vw;
            height: 90vh;
            background-color: #fff5;
            backdrop-filter: blur(7px);
            box-shadow: 0 .4rem .8rem #0005;
            border-radius: .8rem;
            overflow: hidden;
            position: relative; /* Add this line to position the back button inside main */
        }
        .table__header{
            width: 100%;
            height: 10%;
            background-color: #fff4;
            padding: .8rem 1rem;
        }
        .back-button {
            background-color: #d5d1de;
            border: none;
            padding: .5rem 1rem;
            border-radius: .5rem;
            cursor: pointer;
            box-shadow: 0 .2rem .4rem #0003;
            font-size: 1rem;
            position: absolute;
            bottom: 1rem;
            right: 1rem;
        }
        .table__body{
            width: 95%;
            max-height: calc(89% - .8rem);
            background-color: #fff;
            margin: .8rem auto;
            border-radius: .6rem;
            overflow: auto;
        }
        .table__body::-webkit-scrollbar{
            width: 0.5rem;
            height:0.5rem;
        }
        .table__body::-webkit-scrollbar-thumb{
            border-radius: .5rem;
            background-color: #0004;
            visibility: hidden;
        }
        .table__body:hover::-webkit-scrollbar-thumb{
            visibility: visible;
        }
        table{
            width: 100%;
        }
        table, th, td{
            border-collapse: collapse;
            padding: 1rem;
        }
        thead th{
            position: sticky;
            top: 0;
            left: 0;
            background-color: #d5d1de;
        }
        tbody tr:nth-child(even){
            background-color: #0000000b;
        }
        tbody tr:hover{
            background-color: #fff6;
        }
        .status{
            padding: .4rem 0;
            border-radius: 2rem;
        }
        .status.paid{
            width: 50px;
            background-color: #86e49d;
            color: #006b21;
            border-radius: 1rem;
            text-align: center;
        }
        .status.pending{
            width: 70px;
            background-color: #d893a3;
            color: #b30021;
            border-radius: 1rem;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarelConnect Payment History</title>
</head>
<body>
    <main class="table">
        <section class="table__header">
            <h1>Payment's History</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> id </th>
                        <th> Date</th>
                        <th> Amount Submitted</th>
                        <th> Status</th>
                        <th> Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>05/12/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>05/11/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status paid">Paid</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>05/03/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status paid">Paid</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>04/30/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status paid">Paid</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>05/12/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status paid">Paid</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>05/12/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status paid">Paid</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>05/12/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status paid">Paid</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>05/12/2024</td>
                        <td><strong>P5,009.00</strong></td>
                        <td>
                            <p class="status paid">Paid</p>
                        </td>
                        <td>Mogpog</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <button class="back-button" onclick="history.back()">Back</button>
    </main>
</body>
</html>
