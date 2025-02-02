<?php 

class MessageController {

    public function showMessage() {
        $message = new MessageModel();

        $message->getMessage();
    }

}