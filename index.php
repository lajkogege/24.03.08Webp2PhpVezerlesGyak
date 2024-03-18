<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezérlési szerkezetek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
        echo"<h2>Véletlen számok</h2>";
        //fügvényeket fűzzük a szöveghez!
        echo "Paraméter nélküli véletlen szám:".rand(). "<br>";
        echo "A véletlen szám maximuma: ".getrandmax(). "<br>";
        echo "Zárt intervallumbeli véletlen szám : ".rand(10,20). "<br>";
        echo"<h2>Globális változók</h2>";
        $x= 7;
        $y = 6;
            
        function myTest0() {
            $x=1;
            $y=2;
            //kedő érték nélkül nem müködik 
            $z = $x + $y;
            echo "A (lokális változók) $x és a $y összege: $z <br>" ; 
            // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "A (globális változók) " . $GLOBALS['x'].   "és a " . $GLOBALS['y']." összege: ".$GLOBALS['z'];

        }
        myTest0();

        echo"<h2>Operátorok</h2>";
        $adat1=8/3; //valódi osztás
        echo "8/3 eredménye(ez egy valósi osztás a '/' jelel): $adat1<br>";
        echo "8/3 adatípusa: " .gettype($adat1). "<br>";

        echo"<h2>Elágazások</h2>";
        $logikai = (5 == 0);
        echo "5 egyenlő 0-val? <br>";
        echo ($logikai ? 'Ez igaz.<br>' : 'Ez hamis.<br>'); //ternélis operátorok változó ? 'ha igaz.' : 'ha hamis.'

        if ($logikai){ // ez ugyan ezt jelenti csak rövidebb formában(termélisan): echo ($logikai ? 'Ez igaz.' : 'Ez hamis.');
            echo 'ez igaz <br>';
        }
        else{
            echo 'ez hamis <br>';
        }

        $szam=rand(-1,1);
        echo "A véletlen szám: $szam <br>";
        switch ($szam) {
            case -1:
                echo "A szám negatív<br>";
                break;
            case 0:
                echo "A szám nulla<br>";
                break;
            default:
                echo "A szám pozitív<br>";
                break;
        }

        echo"<h2>Ciklusok</h2>";
        $tomb = array(1,3,4);
        //foreach sima tömbbel
        foreach($tomb as $ertek){
            echo $ertek.'<br>';
        }
        $asszTomb=array("Szandi" =>10, "István"=>20);
        //foreach asszocativ tömbbel
        foreach($asszTomb as $kulcs => $ertek){
            echo "$kulcs: $ertek <br>";
        }
        echo"<br>";
    ?>

    <?php
    echo "1.Hozz létre egy 5 elemű tömböt véletlen számokkal (20 és 30 közötti zárt intervallumban), majd írasd ki az összegüket!";
    $tomb =array();
    $osszeg=0;
    for ($i=0; $i<5; $i++){
        $randomSzam=rand(20,30);
        $tomb [] = $randomSzam;
        $osszeg += $randomSzam;
    }
   
    //kiíratás
    echo "Tömb elmei <br>";
    foreach ($tomb as $value){
        echo $value." ";
    }
    echo "<br>";

    echo "2. Adott egy 3 elemű tömb véletlen érdemjegyekkel korábban feltöltve, majd írasd ki az érdemjegyekhez tartozó szöveges értelmezést (pl. 3: közepes) <br>";
    $tomb2 = array();
    $randomSzam2 = 0;
    for ($i = 0; $i < 3; $i++) { // $i=1-ről $i=0-ra változtatva, hogy nulláról induljon az index
        $randomSzam2 = rand(1, 5);
        $tomb2[] = $randomSzam2; // Érdemjegy hozzáadása a tömbhöz
        switch ($randomSzam2) {
            case 1:
                echo $randomSzam2 . ": elégtelen <br>";
                break;
            case 2:
                echo $randomSzam2 . ": elégséges <br>";
                break;
            case 3:
                echo $randomSzam2 . ": közepes <br>";
                break;
            case 4:
                echo $randomSzam2 . ": jó <br>";
                break;
            case 5:
                echo $randomSzam2 . ": kiváló <br>";
                break;
            default:
                echo "Nem érvényes érdemjegy <br>";
                break;
        }
    }

echo "<h2>Sakk tábla</h2>";
$meret = 8;
echo "<table>";
echo "<tr><th></th>"; 
for ($j = 0; $j < $meret; $j++) {
    echo "<th>" . chr(97 + $j) . "</th>"; 
}
echo "</tr>";

for ($i = 0; $i < $meret; $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>"; 
    for ($j = 0; $j < $meret; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "<td style='background-color: white; width: 50px; height: 50px;'></td>";
        } else {
            echo "<td style='background-color: black; width: 50px; height: 50px;'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

//4.feladat:
echo"";
echo "<h2>4.feladat</h2>";
$darabSzam=10;
$fejekSzama=0;

$FejIras=array();
for ($i=0; $i < $darabSzam; $i++) { 
    $fej=(bool)rand(0,1);
    $FejIras[]=$fej;
    if ($fej) {
      $fejekSzama++;
    }
}

echo"Az összes dobás során a fejek száma: $fejekSzama";
    ?>
</body>
</html>