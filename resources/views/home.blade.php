<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
<h4>Hello 
    <?php echo($name); ?>
    <?php echo('hello')?>
    {{$name}}
        <?php if($name == 'Ibrahim'): ?>
            <h1>Hi Ibrahim</h1>
        <?php else: ?>
            <h1>Hi Guest</h1>
        <?php endif; ?>
        @if($name == 'Ibrahim')
            <h1>Hi Ibrahim</h1>
        @else
            <h1>Hi Guest</h1>
        @endif
</h4>
</body>
</html>