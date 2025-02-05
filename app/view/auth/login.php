<?php require_once __DIR__ . '/../layout/header.php'; ?>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8 transition duration-300 ease-in-out hover:scale-105">  <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login</h2>
    <form>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" required placeholder="Your Email">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" required placeholder="Your Password">
      </div>
      <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-3 rounded-md transition duration-300 ease-in-out">Login</button>
      <div class="mt-4 text-center">
        <p class="text-gray-600">Don't have an account? <a href="register.php" class="text-indigo-500 hover:text-indigo-600">Register here</a></p>
      </div>
    </form>
  </div>
</div>
<?php require_once __DIR__ . '/../layout/footer.php'; ?>
