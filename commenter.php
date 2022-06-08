<?php 
include 'header.php';
?>
<html>
<head>
<title>Mon premier site PHP </title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div style="color:blue; align-content:center; margin:2rem;">
<h4>Ajouter un commentaire:</h4>
<form style="color:blue;text-align:center; width:50%;" action ="commenter.php" method="post">
<input type="hidden" name="id" value="<?php echo  $id=uniqid();?>" />
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Texte</label>
    <input type="text" class="form-control" name="Texte">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Auteur</label>
    <input type="text" class="form-control" name="Auteur">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date de publication</label>
    <input type="date" class="form-control" name="Date_publication">
  </div>
  <button type="submit" class="btn btn-primary" name="Commenter">Commenter</button>
</form>
</div>
</body>
</html>

<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 
if ( isset($_POST['Commenter'])) {
    
    $sqlQuery = 'INSERT INTO commentaires(Texte, Auteur, Date_publication, id_article) VALUES (:Texte, :Auteur, :Date_publication, :id_article)';
    
    $insertcomm = $db->prepare($sqlQuery);
    
    $insertcomm ->execute([
        'Texte' => $_POST['Texte'],
        'Auteur' => $_POST['Auteur'],
        'Date_publication' => $_POST['Date_publication'], 
       'id_article' => $_GET['id'],
    ]);
  } 
// $articlesComm = $db->prepare('SELECT * FROM commentaires');
// $articlesComm->execute();
// $commentaires = $articlesComm->fetchAll();
 
?>