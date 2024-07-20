<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');


if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $address = $_POST['address']; 
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $money = $_POST['money'];

    
    $request = "INSERT INTO book_form (name, email, mobile_no, address, location, guests, arrival, departure, money) VALUES
    ('$name', '$email', '$mobile_no', '$address', '$location', '$guests', '$arrival', '$departure',$money)";

    mysqli_query($connection, $request);
    
 
    header('Location: book.php'); 
    }

    else {
    echo 'Something went wrong....please try again';
}
?>
