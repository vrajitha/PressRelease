
<html>
    <head>
        <meta charset="UTF-8">
        <title>Handouts</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
    <body>
        <h1>List of Handouts</h1>
        
        <div id="main">
            <form action="index.php" method="post" id="pressRelease_page">
                
 </select></br></br></br>
            <table>
                <tr>
                    <th>Headline</th>
                    <th>Summary</th>
                    <th>News Body</th>
                    <th>Company Name</th>
                   <th>Company Email</th>
                   <th>Author</th>
                   <th>Action</th>
                    
                </tr>
                <?php $press= get_pressRelease(); ?>
                                  <?php foreach ($press as $p) : ?>
                    <tr>
                        <td><?php echo $p['headline']; ?></td>
                        <td><?php echo $p['summary']; ?></td>
                         <td><?php echo $p['newsbody']; ?></td>
                        <td><?php echo $p['companyName']; ?></td>
                        <td><?php echo $p['companyEmail']; ?></td>
                        <td><?php echo $p['author']; ?></td>
                        <td><input type="submit" name="action" value="Edit"><input type="submit" name="action" value="Delete"></td>
                       
                        
                    </tr>
                <?php endforeach; ?>
                
            </table>
            </form>
            <p style="clear:both;padding:30px;"><a href="../Submit_PressRelease/index.php">Add Press Release</a></p>
            <p style="clear:both;padding:30px;"><a href="../index.php">Back to home page</a></p>
            
        </div>
        
    </body>
</html>

