<?php

//A single person such as a dias member or a secretariat member
class Person
{
//    All the information stored by this class
    public $name = "";
    public $position = "";
    public $bio = "";
    public $img = "";
    public $email = "";

//    constructor sets all variables
    function Person($name,$position,$bio,$img,$email){
        $this->name = $name;
        $this->position = $position;
        $this->bio = $bio;
        $this->img = $img;
        $this->email = $email;
    }

//    You can individually change any variable
    function setName($value) {
        $this->name = $value;
    }
    function setImg($value) {
        $this->img = $value;
    }
    function setPosition($value) {
        $this->position = $value;
    }
    function setBio($value) {
        $this->bio = $value;
    }
    function setEmail($value) {
        $this->email = $value;
    }

//    You can print any value
    function printName()
    {
        echo $this->name;
    }
    function printImg()
    {
        echo $this->img;
    }

    function printPosition()
    {
        echo $this->position;
    }

//    Creates a unique id for the person by combining their name and position
    function printID()
    {
        echo str_replace(' ', '', $this->position).substr($this->name, 0,2);;
    }

    function printBio()
    {
        echo $this->bio;
    }
    function printEmail()
    {
        echo $this->email;
    }

//    Prints a full person object with the div containers and everything
    function printFull()
    {
        echo'<div class="box" style="background-image: url(\'';
        if($this->img!="")echo $this->img;
        else echo("https://$_SERVER[HTTP_HOST]/media/favicons/placeholder.jpg");
        echo'\');">
            <div class="box-overlay">
            <div>
                <h6>'.$this->name.'</h6>';
        if($this->position!="")echo'<h5 class="w" style="margin-bottom:3px;margin-top: 3px;">'.$this->position.'</h5>';
        if($this->email!="")echo'<span><a href="mailto:'.$this->email.'@pacificmun.com">'.$this->email.'@pacificmun.com</a></span>';
                echo'</div><p>'.$this->bio.'</p>
            </div></div>';
    }
}