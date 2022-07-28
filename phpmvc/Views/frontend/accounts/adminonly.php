<?php 
   view("partitions.header");
   view("frontend.accounts._detailadmin",['listbook'=>$listbook,'listuser'=>$listuser,'chimuc'=>$chimuc??null,'categorymenu'=>$categorymenu,'msg'=>$msg??null,'info'=>$info]);
  
?>
