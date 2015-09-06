<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Error;
use Cake\Utility\Inflector;

class HelloController extends AppController {
  function index() {
    echo Configure::version();
    header("X-XSS-Protection: 0");
    $words = array('a' => 'apple');
    $param = $_GET["param"];
    $this->set('data', $words[$param]);
  }
}

