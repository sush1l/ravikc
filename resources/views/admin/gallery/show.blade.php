<x-app-layout>
    <x-slot name="header">
        {{ __('फोटो गल्यरी') }}
    </x-slot>
    <hr>

    <div class="flex-auto p-6 bg-card  bg-white shadow-2xl">
        <div class="flex flex-row shadow-2xl">
            @foreach ($gallery->files as $file)
                <form class="px-3" action="{{ route('admin.file.deleteFile',$file) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class=" py-1 px-3 bg-red-500 text-white show_confirm"><i class="fas fa-trash"></i></button>
                </form>
                <div class="basis-1/4 md:basis-1/3 px-4">
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img src="{{ $file->file_url }}" class="card-image" alt="Image" height=100px; width="100%">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
