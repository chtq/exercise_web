<?php
//使用会话内存储的变量值之前必须先开启会话
session_start();
//使用一个会话变量检查登录状态
$PHP_SELF=$_SERVER['PHP_SELE'];
$_SESSION['userurl']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);
$uin=$url.'/logout.php';
if(isset($_SESSION['username'])){
    echo '<div align="right">';
   // echo 'You are Logged as '.$_SESSION['username'];
    //点击“Log Out”,则转到logOut页面进行注销
    echo '<a href="'.$url.'/logout.php"> Log Out('.$_SESSION['username'].')</a>';
    echo '</div>';
}
else
{
 $uout=$url.'/login.php';
 header('Location:'.$uout);
}
/**在已登录页面中，可以利用用户的session如$_SESSION['username']、
 * $_SESSION['user_id']对数据库进行查询，可以做好多好多事情*/
?>
<script>
var name='<?php echo $_SESSION['username']; ?>';

</script>
