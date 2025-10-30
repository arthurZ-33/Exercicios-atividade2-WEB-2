<?php 

$lista_frutas = ["maçã", "banana", "perâ", "abacaxi", "morango"];
?>

<ul>
<?php foreach ($lista_frutas as $fruta): ?>
    <li> <?php echo $fruta; ?> </li>
<?php endforeach; ?>
</ul>
