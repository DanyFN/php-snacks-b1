<!-- Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  if ( strlen($name) > 3 && preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $mail) && is_numeric($age)  )  {
    echo '<h1 style="color:green">ACCESSO RIUSCITO</h1>';
  }else{
    echo '<h1 style="color:red">ACCESSO NEGATO</h1>';
  }

  // per concatenare nella linea di comando ==> http://localhost/repo-PHP/php-snacks-b1/?name=daniele&mail=daniele.fn@libero.it&age=12//

?>


<?php

  // Snack 1:
  // Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  // Stampiamo a schermo tutte le partite con questo schema:
  // Olimpia Milano - Cantù | 55-60



    $arraymatches = [
    [
      'team1' => 'Bologna',
      'team2' => 'Milano',
      'punti1' => 23,
      'punti2' => 93
    ],
    [
      'team1' => 'Roma',
      'team2' => 'Napoli',
      'punti1' => 57,
      'punti2' => 50
    ],
    [
      'team1' => 'Torino',
      'team2' => 'Juventus',
      'punti1' => 23,
      'punti2' => 93
    ],
    [
      'team1' => 'Manchester',
      'team2' => 'Barcelona',
      'punti1' => 60,
      'punti2' => 45
    ],
    [
      'team1' => 'Genova',
      'team2' => 'Sampdoria',
      'punti1' => 55,
      'punti2' => 55
    ],
  ];
?>


  <ul>
      <?php for ($i=0; $i < count($arraymatches); $i++) { ?>
          <?php $this_partita = $arraymatches[$i]; ?>
          <li><?php echo $this_partita['team1'] ?> - <?php echo $this_partita['team2'] ?> | <?php echo $this_partita['punti1'] ?> - <?php echo $this_partita['punti2'] ?></li>
      <?php } ?>
  </ul>
