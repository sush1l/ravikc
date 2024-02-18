<x-app-layout>
    <x-slot name="header">
        {{ __('जिवनी थप्नुहोस') }}
    </x-slot>
    <hr>

    <div class="flex-auto p-6 bg-card  bg-white shadow-2xl">
        <div class="max-w-5xl">
            <div class="prose prose-sm px-10 max-w-3xl my-3">
                <h4 class="mb-8 text-2xl">जिवनी फारम</h4>
            </div>
            <form class="flex flex-col mt-4 px-8 pt-10 rounded overflow-hidden" method="POST" action="{{ route('admin.bio.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-8">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700"
                            for="photo">फोटो</label>
                        <input
                        class="block w-full text-gray-700 bg-white rounded py-3 px-4 border border-solid border-gray-300"      
                        id="photo" name="photo" type="file">
                            @error('photo')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-10">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="data">
                            विवरण नेपालीमा
                        </label>
                        <textarea name="data" id="1" cols="10" rows="30" class="ck_editor"></textarea>
                        @error('data')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded focus:outline-none focus:shadow-outline my-5" type="submit">
                    Submit
                  </button>
                </div>
            </form>
        </div>
        @push('styles')
        @endpush
        @push('scripts')
            <script src="{{ asset('js/ckEditor.js') }}"></script>
            <script src="{{ asset('js/init/editor.js') }}"></script>
        @endpush

</x-app-layout>
