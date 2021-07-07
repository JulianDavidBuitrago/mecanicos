<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Session Status -->
    <div class="px-16">
        <x-auth-session-success class="mb-4" :status="session('success')" />
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4 class="text-lg">Hola, <span class="font-bold">{{ Auth::user()->name.' '.Auth::user()->lastName }}</span></h4>

                    @role('Mecánico')
                    @include('views_roles.dash_mecanico')
                    @elserole('Cliente')
                    @include('views_roles\dash_client')
                    @endrole
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
