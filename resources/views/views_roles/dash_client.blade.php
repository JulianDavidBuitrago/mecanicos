<p>Para pedir un servicio, por favor llena toda la información correspondiente.</p>

<div>
    <p class="mt-8 mb-2">Inicialmente necesitamos saber tu ubicación, para que los mecánicos sepan donde estas.</p>
    <div class="inline-block">
        <button class="bg-green-600 px-3 py-1 text-white rounded-lg hover:bg-green-800" onclick="findMe()">Mostrar ubicación</button>
    </div>
    {!! Form::open(['route' => 'user.location']) !!}

    <input id="latitude" class="latitude" type="hidden" name="latitude" value="">
    <input id="longitude" type="hidden" name="longitude" value="">


    <div class="flex space-x-2 mt-5 mb-5">
        <div>
            {{ Form::button('Actualizar mi ubicación', ['type' => 'submit', 'class' => 'px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-800'] )  }}
        </div>
        {!! Form::close() !!}
    </div>

	<div id="map"></div>
    {!! Form::open(['route' => 'services.store']) !!}

    <div class="mt-4">
        <x-label for="application_date" :value="__('Fecha de petición')" />

        <x-input id="application_date" class="block mt-1 w-full"
                        type="date"
                        name="application_date"
                        required />
    </div>

    <div class="mt-4">
        <x-label for="scheduling_date" :value="__('Fecha de reserva')" />

        <x-input id="scheduling_date" class="block mt-1 w-full"
                        type="date"
                        name="scheduling_date"
                        required />
    </div>


    <div class="mt-4">
        <x-label for="pre_charge" :value="__('Precosto por el servicio')" />

        <x-input id="pre_charge" class="block mt-1 w-full"
                        type="number"
                        name="pre_charge"
                        required />
    </div>

    <div class="mt-4">
        <x-label for="mechanic_id" :value="__('Mecanico')" />

        {!! Form::select('mechanic_id', $mechanics, null, ['class' => 'block mt-1 w-full']) !!}
    </div>

    <div class="mt-4">
        <x-label for="type_service_id" :value="__('Tipo de servicio')" />

        {!! Form::select('type_service_id', $TypeServices, null, ['class' => 'block mt-1 w-full']) !!}
    </div>

    <div class="flex space-x-2 mt-5 mb-5">
        <div>
            {{ Form::button('Crear Servicio', ['type' => 'submit', 'class' => 'px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-800'] )  }}
        </div>
        {!! Form::close() !!}
    </div>
</div>

