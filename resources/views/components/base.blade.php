@push('scripts')
    @mingle
@endpush
{{ $attributes->merge($props) }} {{ $slot }}
