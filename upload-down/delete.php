<?php
$con=mysql_connect('localhost','root','');
//select database
mysql_select_db('upload_download',$con);
//session start
  session_start();
  $name=$_SESSION['name'];
 $target = $_GET['id'];

//delete values
$sql=mysql_query("delete from upload where (name='$name' and filename=$target)",$con);

// See if it exists before attempting deletion on it
if (file_exists($target)) 
 {
    unlink($target); // Delete now
} 
// See if it exists again to be sure it was removed
if (file_exists($target)) {
    echo "Problem deleting " . $target;
} else {
    echo "Successfully deleted " . $target;
}
?>