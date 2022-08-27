<?php
include('db_config.php');

try {
    $dbh = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE,
        USER, PASSWORD,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

$firstName = mysqli_real_escape_string($connection, $_POST['name']);
$lastName = mysqli_real_escape_string($connection, $_POST['last_name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$education = isset($_POST['education']) ? mysqli_real_escape_string($connection, $_POST['education']) : '';
$college = isset($_POST['college_name']) ? mysqli_real_escape_string($connection, $_POST['college_name']) : '';
$cityID = isset($_POST['id_city']) ? mysqli_real_escape_string($connection, $_POST['id_city']) : '';


$errors = [];
if ($firstName == '') {
    $errors[] = 'First Name field is empty';
}

if ($lastName == '') {
    $errors[] = 'Last Name field is empty';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == '') {
    $errors[] = "The email address is considered invalid.";
}

if ($education == '') {
    $errors[] = 'Education field is empty';
}

if ($education == 'college' && $college == '') {
    $errors[] = 'College field is empty';
}

if (!$errors) {
    $sql = "INSERT INTO user_data (first_name, last_name, email, education, college, id_city) 
VALUES (:firstname ,:lastname,:email,:education, :college, :city_id)";

    $query = $dbh->prepare($sql);
    $query->bindParam(':firstname', $firstName, PDO::PARAM_STR);
    $query->bindParam(':lastname', $lastName, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':education', $education, PDO::PARAM_STR);
    $query->bindParam(':college', $college, PDO::PARAM_STR);
    $query->bindParam(':city_id', $cityID, PDO::PARAM_INT);

    if ($query->execute()) {
        echo "Sikeres";
        exit('success');
    }
}
