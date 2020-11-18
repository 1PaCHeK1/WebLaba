<?php
class User {
    public $id;
    public $full_name;
    public $login;
    public $email;
    public $avatar;
    public $status;
    public function __construct($id, $full_name, $login, $email, $avatar, $status)
    {
        $this->$id = $id;
        $this->$full_name = $full_name;
        $this->$login = $login;
        $this->$email = $email;
        $this->$avatar = $avatar;
        $this->$status = $status;
    }
}
?>