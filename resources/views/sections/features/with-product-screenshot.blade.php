<x-lego::section :section="$this">
    <div class="fic-overflow-hidden">
        <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
            <div class="fic-mx-auto fic-grid fic-max-w-2xl fic-grid-cols-1 fic-gap-x-8 fic-gap-y-8 sm:fic-gap-y-20 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-2">
                <div class="lg:fic-ml-auto lg:fic-pl-4 lg:fic-pt-4">
                    <div class="lg:fic-max-w-lg">
                        {!! $this->get('eyebrow')->class('fic-text-base fic-font-semibold fic-leading-7 fic-text-primary') !!}
                        {!! $this->get('heading')->class('font-headline fic-mt-2 fic-text-3xl fic-font-bold fic-tracking-tight fic-text-gray-900 sm:fic-text-4xl') !!}
                        {!! $this->get('description')->class('fic-mt-6 fic-text-lg fic-leading-8 fic-text-gray-600') !!}
                        <dl class="fic-mt-10 fic-max-w-xl fic-space-y-8 fic-text-base fic-leading-7 fic-text-gray-600 lg:fic-max-w-none">
                            @foreach($this->get('callouts') as $callout)
                                <div class="fic-relative fic-pl-9">
                                    <dt class="fic-inline fic-font-semibold fic-text-gray-900">
                                        {!! $callout->icon->class('fic-absolute fic-left-1 fic-top-1 fic-h-5 fic-w-5 fic-text-primary') !!}
                                        {!! $callout->title !!}
                                    </dt>
                                    {!! $callout->description->class('fic-inline') !!}
                                </div>
                            @endforeach
                        </dl>
                    </div>
                </div>
                <div class="{{ $this->get('container.layout')->getKey() === 'left' ? 'fic-flex fic-items-start fic-justify-end lg:fic-order-first' : '' }}">
                    {!! $this->get('screenshot')->class('fic-w-[48rem] fic-max-w-none fic-rounded-xl fic-shadow-xl fic-ring-1 fic-ring-gray-400/10 sm:fic-w-[57rem] md:fic--ml-4 lg:fic--ml-0') !!}
                </div>
            </div>
        </div>
    </div>
</x-lego::section>
