<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main layout project</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <div>
            <span>navbar</span>
        </div>
        <div>
            {{ $slot }}
        </div>
        <div>
            <span>footer</span>
        </div>
    </div>
</body>

</html>