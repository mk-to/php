<?php 
require_once('menu.php');

class weapon extends Menu {
    private $rank;

    public function __construct($name, $price, $iamge, $rank) {
        parent::__construct($name, $price, $iamge);
        $this->rank = $rank;
    }

    public function getrank() {
        return $this->rank;
    }
}

?>