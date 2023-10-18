<div>
    <div class="m-5">
        <div class="relative overflow-x-auto">
            <a href="{{ route('base.create') }}" type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"><i class="fa fa-plus"></i> Qo'shish</a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Desc
                    </th>
                    <th scope="col" class="px-6 py-3">
                        File
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @php $id = 1 @endphp
                @foreach($base as $b)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $id }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $b->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $b->desc }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ url('/storage/app/uploads/'.$b->image) }}" type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><i class="fa fa-download"></i> Download file</a>
                        </td>
                        <td class="px-6 py-4">
                            @if($b->status)
                                <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                    <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                                    Ochiq
                                </span>
                            @else
                                <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                    <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                                    Yopiq
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <button wire:click="baseDelete({{$b->id}})"><i class="text-red-500 text-xl fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @php $id++ @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
