<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>Most Popular Book</title>
    </head>
    <body>
        <div>
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
                                    <!-- <a href="UserManagement\UserManagement.php">UserManagement</a>
                                    <a href="">BookManagement</a>
                                    <a href="">ViewProfile</a>
                                    <a href="">Trending</a> -->
                                    <a href="../Trending.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        </div>
        <div>
            <fieldset align="center">
                <legend><h3>Popular Books</h3></legend>
                    <table border="1" width="1440" cellspacing="0">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Genre</th>
                            </tr>
                            <tr>
                                <td>The Great Gatsby</td>
                                <td>F. Scott Fitzgerald</td>
                                <td>Literary Fiction</td>
                            </tr>
                            <tr>
                                <td>To Kill a Mockingbird</td>
                                <td>Harper Lee</td>
                                <td>Historical Fiction</td>
                            </tr>
                            <tr>
                                <td>1984</td>
                                <td>George Orwell</td>
                                <td>Dystopian Fiction</td>
                            </tr>
                            <tr>
                                <td>The Catcher in the Rye</td>
                                <td>J.D. Salinger</td>
                                <td>Literary Fiction</td>
                            </tr>
                            <tr>
                                <td>Pride and Prejudice</td>
                                <td>Jane Austen</td>
                                <td>Romance</td>
                            </tr>
                            <tr>
                                <td>Animal Farm</td>
                                <td>George Orwell</td>
                                <td>Satire</td>
                            </tr>
                            <tr>
                                <td>The Hobbit</td>
                                <td>J.R.R. Tolkien</td>
                                <td>Fantasy</td>
                            </tr>
                            <tr>
                                <td>One Hundred Years of Solitude</td>
                                <td>Gabriel Garcia Marquez</td>
                                <td>Magic Realism</td>
                            </tr>
                            <tr>
                                <td>Brave New World</td>
                                <td>Aldous Huxley</td>
                                <td>Dystopian Fiction</td>
                            </tr>
                            <tr>
                                <td>The Picture of Dorian Gray</td>
                                <td>Oscar Wilde</td>
                                <td>Gothic Fiction</td>
                            </tr>
                            <tr>
                                <td>The Girl with the Dragon Tattoo</td>
                                <td>Stieg Larsson</td>
                                <td>Mystery</td>
                            </tr>
                            <tr>
                                <td>Dune</td>
                                <td>Frank Herbert</td>
                                <td>Science Fiction</td>
                            </tr>
                            <tr>
                                <td>The Lord of the Rings</td>
                                <td>J.R.R. Tolkien</td>
                                <td>Fantasy</td>
                            </tr>
                            <tr>
                                <td>The Help</td>
                                <td>Kathryn Stockett</td>
                                <td>Historical Fiction</td>
                            </tr>
                            <tr>
                                <td>The Silence of the Lambs</td>
                                <td>Thomas Harris</td>
                                <td>Thriller</td>
                            </tr>
                            <tr>
                                <td>Steve Jobs</td>
                                <td>Walter Isaacson</td>
                                <td>Biography</td>
                            </tr>
                        </table>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else if ($_COOKIE['Librarianflag']) {
?>
<fieldset align="center">
<legend><h3>Popular Books</h3></legend>
    <table border="1" width="1040" cellspacing="0">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
            </tr>
            <tr>
                <td>The Great Gatsby</td>
                <td>F. Scott Fitzgerald</td>
                <td>Literary Fiction</td>
            </tr>
            <tr>
                <td>To Kill a Mockingbird</td>
                <td>Harper Lee</td>
                <td>Historical Fiction</td>
            </tr>
            <tr>
                <td>1984</td>
                <td>George Orwell</td>
                <td>Dystopian Fiction</td>
            </tr>
            <tr>
                <td>The Catcher in the Rye</td>
                <td>J.D. Salinger</td>
                <td>Literary Fiction</td>
            </tr>
            <tr>
                <td>Pride and Prejudice</td>
                <td>Jane Austen</td>
                <td>Romance</td>
            </tr>
            <tr>
                <td>Animal Farm</td>
                <td>George Orwell</td>
                <td>Satire</td>
            </tr>
            <tr>
                <td>The Hobbit</td>
                <td>J.R.R. Tolkien</td>
                <td>Fantasy</td>
            </tr>
            <tr>
                <td>One Hundred Years of Solitude</td>
                <td>Gabriel Garcia Marquez</td>
                <td>Magic Realism</td>
            </tr>
            <tr>
                <td>Brave New World</td>
                <td>Aldous Huxley</td>
                <td>Dystopian Fiction</td>
            </tr>
            <tr>
                <td>The Picture of Dorian Gray</td>
                <td>Oscar Wilde</td>
                <td>Gothic Fiction</td>
            </tr>
            <tr>
                <td>The Girl with the Dragon Tattoo</td>
                <td>Stieg Larsson</td>
                <td>Mystery</td>
            </tr>
            <tr>
                <td>Dune</td>
                <td>Frank Herbert</td>
                <td>Science Fiction</td>
            </tr>
            <tr>
                <td>The Lord of the Rings</td>
                <td>J.R.R. Tolkien</td>
                <td>Fantasy</td>
            </tr>
            <tr>
                <td>The Help</td>
                <td>Kathryn Stockett</td>
                <td>Historical Fiction</td>
            </tr>
            <tr>
                <td>The Silence of the Lambs</td>
                <td>Thomas Harris</td>
                <td>Thriller</td>
            </tr>
            <tr>
                <td>Steve Jobs</td>
                <td>Walter Isaacson</td>
                <td>Biography</td>
            </tr>
        </table>
</fieldset>
</div>

<?php
    }elseif ($_COOKIE['Memberflag']) {
        ?>
        <fieldset align="center">
<legend><h3>Popular Books</h3></legend>
    <table border="1" width="1040" cellspacing="0">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
            </tr>
            <tr>
                <td>The Great Gatsby</td>
                <td>F. Scott Fitzgerald</td>
                <td>Literary Fiction</td>
            </tr>
            <tr>
                <td>To Kill a Mockingbird</td>
                <td>Harper Lee</td>
                <td>Historical Fiction</td>
            </tr>
            <tr>
                <td>1984</td>
                <td>George Orwell</td>
                <td>Dystopian Fiction</td>
            </tr>
            <tr>
                <td>The Catcher in the Rye</td>
                <td>J.D. Salinger</td>
                <td>Literary Fiction</td>
            </tr>
            <tr>
                <td>Pride and Prejudice</td>
                <td>Jane Austen</td>
                <td>Romance</td>
            </tr>
            <tr>
                <td>Animal Farm</td>
                <td>George Orwell</td>
                <td>Satire</td>
            </tr>
            <tr>
                <td>The Hobbit</td>
                <td>J.R.R. Tolkien</td>
                <td>Fantasy</td>
            </tr>
            <tr>
                <td>One Hundred Years of Solitude</td>
                <td>Gabriel Garcia Marquez</td>
                <td>Magic Realism</td>
            </tr>
            <tr>
                <td>Brave New World</td>
                <td>Aldous Huxley</td>
                <td>Dystopian Fiction</td>
            </tr>
            <tr>
                <td>The Picture of Dorian Gray</td>
                <td>Oscar Wilde</td>
                <td>Gothic Fiction</td>
            </tr>
            <tr>
                <td>The Girl with the Dragon Tattoo</td>
                <td>Stieg Larsson</td>
                <td>Mystery</td>
            </tr>
            <tr>
                <td>Dune</td>
                <td>Frank Herbert</td>
                <td>Science Fiction</td>
            </tr>
            <tr>
                <td>The Lord of the Rings</td>
                <td>J.R.R. Tolkien</td>
                <td>Fantasy</td>
            </tr>
            <tr>
                <td>The Help</td>
                <td>Kathryn Stockett</td>
                <td>Historical Fiction</td>
            </tr>
            <tr>
                <td>The Silence of the Lambs</td>
                <td>Thomas Harris</td>
                <td>Thriller</td>
            </tr>
            <tr>
                <td>Steve Jobs</td>
                <td>Walter Isaacson</td>
                <td>Biography</td>
            </tr>
        </table>
</fieldset>
        <?php
    }
    else{
        header('location: WelocmePage.php'); 
    }
?>
