<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Book Management Studio
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
                                <a href="..\Admin.php">Back</a>
                                <!-- <a href="logout.php">Log Out</a> -->

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>Book Management Studio</h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Cataloging</h2></legend>
                        
                        <a href="Cataloging\CatalogBook.php">Catalog Book</a><br/>
                        <a href="Cataloging\CatalogingJournal.php">Catalog Journal</a> <br>
                        <a href="Cataloging\CatalogOther.php">Catalog Other Item</a>  
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Acquisition</h2></legend>
                        <a href="Acquisition\AddNewBook.php">Add New Book</a><br>
                        <a href="Acquisition\AddNewJournal.php">Add New Journal</a>                        
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Circulation</h2></legend>
                        <a href="Circulation\CircularBook.php">Circulation Book</a><br>
                        <a href="Circulation\CircularOther.php">Circulation other Item</a>
                    </fieldset>
                </td>
            </tr>
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