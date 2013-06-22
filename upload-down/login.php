<html>
<head>
<title>my page</title>
<style>
label {
        display : block;
        margin-top : 20px;
        letter-spacing : 2px;
      }        
  /*centre the page*/
     .body  {
           display:block;
           margin:0 auto;
           width:449px;
            }
      fieldset
      {
       width:449px;
       border:5px solid #dedede;
        margin:0 auto;  
       }
/* centre the form within the page*/
    form {
        margin: 0 auto;
        width:459px;
        }
/* style the text boxes*/

   
input, textarea 
      {
       width:439px;
       height:27px;
       background:#efefef;
       border:1px solid #dedede;
       font-size:15px;
       color:#3a3a3a;
       border-radius:5px;
       -moz-border-radius:5px;
       -webkit-border-radius:5px;
}
textarea {
              height:200px;
            }
     input:focus, textarea:focus
       {
        border:1px solid #97d6eb;
        }
 #submit {
         width:127px;
         height:38px;
         border:none;
         margin-top:20px;
         cursor:pointer;
          }
  #submit :hover  
          {
            opacity:0.9;
          }
</style>
</head>

<body>
 <header class="body">
</header>
<fieldset>
<section class="body">
<form action="login.php" method="POST">
 <label >Email</label>
<input type="email" name ="email" placeholder="Type Here">
<label>Password</label>
<input name="password" type="password" placeholder="Type Here">
<input id="submit" name="submit" type="submit" value="submit">
</form>
</section>
</fieldset>
<?php
if(isset($_POST['submit']))
{
$con=mysql_connect('localhost','root','');
//select database
mysql_select_db('upload_download',$con);
//select values
$sql=mysql_query("select * from registration where email='$_POST[email]' and password='$_POST[password]'",$con);
$res=mysql_num_rows($sql);
$result=mysql_fetch_array($sql);
if($res==1)
{    session_start();
    $_SESSION['name']=$result['name'];
     $_SESSION['tempno']=$result['temp'];
 header("location:uploader.php");
}
else
echo "Wrong username and password!!!!";
}
?>
</body>

</html>