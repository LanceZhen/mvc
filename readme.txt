命名规范：
Θ 类文件都以.class.php为后缀，使用驼峰法命名，并且首字母大写，例如 Pay.class.php;<br>
Θ 类名和目录_文件名一致。例如:类名Zend_Autoloader的目录是Zend/Autoloader.class.php;<br>
Θ 函数的命名使用小写字母和下划线的方式。例如:get_client_ip;<br>
Θ 方法的命名使用驼峰法，首字母小写或者使用下划线”_”，例如listComment(),_getResource(),通常下划线开头的方法属于私有方法;<br>
Θ 属性的命名使用驼峰法，首字母小写或者使用下划线”_”，如$username,$_instance,通常下划线开头的属性属于私有属性;<br>
Θ 常量以大写字母和下划线”_”命名，如”HOME_URL”;</p>


PHP防SQL注入不要再用addslashes和mysql_real_escape_string了

2015-02-05 14:10:01本站整理浏览(964)
PHP防SQL注入不要再用addslashes和mysql_real_escape_string了，有需要的朋友可以参考下。


博主热衷各种互联网技术,常啰嗦,时常伴有强迫症，常更新，觉得文章对你有帮助的可以关注我。 转载请注明"深蓝的镰刀"

看了很多PHP网站在防SQL注入上还在使用addslashes和str_replace，百度一下"PHP防注入"也同样在使用他们，实践发现就连mysql_real_escape_string也有黑客可以绕过的办法，如果你的系统仍在用上面三个方法，那么我的这篇博文就有了意义，以提醒所有后来者绕过这个坑。



出于为后人栽树而不是挖坑的考虑，给出PHP以及MYSQL的版本信息，以免将来“问题”不再是“问题”了。

用str_replace以及各种php字符替换函数来防注入已经不用我说了，这种“黑名单”式的防御已经被证明是经不起时间考验的。

下面给出绕过addslasher和mysql_real_escape_string的方法(Trick)。



注意：虽然在MYSQL5.5.37-log下该Trick已经被修复了，但仍然没有确切地解决注入问题，介于很多公司的系统仍在使用Mysql5.0，我建议立马做出改进，这点也是我《也说说几种让程序员快速提高能力的方法 》中提到的一个十分重要的点。



注意：如果你不确定你的系统是否有SQL注入的风险，请将下面的下面的DEMO部署到你的服务器，如果运行结果相同，那么请参考最后的完美的解决方案。



MYSQL:


mysql> select version();
+---------------------+
| version()           |
+---------------------+
| 5.0.45-community-ny |
+---------------------+
1 row in set (0.00 sec)
mysql> create database test default charset GBK;
Query OK, 1 row affected (0.00 sec)
mysql> use test;
Database changed
mysql> CREATE TABLE users (
    username VARCHAR(32) CHARACTER SET GBK,
    password VARCHAR(32) CHARACTER SET GBK,
    PRIMARY KEY (username)
);
Query OK, 0 rows affected (0.02 sec)
mysql> insert into users SET username='ewrfg', password='wer44';
Query OK, 1 row affected (0.01 sec)
mysql> insert into users SET username='ewrfg2', password='wer443';
Query OK, 1 row affected (0.01 sec)
mysql> insert into users SET username='ewrfg4', password='wer4434';
Query OK, 1 row affected (0.01 sec)＝
PHP:


<?php
echo "PHP version: ".PHP_VERSION."\n";

mysql_connect('servername','username','password');
mysql_select_db("test");
mysql_query("SET NAMES GBK");

$_POST['username'] = chr(0xbf).chr(0x27).' OR username = username /*';
$_POST['password'] = 'guess';

$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
$sql = "SELECT * FROM  users WHERE  username = '$username' AND password = '$password'";
$result = mysql_query($sql) or trigger_error(mysql_error().$sql);

var_dump(mysql_num_rows($result));
var_dump(mysql_client_encoding());

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$sql = "SELECT * FROM  users WHERE  username = '$username' AND password = '$password'";
$result = mysql_query($sql) or trigger_error(mysql_error().$sql);

var_dump(mysql_num_rows($result));
var_dump(mysql_client_encoding());

mysql_set_charset("GBK");
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$sql = "SELECT * FROM  users WHERE  username = '$username' AND password = '$password'";
$result = mysql_query($sql) or trigger_error(mysql_error().$sql);

var_dump(mysql_num_rows($result));
var_dump(mysql_client_encoding());

结果：
PHP version: 5.2.5
int(3)
string(6) "latin1"
int(3)
string(6) "latin1"
int(0)
string(3) "gbk"
可以看出来不论是使用addslashes还是mysql_real_escape_string,我都可以利用编码的漏洞来实现输入任意密码就能登录服务器的注入攻击！！！！（攻击的原理我就不多说了，感兴趣的同学可以研究下字符编码中单字节和多字节的问题）
注意：第三个mysql_real_escape_string之所以能够防注入是因为mysql_escape_string本身并没办法判断当前的编码，必须同时指定服务端的编码和客户端的编码，加上就能防编码问题的注入了。虽然是可以一定程度上防止SQL注入，但还是建议以下的完美解决方案。


完美解决方案就是使用拥有Prepared Statement机制的PDO和MYSQLi来代替mysql_query(注：mysql_query自 PHP 5.5.0 起已废弃，并在将来会被移除)：

PDO：


$pdo = new PDO('mysql:dbname=dbtest;host=127.0.0.1;charset=utf8', 'user', 'pass');

$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('SELECT * FROM employees WHERE name = :name');
$stmt->execute(array('name' => $name));

foreach ($stmt as $row) {
    // do something with $row
}

MYSQLi：

$stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
$stmt->bind_param('s', $name);

$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    // do something with $row
}
