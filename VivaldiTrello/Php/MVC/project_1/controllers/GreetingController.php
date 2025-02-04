<?php
require_once __DIR__ . "/../models/GreetingModel.php";

class GreetingController {
  public function showGreeting() {
    
    $model = new GreetingModel();

    $message = $model->getGreeting();

    include __DIR__ . '/../views/greeting.php';
  }
}
