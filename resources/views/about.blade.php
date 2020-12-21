<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>About us</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <ul>
            @forelse ($list as $item)
                <li>
                    - {{ $item }}
                </li>
            @empty
                <li>
                    <h2>
                        No items available
                    </h2>
                </li>
            @endforelse
        </ul>
    </body>
</html>
