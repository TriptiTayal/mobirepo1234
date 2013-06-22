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
<script>
function check()
{
 if(document.getElementById("name").value =="")
 {window.alert("First Name Field Cannot be Empty !");
  return false;
 }
 if(document.getElementById("name").value.length>30)
 {window.alert(" Size of First Name Field is more than 30 !!");
  return false;
 }

if(document.getElementById("email").value=="")
   { alert(" Email  Address cannot be empty!!");
     return false;
   }
if(document.getElementById("email").value.length>50)
{
 window.alert(" Size of Email address  Field is more than 50 !!");
  return false;
}
 
 if(document.getElementById("number").value=="" || isNaN(document.getElementById("number").value)||document.getElementById("number").value.length>10 ||document.getElementById("numbers").value.length<10 )
 {alert("Provide correct contact in Numbers !!");
    return false;
 }
 

 

}
</script>
</head>

<body>
 <header class="body">
</header>
<fieldset>
<section class="body">
<form action="registration.php" method="post" onSubmit="return check(this);">
 <label>Name</label>
<input type="Text" name ="name" id="name" placeholder="Type Here" required >
<label>Email</label>
<input type="email" name="email" id="email" placeholder="Type Here" required>
<label>Password</label>
<input name="password" type="password" id="password" placeholder="Type Here" required>
<label>Contact Number</label>
<input type="number" name="number" id="number" placeholder="Type Here" required maxsize="10">
<input id="submit" name="submit" type="submit" value="Submit" onclick="check(this.form)">
</form>
</section>
</fieldset>
</body>

</html>