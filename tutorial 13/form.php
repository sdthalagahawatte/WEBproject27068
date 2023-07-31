<html>
<body>
<h1>My first PHP page</h1>
<?php
$servername = "localhost";
$username = "senuda";
$password = "1234";
$dbname = "university";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", "senuda", "1234");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO students (id, name, email, password) VALUES (:id, :name, :email, :password)";
    $stmt = $conn->prepare($sql);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    echo "Data inserted successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
</body>
</html>