<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            Trending
        </title>
    </head>
    <body>

        <div>
        <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                    <table width = "800">
                        <tr>
                            <td>
                                <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <!-- <a href="CreateLibrarianAccount.php">Create Librarian Account</a>
                                <a href="">View Librarian Account</a>
                                <a href="">View Member Account</a>
                                <a href="">Assign Role</a>
                                <a href="">Permission</a> -->
                                <a href="../Admin.php">Back</a>
                                <!-- <a href="/Joydep_Web_Technologies\logout.php">Log Out</a> -->

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Most popular Book</h2></legend>
                        <a href="mostPolularBook\mostpopularbook.php">Most Popular Item</a><br/> 
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Recently Added Book</h2></legend>
                        <a href="RecentlyAddedBook\RecentlyAddedBook.php">Recently Added Book</a>                        
                    </fieldset>
                </td>
            <tr height =40>
                <td align="center">
                <h4>Copyright ©JoyDep_Dhar_2023</h4>    
                </td>
            </tr>
        </table>
    </center>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>