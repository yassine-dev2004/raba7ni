<?php
// 1. Connect to MySQL
$conn = new mysqli("localhost", "root", "", "user_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get submitted data
$email = $_POST['email'];
$password = $_POST['password'];

// 3. Check if user exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // 4. Check password
    if ($user['password'] === $password) {
        // Correct login → redirect to dashboard
        header("Location: dashboard.html");
        exit();
    } else {
        echo "<h3 style='color:red; text-align:center;'>Incorrect password!</h3>";
    }
} else {
    echo "<h3 style='color:red; text-align:center;'>No user found with that email!</h3>";
}

$conn->close();
?>
<?php
// 1. Connect to MySQL
$conn = new mysqli("localhost", "root", "", "user_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get submitted data
$email = $_POST['email'];
$password = $_POST['password'];

// 3. Check if user exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // 4. Check password
    if ($user['password'] === $password) {
        // Correct login → redirect to dashboard
        header("Location: dashboard.html");
        exit();
    } else {
        echo "<h3 style='color:red; text-align:center;'>Incorrect password!</h3>";
    }
} else {
    echo "<h3 style='color:red; text-align:center;'>No user found with that email!</h3>";
}

$conn->close();
?>
