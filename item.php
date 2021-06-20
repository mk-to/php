<?php
require_once('menu.php')

class item extends Menu {
    private rank;

    public function __construct($name, $price, $image, $rank) {
        parent::__construct($name, $price, $image);
        $this->rank = $rank;
    }

    public function getrank() {
        return $this->rank;
    }
}

?>

