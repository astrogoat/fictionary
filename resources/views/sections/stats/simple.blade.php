<x-lego::section>
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8 fic-flex fic-justify-center">
        <dl class="fic-grid fic-gap-y-16 fic-text-center {{ $this->getGridDensityCss() }}">
            @foreach($this->get('stats') as $index => $stat)
                <div class="fic-mx-auto fic-flex fic-max-w-xs fic-flex-col fic-gap-y-4">
                    {!! $stat->description->class('fic-text-base fic-leading-7 fic-text-gray-600 fic-max-w-[250px]') !!}
                    <dd class="font-headline fic-order-first fic-text-3xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl">
                        @foreach($this->getContentVariations() as $contentVariation)
                            @php($contentVariation = $contentVariation instanceof BackedEnum ? $contentVariation->value : $contentVariation)
                            <span class="{{ $this->cssForShowingPerVariation($contentVariation) }}">
                                {!! $stat->prefix->setContentVariation($contentVariation, false) !!}<span id="stats.simple.{{ $contentVariation }}.{{ $index }}">{!! $stat->count->setContentVariation($contentVariation, false)->getValue() !!}</span>{!! $stat->suffix->setContentVariation($contentVariation, false) !!}
                            </span>
                        @endforeach
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</x-lego::section>

@push('strata:frontend:end')
    <script>
        @foreach($this->getContentVariations() as $contentVariation)
            @php($contentVariation = $contentVariation instanceof BackedEnum ? $contentVariation->value : $contentVariation)

            @foreach($this->get('stats', $contentVariation, false) as $index => $stat)
                @if($stat->shouldAnimate->isChecked())
                    const countUp_{{ $contentVariation }}_{{ $index }} = new window.CountUp(
                        'stats.simple.{{ $contentVariation }}.{{ $index }}',
                        {{ $stat->count }},
                        {
                            startVal: {{ $stat->animationStart }},
                            duration: {{ $stat->animationDuration }},
                            enableScrollSpy: true,
                            scrollSpyDelay: 500,
                            scrollSpyOnce: {{ $stat->animateOnce->isChecked() ? 'true' : 'false' }}
                        }
                    );
                    if (! countUp_{{ $contentVariation }}_{{ $index }}.error) {
                        countUp_{{ $contentVariation }}_{{ $index }}.start();
                    } else {
                        console.error(countUp_{{ $contentVariation }}_{{ $index }}.error);
                    }
                @endif
            @endforeach
        @endforeach
    </script>
@endpush
