<?php

class test
{

    private $var = 0;

    public function __construct ()
    {
        throw new Exception("Failed");
    }

    public function run () : void
    {
        echo "running";
    }
}


try {
    $test = new test();
    $test->run();
} catch (Exception $e) {
    error_log($e->getMessage());    
}
