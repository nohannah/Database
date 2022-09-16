<?php
	if($_server['REQUEST_METHOD']=='post' && isset($_post['submit'])) {
		$conn=mysql_connect('localhost','root','','test')or die("connection Failed:" .mysql_connect_error());
		if (isset($_POST['name']) && isset($_POST['email'] && isset ($_POST['phone'] && isset ($_POST['bgroup'] != )))) 
		{
				$name =$_POST['name'];
				$email =$_POST['email'];
				$phone =$_POST['phone'];
				$name =$_POST['bggroup'];
				
				$sql = "INSERT INTO `	user`(`name`,`email`,`phone`,`bgcolor`)VALUES('$name','$email','$phone','bgroup')";
				
				$query=mysql_query($comm,$sql);
		}
		
				if ($query){
					echo 'Entery Successfull';
				}
				else {
					echo 'Error occurred' ;		
				}	
	}
?>
#This file is connect to blood-donate
