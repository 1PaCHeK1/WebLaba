<?php
class Film {
    public $id;
    public $name;
    public $director_id;
    public $data;

    public function __construct($id, $name, $director, $data)
    {
        $this->$id = $id;
        $this->$name = $name;
        $this->$director_id = $director;
        $this->$data = $data;
    }
}
?>