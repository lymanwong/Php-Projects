<!DOCTYPE html>
<html lang="en">
<head>
    <!--
      normalize.css removes cross-browser differences in defaults, e.g.,
      differences in how form elements appear between Firefox and IE
      See: http://necolas.github.com/normalize.css/
    -->
    <link rel="stylesheet" href="/normalize.css">
    <!--
      application.css is where you put your styles
    -->
    <link rel="stylesheet" href="/application.css">

    <title>My simple PHP site</title>
  </head>
  <body>
    <p>
      <?php
      // start of PHP code
      // $myName = "Lyman"
      echo "My first line of PHP!";
      print "<p>Start a PHP localhost by using : 'php -S localhost:8000' in terminal</p>";
      // for loop
      echo "<p>I'm using a for loop...</p>";
      for($count = 0; $count < 5; $count = $count + 1){
        echo "<p>Counting $count</p>";
      }

      // while loop
      $counter = 0;
      while($counter < 5):
        echo "<p>I'm counting with a while...$counter</p>";
      $counter ++;
      endwhile;
      echo "<p>I'm done counting with a while.</p>";

      // while/do loop
      echo "<p>Do while loop example:</p>";
      echo "<p>I'm going to keep rolling a dice until I get a 6.</p>";
      do {
        $roll = rand(1,6);
        echo "<p>The roll is...$roll</p>";
      } while ($roll !=6);
      echo "<p>I'm done rolling since I got a 6.</p>";

      // strlen - string length
      print "<p>What is the length of the word 'awesome' ?</p>";
      $word = "Awesome";
      $wordLength = strlen($word);
      print $wordLength;

      // substr - substring
      print "<p>Substring of the first three is letters of $word is...</p>";
      $substring = substr($word, 0, 3);
      print $substring;

      // upper and lower case
      print "<p>Upper/Lower case</p>";
      $myDogName = "Freyja";
      print $uppercase = strtoupper($myDogName);
      // print $uppercase;
      print $lowercase = strtolower($myDogName);
      // strpos - string position
      print "<p>Are there Z's in $word?</p>";
      if (strpos($word, "z")===true){
        print "<p>There is a z in the word</p>";
      } else;
      print "<p>There are no z's in the word.</p>";

      // rounding numbers
      print "<p>Rounding PI to a single digit</p>";
      print round(M_PI);
      print "<p>Rounding PI to a 3 digits</p>";
      print round(M_PI, 3);

      // using rand - random
      print "<p>My random number is " . rand();
      print "<p>A random letter from $word is " . $word[rand(0, strlen($word))] . "</p>";

      //adding elements to an array
      $myArray = array();
      print "<p>My array has " . count($myArray) . " elements.</p>";
      array_push($myArray, "1", "apple", "3", "orange", "5");
      print "<p>I'm pushing contents into it now.  My array now contains..." . count($myArray) . " elements.</p>";

      //For loop - iterating through an array
      print "<p>My array contains...</p>";
      for($i = 0; $i < sizeof($myArray); $i++){
        print "<p>$myArray[$i]</p>";
      }

      //sorting an array
      print "<p>If I sort the array, I would get:</p>";
      sort($myArray);
      print join("<p>", $myArray);
      //reverse sorting
      print "<p>If I reverse sort the array, I would get:</p>";
      rsort($myArray);
      print join("<p>", $myArray);

      //creating a class and a method
      class Dog {
        public $numLegs = 4;
        public $name;
        public function __construct($name){
          $this->name = $name;
        }
        public function bark(){
          echo "<p>I just created a new dog object named " . $this->name . ". Say hello!</p>";
          echo "Woof!";
        }
      }

      $newDog = new Dog ("Sparky");
      //calling a method to an object
      $newDog->bark();

      //inheriance
      class Animal {
        public $hasLegs = true;
        public $name;
        public function __construct($name){
          $this->name = $name;
        }
      }

      class Cat extends Animal {
        public function meow(){
          echo "<p>I just created a new cat object named " . $this->name . ". I've inherited legs from the Animal Class. Say hello!</p>";
          echo "Meow!";
        }
      }

      if (property_exists(Cat, "hasLegs")){
        echo "I have legs!";
      }

      $cat = new Cat("James");
      $cat->meow();


      // overriding a parent class
      class Shape {
        public $sides = true;
      }

      class Triangle extends Shape {
        public $sides = 3;

      }

      $triangle = new Triangle();
      echo "<p>I am overriding my parent value of sides is true and created a Triangle object, inherited from the Shape class.  Now I have " . $triangle->sides . " sides.</p>";

      //using constants

      class Person {
        const awesomeness = "maximum";
      }

      class Me extends Person {

      }

      if (Me::awesomeness == "maximum"){
        echo Me::awesomeness;
      }

      // Static - you can call a method without creating an object

      class Child {
        public static function laugh(){
          echo "<p>I'm calling a object method without creating an object! hahahahaha</p>";
        }
      }
      Child::laugh();

      ?>

    </p>
  </body>
  </html>
