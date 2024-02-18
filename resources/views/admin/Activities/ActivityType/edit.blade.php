<x-app-layout>
    <x-slot name="header">
        {{ __('गतिविधि प्रकार') }}
    </x-slot>

    <div class="p-8 bg-white rounded-lg shadow-xs">
        <div class="head">
            <form action="{{ route('admin.activityType.update',$activityType) }}" method="POST" class="grid grid-cols-3 gap-x-5">
                @csrf
                @method('PUT')

                <div class="form-group m-1 col-span-1">
                    <label for="title_ne" class="form-label inline-block mb-2 text-gray-700">शिर्षक नेपालीमा</label>
                    <input type="text" name="title_ne" placeholder="शिर्षक नेपालीमा" id="title_ne"
                        value="{{ old('title_ne',$activityType->title_ne) }}"
                        class="block w-full px-3 py-1 text-gray-700 bg-white rounded border border-solid border-gray-300">
                    @error('title_ne')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group m-1 col-span-1">
                    <label for="title_en" class="form-label inline-block mb-2 text-gray-700">शिर्षक अंग्रेजीमा</label>
                    <input type="text" name="title_en" placeholder="शिर्षक अंग्रेजीमा" id="title_en"
                        value="{{ old('title_en',$activityType->title_en) }}"
                        class="block w-full px-3 py-1 text-gray-700 bg-white rounded border border-solid border-gray-300">
                    @error('title_en')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group m-1 col-span-1">
                    <p for="is_active" class="form-label inline-block mb-2 text-gray-700">स्थिति</p>
                    <div class="flex justify-start">
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio" name="is_active" id="active" value="1"
                                {{ old('is_active',$activityType->is_active) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label inline-block text-gray-800" for="active"> Active </label>
                            @error('is_active')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio" name="is_active" id="in_active" value="0"
                                {{ old('is_active',$activityType->is_active) == 0 ? 'checked' : '' }}>
                            <label class="form-check-label inline-block text-gray-800" for="in_active"> In-Active
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-span-3">
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 text-white font-medium leading-tight rounded shadow-md m-2">
                        Submit </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
