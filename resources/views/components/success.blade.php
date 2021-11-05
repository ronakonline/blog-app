
@if (Session::has('success'))
    <div class="mt-4 box-content bg-green-400 mx-16 rounded-lg p-4 pl-10">
        {{ Session::get('success') }}
    </div>
@endif
