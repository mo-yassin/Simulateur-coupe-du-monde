<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Simulateur coupe du monde</title>
</head>

<body>
    <header class="bg-dark bg-gradient">
        <div class="d-flex flex-column align-items-center">
            <img class="p-3" src="https://upload.wikimedia.org/wikipedia/fr/thumb/e/e3/2022_FIFA_World_Cup.svg/857px-2022_FIFA_World_Cup.svg.png" alt="logo">
            <h1 class="font-weight-bold text-white text-uppercase">Simulateur coupe du monde</h1>
        </div>
        <div class="logos">
            <img src="images/Logo_Belge.svg.png" alt="Logo Belge">
            <img src="images/Logo_Canadienne.svg.png" alt="Logo Canada">
            <img src="images/Logo_Croatie.svg.png" alt="Logo Croatie">
            <img src="images/Logo_Morocco.svg.png" alt="Logo Morocco">
        </div>
    </header>
    <main>
        <section>
            <form method="POST">
                <div>
                    <h2 class="p-3">Week 1</h2>
                    <div class="p-3 d-flex">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Morocco.svg" alt="Flag of Morocco">
                            <h3>Marruecos</h3>
                        </div>
                            <input type="text" name="marruecos-1"  value="0">                         
                        <hr>
                        <input type="text" name="croacia-1" value="0">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Croatia.svg.png" alt="Flag of Croatia">
                            <h3>Croacia</h3>
                        </div>
                    </div>
                    <div class="p-3 d-flex">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Belgium.svg.png" alt="Flag of Belgiga">
                            <h3>Belgiga</h3>
                        </div>
                        <input value="0" type="text" name="belgiga-1">
                        <hr>
                        <input type="text" name="canada-1" value="0">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Canada.svg.png" alt="Flag of Canada">
                            <h3>Canada</h3>
                        </div>
                    </div>
                    <hr>
                    <h2 class="p-3">Week 2</h2>
                    <div class="p-3 d-flex">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Belgium.svg.png" alt="Flag of Belgiga">
                            <h3>Belgiga</h3>
                        </div>
                        <input type="text" name="belgiga-2" value="0">
                        <hr>
                        <input ype="text" name="marruecos-2" value="0">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Morocco.svg" alt="Flag of Morocco">
                            <h3>Marruecos</h3>
                        </div>
                    </div>
                    <div class="p-3 d-flex">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Croatia.svg.png" alt="Flag of Croatia">
                            <h3>Croatia</h3>
                        </div>
                        <input type="text" name="croacia-2" value="0">
                        <hr>
                        <input type="text" name="canada-2" value="0">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Canada.svg.png" alt="Flag of Canada">
                            <h3>Canada</h3>
                        </div>
                    </div>
                    <hr>
                    <h2 class="p-3">Week 3</h2>
                    <div class="p-3 d-flex">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Croatia.svg.png" alt="Flag of Croatia">
                            <h3>Croacia</h3>
                        </div>
                        <input type="text" name="croacia-3" value="0">
                        <hr>
                        <input type="text" name="belgiga-3" value="0">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Belgium.svg.png" alt="Flag of Belgiga">
                            <h3>Belgiga</h3>
                        </div>
                    </div>
                    <div class="p-3 d-flex">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Canada.svg.png" alt="Flag of Canada">
                            <h3>Canada</h3>
                        </div>
                        <input type="text" name="canada-3" value="0">
                        <hr>
                        <input type="text" name="marruecos-3" value="0">
                        <div class="d-flex flex-column align-items-center">
                            <img src="images/Flag_of_Morocco.svg" alt="Flag of Morocco">
                            <h3>Marruecos</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section>
            <div class="text-center">
                <input class="btn btn-outline-primary w-25 mt-5 mb-5" name="submit" id="submit" type="submit" value="RESULTS">
            </div>
            </form>
        </section>
    </main>
<?php

if ( isset( $_POST['submit'])) {

    $marruecos_1 = $_POST['marruecos-1'];
    $croacia_1 = $_POST['croacia-1'];
    $belgiga_1 = $_POST['belgiga-1'];
    $canada_1 = $_POST['canada-1'];

    $marruecos_2 = $_POST['marruecos-2'];
    $belgiga_2 = $_POST['belgiga-2'];
    $croacia_2 = $_POST['croacia-2'];
    $canada_2 = $_POST['canada-2'];

    $croacia_3 = $_POST['croacia-3'];
    $belgiga_3 = $_POST['belgiga-3'];
    $canada_3 = $_POST['canada-3'];
    $marruecos_3 = $_POST['marruecos-3'];

    $point = array("MARRUECOS" => 0, "CROATIE" => 0,  "CANADA" => 0, "BELQIQUE" => 0);
    $matches = array("MARRUECOS" => 0, "CROATIE" => 0 ,  "CANADA" => 0, "BELQIQUE" => 0);
    $GaGnant = array('MARRUECOS' => 0, 'CROATIE' => 0 , 'CANADA' => 0 , 'BELQIQUE' => 0);
    $EMP = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $PER = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goal = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goal_C = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);

    // point_1

    if ($marruecos_1 != "" && $croacia_1 != "") {
        $matches['MARRUECOS'] += 1;
        $matches['CROATIE'] += 1;
        $goal["MARRUECOS"] += $marruecos_1;
        $goal["CROATIE"] += $croacia_1;
        $goal_C["CROATIE"] += $marruecos_1;
        $goal_C["MARRUECOS"] += $croacia_1;
    }
    if ($marruecos_1 > $croacia_1) {
        $point['MARRUECOS'] += 3 ;
        $GaGnant['MARRUECOS'] += 1 ;
        $PER['CROATIE'] += 1 ;
    }
    elseif ($marruecos_1 < $croacia_1) {
        $point['CROATIE'] += 3 ;
        $GaGnant['CROATIE'] += 1 ;
        $PER['MARRUECOS'] += 1 ;
    }else {
        $point['MARRUECOS'] += 1 ;
        $point['CROATIE'] += 1 ;
        $EMP['MARRUECOS'] += 1 ;
        $EMP['CROATIE'] += 1 ;
    }

    // point_2

    if ($belgiga_1 != "" && $canada_1 != "") {
        $matches['BELQIQUE'] += 1;
        $matches['CANADA'] += 1;
        $goal["BELQIQUE"] += $belgiga_1;
        $goal["CANADA"] += $canada_1;
        $goal_C["CANADA"] += $belgiga_1;
        $goal_C["BELQIQUE"] += $canada_1;
    }
    if($belgiga_1 > $canada_1 ){
        $point["BELQIQUE"] += 3;
        $GaGnant['BELQIQUE'] += 1 ;
        $PER['CANADA'] += 1 ;
    }
    elseif ($belgiga_1  < $canada_1 ){
        $point["CANADA"] += 3;
        $GaGnant['CANADA'] += 1 ;
        $PER['BELQIQUE'] += 1 ;
    }
    else {
        $point["BELQIQUE"] += 1;
        $point["CANADA"] += 1;
        $EMP['BELQIQUE'] += 1 ;
        $EMP['CANADA'] += 1 ;
    }

    // point_3

    if ($marruecos_2 != "" && $belgiga_2 != "") {
        $matches['MARRUECOS'] += 1;
        $matches['BELQIQUE'] += 1;
        $goal["BELQIQUE"] +=  $belgiga_2;
        $goal["MARRUECOS"] += $marruecos_2;
        $goal_C["MARRUECOS"] +=  $belgiga_2;
        $goal_C["BELQIQUE"] += $marruecos_2;
    }
    if($belgiga_2 > $marruecos_2 ){
        $point["BELQIQUE"] += 3;
        $GaGnant['BELQIQUE'] += 1 ;
        $PER['MARRUECOS'] += 1 ;
    }
    elseif ($belgiga_2  < $marruecos_2 ){
        $point["MARRUECOS"] += 3;
        $GaGnant['MARRUECOS'] += 1 ;
        $PER['BELQIQUE'] += 1 ;
    }
    else {
        $point["BELQIQUE"] += 1;
        $point["MARRUECOS"] += 1;
        $EMP['MARRUECOS'] += 1 ;
        $EMP['BELQIQUE'] += 1 ;
    }

    // point_4

    if ($croacia_2 != "" &&  $canada_2 != "") {
        $matches['CROATIE'] += 1;
        $matches['CANADA'] += 1;
        $goal["CANADA"] +=  $canada_2 ;
        $goal["CROATIE"] += $croacia_2 ;
        $goal_C["CROATIE"] +=  $canada_2 ;
        $goal_C["CANADA"] += $croacia_2 ;
    }
    if($croacia_2 > $canada_2 ){
        $point["CROATIE"] += 3;
        $GaGnant['CROATIE'] += 1 ;
        $PER['CANADA'] += 1 ;
    }
    elseif ($croacia_2  < $canada_2 ){
        $point["CANADA"] += 3;
        $GaGnant['CANADA'] += 1 ;
        $PER['CROATIE'] += 1 ;
    }
    else {
        $point["CROATIE"] += 1;
        $point["CANADA"] += 1;
        $EMP['CANADA'] += 1 ;
        $EMP['CROATIE'] += 1 ;
    }

    // point_5

    if ($croacia_3 != "" &&  $belgiga_3 != "") {
        $matches['CROATIE'] += 1;
        $matches['BELQIQUE'] += 1;
        $goal["BELQIQUE"] +=  $belgiga_3 ;
        $goal["CROATIE"] += $croacia_3 ;
        $goal_C["CROATIE"] +=  $belgiga_3 ;
        $goal_C["BELQIQUE"] += $croacia_3 ;
    }
    if($croacia_3 > $belgiga_3 ){
        $point["CROATIE"] += 3;
        $GaGnant['CROATIE'] += 1 ;
        $PER['BELQIQUE'] += 1 ;
    }
    elseif ($croacia_3  < $belgiga_3 ){
        $point["BELQIQUE"] += 3;
        $GaGnant['BELQIQUE'] += 1 ;
        $PER['CROATIE'] += 1 ;
    }
    else {
        $point["CROATIE"] += 1;
        $point["BELQIQUE"] += 1;
        $EMP['BELQIQUE'] += 1 ;
        $EMP['CROATIE'] += 1 ;
    }

    // point_6

    if ($marruecos_3 != "" && $canada_3 != "") {
        $matches['MARRUECOS'] += 1;
        $matches['CANADA'] += 1;
        $goal["CANADA"] +=  $canada_3 ;
        $goal["MARRUECOS"] += $marruecos_3 ;
        $goal_C["MARRUECOS"] +=  $canada_3 ;
        $goal_C["CANADA"] += $marruecos_3 ;
    }
    if($canada_3 > $marruecos_3 ){
        $point["CANADA"] += 3;
        $GaGnant['CANADA'] += 1 ;
        $PER['MARRUECOS'] += 1 ;
    }
    elseif ($canada_3  < $marruecos_3 ){
        $point["MARRUECOS"] += 3;
        $GaGnant['MARRUECOS'] += 1 ;
        $PER['CANADA'] += 1 ;
    }
    else {
        $point["CANADA"] += 1;
        $point["MARRUECOS"] += 1;
        $EMP['MARRUECOS'] += 1 ;
        $EMP['CANADA'] += 1 ;
    }

    $MRpts =  $point["MARRUECOS"];
    $CRpts =  $point["CROATIE"];
    $BGpts =  $point["BELQIQUE"];
    $CNpts =  $point["CANADA"];

    $MRpar = $matches["MARRUECOS"];
    $CRpar = $matches["CROATIE"];
    $BGpar = $matches['BELQIQUE'];
    $CNpar =  $matches['CANADA'] ;

    $MRGan = $GaGnant["MARRUECOS"];
    $CRGan = $GaGnant["CROATIE"];
    $BGGan = $GaGnant['BELQIQUE'];
    $CNGan =  $GaGnant['CANADA'] ;

    $MR_EMP = $EMP["MARRUECOS"];
    $CR_EMP = $EMP["CROATIE"];
    $BG_EMP = $EMP['BELQIQUE'];
    $CN_EMP =  $EMP['CANADA'] ;

    $MR_PER = $PER["MARRUECOS"];
    $CR_PER = $PER["CROATIE"];
    $BG_PER = $PER['BELQIQUE'];
    $CN_PER =  $PER['CANADA'] ;

    $MR_GF = $goal["MARRUECOS"];
    $CR_GF = $goal["CROATIE"];
    $BG_GF = $goal['BELQIQUE'];
    $CN_GF =  $goal['CANADA'] ;

    $MR_GC = $goal_C["MARRUECOS"];
    $CR_GC = $goal_C["CROATIE"];
    $BG_GC = $goal_C['BELQIQUE'];
    $CN_GC =  $goal_C['CANADA'] ;

    $_DIFFERENCE_EQUIPE_1 = $MR_GF - $MR_GC ;
    $_DIFFERENCE_EQUIPE_2 = $CR_GF - $CR_GC ;
    $_DIFFERENCE_EQUIPE_3 = $BG_GF  -  $BG_GC ;
    $_DIFFERENCE_EQUIPE_4 = $CN_GF  -  $CN_GC ;

$Equipe = [
    [ "Equipe" => "MARRUECOS", "point" => $MRpts , "matches" =>  $MRpar , "GaGnant" =>  $MRGan , "EMP" =>  $MR_EMP , "PER" =>  $MR_PER , "G.F." =>  $MR_GF , "G.C." =>  $MR_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_1],
    [ "Equipe" => "CROATIE", "point" => $CRpts , "matches" => $CRpar , "GaGnant" =>  $CRGan , "EMP" =>  $CR_EMP , "PER" =>  $CR_PER , "G.F." =>  $CR_GF , "G.C." =>  $CR_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_2],
    [ "Equipe" => "BELQIQUE", "point" => $BGpts , "matches" => $BGpar, "GaGnant" =>  $BGGan , "EMP" =>  $BG_EMP , "PER" =>  $BG_PER , "G.F." =>  $BG_GF , "G.C." =>  $BG_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_3],
    [ "Equipe" => "CANADA", "point" => $CNpts , "matches" => $CNpar, "GaGnant" =>  $CNGan , "EMP" =>  $CN_EMP , "PER" =>  $CN_PER , "G.F." =>  $CN_GF , "G.C." =>  $CN_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_4],
];

usort($Equipe, function($a, $b) {
    return $a['point'] < $b['point'];
});
?>

<div class="container"> 
<div class="text-center">
<div class="row" ><h1><b>Groups</b></h1><hr></div> 
    <div class="table-responsive-xl table-1">
        <table class="table mt-5 table-striped col-sm-12 mb-5 ">
        </div>
        <?php
            echo "<tr><th>Equipe</th><th>PT</th><th>PAR</th><th>GAN</th><th>EMP</th><th>PER</th><th>G.F.</th><th>G.C.</th><th>+/-</th></tr>";
            foreach ($Equipe as $row) {
                echo "<tr>";
                echo "<td>" . $row['Equipe'] . "</td>";
                echo "<td>" . $row['point'] . "</td>";
                echo "<td>" . $row['matches'] . "</td>";
                echo "<td>" . $row['GaGnant'] . "</td>";
                echo "<td>" . $row['EMP'] . "</td>";
                echo "<td>" . $row['PER'] . "</td>";
                echo "<td>" . $row['G.F.'] . "</td>";
                echo "<td>" . $row['G.C.'] . "</td>";
                echo "<td>" . $row['DIFFERENCE'] . "</td>";
                echo "</tr>";
            }
        }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>