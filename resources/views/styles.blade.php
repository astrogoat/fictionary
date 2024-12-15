@php
    use Astrogoat\Fictionary\Settings\FictionarySettings;
    $settings = app(FictionarySettings::class);
@endphp

@if($settings->enabled)
    <x-lego::app-asset
        asset="css/fictionary.css"
        vendor="fictionary"
        :type="Helix\Lego\Enums\AppAsset::STYLESHEET"
    />
    <style>
        html {
            @foreach($settings->colors as $type => $colors)
                @foreach($colors as $scale => $value)
                    --fictionary-{{ $type }}-color-{{ $scale }}: {{ \Illuminate\Support\Str::of($value)->remove(['rgb(', ')'])->replace(',', ' ')->toString() }};
                @endforeach
            @endforeach
        }
    </style>
@endif
