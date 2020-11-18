<?php
class Director {
    public $id;
    public $first_name;
    public $last_name;
    public $awards;
    public function __construct($id, $first_name, $last_name, $awards)
    {
        $this->$id = $id;
        $this->$first_name = $first_name;
        $this->$last_name = $last_name;
        $this->$awards = $awards;
    }
}
?>