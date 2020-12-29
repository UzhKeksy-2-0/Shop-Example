<?php

require_once './bootsrap.php';

use app\configs\php\Database_Default;
use app\configs\php\Databases;


echo '<pre>';
// $file->file->mkdir('data2',777);

// use RedBeanPHP\Logger;
// use RedBeanPHP\R;
// class MigrationLogger implements Logger {

//     private $file;

//     public function __construct( $file ) {
//         $this->file = '../'.$file;
//     }

//     public function log() {
//         $query = func_get_arg(0);
//         if (preg_match( '/^(CREATE|ALTER)/', $query )) {
//             file_put_contents( $this->file, "{$query};\n",  FILE_APPEND );
//         }
//     }
// }
// echo 'hi';
// $r = new R;
// $ml = new MigrationLogger( sprintf( './migration_%s.sql', date('Y-m-d') ) );
// $r::setup('mysql:host=127.0.0.1;dbname=shop','root','root');
// $r::freeze(FALSE);
// $r::getDatabaseAdapter()
//     ->getDatabase()
//     ->setLogger($ml)
//     ->setEnableLogging(TRUE);
// $book = $r::dispense('book');
// $book->title = 'Learn to s';
// $book['price'] = 12;
// $book = $r::load( 'book', 1);
// $book->title = 'Learn to fly';
// $book->rating = 'good';
// $book->published = '2015-02-15';
// $sy = R::dispense('data');
// $sy->fr = 2;
// $book->ownPukList = [$sy];
// $book->dollar = 100;
// R::store( $book );