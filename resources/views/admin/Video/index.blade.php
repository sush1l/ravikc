<x-app-layout>
    <x-slot name="header">
        {{ __('टि.भी/भिडियो') }}
    </x-slot>

    <div class="flex flex-col sm:flex-row items-start sm:items-center sm:justify-between p-6 sm:py-12 md:px-8 border-b bg-card dark:bg-transparent">
        <div>
            <div class="text-2xl font-extrabold tracking-tight leading-none">टि.भी/भिडियो तालिका</div>
        </div>
        <div class="mt-4 sm:mt-0">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
               <a href="{{ route('admin.mass-communication.video.create') }}"> <i class="fas fa-plus"></i> नयाँ टि.भी/भिडियो थप्नुहोस</a>
              </button>
        </div>
    </div>
    <div class="p-8 bg-white rounded-lg shadow-2xl overflow-x-auto">
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
                                            भिडियो
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
                                    @forelse ($videos as $video)
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $loop->iteration }} </td>
                                            <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                <iframe src="{{$video->video }}" frameborder="0"></iframe>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                {{ $video->title_ne }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light py-4 whitespace-nowrap">
                                                {{ $video->upload_date_bs }}
                                            </td>
                                           
                                            <td class="flex gap-x-2">
                                                <form action="{{ route('admin.mass-communication.video.destroy',$video) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" py-1 px-3 bg-red-500 text-white show_confirm my-16"><i class="fas fa-trash"></i></button>
                                                </form>
                                                <a href="{{ route('admin.mass-communication.video.edit',$video) }}">
                                                    <button class=" py-1 px-3 bg-teal-400 text-white my-16"><i class="fas fa-edit"></i></button>
                                                </a>
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
