<?php

//De afbeelding is de waarde die op dat moment uit de array(katten) komt (kat1, kat2 enz..)
echo  "<img src='../img/".$_POST["katten"].".jpg'><br>";


// Als de waarde overeenkomt met met waarde uit de array katten(op het moment van versturen van het formulier),
// print dan het juiste zinnetje
if($_POST["katten"] == "kat4"){
    echo "Dit is Chaz";

}

elseif($_POST["katten"] == "kat5"){
    echo "Dit is Muis";

}

elseif($_POST["katten"] == "kat6"){
    echo "Dit is Trica";

}

elseif($_POST["katten"] == "kat7"){
    echo "Dit is Daisy ";

}

elseif($_POST["katten"] == "kat8"){
    echo "Dit is Streuvel";

}

elseif($_POST["katten"] == "kat9"){
    echo "Dit is Bunjee";

}
//Als er geen kat geselecteerd is komt een een alertbox en een link om terug te gaan naar het formulier.
else{
   echo "<a href='opdracht3.html'><< Ga terug naar het formulier</a>";
    echo '<script language="javascript">';
    echo 'alert("Er is geen kat geselecteerd. Probeer het opnieuw.")';
    echo '</script>';
}

