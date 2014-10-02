<?php // echo $this->element('sql_dump'); ?>
<pre>

<?php
echo json_encode($books);
//var_dump($books);
foreach ($books as $book) {
    $bookArray      = $book['Book'];
    $publisherArray = $book['Publisher'];
    $commentsArray  = $book['Comment'];
//    var_dump($commentsArray);
}

?>



