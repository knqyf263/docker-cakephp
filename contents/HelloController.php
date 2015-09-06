<?php
class HelloController extends AppController {
  function index() {
    header("X-XSS-Protection: 0");
    $words = array('a' => 'apple');
    $param = $_GET["param"];
    $this->set('data', $words[$param]);
  }
}
