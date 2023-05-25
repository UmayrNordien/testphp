<?php 
//Object Oriented Programming

/*
  Able to write PHP in either a procedural or object oriented way. 
  OOP consists of classes 
  that can hold "properties" and "methods" (variables and functions)
  Objects can be created from classes
*/

class User {
    //properties are atrributes that belong to a class
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    //a constructor is a method that runs when the object is created - two underscores __
    //this function runs the amount of times you intstantiate objects
    // public function __construct() {
    //     echo 'constructor ran';
    // }
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
};

//instantiate a user object
// $user1 = new User();
// $user2 = new User();
$user1 = new User('Brad', 'brad@gmail.com', 'password');
$user2 = new User('Jane', 'jane@gmail.com', 'password');

echo $user1->email;
echo $user2->name;
echo '<br>';

//inheritance
class employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password, $title);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', 'password', 'Manager');

echo $employee1->get_title();
echo '<br>';

/////////////////////////

/*---USER 1---*/
$user1->set_name('Brad');
echo $user1->get_name();
echo ' '; //create space

// $user1->name="Brad";
// $user1->email="brad@gmail.com";
// $user1->password="password";

// echo $user1->name;
// echo '<br>';
// echo $user1->email;
// echo '<br>';
// echo $user1->password;

// var_dump($user1);

/////////////////////////

/*---USER 2---*/
$user2->set_name('Jane');
echo $user2->get_name();

// $user2->name="Jane";
// $user2->email="jane@gmail.com";
// $user2->password="password2";

// var_dump($user2);

