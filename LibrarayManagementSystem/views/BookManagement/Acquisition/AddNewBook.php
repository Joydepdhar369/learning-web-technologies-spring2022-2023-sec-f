<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Add New Book
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
                                    <a href="..\BookManagement.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <!-- C:\xampp\htdocs\LibrarayManagementSystem\controls\Addbook.php -->
            <form method="POST" action="..\..\..\controls\Addbook.php">
            <fieldset>
                <legend><h3>Add New Book </h3></legend>
                Book Name: <input type="text"Name="BookName" Value=""><br><br>
                Author Name: <input type="text"Name="BookAuthorName" Value=""><br><br>
                Genra: <input type="text"Name="Genra" Value=""><br><br>
                Publicated Date:<input type="date"Name="BookPublicationName" Value=""><br><br>
                ISBN <input type="text" Name="ISBN" Value=""><br><br>
                <input type="submit"name="AddBook"Value="AddBook">
            </fieldset>
            </form>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>
