<figure class="fic-rounded-2xl fic-bg-white fic-p-6 shadow-lg fic-ring-1 fic-ring-gray-900/5">
    <blockquote class="fic-text-gray-900">
        <p>“{{ $quote }}”</p>
    </blockquote>
    <figcaption class="fic-mt-6 fic-flex fic-items-center fic-gap-x-4">
        @if($imageSrc)
            <img class="fic-size-10 fic-rounded-full fic-bg-gray-50" src="{{ $imageSrc }}" alt="{{ $name }}">
        @endif

        <div>
            <div class="fic-font-semibold">{{ $name }}</div>

            @if($additionalNameInformation)
                <div class="fic-text-gray-600">{{ $additionalNameInformation }}</div>
            @endif
        </div>
    </figcaption>
</figure>
