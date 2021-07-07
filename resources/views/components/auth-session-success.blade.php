@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'bg-green-200 font-medium text-lg text-green-600 max-w-7xl h-12 mx-auto mt-6']) }}>
        <h4 class="p-3">{{ $status }}</h4>
    </div>
@endif
