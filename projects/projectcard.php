<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="../src/input.css" media="screen">
    <script src="../utils.js"></script>
    <title>MA.A</title>
</head>
<body>
    <?php $progetto = $_POST["progetto"];
        /*$nome = $_POST["nome"];*/
        $img = "../imgs/WEB/";
        
        if(isset($progetto)){
            $img = $img . $progetto . ".jpg";
        }

        switch($progetto){
            case 1 :
                $nome = "CENTRO DIURNO E SEDE DELLA COOPERATIVA SOCIALE ACLI";
                $dettagli = "";
                $luogo = "Cordenons PN";
                break;
            case 2 :
                $nome = "NEL SILENZIO";
                $dettagli = "Abitazione privata";
                $luogo = "Treppo Grande UD";
                break;
            case 3 :
                $nome = "IN CENTRO";
                $dettagli = "Pista ciclabile";
                $luogo = "Fiume Veneto PN";
                break;
            case 4 :
                $nome = "RINATURALIZZARE";
                $dettagli = "Pista ciclabile";
                $luogo = "Fiume Veneto PN";
                break;
            case 5 :
                $nome = "CHEZ NORI";
                $dettagli = "Abitazione privata";
                $luogo = "Udine UD";
                break;
            case 6 :
                $nome = "PALESTRA DI ARRAMPICATA INDOOR";
                $dettagli = "";
                $luogo = "Codroipo UD";
                break;
            case 7 :
                $nome = "INTROVERSA";
                $dettagli = "Abitazione privata";
                $luogo = "Udine UD";
                break;
            case 8 :
                $nome = "CASA DELLA LAVANDA";
                $dettagli = "Abitazione privata";
                $luogo = "Pozzuolo del Friuli UD";
                break;
            case 9 :
                $nome = "DÕ-MARU";
                $dettagli = "Abitazione privata";
                $luogo = "Pagnacco UD";
                break;
        }
    ?>

    <header id="home">
        </header>

    <div class="header-container" id="projects-header">
        <div id="up-header">
            <h1 class="title-long">MATERIA DARCHITETTURA</h1>
            <h1 class="title-short">MAA</h1>
            <button class="menu-button" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#8a817c"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></button>
        </div> 
        
        
        <ul id="sidebar" class="">
            <li><button onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#8a817c"><path d="m251.33-204.67-46.66-46.66L433.33-480 204.67-708.67l46.66-46.66L480-526.67l228.67-228.66 46.66 46.66L526.67-480l228.66 228.67-46.66 46.66L480-433.33 251.33-204.67Z"/></svg></button></li>
            <li><a href="../projects.html" onclick="toggleSidebar()">Home</a></li>
            <li><a href="../lostudio.html" onclick="toggleSidebar()">Lo Studio</a></li>
            <li><a href="../arte.html" onclick="toggleSidebar()">Arte</a></li>
            <li><a href="../contatti.html" onclick="toggleSidebar()">Contatti</a></li>
        </ul>
    </div>

    <main>
        <section class="card">
            <div class="project-desc">
            <div class="prj-img">
                <img src=<?php echo $img ?> alt="">
                <div class="prj-details">
                    <h2><?php echo $nome;?></h2>
                    <p><?php echo $dettagli?></p>
                    <p><?php echo $luogo?></p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div id="footer-left">
            <p>Architectural Designer</p>
            <a href="https://www.instagram.com/materiadarchitettura/"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="https://www.facebook.com/p/Andrea-Martinelli-Architetto-100054494768972/"><i class="fa-brands fa-facebook"></i></a>
        </div>
        <div id="footer-center">
            <p>Martinelli Andrea</p>
            <p>Malpasso Martina</p>
            <p>Zonta Leonardo   </p>
        </div>
        <div id="footer-right">
            <p>Italian Architecture Firm based in Udine | FVG | Italy</p>
            <p>Via Cjavecis 7/1, Udine, Italy 33100</p>
        </div>
    </footer>
</body>
</html>