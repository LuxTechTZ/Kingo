<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Porojo') }}
            <a href="{{route('create_porojo')}}" class="inline-flex justify-center py-2 px-4
                                            border border-transparent shadow-sm text-sm font-medium rounded-md
                                            text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                                            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " >Add New</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Post Name
                                        </th>


                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Post Date
                                        </th>

                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($posts as $post)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="{{url('/')}}/{{$post->image_url}}" alt="">
                                                    </div>

                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$post->title}}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{$post->desc}}
post                              </div>
                                                    </div>
                                                </div>
                                            </td>


                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{date('d M Y', strtotime($post->post_date))}}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="/projects/show/{{$post->id}}" class="inline-block rounded-lg shadow-lg text-xs px-3 py-1 bg-green-500 text-white ">View</a>
                                                <a href="/projects/edit/{{$post->id}}" class="inline-block rounded-lg shadow-lg text-xs px-3 py-1 bg-indigo-500 text-white ">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    <!-- More items... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
