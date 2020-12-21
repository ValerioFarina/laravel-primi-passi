<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>About us</title>
    </head>
    <body>
        <ul>
            @forelse ($list as $item)
                <li>
                    {{ $item }}
                </li>
            @empty
                <h1>
                    No items available
                </h1>
            @endforelse
        </ul>
    </body>
</html>
