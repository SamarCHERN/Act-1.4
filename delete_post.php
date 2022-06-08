<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
};
 $sqlQuery = 'DELETE FROM articles WHERE id=:id';

 $deleteArticle = $db->prepare($sqlQuery);
 $deleteArticle->execute([
    'id' => $_GET['id']
 ]);

 header('Location: '. $rootUrl. 'page.php');

?>