<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
</head>
<body>

    <!--form action="site.php" method="get">

        Name: <input type="text" name="username"> <br>
        Age: <input type="number" name="age"> <br>
        Num1: <input type="number" name="num1"> <br>
        Num2: <input type="number" name="num2"> <br>
        Color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">

    </form>
    <br-->

    <!--CHECKBOX FORM-->
    <!--form action="site.php" method="post">

        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
        <input type="submit">

    </form-->

    <!--ASSOCIATIVE FORM-->
    <!--form action="site.php" method="post">

        <input type="text" name="student">
        <input type="submit">

    </form-->

    <!--CALCULATOR FORM-->
    <!--form action="site.php" method="post">

        First Num: <input type="number" step="0.1" name="num1"> <br>
        OP: <input type="text" name="op"> <br>
        Second Num: <input type="number" step="0.1" name="num2"> <br>
        <input type="submit">

    </form-->

    <!--SWITCH FORM-->
    <!--form action="site.php" method="post">

        Enter your grade:
        <input type="text" name="grade">
        <input type="submit">

    </form-->

    <?php
        //WORKING WITH STRINGS
        $characterName = "John and Bob";
        //$userName = $_GET["username"];
        //$age = $_GET["age"];
        //$num1 = $_GET["num1"];
        //$num2 = $_GET["num2"];
        //$color = $_GET["color"];
        //$pluralNoun = $_GET["pluralNoun"];
        //$celebrity = $_GET["celebrity"];
        //echo strtolower($characterName);
        //echo strtoupper($characterName);
        //echo strlen($characterName);
        //echo str_replace("John", "Kate", $characterName);
        //(The character or substr to replace, replacement, location) 
        //echo substr($characterName, 0, 2);
        //(Location, starting index, ending index)

        //WORKING WITH NUMBERS
        //echo abs(-100)
        //(Returns only the number irrespective of negative or positive)
        //echo pow(2, 4)
        //echo sqrt(144)
        //echo max(2, 10)
        //echo min(1, 5)
        //echo round(3.2)
        //echo ceil(3.2)
        //echo floor(3.2)

        //GETTING INPUT FROM USER
        //echo "Your Name is: ";
        //echo "$userName <br>";
        //echo "Your age is: ";
        //echo "$age <br>";
        //echo "Answer: ";
        //echo $num1 + $num2;
        //echo "<br> Roses are $color <br>";
        //echo "$pluralNoun are blue <br>";
        //echo "I love $celebrity <br>";

        //ARRAYS
        //$friends = array("Kevin", "Karen", "Oscar", "Jim");
        //$friends[1] = 400;
        //echo $friends[1];
        //echo count($friends);

        //CHECKBOXES - CHECKBOX FORM
        //$fruits = $_POST["fruits"];
        //echo $fruits[1];

        //ASSOCIATIVE ARRAY - ASSOCIATIVE FORM
        //$grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        //$grades["Jim"] = "D";
        //echo $grades["Jim"];
        //echo count($grades);
        //echo $grades[$_POST["student"]];

        //CALCULATOR - CALCULATOR FORM
        /*$num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        } elseif($op == "-"){
            echo $num1 - $num2;
        } elseif($op == "*"){
            echo $num1 * $num2;
        } elseif($op == "/") {
            echo $num1 / $num2;
        } else {
            echo "Invalid Operator";
        }*/

        //SWITCH STATEMENTS - SWITCH FORM
        /*$grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amazing";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "YOU FAILED!";
                break;
            default:
                echo "Invalid Grade";
        }*/

        //DO - WHILE LOOPS
        /*$index = 6;
        do{
            echo "$index <br>";
            $index++;
        }while($index <= 5);*/

        //FOR LOOPS
        /*$luckyNumbers = array(4, 8, 14, 16, 23, 42);
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
        }*/

    ?>

    <!--INCLUDE HTML-->
    <?php include "header.html" ?>
    <p>Hello World!</p>
    <?php include "footer.html" ?>

    <!--INCLUDE PHP-->
    <?php
        /*$title = "My First Post";
        $author = "Monark";
        $wordCount = 400;
        include "article-header.php"*/
    ?>

    <?php
        /*include "useful-tools.php";
        sayHi("Monark");
        echo "<br> Your steps is: $feetInMile";*/
    ?>

    <!--CLASSES AND OBJECTS-->
    <?php
        /*class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "true";
                } else {
                    return "false";
                }
            }
        }

        $student1 = new Student("Jim", "CSE", 3.4);

        $student2 = new Student("Kate", "Arts", 3.8);

        echo $student2->hasHonors();*/

    ?>

    <!--GETTERS AND SETTERS-->
    <?php
        class Movie {
            public $title; //public and var are same and can modify the value of attribute anywhere in the program
            private $rating; //Inside this class only we can access & modify the value of the attribute

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "R" || $rating == "PG-13" || $rating == "PG" || $rating == "NR" || $rating == "G"){
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        $justice_league = new Movie("Justice League", "R");

        $justice_league->setRating("PG-13");
        echo $justice_league->getRating();
    ?>

</body>
</html>