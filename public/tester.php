<?php

require_once './bootsrap.php';
use RedBeanPHP\R;
echo 'hi';
$book = R::dispense('book');
$book->title = 'Learn to Program';
$book['price'] = 12;
echo R::store($book);
list($book, $page) = R::dispenseAll( 'book');