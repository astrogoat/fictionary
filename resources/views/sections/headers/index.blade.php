<x-lego::section :section="$this">
    <div class="fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-text-center {{ $this->getContainerMaxWidthCss() }}">
            {!! $this->get('eyebrow.copy')->class('fic-text-base fic-font-semibold fic-leading-7 fic-text-primary') !!}
            {!! $this->get('heading.copy')->class('font-headline fic-mt-2 fic-font-bold fic-tracking-tight fic-text-gray-900 ' . $this->getHeadingSizeCss()) !!}
            {!! $this->get('description.copy')->class('fic-mt-6 fic-text-lg fic-leading-8 fic-text-gray-600') !!}
        </div>
    </div>
</x-lego::section>
