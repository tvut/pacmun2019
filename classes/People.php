<?php

//This class takes in a bunch of individual person classes and prints them out in a nice div table format

class People
{

//    Loads in the person class because it is required
    function __autoload($class_name)
    {
        require_once $class_name . '.php';
    }

//    Creates an array to hold the people in
    public $people = array();

//    Can be initalized with an array of persons
    function People($people){
        $this->people = $people;
    }

//    You can add people with their information and have people create a new person object
    function add($name, $position, $email, $img, $bio){
        $this->people[] = new Person($name,$position,$bio,$img,$email);
    }

//    Or you can directly add a person object
    function addPerson($per){
        $this->people[] = $per;
    }

//    Creates the container then prints out all the people. Also prints out the JS that makes it mobile compatible
    function printAll(){
        echo'<div class="c">';
        foreach ($this->people as &$mem) {
            $mem->printFull();
        }
        echo'</div>';
        echo'
        <script>
            $(document).ready(function () {
                if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
                    $(".box").click(function () {
                        $(this).toggleClass("box-clicked").removeClass(".box:hover");
                    });
                }
            })
        </script>';
    }
}