<?php 
   view("partitions.header");
   view("frontend.accounts._detail",[ 'msg'=>$msg ?? [] ] );
   view("partitions.footer");
?>
