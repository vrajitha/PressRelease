<!DOCTYPE html>
<html> 
 <head> 
 <title>Add Press Release</title> 
 <link rel="stylesheet" type="text/css" href="style.css" /> 
 </head>
 
 <body bgcolor="#b09950">   
 
 <h1>New Press Release</h1>
 <!--<p>Enter your first name, last name, and email to be added to npu <strong>NPU</strong> contact list.</p> 
 -->
 <P>Fill the following Details</P>
<p><B><font color="red">*</font>indicates required fields</B></p>
<p><B>Headline<font color="red">*</font></B></p>&nbsp &nbsp
 <form method="post" action="addpressrelease"> 
 <label for="headline">Head Line</label>
 
 <input type="text" id="head" name="head"> 
 &nbsp &nbsp
 <p><B>Summary<font color="red">*</font></B></p></br>
 <label for="summary"></label>
 <div><textarea id="summary" name="summary" style="resize:vertical" rows="2" cols="40"></textarea></div></br>
 <p><B>News Body<font color="red">*</font></B></p></br>
 <label for="newsbody"></label>
 <div><textarea id="newsbody" name="newsbody" style="resize:vertical" rows="5" cols="40"></textarea></div></br>
 <p><B>Company Name<font color="red">*</font></B></p>     
 <label for="company"></label> 
 <input type="text" id="company" name="company" size="49"> 
     <p><B> Company Email <font color="red">*</font></B></p>
 <label for="email"></label> 
 <input type="text" id="email" name="email" size="49"> 
 
 <p><B>Release Date (MM-DD-YYYY)<font color="red">*</font></B></p>
 <label for="rdate"></label> 
 <input type="text" id="dob" name="rdate" size="30"> </br>
 </br> 
 
 <input type="submit" name="Submit" value="Submit" /> 
 </form> 
 </body> 
</html>