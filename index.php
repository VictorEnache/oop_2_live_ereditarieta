<?php

require_once __DIR__ . "/Models/Animale.php";

require_once __DIR__ . "/Models/Leone.php";

require_once __DIR__ . "/Models/Drago.php";




 $dreamer = new Leone('Leone', 'Maschio', 'Carne', 'pelo', 'savana', ['aguato', 'appostamento', 'zampata']);
 $dragan = new Drago('Drago', 'Maschio', 'Carne', 'Scaglie', 'Monti');

var_dump($dreamer);
var_dump($dreamer->getFamiglia());
var_dump($dreamer->parla());
var_dump($dragan->parla());
var_dump($dreamer->getTattiche());






