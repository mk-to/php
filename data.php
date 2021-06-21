<?php
require_once('weapon.php')
require_once('item.php')

$sword = werpon('ironsword', 120, 'https://mk-to.github.io/php/menu.img/image/swd.jpg');
$shield = werpon('ironshild', 150, 'https://mk-to.github.io/php/menu.img/image/shd.jpg');
$armagh = werpon('ironarmagh', 500, 'https://mk-to.github.io/php/menu.img/image/amh.jpg');

$menu = array($ironsword, $woodshild, $ironarmagh, $herb);

?>