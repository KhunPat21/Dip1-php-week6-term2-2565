<?php
$role = 'subscribe';
$message = '';

if('admin'=== $role){
$message = 'welocme, Admin';
}elseif('author'=== $role){
$message ='welcome, Author';
}elseif('subscribe'=== $role){
$message = 'welcome, Subscribe';
}else{
$message = 'sorry';
}
print($message);
?>