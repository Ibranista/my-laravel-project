<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav class="bg-gray-100 font-bold flex justify-between p-5">
        <span>Branc</span>
        <span>Hello, @yield('name')</span>
    </nav>
    <section 
    class="bg-gray-100 h-1/2 flex flex-col justify-center items-center font-bold"
    >
        @yield('content-from-base')
    </section>
</body>
</html>