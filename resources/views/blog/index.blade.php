<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog App</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <x-navbar />
    <div class="container p-8 mt-5">

        @if (!empty($blog))
        <h1 class="text-3xl font-bold mb-8 capitalize">Blog Post</h1>
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col bg-white shadow-2xl p-5 flex-grow">
                        <div class="">
                            <h2 class="text-2xl font-bold capitalize">{{ $blog->title }}</h2>
                            <p class="text-gray-700 capitalize mt-2">{{ $blog->blog_text }}</p>
                        </div>

                    </div>
                </div>


        @endif
    </div>
</body>

</html>
