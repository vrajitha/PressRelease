<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Press Release Login</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
    <body>
        <h1>Press Release Login</h1>
        <div id="main">
            </br>
            <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
            <form action="index.php" method="post" id="login">
               <input type="hidden" name="action" value="login"/> 

                <td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="username"></td>
</tr>
<tr>
    <td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="action" value="Login"></td>
</tr>
</table>
</td>

                
            </form>
            </tr>
</table>
            <p><?php echo $login_message; ?></p>

        </div>
        <p style="clear:both;padding:30px;"><a href="../index.php">Back to home page</a></p>
    </body>
</html>
