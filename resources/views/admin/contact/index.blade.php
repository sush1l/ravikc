<x-app-layout>
    <x-slot name="header">
        {{ __('सन्देश') }}
    </x-slot>

    <div class="flex flex-col sm:flex-row items-start sm:items-center sm:justify-between p-6 sm:py-12 md:px-8 border-b bg-card dark:bg-transparent">
        <div>
            <div class="text-2xl font-extrabold tracking-tight leading-none">सन्देश तालिका</div>
        </div>
    </div>
    <div class="p-8 bg-white rounded-lg shadow-2xl w-full overflow-x-auto">
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
                                            नाम
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            सम्पर्क नं
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            ईमेल
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            सन्देश
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Action
                                        </th>
                                    </tr>
                                </thead class="border-b">
                                <tbody>
                                    @forelse ($contacts as $contact)
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $loop->iteration }} </td>
                                                <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                    {{ $contact->first_name }} {{ $contact->last_name }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                    {{ $contact->contact_no }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                    {{ $contact->email }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light  py-4 whitespace-nowrap">
                                                    {{ $contact->message }}
                                                </td>
                                            <td class="flex gap-x-2">
                                                <a href="{{ route('admin.contact.show',$contact) }}">
                                                    <button class="my-16 py-1 px-3 bg-teal-400 text-white"><i class="fas fa-eye"></i></button>
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