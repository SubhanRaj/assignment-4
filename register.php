<?php

$showAlert = FALSE;
$showAlert = FALSE;

if (isset($_POST["register"])) {
    // Connecting to DB

    require './include/dbconnect.php';
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobileno = mysqli_real_escape_string($conn, $_POST["mobileno"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $cpassword = mysqli_real_escape_string($conn, $_POST["cpassword"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);

    // fetching all existing users from DB "assignment4"
    $existUser = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $existUser);
    $row = mysqli_num_rows($result);
    if (!$result) {
        die("Unable to fetch data:" . mysqli_error($conn));
    } else {
        if ($row > 0) {
            $showError = TRUE;
            echo '<script>alert("Username already exists")</script>';
        } else {
            if (($password == $cpassword) && ($password != "")) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $registerusersql = "INSERT INTO `users` (`userID`, `name`, `username`, `email`, `mobileno`, `password`, `address`) VALUES (NULL ,'$username', '$email', '$mobileno', '$hash', '$address')";
                $result = mysqli_query($conn, $registerusersql);
                if ($result) {
                    $showAlert = TRUE;
                    echo '<script>alert("Signup Successful")</script>';
                } else {
                    echo '<script>alert("Password not matched")</script>';
                }
                echo '<script>
                funtion redirect(){
                            window.location.href = "login.php"
                            wait(3000);
                        }
                        </script>';
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
require './include/head.php'
?>

<body>
    <!-- header -->
    <?php
    require './include/header.php'
    ?>
    <!-- Contact -->
    <form action="./register.php" method="post">
        <section class="text-gray-400 bg-gray-900 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Register</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">PHP Based Registration System</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                                <input type="text" name="name" id="name" placeholder="John Doe" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="username" class="leading-7 text-sm text-gray-400">Username</label>
                                <input type="text" name="username" id="username" placeholder="johndoe" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                                <input type="email" id="email" name="email" placeholder="someone@example.com" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="mobileno" class="leading-7 text-sm text-gray-400">Mobile Number</label>
                                <input type="tel" id="mobileno" name="mobileno" placeholder="+1-123456789" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                                <input type="password" id="password" name="password" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="cpassword" class="leading-7 text-sm text-gray-400">Confirm Password</label>
                                <input type="password" id="cpassword" name="cpassword" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="address" class="leading-7 text-sm text-gray-400">Address</label>
                                <textarea id="address" name="address" placeholder="721 Broadway, New York, NY 10003, USA" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 h-20 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-8 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="image" class="leading-7 text-sm text-gray-400">Upload Image</label>
                                <input type="file" id="image" name="image" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg" value="submit" name="register" id="register">Register</button>
                        </div>
                        <?php include './include/hero.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!-- Footer -->
    <?php
    include './include/footer.php';
    ?>

</body>

</html>