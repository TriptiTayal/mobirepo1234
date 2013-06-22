<?php
          
     $time1=microtime();

    $con=mysql_connect('localhost','root','');
    //select database
      mysql_select_db('upload_download',$con);
     //start session
       session_start();
       $name=$_SESSION['name'];
       $_SESSION['name']=$name;
       $tempno=$_SESSION['tempno'];
      ?>
  <html>
  <body style="background:#f4f4f4;">
  <div style="background:#e5e5e5; border-radius:10px;width:62%; top: 10%;box-shadow:0 1px 6px #999;left: 19%; position: absolute;">
     
     <table align=center>
       <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method=post>
        <input type="hidden" name="MAX_FILE_SIZE"  />
         <p style="left: 1em;position: relative; font-style: italic; font-weight: bolder; font-size: xx-large; color: black;">
            Upload / Download Application
         </p>
         <p style=" font-style: italic; font-weight: bolder; font-size: larger; color: black;top: -2em;left: 65%;position: relative;">WELCOME <?php echo $name; ?></p>
          <a href ="logout.php"><fieldset style="border-style: outset; background-color: #00CED1; width: 3em; height: 0.5em;font-size: medium;left: 90%;top: -5em;position: relative;">Logout</fieldset></a>
           <hr style="top:  -3em;position: relative;" />
          <tr>
          <th>Upload File</th>
          <td><input type="file" name="upload" required/></td>
           </tr>
          <tr height="10px"></tr>
          <tr>
          <th><input type=submit value="submit" name="submit"/></th>
          </tr>
          <tr>
           <th>Download File</th>
           <td><a href="home.php" style="text-decoration: none; color: black;"><fieldset style="border-style: outset; background-color: #00CED1; width: 4em; height: 1em;">Download</fieldset></a></td>
          </tr>
          <script  type="text/javascript">defaultControl(document.forms[0].routename);
         </script><br>
     </form>
     </table><br /><br />

    <?php
        if(isset($_POST['submit']))
        {
         //upload a file
          if($size=$_FILES["upload"]["size"]>1552290)
         { echo"The File you are trying to browse is exceeds than browse limit.";
         }
          $file=$_FILES["upload"]["name"];
           $size=$_FILES["upload"]["size"];
           $_SESSION['siz']=0;
            $_SESSION['siz']=$_SESSION['siz']+$_FILES["upload"]["size"];
            move_uploaded_file($_FILES["upload"]["tmp_name"],"upload/$file");
         
             // insert data into database
          $sql="insert into upload(temp,name,filename,size)values('$tempno','$name','$file','$size')";
           if(mysql_query($sql,$con))
            { echo "successfull submit ";
                $time2=microtime();
                echo "<br />";
                echo "Total Time:".$time=$time2-$time1." microseconds";
                 echo "<br>";
                echo "Total SIZE:".$_SESSION['siz']."bytes";
                echo "<br />";
            } 
           $ext = pathinfo($file, PATHINFO_EXTENSION);
          if($ext=="jpg"||$ext=="JPG"||$ext=="png"||$ext=="JPEG")
           {   
           echo "<fieldset style='border-style: outset; background-color: #00CED1; width: 150px;left: 1em; position: relative;'><img                    src='upload/".$file."' width='150px' height='150px'></fieldset>"; }
          else
          {echo "<fieldset style='border-style: outset; background-color: #00CED1; width: 150px;left: 1em; position: relative;'>
             $file</fieldset>"; 
            }
                echo"<a href='upload/".$file."' style='text-decoration: none;left: 1em; position: relative;'>View</a>";
              $id="name";
           echo " <a href=home.php?id='".$file."' style='text-decoration: none;left: 1em; position: relative;'></a><br /><br />";
         }
?>
</div>
</body>
</html>