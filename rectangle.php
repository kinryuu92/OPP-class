<?php
class rectangle{
    public $height;
    public $with;
    public function __construct($height, $with){
        $this -> height = $height;
        $this -> with = $with;
    }
   public function getArea(){
        return $this -> height * $this->with;
    }
    public function getPerimeter(){
        return ($this->height + $this->with) * 2;
    }
    public function display(){
        return "Rectangle{" . " width = " .$this -> with. " , height = " . $this -> height. "}" ;
    }
}