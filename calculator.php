<?php

echo "welke uitvoering wil je doen? (+, -, *, /)\n";
$uitvoering = readline();


echo "wat is het eerste getal?\n";
$getal1 = readline();

echo "wat word het tweede getal?\n";
$getal2 = readline();




if ($uitvoering == "+"){

    if(is_numeric ($getal1.$getal2)){

  $antwoord =  ($getal1+$getal2);
  echo "je antwoord is $antwoord";
    }
    else{
        echo "Je moet alles wel goed uitvoeren";
    }

}


elseif ($uitvoering == "-"){

    if(is_numeric($getal1.$getal2)){

    $antwoord =  ($getal1-$getal2);
    echo "je antwoord is $antwoord";
    }
    else{
        echo "Je moet alles wel goed uitvoeren";
    }

  
}

elseif ($uitvoering == "*"){

    if(is_numeric ($getal1.$getal2)){

    $antwoord =  ($getal1*$getal2);
    echo "je antwoord is $antwoord\n";
    } 
    else{
        echo "Je moet alles wel goed uitvoeren";
    }
}

elseif ($uitvoering == "/"){

    if(is_numeric ($getal1.$getal2)){

    $antwoord =  ($getal1/$getal2);
    echo "je antwoord is $antwoord\n";
    }
    else{
        echo "Je moet alles wel goed uitvoeren";
    }


}

else {
    echo "Je moet alles wel goed uitvoeren";
}



?>