<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>About us</title>
    </head>
    <body>
        <ul>
            @foreach ($list as $item)
                <li>
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </body>
</html>
