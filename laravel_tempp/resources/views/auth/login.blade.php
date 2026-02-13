<!DOCTYPE html>
<html lang="mr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login | गो विज्ञान संशोधन संस्था</title>
    <link rel="icon" type="image/png" href="{{ asset('images/go-vidnyan-favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Tiro+Devanagari+Marathi:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .marathi-heading { font-family: 'Tiro Devanagari Marathi', serif; }
    </style>
</head>
<body class="antialiased bg-gradient-to-br from-green-50 via-white to-green-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <a href="{{ url('/') }}" class="inline-flex items-center space-x-3">
                <img src="{{ asset('images/go-vidnyan-logo.png') }}" alt="Go Vidnyan Logo" class="h-14">
                <div class="text-left">
                    <h1 class="text-xl font-bold marathi-heading text-green-700">गो विज्ञान संशोधन संस्था</h1>
                    <p class="text-sm text-gray-500">Admin Dashboard</p>
                </div>
            </a>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
            <div class="text-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Admin Login</h2>
                <p class="text-sm text-gray-500 mt-1">व्यवस्थापन पॅनेलमध्ये प्रवेश करा</p>
            </div>

            @if (session('status'))
                <div class="mb-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl text-sm">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                           placeholder="admin@govidnyan.org">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                    <input id="password" type="password" name="password" required
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                           placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember"
                               class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                        <span class="ml-2 text-sm text-gray-600">लक्षात ठेवा</span>
                    </label>
                </div>

                <button type="submit"
                        class="w-full bg-green-600 text-white py-2.5 px-4 rounded-xl font-medium hover:bg-green-700 transition-colors shadow-sm text-sm">
                    प्रवेश करा
                </button>
            </form>
        </div>

        <div class="text-center mt-6">
            <a href="{{ url('/') }}" class="text-sm text-gray-500 hover:text-green-600 transition-colors">
                ← वेबसाइटवर परत जा
            </a>
        </div>
    </div>
</body>
</html>
