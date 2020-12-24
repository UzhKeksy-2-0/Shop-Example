<?php

require_once './bootsrap.php';
use RedBeanPHP\R;
R::setup('mysql:host=127.0.0.1;dbname=shop','root','root');
echo 'hi';

$book = R::dispense('book');
$book->title = 'Learn to Program';
$book['price'] = 12;
echo R::store($book);
list($book, $page) = R::dispenseAll( 'book');