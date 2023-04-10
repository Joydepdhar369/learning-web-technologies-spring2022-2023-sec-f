<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
    //$id = $_REQUEST['id'];
?>
<html>
    <head>
        <title>
            Update Personal Information
        </title>
    </head>
    <body>
        <center>
            <table width=1080>
                <tr height=70>
                    <td >
                        <table width = "800">
                            <tr>
                                <td>
                                    <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                                </td>
                                <td>
                                    <h3>AIUB Library</h3>
                                </td>
                                <td align="right">
                                    <a href="ViewProfile.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <fieldset>
            <legend>View Information</legend>
            <a href="../ViewProfile/librarianInformation.php">View Information</a>
        </fieldset>
            
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>