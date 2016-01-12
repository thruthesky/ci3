<h1>This is codeigniter.</h1>

<hr>

<?php


// Testing a test script.
use of\database\DatabaseTest;
use of\entity\EntityTest;

$test = new DatabaseTest();
$test->run();


$entity_test = new EntityTest();
$entity_test->run();


