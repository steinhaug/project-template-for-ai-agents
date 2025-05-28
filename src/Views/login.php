
<div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-6 text-center dark:text-white">Login</h2>
    <form action="/auth/login" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 mb-2">Email</label>
            <input type="email" name="email" required 
                   class="w-full px-3 py-2 border rounded dark:bg-gray-700 dark:border-gray-600">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 mb-2">Password</label>
            <input type="password" name="password" required 
                   class="w-full px-3 py-2 border rounded dark:bg-gray-700 dark:border-gray-600">
        </div>
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Login
        </button>
    </form>
    <div class="mt-4 text-center">
        <a href="/reset-password" class="text-blue-600 hover:text-blue-800 dark:text-blue-400">
            Forgot password?
        </a>
    </div>
</div>
