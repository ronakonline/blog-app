<div class="mt-4 box-content bg-red-400 mx-16 rounded-lg p-4 pl-10">

    @foreach ($errors->all() as $error)
    <ul class="list-disc">
        <li class="my-2 text-white">{{ $error }}</li>
    </ul>
    @endforeach

</div>
