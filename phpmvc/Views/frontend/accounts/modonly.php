<?php 
   view("partitions.header");
   view("frontend.accounts._detailmod",['listbook'=>$listbook,'chimuc'=>$chimuc??null,'categorymenu'=>$categorymenu,'msg'=>$msg??null,'info'=>$info]);
  
?>
