@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-orange-500']) }}>
    {{ $value ?? $slot }}
</label>
