<!doctype html>
<html lang='en' class="h-full bg-gray-100">

<?php require('partials/head.php'); ?>

<body class="h-full">

    <div class="min-h-full">

        <?php require('partials/nav.php'); ?>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Create New Notes</h1>
            </div>
        </header>
        <main>

            <section class="mt-8">
                <div class="px-6 text-gray-800">
                    <div>
                        <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                            <form method='POST'>
                                <!-- Title input -->
                                <div class="mb-6">
                                    <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Enter Title" />
                                </div>

                                <div class="mb-6">
                                    <textarea rows='5' placeholder='Description...' class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"></textarea>
                                </div>


                                <div class="text-center lg:text-left">
                                    <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                        Save
                                    </button>

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