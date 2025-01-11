<?php
    // SIMPLE CLASS
class Person {
    public $name;
    public $age;

    public function introduce(){
        return "Hello my name is $this->name and I am $this->age years old";
    }
}
$person = new Person('John Doe', 25);
echo $person->introduce();

// ENCAPSULATION
class BankAccount {
    private $balance = 0;

    public function deposit($amount){
        $this->balance+= $amount;
    }
    public function withdraw($amount){
        if($this->balance < $amount){
            return "Insufficient balance";
        }
        $this->balance -= $amount;
    }
    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
$account->withdraw(50);
echo $account->getBalance();

class Animal {
    public $name;

    public function makeSound(){
        return 'Some sound';
    }
}

class Dog extends Animal {
    public function makeSound(){
        return 'Bark';
    }
}
class Cat extends Animal {
    public function makeSound(){
        return 'Meow';
    }
}

$dog = new Dog();
$cat = new Cat();

echo $dog->makeSound();
echo $cat->makeSound();

// INTERFACE

interface Shape {
    public function area();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function area(){
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function area(){
        return $this->width * $this->height;
    }
}