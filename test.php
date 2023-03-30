<?php 

// autoload les classes
function chargerClasse($classe) {
    require $classe.'.php';
}

spl_autoload_register('chargerClasse');

$spe1 = new Specialite("001","Musique");
$spe2 = new Specialite("002","Espagnol");
$spe3 = new Specialite("003","Montage vidéo");
$spe4 = new Specialite("004","Tapas");

$prof1 = new Professeur(01,"Tonton","Du29","tontondu29@alecole.fr");
$prof1->addSpecialite($spe1);

$prof2 = new Professeur(02,"Gugu","letocar","gugu.letocar@alecole.fr");
$prof2->addSpecialite($spe2);
$prof2->addSpecialite($spe3);
$prof2->addSpecialite($spe4);


$prof1->afficheProf();
$prof1->afficheSpecialites();
$prof2->afficheProf();
$prof2->afficheSpecialites();

// INJECTION DE DEPENDANCE
?>