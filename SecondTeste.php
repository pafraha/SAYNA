<?php

Class SecondTeste
{
  // Calcul de la somme de deux nbres entiers
  function sommeDeuxNbres($A, $B)
  {
      return $A + $B;
  }

  // Calcul de la factorielle de N (N !).
  function factorielle($N)
  {
      if($N == 0 || N == 1){
          return 1;
      } else {
          return $N * factorielle($N-1);
      }
  }

  // Vérifier si un nombre entier A divise un nombre entier B.
  function aDivise($A, $B)
  {
      if($A % $B == 0){
          return 'A divise B, '. $A .'/' . $B . '=' . $A / $B ; // TRUE
      } else {
          return  'A ne divise pas B'; // FALSE
      }
  }

  // Calcul du quotient et du reste de la division entière de deux nombres entiers A et B.
  function division($A, $B)
  {
      while ($A >= $B){
          $q = $A / $B; // quotien
          $r = $A % $B; // reste

          return 'La quotien de la division entre '.$A.' et '.$B.' est '.$q.', et le reste est '.$r;
      }
  }
  }

  // Vérifier si un caractère donné est une voyelle (voyelles : 'a', 'e', 'i', 'o', 'u', 'y').
  function voyelle($V)
  {
      $voyelles = ['a', 'i', 'e', 'o', 'u', 'y'];

      if (in_array(strtolower($V), $voyelles, true)) {
          return 'Ce caractère '. $V .' est une voyelle';
      } else {
          return 'Ce caractère '. $V .' est une consonne.';
      }
  }

  // Permet de permuter (d'échanger) le contenu de deux variables réelles.
  function permute($var1, $var2)
  {
      // [$var1, $var2] = [$var2, $var1]; // Assignement par restructuration

      $temp = $var1;
      $var1 = $var2;
      $var2 = $temp;

      echo $var1; // => $var2
      echo $var2; // => $var1
  }
}
