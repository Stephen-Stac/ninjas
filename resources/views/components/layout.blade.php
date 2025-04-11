<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crwon</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <div id="flash-message" class="flex justify-center bg-green-100 text-green-700 p-4 rounded">
            {{ session('success') }}

        </div>
    @endif
    
    <header>
        <nav>
            <h1>Crown</h1> 
            <a href="{{ route('index') }}">All members</a>
            <a href="{{ route('create') }}">Create account</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>