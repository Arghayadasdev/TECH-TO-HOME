<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        
        html {
            box-sizing: border-box;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }
        
        .container {
            padding: 0 16px;
        }
        
        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .title {
            color: grey;
        }
        
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        
        .button:hover {
            background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p>TECH TO HOME is Ecommerce Website For Eletronics Goods by Your Website</p>

    </div>


    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="../images/ahangara_das_dev.jpg" alt="arghaya" style="width:100%">
                <div class="container">
                    <h2>Arghya Das Dev</h2>
                    <p class="title">TEAM MEMBER</p>
                    <p>Developer and Product enginner </p>
                    <p>arghayadasdev2000@gmail.com</p>
                    <p>7001982361</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../images/markus1.jpeg" alt="Markus" style="width:85%">
                <div class="container">
                    <h2>Marcus </h2>
                    <p class="title">TEAM MEMBER</p>
                    <p>UI AND UX Designer</p>
                    <p>marcuschongloi974@gmail.com</p>
                    <p>7483310811

                    </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../images/marktin.jpeg" alt="John" style="width:125%">
                <div class="container">
                    <h2>Martin Reji</h2>
                    <p class="title">TEAM MEMBER</p>
                    <p>Tester and Co-designer</p>
                    <p>martinreji7@gmail.com</p>
                    <p>7560813228</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>