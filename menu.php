<?php

class Welcome {
    public $welcome;

    function set_welcome($welcome) {
        $this->welcome = $welcome;
        return $this->welcome;
    }
}
$welcomeObj = new Welcome();
$welcome = $welcomeObj->set_welcome("Bienvenue dans l'univers de Assassin's Creed");

/*class Navigation {
    private $index;
    private $games;
    private $lore;
    private $about;
    

    public function __construct($arg1, $zrg2, $arg3, $arg4) {
        $this->index = "index.php";
        $this->games = "Core/Pages/games.php";
        $this->lore = "Core/Pages/lore.php";
        $this->about = "Core/Pages/about.php";;
    }

    public function displayHeader() {
        echo "<li><a href={$this->index}> Home</a></li>\n";
        echo "<li><a href={$this->games}> Games</a></li>\n";
        echo "<li><a href={$this->lore}> Lore</a></li>";
        echo "<li><a href={$this->about}> About</a></li>";
    }
}


?>*/
class Menu{
    private $index;
    private $_index;
    private $games;
    private $_games;
    private $lore;
    private $_lore;
    private $about;
    private $_about;

    

    public function __construct(){
        $this->index= "index.php";
        $this->_index="../../index.php";
        $this->games="Core/Pages/games.php";
        $this->_games="games.php";
        $this->lore="Core/Pages/lore.php";
        $this->_lore="lore.php";
        $this->about="Core/Pages/about.php";
        $this->_about="about.php";
    }
    public function header(){
        echo "<li><a href=" . $this->index . "> Home</a></li>\n";
        echo "<li><a href=" . $this->games . "> Games</a></li>\n";
        echo "<li><a href=" . $this->lore . "> Lore</a></li>\n";
        echo "<li><a href=" . $this->about . "> About</a></li>";
    }
    public function _header(){
        echo "<li><a href=" . $this->_index . "> Home</a></li>\n";
        echo "<li><a href=" . $this->_games . "> Games</a></li>\n";
        echo "<li><a href=" . $this->_lore . "> Lore</a></li>\n";
        echo "<li><a href=" . $this->_about . "> About</a></li>";
    }
}