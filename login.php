<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
require './include/head.php'
?>

<body>
    <?php
    require './include/header.php'
    ?>
    <!-- Login -->
    <form action="./login.html" method="post">
        <section class="text-gray-400 bg-gray-900 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Login</h1>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                                <input type="email" id="email" name="email" placeholder="someone@example.com" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                                <input type="password" id="password" name="password" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Login</button>
                        </div>
                        <?php include './include/hero.php' ?>
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