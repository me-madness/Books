<?php
$titleName='New Book';
include 'includes/header.php';

?>

<a href="index.php">Books</a>
<br>
<form method="GET">
    <div>Name of The Book: <input type="text" name="book"></div>
    <div><select multiple[]></select></div>
        <button type="submit">Add Book</button>
</form>

<?php
include 'includes/footer.php';
?>