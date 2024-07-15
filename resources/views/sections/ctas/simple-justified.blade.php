<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-flex lg:fic-items-center lg:fic-justify-between lg:fic-px-8">
        {!! $this->get('heading.copy')->class('fic-text-3xl fic-font-bold fic-tracking-tight fic-text-gray-900 sm:fic-text-4xl') !!}
        <div class="fic-mt-10 fic-flex fic-items-center fic-gap-x-6 lg:fic-mt-0 lg:fic-flex-shrink-0">
            {!! $this->get('primaryCta')->class('fic-rounded-md fic-bg-primary fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-primary/80 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-primary') !!}
            {!! $this->get('secondaryCta')->class('fic-text-sm fic-font-semibold fic-leading-6 fic-text-gray-900') !!}
        </div>
    </div>
</x-lego::section>
