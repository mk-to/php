<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>php.練習</title>
   <link rel="stylsheet" type="text/css" href="stylsheet.css">
   </head>
   <body>
   <div class="order-wrapper">
   <h2>注文内容確認</h2>
   <?php $totalPayment =0 ?>

   <?php foreach ($menus as $menu): ?>
   <?php 
     $ordercount = $_POST[$menu->getName()];
     $menu->setordercount($orderCount);
     $totalPayment += $menu->getTotalPrice();
     ?>
     <P class="order-amount">
     <?php echo $menu->getName() ?>
      X
     <?php echo $orderCount ?>
     個
     </p>
     <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
     <?php endforeach ?>
     <h3>合計金額: <?php echo $totalPayment ?>円</h3>
     </div>
     </body>
     </html>
     