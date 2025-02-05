<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>MVC</title>
</head>

<body>
    <header class="bg-white py-4 border-b border-gray-200">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 flex justify-between items-center">
            <div>
                <a href="/" class="text-xl font-bold text-primary">MVC</a>
            </div>
            <nav class="flex space-x-4">
                <a href="/" class="text-gray-700 hover:text-primary">Home</a>
                <?php if (!isset($_SESSION["id"])): ?>
                    <a href="../auth/login.php" class="text-gray-700 hover:text-primary">Login</a>
                    <a href="../auth/register.php" class="text-gray-700 hover:text-primary">Register</a>
                <?php else: ?>
                    <a href="dashboard.php" class="text-gray-700 hover:text-primary">Dashboard</a>
                    <a href="logout.php" class="text-gray-700 hover:text-primary">Logout</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
