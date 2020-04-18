<?php

//A single committee object that is used to print out each committee page
class singleCommittee
{
    //Loads people and person
    function __autoload($class_name)
    {
        require_once $class_name . '.php';
    }

    //All the variables stored

    //Full committee name
    public $name = "";
    //Committee abbreviation
    public $short = "";
    //Committee description/bio
    public $desc = "";
    //Difficulty of committte (0=easy, 1=intermediate, 2=advanced)
    public $difficulty = 0;
    //Topic A
    public $a ="";
    //Description of Topic A
    public $aDesc ="";
    //Topic B
    public $b ="";
    //Description of Topic B
    public $bDesc ="";
    //Whether the committee has specialized ROP
    public $rop = false;
    //Whether the background guide is ready or not
    public $bg = false;
    //A people object that has the staffers
    public $staffers;
    //Any extra documents the committee needs posted
    public $extra=array("");
    //What type of UN body it is (p (principle), e (ecosoc), s (specialized))
    public $type ="";

    //Every variable is set in the constructor
    function singleCommittee($name,$short,$type,$desc,$difficulty,$a,$aDesc,$b,$bDesc,$rop,$extra,$bg,$staffers){
        $this->name = $name;
        $this->short = $short;
        $this->type = $type;
        $this->desc = $desc;
        $this->difficulty = $difficulty;
        $this->a = $a;
        $this->aDesc = $aDesc;
        $this->b = $b;
        $this->bDesc = $bDesc;
        $this->rop = $rop;
        $this->extra = $extra;
        $this->bg = $bg;
        $this->staffers = $staffers;
    }

    //Accessors
    function printName()
    {
        echo $this->name;
    }
    function printShort()
    {
        echo $this->short;
    }

    function getShort()
    {
        return $this->short;
    }

    function getType()
    {
        return $this->type;
    }

    function printDesc()
    {
        echo $this->desc;
    }

    function getDifficulty()
    {
        return $this->difficulty;
    }
    function getExtra()
    {
        return $this->extra;
    }
    function printTopicA()
    {
        echo $this->a;
    }
    function getTopicA()
    {
        return $this->a;
    }
    function printTopicADesc()
    {
        echo $this->aDesc;
    }
    function getTopicADesc()
    {
        return $this->aDesc;
    }
    function printTopicB()
    {
        echo $this->b;
    }
    function getTopicB()
    {
        return $this->b;
    }
    function printTopicBDesc()
    {
        echo $this->bDesc;
    }
    function getTopicBDesc()
    {
        return $this->bDesc;
    }
    function getROP()
    {
        return $this->rop;
    }
    function bgReady()
    {
        return $this->bg;
    }
    function getStaffers()
    {
        return $this->staffers;
    }
}