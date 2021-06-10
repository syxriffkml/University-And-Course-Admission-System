<?php
  include "db_connect.php";
  session_start();
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/user.css" /> 
    <link rel="stylesheet" href="../css/bootstrap-grid.css" /> 

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="icon" type="image/gif/png" href="../image/upu logo.jpg">
    <title>UPU Online - KATEGORI SPM</title>
</head>
<body>

<ul class="ulNav">
    <li class="liNav"><a href="index.php"><i class="fas fa-tachometer-alt fa-lg fa-secondary"></i> UTAMA</a></li>
    <div class="dropdown" style="float:left">
        <button class="dropbtn" style="height: 55px; width:180px"> PANDUAN CALON</button>
        <div class="dropdown-content">
            <a href="kategoriSPM.php">KATEROGI LEPASAN<br>SPM</a>
            <a href="kategoriSTPM.php">KATEGORI LEPASAN<br>STPM/SETARAF</a>
            <a href="https://drive.google.com/file/d/1PPyxU7cp8w3PIyVJHqwpVfB9wrKKeC5L/view" target="_blank" style="height:60px">FAQ</a>
        </div>
    </div>
    <li class="liNav"><a href="university.php"> SENARAI INSTITUSI</a></li>
    <li class="liNav"><a href="contact.php"><i class="fas fa-phone fa-lg fa-secondary"></i> HUBUNGI KAMI</a></li>
    <li></li>
    <?php
    if(isset($_SESSION['username'])):?>

        <li class="liNav" style="float:right"><a href="logout.php"> LOGOUT</a></li>
        <div class="dropdown" style="float:right">
            <button class="dropbtn" style="height: 55px;"><?php echo $_SESSION['username'] ."'s PROFILE";?></button>
            <div class="dropdown-content">
                <a href="#">Profile Setting</a>
                <a href="#">Button 2</a>
            </div>
        </div>
    <?php
    else:?>
    <li style="float:right"><button class="slideButton" id="login" style="padding : 10px">LOG IN</button></li>
    <li style="float:right"><button class="slideButton" id="register" style="padding : 10px">REGISTER</button></li>
    <?php
    endif;
    ?>
</ul>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div style="margin : 2px; text-align: center;">
                    <h1 class="bigText">Insert somethng here</h1><br><br>
                </div>
            </div>
        </div>     
        <div class="row">  
            <div class="col-sm-12" style="padding : 30px 50px;">
                <div class="glass" style="padding : 30px 50px;">
                    <form name="setup1" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <table>
                            <tr>
                                <td style="vertical-align: text-top; width:30%">
                                    <label for="username"><b>Nama Penuh </b></label>
                                    <input type="text" id="username" placeholder="Masukkan Nama Penuh" name="username" required><br>

                                    <label for="title"><b>Alamat Rumah</b></label>
                                    <textarea id="problem" name="problem" rows="4" cols="30" style="text-align: left; background-color: #f1f1f1;" required placeholder="Masukkan Alamat Rumah"></textarea><br>

                                    <label for="phone1"><b>No Telefon</b></label>
                                    <input type="text" id="phone1" placeholder="Masukkan No Telefon" name="phone1" oninput="inputNumber(this.id);" required/><br>

                                    <label for="phone2"><b>No Telefon Bapa/Ibu/Penjaga</b></label>
                                    <input type="text" id="phone2" placeholder="Masukkan No Telefon Bapa/Ibu/Penjaga " name="phone2" oninput="inputNumber(this.id);" required/>
                                </td>
                                <td style="vertical-align: text-top; width:30%">
                                    <label for="username"><b>Nama Penuh </b></label>
                                    <input type="text" id="username" placeholder="Masukkan Nama Penuh" name="username" required><br>

                                    <label for="birthplace"><b>Tempat Lahir </b></label>
                                    <select id="birthplace" name="birthplace">
                                        <option value="Johor">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Penang">Pulau Pinang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Selagor">Selangor</option>
                                        <option value="Terengganu">Terengganu</option>
                                    </select>

                                    <label for="marital_status"><b>Taraf Perkahwinan</b></label>
                                    <select id="marital_status" name="marital_status">
                                        <option value="Bujang">Bujang</option>
                                        <option value="Berkahwin">Berkahwin</option>
                                        <option value="Duda/Janda">Duda/Janda</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <button class="buttonForm cancelbtn" id="closeRegister">Close</button>
                        <button type="submit" name="submitSetup1" class="buttonForm submitbtn">Seterusnya</button><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    <?php include "modalLoginRegister.php" ?> <!--FOR MODAL DISPLAY-->
    </div><br><br><br><br>

    <div id="footer">Syariff Kamil</div>
    <script type="text/javascript" src="../js/modal.js"></script>

</body>