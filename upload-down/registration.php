<?php
$con=mysql_connect('localhost','root','');
//select database
mysql_select_db('upload_download',$con);
// select reciept no
$sq=mysql_query("select * from registration",$con);
$res=mysql_num_rows($sq);
if($res==0)
{
 $rec=201305;
}
else
{
for($i=1;$i<=$res;$i++)
{
 $row=mysql_fetch_array($sq);
 $reciept=$row['temp'];
}
 $rec=$reciept+1;
}
//insert values
$sql="insert into registration(temp,name,email,password,contact)values('$rec','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[number]')";
   if(mysql_query($sql,$con))
   {$sq=mysql_query("select * from registration where email='$_POST[email]' and password='$_POST[password]'",$con);
     $res=mysql_num_rows($sq);
     $result=mysql_fetch_array($sq);
     session_start();
    $_SESSION['name']=$result['name'];
     
   header("Location:uploader.php");
   }
   else
   {
   echo "Error into inserting data into database:".$con; 
   }
?>