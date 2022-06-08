<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 
if ( isset($_POST['submit'])) {
    
    $sqlQuery = 'INSERT INTO articles(Titre, Texte, Auteur, Date_publication) VALUES (:Titre, :Texte, :Auteur, :Date_publication)';
    
    $insertArticle = $db->prepare($sqlQuery);
    
    $insertArticle->execute([
        'Titre' => $_POST['Titre'],
        'Texte' => $_POST['Texte'],
        'Auteur' => $_POST['Auteur'],
        'Date_publication' => $_POST['Date_publication'], 
    ]);
  } 
$articlesStatement = $db->prepare('SELECT * FROM articles');
$articlesStatement->execute();
$articles = $articlesStatement->fetchAll();
// $sqlQuery = 'DELETE FROM articles WHERE id=:id';
 
?>
