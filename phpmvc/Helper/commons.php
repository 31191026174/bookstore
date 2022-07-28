<?php
const VIEW_FOLDER_NAME='Views';
const MODEL_FOLDER_NAME='Models';
function view($path, array $data=[]){
    
    foreach ($data as $key=>$value){
            $$key=$value;
    }

    require (VIEW_FOLDER_NAME.'/'.str_replace('.','/',$path).'.php');
}

function searchlinkstring($page=0,$iddm=0,$giatu=0,$orderby=""){
    $str="index.php?controller=search";
    if(isset($_GET['action'])){ $str=$str."&action=".$_GET['action']; }
    if(isset($_POST['keyword'])){$str=$str."&keyword=".$_POST['keyword'];}
    if(isset($_GET['keyword'])){ $str=$str."&keyword=".$_GET['keyword']; }
    

    if($iddm){ $str=$str."&iddm=".$iddm; }
    if($giatu){ $str=$str."&giatu=".$giatu; }
    if($orderby){$str=$str."&orderby=".$orderby;}
    if($page){$str=$str."&page=".$page;} 

    return $str;
   
    
    
}
?>