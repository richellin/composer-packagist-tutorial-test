<?php
namespace Test;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Test
{
    public $log;

    public function __construct($path = './test.log')
    {
        $this->log = new Logger('Test');
        $this->log->pushHandler(new StreamHandler($path, Logger::INFO));
    }

    public function hello($name = 'input')
    {
        $this->log->addInfo('Test '.$name);
    }
}
