<x-lego::section>
    <div class="fic-mx-auto fic-max-w-2xl fic-px-6 lg:fic-max-w-7xl lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-2xl fic-text-center">
            {!! $this->get('eyebrow.copy')->class('fic-text-base fic-leading-7 fic-font-semibold fic-text-indigo-600') !!}
            {!! $this->get('heading.copy')->class('font-headline fic-mt-2 fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-950 sm:fic-text-5xl ' . $this->getHeadingSizeCss()) !!}
        </div>
        <div class="fic-mt-10 fic-grid fic-grid-cols-1 fic-gap-4 sm:fic-mt-16 lg:fic-grid-cols-6 lg:fic-grid-rows-2">
            <div class="fic-relative lg:fic-col-span-3">
                <div class="fic-absolute fic-inset-0 fic-rounded-lg fic-bg-white max-lg:fic-rounded-t-[2rem] lg:fic-rounded-tl-[2rem]"></div>
                <div class="fic-relative fic-flex fic-h-full fic-flex-col fic-overflow-hidden fic-rounded-lg max-lg:fic-rounded-t-[calc(2rem+1px)] lg:fic-rounded-tl-[calc(2rem+1px)]">
                    {!! $this->get('grid.first.media')->class('fic-h-80 fic-object-cover fic-object-left') !!}
                    <div class="fic-p-10 fic-pt-4">
                        {!! $this->get('grid.first.eyebrow')->class('fic-text-sm fic-leading-4 fic-font-semibold fic-text-indigo-600') !!}
                        {!! $this->get('grid.first.title')->class('fic-mt-2 fic-text-lg fic-font-medium fic-tracking-tight fic-text-gray-950') !!}
                        {!! $this->get('grid.first.description')->class('fic-mt-2 fic-max-w-lg fic-text-sm fic-leading-6 fic-text-gray-600') !!}
                    </div>
                </div>
                <div class="fic-pointer-events-none fic-absolute fic-inset-0 fic-rounded-lg fic-shadow-sm fic-ring-1 fic-ring-inset fic-ring-black/5 max-lg:fic-rounded-t-[2rem] lg:fic-rounded-tl-[2rem]"></div>
            </div>
            <div class="fic-relative lg:fic-col-span-3">
                <div class="fic-absolute fic-inset-0 fic-rounded-lg fic-bg-white lg:fic-rounded-tr-[2rem]"></div>
                <div class="fic-relative fic-flex fic-h-full fic-flex-col fic-overflow-hidden fic-rounded-lg lg:fic-rounded-tr-[calc(2rem+1px)]">
                    {!! $this->get('grid.second.media')->class('fic-h-80 fic-object-cover fic-object-left lg:fic-object-right') !!}
                    <div class="fic-p-10 fic-pt-4">
                        {!! $this->get('grid.second.eyebrow')->class('fic-text-sm fic-leading-4 fic-font-semibold fic-text-indigo-600') !!}
                        {!! $this->get('grid.second.title')->class('fic-mt-2 fic-text-lg fic-font-medium fic-tracking-tight fic-text-gray-950') !!}
                        {!! $this->get('grid.second.description')->class('fic-mt-2 fic-max-w-lg fic-text-sm fic-leading-6 fic-text-gray-600') !!}
                    </div>
                </div>
                <div class="fic-pointer-events-none fic-absolute fic-inset-0 fic-rounded-lg fic-shadow-sm fic-ring-1 fic-ring-inset fic-ring-black/5 lg:fic-rounded-tr-[2rem]"></div>
            </div>
            <div class="fic-relative lg:fic-col-span-2">
                <div class="fic-absolute fic-inset-0 fic-rounded-lg fic-bg-white lg:fic-rounded-bl-[2rem]"></div>
                <div class="fic-relative fic-flex fic-h-full fic-flex-col fic-overflow-hidden fic-rounded-lg lg:fic-rounded-bl-[calc(2rem+1px)]">
                    {!! $this->get('grid.third.media')->class('fic-h-80 fic-object-cover fic-object-left') !!}
                    <div class="fic-p-10 fic-pt-4">
                        {!! $this->get('grid.third.eyebrow')->class('fic-text-sm fic-leading-4 fic-font-semibold fic-text-indigo-600') !!}
                        {!! $this->get('grid.third.title')->class('fic-mt-2 fic-text-lg fic-font-medium fic-tracking-tight fic-text-gray-950') !!}
                        {!! $this->get('grid.third.description')->class('fic-mt-2 fic-max-w-lg fic-text-sm fic-leading-6 fic-text-gray-600') !!}
                    </div>
                </div>
                <div class="fic-pointer-events-none fic-absolute fic-inset-0 fic-rounded-lg fic-shadow-sm fic-ring-1 fic-ring-inset fic-ring-black/5 lg:fic-rounded-bl-[2rem]"></div>
            </div>
            <div class="fic-relative lg:fic-col-span-2">
                <div class="fic-absolute fic-inset-0 fic-rounded-lg fic-bg-white"></div>
                <div class="fic-relative fic-flex fic-h-full fic-flex-col fic-overflow-hidden fic-rounded-lg">
                    {!! $this->get('grid.fourth.media')->class('fic-h-80 fic-object-cover') !!}
                    <div class="fic-p-10 fic-pt-4">
                        {!! $this->get('grid.fourth.eyebrow')->class('fic-text-sm fic-leading-4 fic-font-semibold fic-text-indigo-600') !!}
                        {!! $this->get('grid.fourth.title')->class('fic-mt-2 fic-text-lg fic-font-medium fic-tracking-tight fic-text-gray-950') !!}
                        {!! $this->get('grid.fourth.description')->class('fic-mt-2 fic-max-w-lg fic-text-sm fic-leading-6 fic-text-gray-600') !!}
                    </div>
                </div>
                <div class="fic-pointer-events-none fic-absolute fic-inset-0 fic-rounded-lg fic-shadow-sm fic-ring-1 fic-ring-inset fic-ring-black/5"></div>
            </div>
            <div class="fic-relative lg:fic-col-span-2">
                <div class="fic-absolute fic-inset-0 fic-rounded-lg fic-bg-white max-lg:fic-rounded-b-[2rem] lg:fic-rounded-br-[2rem]"></div>
                <div class="fic-relative fic-flex fic-h-full fic-flex-col fic-overflow-hidden fic-rounded-lg max-lg:fic-rounded-b-[calc(2rem+1px)] lg:fic-rounded-br-[calc(2rem+1px)]">
                    {!! $this->get('grid.fifth.media')->class('fic-h-80 fic-object-cover') !!}
                    <div class="fic-p-10 fic-pt-4">
                        {!! $this->get('grid.fifth.eyebrow')->class('fic-text-sm fic-leading-4 fic-font-semibold fic-text-indigo-600') !!}
                        {!! $this->get('grid.fifth.title')->class('fic-mt-2 fic-text-lg fic-font-medium fic-tracking-tight fic-text-gray-950') !!}
                        {!! $this->get('grid.fifth.description')->class('fic-mt-2 fic-max-w-lg fic-text-sm fic-leading-6 fic-text-gray-600') !!}
                    </div>
                </div>
                <div class="fic-pointer-events-none fic-absolute fic-inset-0 fic-rounded-lg fic-shadow-sm fic-ring-1 fic-ring-inset fic-ring-black/5 max-lg:fic-rounded-b-[2rem] lg:fic-rounded-br-[2rem]"></div>
            </div>
        </div>
    </div>
</x-lego::section>
