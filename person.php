<?php

class Person {
    public $name;

    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
       return $this->age;
    }

    public function __toString()
    {
        return $this->name;       
    }

    
    public function setAge($age)
    {
        if ($age < 18)
        {
            exit ("bocah");
        }
        $this->age = $age;
    }

}

$john = new Person($argv[1]);
$john->setAge($argv[2]);
// $john->age = 38;
// $john->getAge(17);
echo "Your Name " . $john. "and your age " . $john->getAge();