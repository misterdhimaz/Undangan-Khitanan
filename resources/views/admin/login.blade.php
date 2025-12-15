<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Admin</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-96">
        <h2 class="text-2xl font-bold text-center text-emerald-800 mb-6">Admin Area</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-4 text-sm text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.auth') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-bold text-gray-700">Username</label>
                <input type="text" name="username" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-emerald-500 outline-none" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-emerald-500 outline-none" required>
            </div>
            <button class="w-full py-3 bg-emerald-600 text-white rounded-lg font-bold hover:bg-emerald-700 transition">Masuk</button>
        </form>
    </div>
</body>
</html>
