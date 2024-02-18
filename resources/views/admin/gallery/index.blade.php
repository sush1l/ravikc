<x-app-layout>
    <x-slot name="header">
        {{ __('फोटो') }}
    </x-slot>

    <div class="flex flex-col sm:flex-row items-start sm:items-center sm:justify-between p-6 sm:py-12 md:px-8 border-b bg-card dark:bg-transparent">
        <div>
            <div class="text-2xl font-extrabold tracking-tight leading-none">फोटो तालिका</div>
        </div>
        <div class="mt-4 sm:mt-0">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
               <a href="{{ route('admin.gallery.create') }}"> <i class="fas fa-plus"></i> नयाँ फोटो थप्नुहोस </a>
              </button>
        </div>
    </div>
    <div class="p-8 bg-white rounded-lg shadow-xl overflow-x-auto">
        <div class="body">
            <div class="flex flex-col mt-5">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center">
                                <thead class="border-b bg-gray-800">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            क्र.स
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            फोटो
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            शिर्षक
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            अपलोड मिति
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Action
                                        </th>
                                    </tr>
                                </thead class="border-b">
                                <tbody>
                                    @forelse ($gallery as $gallery)
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $loop->iteration }} </td>
                                                <td class="text-sm text-gray-900 font-light py-4 whitespace-nowrap">
                                                    <a href="{{ route('admin.gallery.show',$gallery) }}">
                                                        <button class="my-16 py-1 px-3 bg-teal-400 text-white"><i class="fas fa-eye"></i></button>
                                                    </a>
                                                </td>
                                            <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                {{ $gallery->title_ne }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                {{ $gallery->upload_date_bs }}
                                            </td>
                                            <td class="flex gap-x-2">
                                               
                                                <a href="{{ route('admin.gallery.edit',$gallery) }}">
                                                    <button class="my-16 py-1 px-3 bg-teal-400 text-white"><i class="fas fa-edit"></i></button>
                                                </a>
                                                <form action="{{ route('admin.gallery.destroy',$gallery) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="my-16 py-1 px-3 bg-red-500 text-white show_confirm"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="bg-white border-b">
                                            <td
                                                class="px-6 py-4  text-sm font-medium text-center text-gray-900" colspan="5">
                                                No Data Available </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
