<?php
// $articles[] = array(
//   array('Titre' => "Java", 'Date' => "6 December 2021", 'Text' => "Le Java est un langage de programmation open source, indépendant de toute plateforme. Sa polyvalence en fait une option pour presque tous les types de projets. Comme la plupart des langages de programmation Web les plus courants, il est en paradigme orienté objet, ce qui signifie qu’il se détermine en fonction de son champ d’application concret. Un très grand nombre de bibliothèques et de frameworks Web généralement bien fournis et détaillés sont disponibles pour faciliter la réalisation de projets très complexes. En outre, les programmes écrits en Java sont extensibles, évolutifs et faciles à entretenir, sous réserve que le programmeur connaisse son métier.",'auteur'=>"Wikepidia"),
//   array('Titre' => 'Php', 'Date' => "14 November 2016", 'Text' =>"Hypertext Preprocessor, mieux connu sous son acronyme PHP, est un langage de script dérivé des langages C et Perl. Il est utilisé principalement pour programmer des pages Webetdes applications Internet dynamiques." ,'auteur'=>"Wikepidia"),
//   array('Titre' => 'Python', 'Date' => "14 November 2010",'Text' => 'Python est un langage de programmation dit « évolué » qui se fonde sur un code à la fois compact et compréhensible. Python est également facile à exploiter ; par exemple, son indentation permet de délimiter les blocs de code par des espaces plutôt que par des symboles. C’est pour cela que ce langage est considéré comme agréable à apprendre et à utiliser.','auteur'=>"Wikepidia"),
//   array('Titre' => "Ruby", 'Date' => "14 November 2020", 'Text' =>'Un autre langage de programmation évolué du nom de Ruby a été créé au milieu des années 1990 par Yukihiro Matsumoto. Développé dès son origine comme un langage de programmation orienté objet, il présente également un typage dynamique et un nettoyage de mémoire automatique.' ,'auteur'=>"Wikepidia"),
//   array('Titre' => 'C++', 'Date' => "14 November 2015", 'Text' =>'Le C++ est dérivé du C, l’un des plus anciens langages de programmation. Envisagés au départ comme un approfondissement du C, les travaux sur le C++ ont débuté dès 1979, mais ce n’est qu’en 1985 qu’il a été mis à disposition du grand public. ' ,'auteur'=>"Wikepidia"),
// );

usort($articles, function($x, $y) {
    return strtotime($x['Date_publication']) <=> strtotime($y['Date_publication']);
});
$articles=array_reverse($articles);
// $a=count($articles);
$n=count($articles);
function getArticles($n=null){
  global $articles;
  if($n==null or $n>count($articles)){$n=count($articles);}
  $t=array();
  for ($x = 0; $x <$n; $x++) {
    $t[]=$articles[$x];
  }
  return($t);
} 

?>
