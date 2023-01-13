<!doctype html>
<html lang='en' class="h-full bg-gray-100">

<?php view('partials/head.php'); ?>

<body class="h-full">

    <div class="min-h-full">

        <?php view('partials/nav.php'); ?>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
            </div>
        </header>
        <main>

            <section class="mt-8">
                <div class="px-6 text-gray-800">
                    <div>
                        <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                            <form method='POST' action='/create-note'>
                                <!-- Title input -->
                                <div class="mb-6">
                                    <input name='title' value='<?= isset($_POST['title']) ? $_POST['title'] : '' ?>' type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Enter Title" />
                                    <?php if (isset($errors['title'])) : ?>
                                        <small class="text-red-800"><?= $errors['title']; ?></small>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-6">
                                    <textarea name='body' rows='5' placeholder='Description...' class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"><?= $_POST['body'] ?? '' ?></textarea>

                                    <?php if (isset($errors['body'])) : ?>
                                        <small class="text-red-800"><?= $errors['body']; ?></small>
                                    <?php endif; ?>
                                </div>

                                <input name='userId' value='1' type="hidden" />


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