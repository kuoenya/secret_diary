# secret_diary


Q : WHY注解掉 就不會有  Notice
<!-- <?php include_once "auth.php" ?>
	 <?php include_once	"updatediary.php" ?> -->
 ＜/br＞
1/ connection.php設定好 ＜/br＞
2/ create files !＜/br＞
![image](https://github.com/kuoenya/secret_diary/blob/master/secret_file_list.png) ＜/br＞

＜/br＞
3/ login, sign up,  textarea(留言),   something要debug… ＜/br＞
4/ JQUERY  :  使留言動態呈現＜/br＞
 keyup()
 
＜/br＞
5/ 登出
  if ($_GET['logout'] ==1 ) {
	session_destroy($_SESSION['id']);
}
＜/br＞
要消滅session  !!

