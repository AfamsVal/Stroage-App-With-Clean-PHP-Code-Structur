<!doctype html>
<html lang='en' class="h-full bg-gray-100">

<?php require('partials/head.php'); ?>

<body class="h-full">

    <div class="min-h-full">

        <?php require('partials/nav.php'); ?>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <h2 style='font-weight:bold;margin-bottom:15px;color:brown;'> User Login</h2>
            </div>
            <section>
                <div class="px-6 text-gray-800">
                    <div>
                        <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                            <form>
                                <!-- Email input -->
                                <div class="mb-6">
                                    <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Email address" />
                                </div>

                                <!-- Password input -->
                                <div class="mb-6">
                                    <input type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Password" />
                                </div>

                                <div class="flex justify-between items-center mb-6">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck2" />
                                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember me</label>
                                    </div>
                                    <a href="#!" class="text-gray-800">Forgot password?</a>
                                </div>

                                <div class="text-center lg:text-left">
                                    <button type="button" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                        Login
                                    </button>
                                    <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                        Don't have an account?
                                        <a href="#!" class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Register</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>

</html>