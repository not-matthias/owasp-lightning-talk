<html>
    <head>
        <title>SQL Injection</title>
    </head>

    <body>
        <form method="POST">
            <div align="center" style="padding-top: 100px">
                <!-- Username -->
                <label for="username"><b>Username: </b></label>
                <input type="text" name="username" required autocomplete="off"><br><br>

                <!-- Password -->
                <label for="password"><b>Password: </b></label>
                <input type="text" name="password" required autocomplete="off"><br><br>

                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>



<?php
// Form validation
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'], $_POST['password'])) {
    require 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Select the userid
    $sql = 'SELECT * FROM users WHERE username = "' . $username . '" AND password = "' . $password . '"';
    // $sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $result = $conn->query($sql);

    echo '<div align="center" style="padding-top: 20px"><b>';
    echo "SQL Query: " . $sql . "<br><br>";

    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Userid: " . $row["userid"] . "<br>";
            echo "Username: " . $row["username"] . "<br>";
            echo "Password: " . $row["password"] . "<br>";
            echo "<br>";
        }

        echo 'Logged in!';
        echo '</b></div>';
    } else {
        echo 'Failed to login!';
        echo '</b></div>';
    }
}

// SELECT * FROM users WHERE username = 'Alex' AND password = 'admin'
// admin ' OR 'A' = 'A
// admin " OR "A" = "A