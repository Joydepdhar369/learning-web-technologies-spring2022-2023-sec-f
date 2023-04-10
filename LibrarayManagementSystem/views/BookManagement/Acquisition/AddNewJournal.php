<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Add New Journal
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
                                    <a href="../BookManagement.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <form action="../../../controls/AddJournal.php" method="post">
                <legend><h3>Add New Journal </h3></legend>
                Journal Name: <input type="text"Name="JName" Value=""><br><br>
                Author Name: <input type="text"Name="JAuthorName" Value=""><br><br>
                Genra: <input type="text"Name="JGenra" Value=""><br><br>
                Publicated Date:<input type="date"Name="JPublicationName" Value=""><br><br>
                DIO: <input type="text" Name="DIO" Value=""><br><br>
                <input type="submit"name="AddJournal" Value="Add Journal">
                </form>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>