<?php 
require "../function.php";
session_start();

$id_siswa = $_SESSION["id"];
$data_siswa = pg_fetch_assoc(pg_query($con, "SELECT * FROM siswa WHERE id = $id_siswa"));
$nama = $data_siswa["nama"];
$gambar = $data_siswa["foto_profil"];

pg_close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/homeStyle.css">

    <!-- Fonts -->
    <!-- Racing Sans One -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet" />
    <!-- Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet" />

</head>
<body>
    <div class="container">
        <div class="rectangle">
            <div class="circle"></div>
            <p class="nama">hana katharine</p>
            <nav>
                <div class="navigation">
                <a href="#home">home</a>
                <a href="#course">course</a>
                <a href="#forum">forum</a>
                <a href="#assignment">assignment</a>
                <a href="#quiz">quiz</a>
            </div>
        </a>
        <ul>
            <li>
                <a href="./home.php">Home</a>
                <div class="underline"></div>
            </li>
            <li>
                <a href="./course.php">Course</a>
                <div class="underline"></div>
            </li>
            <li>
                <a href="">Forum</a>
                <div class="underline"></div>
            </li>
        </ul>
    </nav>

    <h1 style="margin-left: 30px;">HELLO, <? echo $nama; ?></h1>


    <div id="activities">
        <div class="rectangle-2">
            <div class="circle-2">
                <p class="title">course</p>
            </div>
            <div class="square-container">
                <div class="square-6">
                    <p class="course">date</p>
                </div>
                <div class="square-5">
                    <p class="course">title</p>
                </div>
                <div class="square-6">
                </div>
                <div class="square-5">
                </div>
                <div class="square-6">
                </div>
                <div class="square-5">
                </div>
                <div class="square-6">
                </div>
                <div class="square-5">
                </div>
                <div class="square-6">
                </div>
                <div class="square-5">
                </div>
                <div class="square-6">
                </div>
                <div class="square-5">
                </div>
            </div>
        </div>
    </div>
    
    <div id="activities">
        <div class="rectangle-2">
            <div class="circle-2">
                <p class="title">latest course</p>
            </div>
            <div class="square-container">
                <div class="square-6">
                    <p class="course">date</p>
                </div>
                <div class="square-5">
                    <p class="course">title</p>
                </div>
                <div class="square-6">
                </div>
                <div class="square-5">
                </div><div class="square-6">
                </div>
                <div class="square-5">
                </div><div class="square-6">
                </div>
                <div class="square-5">
                </div><div class="square-6">
                </div>
                <div class="square-5">
                </div><div class="square-6">
                </div>
                <div class="square-5">
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>