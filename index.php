<?php
require_once('data.php');
require_once('menu.php');

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>phpの練習</title>
 <link rel="stylesheet" type="text/css" href="stylesheet.css">
 </head>

 <body>
  div class="menu-wrapper container">
  <h1 class="logo">phpの練習</h1>
  <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
  <from method="post" action="confilm.php">
  <div class="menu-item">
  <?php foreach($menus as $menu): ?>
    <div class="menu-item">
    <img src="<?php echo $menu->getimage() ?>" class="menu-item-image">
    <h3 class="menu-item-name">
    <div class="menu-item">
    <img src~"<?php echo $menu->getiamge() ?>" class="menu-item-image">
    </h3>
    <?php if ($menu instanceof werpon): ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
        <?php else: ?>
            <?php for ($i=0; $i<$menu->getrank(); $i++): ?>

        <?php endif ?>
        <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>(税込) </p>
        <input type="text" value="0" name="<?php echo $menu->getName() ?>">
        <span>個</span>
        </div>
        <?php endforeach ?>
        </div>
        <input type="submit" value="注文する">
        </form>
        </div>
        </body>
        </html>
    
