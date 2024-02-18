<x-app-layout>
    <x-slot name="header">
        {{ __('गतिविधि थप्नुहोस') }}
    </x-slot>
    <hr>

    <div class="flex-auto p-6 bg-card  bg-white shadow-2xl">
        <div class="max-w-5xl">
            <div class="prose prose-sm px-10 max-w-3xl my-3">
                <h4 class="mb-8 text-2xl">गतिविधि फारम सम्पादन गर्नुहोस</h4>
            </div>
            <form class="flex flex-col mt-4 px-8 pt-10 rounded overflow-hidden" method="POST" action="{{ route('admin.activity.update', $activity) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="title_ne">
                            शिर्षक नेपालीमा
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="title_ne" name="title_ne" type="text" placeholder="शिर्षक नेपालीमा" value="{{ old('title_ne',$activity->title_ne) }}">
                        @error('title_ne')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="title_en">
                            शिर्षक अंग्रेजीमा
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="title_en" name="title_en" type="text" placeholder="शिर्षक अंग्रेजीमा" value="{{ old('title_en', $activity->title_en) }}">
                            @error('title_en')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-8">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 text-sm font-medium dark:text-gray-700"
                            for="photo">फोटो अपलोड गर्नुहोस</label>
                        <input
                            class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="photo" name="photo" type="file">
                            @error('photo')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-10">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="des_ne">
                            विवरण नेपालीमा
                        </label>
                        <textarea name="desc_ne" id="1" cols="30" rows="10" class="ck_editor">{{ old('desc_ne',$activity->desc_ne) }}</textarea>
                        @error('desc_ne')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-10">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="des_en">
                            विवरण अंग्रेजीमा
                        </label>
                        <textarea name="desc_en" id="2" cols="30" rows="10" class="ck_editor">{{ old('desc_en', $activity->desc_en) }}</textarea>
                        @error('desc_en')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="upload_date_en">
                            अपलोड मिति (ई.स)
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="upload_date_en" name="upload_date_ad" type="date" placeholder="अपलोड मिति (ई.स)" value="{{ old('upload_date_ad', $activity->upload_date_ad) }}">
                            @error('upload_date_ad')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2"
                            for="nepali-datepicker">
                            अपलोड मिति (वि.स)
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="nepali-datepicker" name="upload_date_bs" placeholder="अपलोड मिति (वि.स)" value="{{ old('upload_date_bs', $activity->upload_date_bs) }}">
                            @error('upload_date_bs')
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
