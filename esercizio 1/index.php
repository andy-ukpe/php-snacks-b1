<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano
delle partite di basket di un’ipotetica tappa del calendario. Ogni array
della partita avrà una squadra di casa e una squadra ospite, punti fatti
dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
 Olimpia Milano - Cantù | 55-60 -->

 <?php
  $matches = [
  [
    'squadraCasa' => 'brescia',
    'squadraOspite' => 'milano',
    'puntiCasa' => 15,
    'puntiOspiti' => 15
  ],
  [
    'squadraCasa' => 'roma',
    'squadraOspite'=> 'verona',
    'puntiCasa' => 35,
    'puntiOspiti' => 50
  ],
  [
    'squadraCasa' => 'bologna',
    'squadraOspite'=> 'genova',
    'puntiCasa' => 40,
    'puntiOspiti' => 60
  ],
];
  ?>

<ul>
    <?php for ($i=0; $i < count($matches) ; $i++) { ?>

    <?php $match = $matches[$i]; ?>

    <li> <?php echo $match['squadraCasa'] ?> - <?php echo $match['squadraOspite'] ?> | <?php echo $match['puntiCasa'] ?> - <?php echo $match['puntiOspiti'] ?> </li>

  <?php } ?>
</ul>
