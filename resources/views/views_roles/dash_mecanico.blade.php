<p>Cuentanos que tipo de servicios prestas actualmente.</p>

<div>
    <p class="mt-8 mb-2">Inicialmente necesitamos saber tu ubicación, para que los clientes sepan donde estas.</p>
    <div class="inline-block">
        <button class="bg-green-600 px-3 py-1 text-white rounded-lg hover:bg-green-800" onclick="findMe()">Mostrar ubicación</button>
    </div>
    {!! Form::open(['route' => 'user.location']) !!}

    <input type="hidden" name="latitude">
    <input type="hidden" name="longitude">

    <div class="flex space-x-2 mt-5 mb-5">
        <div>
            {{ Form::button('Actualizar mi ubicación', ['type' => 'submit', 'class' => 'px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-800'] )  }}
        </div>
        {!! Form::close() !!}
    </div>

	<div id="map"></div>
    {!! Form::open(['route' => 'typeServices.store']) !!}

    <div class="mt-4">
        <x-label for="name" :value="__('Tipo de servicio')" />

        <x-input id="name" class="block mt-1 w-full"
                        type="text"
                        name="name"
                        required />
    </div>

    <div class="mt-4">
        <x-label for="cost" :value="__('Costo del servicio')" />

        <x-input id="cost" class="block mt-1 w-full"
                        type="number"
                        name="cost"
                        required />
    </div>

    <div class="mt-4">
        <x-label for="description" :value="__('Descripción del servicio prestado')" />

        <x-input id="description" class="block mt-1 w-full"
                        type="text"
                        name="description"
                        required />
    </div>

    <div class="flex space-x-2 mt-5 mb-5">
        <div>
            {{ Form::button('Crear Servicio', ['type' => 'submit', 'class' => 'px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-800'] )  }}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div>
    <h4 class="font-bold mt-10 mb-8">Servicios que actualmente prestas</h4>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tipo de Servicio
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Costo del servicio
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Descripción
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Quien presta el servicio
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($typeServices as $typeService)
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $typeService->name }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $typeService->cost }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $typeService->description }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $typeService->user->name.' '.$typeService->user->lastName }}
                        </div>
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

<div>
    <h4 class="font-bold mt-10 mb-8">Citas pendientes</h4>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Fecha de petición
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Fecha de reserva
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Pre-cargo pagado
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Mecánico responsable
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Cliente
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tipo de servicio
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($services as $service)
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $service->application_date }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $service->scheduling_date }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $service->pre_charge }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $service->mechanic->name.' '.$service->mechanic->lastName }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $service->client->name.' '.$service->client->lastName }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{ $service->type_service->name }}
                        </div>
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
