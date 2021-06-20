<?php
require_once('weapon.php')
require_once('item.php')

$sword = werpon('ironsword', 120, 'http://mk-to.github.io/menu.img/image/swd.jpg')
$shield = werpon('ironshild', 150, 'http://mk-to.github.io/menu.img/image/shd.jpg')
$armagh = werpon('ironarmagh', 500, 'http://mk-to.github.io/menu.img/image/amh.jpg')
$herb = item('herb', 20,)

$menu = array($ironsword, $woodshild, $ironarmagh, $herb);

?>