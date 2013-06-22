  <html>
  <body style="background:#f4f4f4;">
  <div style="background:#e5e5e5; border-radius:10px;width:62%; top: 10%;box-shadow:0 1px 6px #999;left: 19%; position: absolute;">
  
<?php
$con=mysql_connect('localhost','root','');
//select database
mysql_select_db('upload_download',$con);
//session start
  session_start();
  $name=$_SESSION['name'];
  $tempno=$_SESSION['tempno'];
//select values
$sql=mysql_query("select * from upload where name='$name'and temp='$tempno'",$con);
$res=mysql_num_rows($sql);
if($res==1||$res>1) 
{   echo"<form action='home.php' method='POST'>";
  for($i=0;$i<$res;$i++)
  { $result=mysql_fetch_array($sql);
      $ext = pathinfo($result['filename'], PATHINFO_EXTENSION);
      if($ext=="JPG"||$ext=="jpg"||$ext=="png"||$ext=="JPEG")
      {
        echo "<fieldset style='border-style: outset; background-color: #00CED1; width: 150px;left: 1em; position: relative;'><img src='upload/".$result['filename'] ."'width='150px' height='150px'><br></fieldset>";
      }
       else
      { echo $result['filename'];
        }
    

  echo "<a style='text-decoration: none;'href=download.php?id=".$result['filename'].">Download</a><br>"; 
  echo "<a style='text-decoration: none;'href=delete.php?id='".$result['filename']."'>Delete</a>";  
  echo "<br>";
 }
 
       
      
}
else
{
echo "Sorry No file is found ";
}
?>    

</div>
</body>
</html>