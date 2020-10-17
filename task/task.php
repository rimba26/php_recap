<?php

class Task{
    protected $description;
    protected $complete=false;

    public function __construct($description)
    {
        $this->description=$description;
    }
    
    public function isComplete()
    {
       return $this->complete;
    }
    
    public function complete()
    {
        $this->complete=true;
    }
    
    public function description()
    {
        return $this->description;
    }
}


$tasks=[
    new Task("Go to store"),
    new Task("Go to the market"),
    new Task("Finish Project")
];

$tasks[1]->complete();



