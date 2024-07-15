<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        {!! $this->get('heading')->class('font-headline fic-text-center fic-text-2xl fic-font-semibold fic-leading-8 fic-text-gray-900') !!}
        <div class="fic-mx-auto fic-mt-10 fic-items-center fic-grid {{ $this->getIconDensityCss() }}">
            @foreach($this->get('logos') as $logoGroup)
                <div class="fic-flex {{ $this->get('textPosition')->getKey() === 'below' ? 'fic-flex-col' : 'fic-flex-col-reverse' }}">
                    {!! $logoGroup->media->class('fic-text-primary fic-col-span-2 fic-w-full fic-object-contain lg:fic-col-span-1 ' . $this->getMaxIconHeightCss()) !!}
                    <div class="fic-flex fic-flex-col fic-items-center {{ $this->get('textPosition')->getKey() === 'below' ? 'fic-mt-6' : 'fic-mb-6' }}">
                        @if($logoGroup->title->hasContent())
                            {!! $logoGroup->title->class('fic-font-bold fic-text-lg') !!}
                        @else
                            <div>&nbsp;</div> {{-- Hack to align logo without title with others that have --}}
                        @endif

                        @if($logoGroup->description->hasContent())
                            {!! $logoGroup->description->class('fic-text-center') !!}
                        @else
                            <div>&nbsp;</div> {{-- Hack to align logo without descriptions with others that have --}}
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-lego::section>
