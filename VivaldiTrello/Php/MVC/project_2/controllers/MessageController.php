<?php 
require_once __DIR__ . "/../models/MessageModel.php";


class MessageController {

    public function showMessage() {
        $message = new MessageModel();

       $testFinolly = $message->getMessage();

       include __DIR__ . "/../views/message_view.php";
    }

}