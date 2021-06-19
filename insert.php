<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['title']) && isset($_POST['category']) && isset($_POST['price']) && isset($_POST['price_type']) && isset($_POST['description']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['time']) && isset($_POST['address']) && isset($_POST['image']) && isset($_POST['date'])) {
        
        $title = $_POST['title'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $price_type = $_POST['price_type'];
        $description = $_POST['description'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $image_link = $_POST['image'];
        $date = $_POST['date'];


        $host = "jiblypuff.local";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "ads";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO posts(category, price, price_type, title, description, name, phone, email, address, time, image_link, date) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sissssssssss",$category, $price, $price_type, $title, $description, $name, $phone, $email, $address, $time, $image_link, $date);
            if ($stmt->execute()) {
                echo "New record inserted sucessfully.";
                header("Location: post-success.html");
            }
            else {
                echo $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        die();
    }
} else {
}
?>