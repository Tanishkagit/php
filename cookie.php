<?php
setcookie("aurito","value",time()+3600);
if(isset($_COOKIE["aurito"])){
    echo " cookie is set ";
}else{
    echo " cookie is not set";
}
?>
