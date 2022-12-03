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
                <div style='display:flex;margin-bottom:15px;'>
                    <h2 style='font-weight:bold;margin-right:100px;' class='font-2xl'> My Notes</h2>
                    <a href='/create-note' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Create Note</a>
                </div>
                <ol>
                    <?php foreach ($notes as $note) : ?>
                        <a href='/note?id=<?= $note['id'] ?>' class='text-blue-500 hover:underline'>
                            <li class='my-4'><?= $note['title'] ?></li>
                        </a>
                    <?php endforeach; ?>
                </ol>
            </div>
        </main>
    </div>

</body>

</html>