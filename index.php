<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$file = fopen('lorem.txt', 'w');// "w" ouvert en ecriture seule
fwrite($file, $lorem);
fclose($file);

/* ou
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
file_put_contents('lorem.txt', $lorem);
*/

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici

$arrays = [
    "Emergentes emergentes Vrsicinus iunxerat clam accitus ex et foveis dispicere.",
    "Novas non Epigonus orator Eusebius et Montius orator hi novas res Eusebius manus e inter.",
    "Accedente prandiis infaustos et et quod inserunt obscuros accepta inserunt.",
    "Praeter inopinis diversis oppidum quidem feris occultis amphitheatrali pacari raris pernicies gravia alente ut
     quod.",
    "Contigui navigabant enim stationes caesorumque stationes Scironis enim navem sunt pilatorum ut Isauriae sunt
     caesorumque.",
    "Ablatis res agebatur die muros confirmans exsurge inpositum oppidum inpositum muros quondam regiis et Crispum 
    armatis crebritate inpositum inpositum agebatur.",
    "Temporibus me illis amicitiae post amicitia sapiens (sic amicitiae Laelius.",
    "Antequam diem pervenire nascetur antequam provincia quod non repente Februario.",
    "Acciderat in arcanorum ut aut Amphiarao praesente in citerioris imperator.",
    "Ludus philosophia a concertationesque contumeliae contentiones inter pertinaces quid concertationesque philosophia
     ut dicas non ludus."];

foreach($arrays as $array){
    file_put_contents('lorem.txt', "\n" . $array, FILE_APPEND);// ajout à la suite du fichier
}

/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$file = "index.php";
    if (file_exists($file)) {
        $info = pathinfo($file);
        echo $info["extension"] . "<br>";//je récupère l'extension du fichier ou dossier.
    };


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
if(file_exists('toto')) {
    echo "Le fichier 'toto' existe.";
} else {
    echo "Le fichier 'toto' n'existe pas !";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.

$file = file("lorem.txt");
    foreach ($file as & $line) {
        $line = str_replace("a", "@", $line);
    }
    file_put_contents("lorem.txt", implode("", $file));

