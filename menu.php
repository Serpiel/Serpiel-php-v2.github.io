<?php
    class Title {
        public $title;

        function set_title($title) {
            $this->title = $title;
            return $this->title;
        }
    }

$pageTitle = new Title();
$title = $pageTitle->set_title("Assassin's Creed");

    class Welcome {
        public $welcome;

        function set_welcome($welcome) {
            $this->welcome = $welcome;
            return $this->welcome;
        }
    }
    $welcomeObj = new Welcome();
    $welcome = $welcomeObj->set_welcome("Bienvenue dans l'univers de Assassin's Creed");
?>