<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
            </div>
                @foreach ($posts as $post)
                    <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                        <h2>{{ $post->title }}</h2>
                        <p class="text-xs">{{ $post->content }}</p>
                        <p class="text-xs text-right">{{ $post->created_at }}</p>
                    </div>
                @endforeach
            </div>
       <div class="mb-10">
        {{ $posts->links() }}
       </div>
    </body>
</html>
