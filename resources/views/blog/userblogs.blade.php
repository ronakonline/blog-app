<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Blogs') }}
        </h2>
    </x-slot>
    @if (count($errors) > 0)
        <x-errors></x-errors>
    @endif
    <x-success></x-success>
    <div class="py-12">


        @if (count($blogs) > 0)

            <div class="flex flex-row flex-wrap">
                @foreach ($blogs as $blog)

                    <div class="flex flex-col bg-white shadow-2xl w-100 p-5 m-3">
                        <div class="flex-1">
                            <h2 class="text-2xl font-bold capitalize">{{ $blog->title }}</h2>
                            <p class="text-gray-700 capitalize mt-4">{{ $blog->blog_text }}</p>
                        </div>
                        <div class="flex-1 flex flex-row justify-between">
                            <a href="{{ route('blog', ['id' => $blog->id]) }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Read more</a>
                            <p class="text-sm text-gray-700 dark:text-gray-500 ">
                                {{ $blog->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="flex flex-row mt-3 justify-between">
                            <div class="bg-blue-600 p-2 rounded-lg px-6 cursor-pointer">
                                <a href="{{ route('blog.edit',['id'=>Crypt::encrypt($blog->id)]) }}" class="text-sm text-white dark:text-gray-500 font-bold ">Edit</a>
                            </div>
                            <div class="bg-red-600 p-2 rounded-lg px-6 cursor-pointer">
                                <a href="{{ route('blog.delete',['id'=>Crypt::encrypt($blog->id)]) }}" class="text-sm text-white dark:text-gray-500 font-bold ">Delete</a>
                            </div>

                        </div>
                    </div>

                @endforeach
            </div>

        @else
            <div class="flex flex-col items-center justify-center h-full">
                <h1 class="text-5xl font-bold text-gray-800">No Blogs</h1>
                <p class="text-gray-700">There are no blogs to show</p>
            </div>
        @endif

    </div>
</x-app-layout>
