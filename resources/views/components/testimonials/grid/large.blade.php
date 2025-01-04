<figure class="fic-rounded-2xl fic-bg-white fic-shadow-lg fic-ring-1 fic-ring-gray-900/5 sm:fic-col-span-2 xl:fic-col-start-2 xl:fic-row-end-1">
    <blockquote class="fic-p-6 fic-text-lg fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-p-12 sm:fic-text-xl/8">
        <p>“{{ $quote }}”</p>
    </blockquote>
    <figcaption class="fic-flex fic-flex-wrap fic-items-center fic-gap-x-4 fic-gap-y-4 fic-border-t fic-border-gray-900/10 fic-px-6 fic-py-4 sm:fic-flex-nowrap">
        @if($imageSrc)
            <img class="fic-size-10 fic-flex-none fic-rounded-full fic-bg-gray-50" src="{{ $imageSrc }}" alt="{{ $name }}">
        @endif
        <div class="fic-flex-auto">
            <div class="fic-font-semibold">{{ $name }}</div>
            @if($additionalNameInformation)
                <div class="fic-text-gray-600">{{ $additionalNameInformation }}</div>
            @endif
        </div>
    </figcaption>
</figure>
