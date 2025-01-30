<?php
class GreetingController {
  public function showGreeting() {
    $model = new GreetingModel();
    $message = $model->getGreeting();
    include '../views/greeting.php';
  }
}
