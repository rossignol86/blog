<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Affichage des Articles</title>
  <style>
    .card {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 16px;
      margin: 16px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .rubrique {
      margin-bottom: 24px;
    }
  </style>
</head>
<body>
  <div id="cards-container">
    <?php
    require_once "bdd/bdd.php";

    $requete = 'SELECT DISTINCT categories FROM articles'; // Requête pour récupérer les catégories distinctes
    $result = $bdd->query($requete); // Réalisation de la requête

    $rubriques = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rubriques[$row['rubrique']][] = $row;
        }
    } else {
        echo "Aucun article trouvé";
    }

    foreach ($rubriques as $rubrique => $articles) {
        echo "<div class='rubrique'>";
        echo "<h2>" . htmlspecialchars($rubrique) . "</h2>";

        foreach ($articles as $article) {
            echo "<div class='card'>";
            echo "<h3>" . htmlspecialchars($article['nom']) . "</h3>";
            echo "<p>" . htmlspecialchars($article['description']) . "</p>";
            echo "</div>";
        }

        echo "</div>";
    }

    $conn->close();
    ?>
  </div>
</body>
</html>
