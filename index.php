<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RS Intra PHP</title>

    <!-- Bootstrap Core CSS -->
    <link href="_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="_assets/css/simple-sidebar.css" rel="stylesheet">

</head>



<body   style="background-image: url(gambar/rs1.jpg);" 
        
        
</body>



    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        RS Intra PHP
                    </a>
                </li>
                <li>
                    <a href="dokter.php">Dokter Spesialis</a>
                </li>
                <li>
                    <a href="obat.php">Jenis Obat</a>
                </li>
                <li>
                    <a href="pasien.php">Data Pasien</a>
                </li>
                <li>
                    <a href="poliklinik.php">Poliklinik</a>
                </li>
                <li>
                    <a href="rekammedis.php">Rekam Medis</a>
                </li>
                <li>
                    <a href="hasil.php">Hasil</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div>    
            <marquee bgcolor="red" width=100% ><h2><b style="color:white; ">Selamat Datang di Rumah Sakit Intra PHP</b></h2></marquee>
            </textarea>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center { margin: 1;
                position: absolute;
                top:40%
                left:45%
                -ms-transform: transalate(-40%,-40%);
                transform: trannsalate(-40%,-40%)
                

            }>  
            <h1><a href="menu-toggle" class="btn btn-default " id="menu-toggle" ><b style="color: white;">Klik Disini</a></b></h1>
            </center>
            <center>
            <h4><b style="color: white;">Alamat : Jl. M.T. Haryono No. 12 Cawang Jakata Timur 13630 </b></h4>
            </center>
            <center>
            <h5><b style="color: white;">Telp. (021) 2937 3377 Fax. (021) 2937 </b></h5>
            </center>>
        </div>
            

    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="_assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="_assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
