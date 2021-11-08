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
        <h1 class="text-3xl font-bold mb-8">Blog App</h1>
        @if (!empty($blogs))
            <div class="flex flex-row justify-between flex-wrap">
                @foreach ($blogs as $blog)

                    <div class=" bg-white shadow-2xl rounded-lg border w-full lg:w-4/12 md:w-6/12">
                        <img class="w-full h-64  bg-cover rounded-lg rounded-b-none "
                            src="https://source.unsplash.com/random" alt="thumbnail" loading="lazy" />
                        <div class="p-4 flex flex-col justify-between">
                            <div class="">
                                <h2 class="text-2xl font-bold capitalize">{{ __($blog->title) }}</h2>
                                <p class="text-gray-700 capitalize mt-4">{{ $blog->blog_text }}</p>
                            </div>
                            <div class="flex flex-row justify-between">
                                <a href="{{ route('blog', ['id' => $blog->slug]) }}"
                                    class="text-sm font-bold text-blue-700 dark:text-blue-500 underline">Read more</a>
                                <p class="text-sm text-gray-700 dark:text-gray-500">
                                    {{ $blog->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

        @endif
    </div>
</body>

</html>
