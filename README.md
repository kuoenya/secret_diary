# secret_diary


Q : WHY注解掉 就不會有  Notice
<!-- <?php include_once "auth.php" ?>
	 <?php include_once	"updatediary.php" ?> -->
 

1/ connection.php設定好
2/ create files !



3/ login, sign up,  textarea(留言),   something要debug…
4/ JQUERY  :  使留言動態呈現
 keyup()



5/ 登出
  if ($_GET['logout'] ==1 ) {
	session_destroy($_SESSION['id']);
}
要消滅session  !!

