<?php

interface Logger {
    public function log($message);
}

class MessageApp {
    private $message;
    public function __construct($message) {
        $this->message = $message;
    }
    public function Logger() {
        return $this->message;
    }
}

$message = new MessageApp("Hello World");