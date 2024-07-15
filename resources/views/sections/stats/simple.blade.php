<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <dl class="fic-grid fic-gap-y-16 fic-text-center {{ $this->getGridDensityCss() }}">
            @foreach($this->get('stats') as $stat)
                <div class="fic-mx-auto fic-flex fic-max-w-xs fic-flex-col fic-gap-y-4">
                    {!! $stat->description->class('fic-text-base fic-leading-7 fic-text-gray-600 fic-max-w-[250px]') !!}
                    <dd class="font-headline fic-order-first fic-text-3xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl">
                        {{ $stat->prefix }}<span id="stats.simple.{{ $loop->index }}">{{ $stat->count }}</span>{{ $stat->suffix }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</x-lego::section>

@push('strata:frontend:end')
    <script>
        @foreach($this->get('stats') as $index => $stat)
            @if($stat->shouldAnimate->isChecked())
                const countUp_{{ $index }} = new window.CountUp(
                    'stats.simple.{{ $index }}',
                    {{ $stat->count }},
                    {
                        startVal: {{ $stat->animationStart }},
                        duration: {{ $stat->animationDuration }},
                        enableScrollSpy: true,
                        scrollSpyDelay: 500,
                        scrollSpyOnce: {{ $stat->animateOnce->isChecked() ? 'true' : 'false' }}
                    }
                );
                if (! countUp_{{ $index }}.error) {
                    countUp_{{ $index }}.start();
                } else {
                    console.error(countUp_{{ $index }}.error);
                }
            @endif
        @endforeach
    </script>
@endpush
