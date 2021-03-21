<?php

// BOUCLE FOR
// 1.
for ($i = 0; $i < 10; $i++) {
    //var_dump($i);
}

// 2.
for ($i = 0; $i < 11; $i++) {
    //var_dump($i);
}

// 3.
for ($i = 1; $i < 11; $i++) {
    //var_dump($i);
}

// 4.
for ($i = 10; $i > -1; $i--) {
    //var_dump($i);
}

// 5.
for ($i = 25; $i < 51; $i += 5) {
    //var_dump($i);
}

// 6.
for ($i = 10; $i > -11; $i -= 3) {
    //var_dump($i);
}

// CONDITIONS
$name = 'Jenny';

if ($name === 'Darth Vader' || $name === 'Darth Sidious') {
    //var_dump('Sith');
} else if ($name === 'Yoda') {
    //var_dump('Jedi');
} else {
    //var_dump('sans doute une personne sans pouvoir');
}

// TABLEAUX INDEXES
$jedis = ['Obi-Wan Kenobi', 'Yoda', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];

//var_dump($jedis);

$jedis[] = 'Rey';

//var_dump($jedis);

//var_dump($jedis[1]);

foreach ($jedis as $jedi) {
    //var_dump($jedi);
}

// TABLEAU ASSOCIATIF
$associatifJedis = [
    'Yoda' => 900,
    'Leia' => 19,
    'Luke' => 19,
    'Darth Vader' => 46,
    'Chewbacca' => 200,
];

//var_dump($associatifJedis);

$associatifJedis['Han Solo'] = 29;

//var_dump($associatifJedis);

asort($associatifJedis);

//var_dump($associatifJedis);
?>
// Par age croissant
<ul>
    <?php
    foreach ($associatifJedis as $jedi => $age) {
    ?>
        <li><?php echo $jedi . ' Age : ' . $age; ?></li>
    <?php
    }
    ?>
</ul>
<?php

ksort($associatifJedis);
//var_dump($associatifJedis);
?>
// Par ordre alphabétique
<ul>
    <?php
    foreach ($associatifJedis as $jedi => $age) {
    ?>
        <li><?php echo $jedi . ' Age : ' . $age; ?></li>
    <?php
    }
    ?>
</ul>
// les plus de 100 ans
<ul>
    <?php
    foreach ($associatifJedis as $jedi => $age) {
    ?>
        <?php
        if ($age > 100) {
            echo '<li>' . $jedi . ' Age : ' . $age . '</li>';
        }
        ?>
    <?php
    }
    ?>
</ul>
<?php
// TABLEAUX MULTIDIMENSIONNELS

$multiJedis = [
    'Jedi' => ['Luke', 'Yoda', 'Windu'],
    'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
    'Gungan' => ['Jar Jar Binks'],
    'Human' => ['Han Solo', 'Leia']
];

//1.

foreach ($multiJedis as $categorie => $jedis) { 
?>
<h2><?php echo $categorie; ?></h2>
<ul>
    <?php foreach ($jedis as $jedi) { ?>
        <li><?php echo $jedi; ?></li>
    <?php } ?>
</ul>
<?php
}
// 2.
?>
<ul>
    <?php foreach ($multiJedis as $categorie => $jedis) { ?>
        <li><?php echo $categorie .' Nombre de personnages : ' .count($jedis); ?></li>
    <?php } ?>
</ul>
