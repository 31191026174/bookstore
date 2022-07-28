<?php 
   view("partitions.header");
   view('frontend.carts.list',['products'=>$products,'promo'=>$promo??null]);
   view("partitions.footer");
?>
