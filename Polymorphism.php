<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>
</head>
<body>
    <?php
        abstract class Animal{
            abstract protected function makeSound();
        }

        class Cow extends Animal{
            public function makeSound(){
                echo "Cow: Mooooo <br>";
            }
        }

        class Eagle extends Animal{
            public function makeSound(){
                echo "Eagle: Bird Noises <br>";
            }
        }

        class Cat extends Animal{
            public function makeSound(){
                echo "Cat: Meow <br>";
            }
        }


        $cow = new Cow();
        $eagle = new Eagle();
        $cat = new Cat();

        $cow->makeSound();
        $eagle->makeSound();
        $cat->makeSound();
    ?>
</body>
</html>