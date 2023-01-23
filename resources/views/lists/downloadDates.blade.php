<div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">

                            <div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            
                           
                            
                                <table class="min-w-full leading-normal">
                                
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Mes
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Citas Atendidas
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex items-center">
                                                            <div class="ml-3">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    {{ $user->name }}
                                                                </p>
                                                                <div class="block text-xs text-indigo-600">{{ $user->email }}</div>

                                                            </div>
                                                        </div>
                                                    </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    @foreach ($user->services as $service)
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $service->name }}
                                                        </p>
                                                    @endforeach
                                                </td>                                
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>