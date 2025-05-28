
<?php
require_once '../environment.php'; // Includes credentials and vendor autoloader


require_once ABSPATH . 'src/Config/config.php';
session_start();
require_once ABSPATH . 'src/Controllers/AuthController.php';

$page = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP App</title>
    <link href="./dist/css/tailwind.css" rel="stylesheet">
    <script src="./dist/js/main.js" defer></script>
</head>
<body class="bg-white dark:bg-gray-900 transition-colors duration-200">
    <nav class="bg-gray-100 dark:bg-gray-800 px-4 py-3 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/" class="text-xl font-bold">Logo</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="/" class="hover:text-blue-600 dark:hover:text-blue-400">Home</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="/users" class="hover:text-blue-600 dark:hover:text-blue-400">Users</a>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center">
                        <img src="<?php echo $_SESSION['user_avatar'] ?? 'public/img/default-avatar.png'; ?>" 
                             class="w-8 h-8 rounded-full">
                    </button>
                    <div x-show="open" class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded shadow-lg">
                        <a href="/profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                        <a href="/settings" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
                        <a href="/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Login</a>
            <?php endif; ?>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        <?php include ABSPATH . "src/Views/{$page}.php"; ?>
    </main>
</body>
</html>
