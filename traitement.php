

 <!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Récupérer et nettoyer les données du formulaire
     $nom = htmlspecialchars(trim($_POST['nom']));
     $prenom = htmlspecialchars(trim($_POST['prenom']));
     $email = htmlspecialchars(trim($_POST['email']));
     $telephone = htmlspecialchars(trim($_POST['telephone']));
 
     // Validation simple (vous pouvez ajouter plus de validations)
     if (!empty($nom; $prenom $telephone) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "<h1>Merci pour votre soumission !</h1>";
         echo "<p>Nom : $nom</p>";
         echo "<p>prenom : $prenom</p>";
         echo "<p>Email : $email</p>";
         echo "<p>telephone : $telephone</p>";
 
     } else {
         echo "<h1>Erreur :</h1>";
         echo "<p>Veuillez entrer un nom valide et un email valide.</p>";
     }
 } else {
     echo "<h1>Accès non autorisé</h1>";
 } -->


     <?php
      echo "Bonjour, monde!" . "<br>";

      $nom = "Mirainda";
      $age = 21;
      echo " je suis  $nom mon age est $age ans" . "<br>";

      $age = 21;
      $anneeActuelle = 2025;
      $anneeNaissance = $anneeActuelle - $age;
       echo "$anneeNaissance" . "<br>";
   
      $i = -2;
        if($i < 0){
            echo "entrer un age valide" . "<br>";
        } else{
            if ($i < 18){
                echo "Vous etes mineur" . "<br>";
            }
            
            else {
                echo "Vous etes majeur" . "<br>";
            }
            
        }

            
           

      function Nombre(){
        for ( $i = 1; $i <= 10; $i++ ) {
            echo "$i" . "<br>";
        }
      } Nombre();

      function Somme ($sum1 , $sum2 ){
        $sum = $sum1 + $sum2;
        echo "la somme est: $sum" ."<br>";
      } Somme(1, 4) ."<br>";



     function Note() {
    $note = [5, 12, 1, 6, 20];
    $min = $note[0];
    $max = $note[0];
    $sum = 0;

    // Trouver le minimum
    foreach ($note as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    echo "Min: $min\n" . "<br>";

    // Trouver le maximum
    foreach ($note as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    echo "Max: $max\n" . "<br>";

    // Calculer la moyenne
    foreach ($note as $value) {
        $sum += $value;
    }
    $moy = $sum / count($note);
    echo "Moyenne: $moy\n" . "<br>";
}

Note();




     
     ?>

 
 