<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog') }}
        </h2>
    </x-slot>
    @if (count($errors) > 0)
    <x-errors></x-errors>
    @endif
    <x-success></x-success>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-lg leading-5 text-gray-500 mb-4">
                        {{ __('Create Blog.') }}
                    </p>
                    <div class="lg:w-5/12 w-full">
                        <form method="POST" action="{{ url('blog/update').'/'.Crypt::encrypt($blog->id); }}">
                            @csrf
                            @method('PUT')
                            <label>{{ __('Blog Title') }}</label>
                            <input type="text" name="title"
                                class="form-input mt-1 mb-2 block w-full border-gray-300 rounded-lg"
                                placeholder="{{ __('Blog Title') }}"  value="{{ $blog->title }}">
                            <label class="">{{ __('Blog Text') }}</label>
                            <textarea placeholder="{{ __('Blog Text') }}" name="blog_text"
                                class="form-input mt-1 block w-full border-gray-300 rounded-lg">{{ $blog->blog_text }}</textarea>
                            <input type="submit" value="{{ __('Submit') }}"
                                class="p-2 rounded-lg px-4 text-md bg-blue-300 hover:bg-blue-700 hover:text-white mt-2 cursor-pointer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
