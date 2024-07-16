
<form action="admin/articleinsert.php" method="post">

    Titre :
    <input type="text" name="titre" <?php echo $resultat ['titre'] ?>><br><br>
    
    Texte :
    <input type="text" name="texte" <?php echo $resultat ['texte'] ?>><br><br>

    photo :
    <input type="text" name="photo" value="" <?php echo $resultat ['photo'] ?>><br><br>
    
    <input type="submit" value="Envoyer">

</form>