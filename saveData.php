<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email = $_POST['email'] ?? '';

$emailRegex = ^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$;

$valid = true;
$errorMessage = '';

if (nome === "") {
    document.getElementById('nameError').style.display = 'block';
    valid = false;
} else {
    document.getElementById('nameError').style.display = 'none';
}

if (surname === "") {
    document.getElementById('surnameError').style.display = 'block';
    valid = false;
} else {
    document.getElementById('surnameError').style.display = 'none';
}

if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
    document.getElementById('emailError').style.display = 'block';
    valid = false;
} else {
    document.getElementById('emailError').style.display = 'none';
}

if($valid){
    $json_data = file_get_contents(filename: "users.json");
    $users = json_decode(json: $json_data, associative: true);

    function check_login($name,$surname,$email):bool{
        
    }
}
?>
