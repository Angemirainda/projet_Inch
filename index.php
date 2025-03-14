<?php
//    function Majorite($age){
//     if($age < 0){
//         echo "enter un age valide";
//     }
//     else{
//         if ($age >= 18){
//             echo "individu majeur";
//         }
//         else{
//             echo "individu mineur";
//         }
//     }
//    }
//    majorite(-3);

//    function afficherNombre(){

//     for($i = 0; $i <= 20; $i++){
//         echo $i;
//     }
// }
// afficherNombre();

function afficherNombre(){
    $tab= [];
    $tab= array();
    
   for($i = 0; $i <= 50; $i++){
    $tab[]= rand(1, 100);
   }
   sort($tab);
//    $taille = count ($tab);
   for($i = 0; $i <= 50; $i++){
    echo $tab[$i] . "<br>" ; 
   }
   echo"<br>";
   echo  $tab[1]   . "<br>";
   echo  $tab[5]   . "<br>";

}
afficherNombre();
?>