<!DOCTYPE html>
<html>
<body>

<?php

//Puts the CSV into a variable as a string
$myfile = fopen($_POST["name"], "r") or die("Unable to open file!");
$fileInfo = fread($myfile, filesize($_POST["name"]));
fclose($myfile);

echo $fileInfo;


echo "<br>";

// creates an array of separated values
$str_arr = explode (",", $fileInfo);
print_r($str_arr);

echo "<br>";
echo "<br>";

//goes through array of separated values and assigns words as values
foreach ($str_arr as $value) {
    echo "$value <br>";

}

//SQL vm8vB4KO
class CreateTable {

    const DB_HOST = 'localhost';

    const DB_NAME = 'csvFile';

    const DB_USER = 'sql2.njit.edu';

    const DB_PASSWORD = 'vm8vB4K0';

    private $pdo = null;

    //Open the database connection
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}

?>


</body>
</html>