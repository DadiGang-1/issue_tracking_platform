<?php
function repondre_oui_non($phrase) {
    $answer = readline("(o/n) $phrase ");
    if ($answer == "o") {return true;} 
    else if ($answer == "n"){return false;} 
    else {return repondre_oui_non($phrase);}
}

if (repondre_oui_non("Voulez-vous continuer ?")) {
    echo "On continue!\n";
} else {
    echo "On s'arrête!\n";
}
?>