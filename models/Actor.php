<?php
class Actor
{
    public $firstName;
    public $lastName;

    public function __construct($_firstName, $_lastName)
    {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
    }

    public function getFullName()
    {
        echo $this->firstName . $this->lastName;
    }
}
