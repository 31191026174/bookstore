<?php 
   view("partitions.header");
   view("frontend.accounts._detailuser",["info"=>$info,'msg'=>$msg??null]);
   view("partitions.footer");
?>
