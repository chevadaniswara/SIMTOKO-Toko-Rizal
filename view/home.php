<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <div class="header" id="myHeader">
            <h2><center>SIMTOKO</center></h2>
        </div>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: white;
            background-size: cover;
        }
        .header {
            padding: 10px 16px;
            background: #555;
            color: #f1f1f1;
        }
        .container_card{
            display: flex;
            justify-content: center;
        }
        .card{
            background: gray;
            width: 270px;
            height: 350px;
            margin: 10px;
            border-radius: 15px;
            text-align: center;
        }
        .card a{
            background: black;
            color: white;
            padding: 15px 20px;
            display: block;
            margin: 20px 50px;
            margin-top: 100px;
        }
        .gambar_card{
            background-color: papayawhip;
            height: 150px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
    </head>

    <body>
        <div class="main_konten">
            <center><h1>SELAMAT DATANG</h1></center>
            <!-- <a href="../main_login.php?daftar=ok">Daftar disini</a>
            <a href="../main_login.php?login=ok">Login disini</a>
            <a href="../main_logout.php?login=ok">Logout</a> -->

            <section class="container_card">
                <div class="card">
                    <div class="gambar_card">
                    <i class="material-icons" style="font-size:150px;color:#4caf50;">search</i>
                    </div>
                    <a href="main_inventory.php?inv">Inventory</a>
                </div>
                <div class="card">
                    <div class="gambar_card">
                    <i class="material-icons" style="font-size:150px;color:#4caf50">login</i>
                    </div>
                    <a href="main_homepage.php?orders">Orders</a>
                    <!-- <a href="orders.php">Orders</a> -->
                </div>
                <div class="card">
                    <div class="gambar_card">
                    <i class="material-icons" style="font-size:150px;color:#4caf50">logout</i>
                    <a href="main_login.php">Logout</a>
                </div>
            </section>
        </div>
    </body>
</html>