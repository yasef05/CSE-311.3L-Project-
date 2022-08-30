<?php
$username = $_POST['full-name']
$contact = $_POST['contact']
$email = $_POST['email']
$address = $_POST['address']

if (!empty($username)) || (!empty($contact)) || (!empty($email)) || (!empty($address))
{
    $host = "localhost"
    $dbUsername = "root"
    $dbPassword = ""
    $dbName = "project"

    $conn = msqli_connect($host, $dbUsername, $dbPassword, $dbPassword)

    if (mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else
    {
        $SELECT = "SELECT email From order Where email = ? Limit 1";
        $INSERT = "INSERT Into order (full-name, contact, email, address) values(?, ?, ?, ?)"
    }
}
else
{
    echo "All Fields are required"
    die();
}

?>