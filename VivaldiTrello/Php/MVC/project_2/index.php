<?php 

require_once './controllers/MessageController.php';

$message = new MessageController();

$message->showMessage();