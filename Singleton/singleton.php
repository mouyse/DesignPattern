<?php
//
//Singleton
//
class Database{

	public static $instance;

	public static function getInstance(){
		if(!isset(Database::$instance)){
			Database::$instance=new Database();
		}
		return Database::$instance;
	}
	private function __construct(){

	}
}
print("<font color='green'>");
print("Creating first instance : \$db = new Database::getInstance(); <br />");
$db=Database::getInstance();
print("<br />Creating second instance : \$db2 = new Database::getInstance(); <br />");
$db2=Database::getInstance();
print("<br />Creating third instance : \$db3 = new Database::getInstance(); <br />");
$db3=Database::getInstance();

print("</font><font color='#8AAD00'");
print("<br /><br />var_dump(\$db); <br />");
var_dump($db);
print("var_dump(\$db2);<br />");
var_dump($db2);
print("var_dump(\$db3);<br />");
var_dump($db3);

print("</font><font color='red'>Note: </font><br /><font color='#033EAD'>All the instances are pointing to the single static instance of Database class</font>");