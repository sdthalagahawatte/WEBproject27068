<html>
<body>
<h1>My first PHP page</h1>
<?php 
$servername = "localhost";
$username = "senuda";
$password = "123";
$dbname = "university";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "CREATE TABLE students (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";
 $conn->exec($sql);

    echo "Table 'students' created successfully!";
}catch(PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}
?>
</body>
</html>
