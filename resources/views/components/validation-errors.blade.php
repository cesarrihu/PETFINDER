@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger font-medium text-red-600 dark:text-red-400">{{ __('Cuidado! parece que algo salio mal.') }}</div>

        <ul class=" alert alert-danger mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
