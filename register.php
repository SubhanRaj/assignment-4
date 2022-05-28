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
    <form action="./register.html" method="post">
        <section class="text-gray-400 bg-gray-900 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Register</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">JavaScript Based Registration System</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="firstname" class="leading-7 text-sm text-gray-400">First Name</label>
                                <input type="text" name="firstname" id="firstname" placeholder="John" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="firstname" class="leading-7 text-sm text-gray-400">Last Name</label>
                                <input type="text" name="lastname" id="lastname" placeholder="Doe" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                                <input type="email" id="email" name="email" placeholder="someone@example.com" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="mobileno" class="leading-7 text-sm text-gray-400">Mobile Number</label>
                                <input type="tel" id="mobileno" name="mobileno" placeholder="+1-123456789" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                                <input type="password" id="password" name="password" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="cpassword" class="leading-7 text-sm text-gray-400">Confirm Password</label>
                                <input type="password" id="cpassword" name="cpassword" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <span class="leading-7 text-sm text-gray-400">Gender</span>
                            <div class="mt-2 flex flex-row justify-around">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="gender" id="gender" value="male">
                                    <span class="ml-2">Male</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="gender" id="gender" value="female">
                                    <span class="ml-2">Female</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="address" class="leading-7 text-sm text-gray-400">Address</label>
                                <textarea id="address" name="address" placeholder="721 Broadway, New York, NY 10003, USA" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 h-20 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-8 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="image" class="leading-7 text-sm text-gray-400">Upload Image</label>
                                <input type="file" id="image" name="image" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Register</button>
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