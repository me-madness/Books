<?php
$titleName='Books';
include 'includes/header.php';
?>

<a href="newBook.php">New Book</a>
<a href="newAuthor.php">New Author</a>

<table border="1">
    <td>Book</td>
    <td>Author</td>
</table>

<?php
$connection=mysqli_connect('localhost', 'me_madness', 'boris0912', 'books');
if(!$connection){
    echo "No database";
    exit;
}

$q= mysqli_query($connection, 'SELECT * FROM authors');
if (!$q) {
    echo "error in database";
    echo mysqli_error($connection);
}

while($row=$q->fetch_assoc()){
    echo '<pre>'.print_r($q->fetch_assoc(),true).'/pre>';
}

include 'includes/footer.php';
?>


