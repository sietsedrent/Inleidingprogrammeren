<?php
//1.A

for ($i = 1; $i <= 8; $i++) {
    for ($j = 1; $j <= 8; $j++) {
        echo '*';
    }
    echo ("\n");
}
?>

<?php
//1.B

for ($i = 1; $i <=20; $i++) {
for ($j = 1; $j <= 20; $j++) {
echo '*';
}
echo ("\n");
}
?>

<?php
//1.C
for ($i = 1; $i <=20; $i++) {
    for ($j = 1; $j <= 8; $j++) {
        echo '*';
    }
    echo ("\n");
}
?>

<?php
//1.D
for ($i = 1; $i <=8; $i++) {
for ($j = 1; $j <= $i; $j++) {
echo '*';
}
echo ("\n");
}
?>

<?php
//1.e
for ($i = 1; $i <=20; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo ("\n");
}
?>

<?php
//1.F
for ($i = 1; $i <=20; $i++) {
    for ($j = $i; $j <= 8; $j++) {
        echo '*';
    }
    echo ("\n");
}
?>

<?php
//1.G
for ($i = 1; $i <=20; $i++) {
    for ($j = $i; $j <= 20; $j++) {
        echo '*';
    }
    echo ("\n");
}
?>

<?php
//1.H
$breedte = 5; // Je kunt de waarde van $breedte aanpassen

for ($i = 1; $i <= $breedte; $i++) {
    // Eerste helft van de figuur (van links naar rechts)
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo("\n");
}

for ($i = $breedte - 1; $i >= 1; $i--) {
    // Tweede helft van de figuur (van rechts naar links)
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo("\n");
}
?>

<?php
//1.I
for($getal =0; $getal <=100; $getal=$getal+1) {
    print("$getal ");
}

