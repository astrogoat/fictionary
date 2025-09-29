<x-lego::section>
    <div class="fic-relative fic-isolate fic-overflow-hidden fic-py-24 sm:fic-py-32">
        {!! $this->getBackgroundImageWithTransformations() !!}
{{--        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="fic-absolute fic-inset-0 fic--z-10 fic-size-full fic-object-cover fic-object-right md:fic-object-center">--}}
        <div class="fic-hidden sm:fic-absolute sm:fic--top-10 sm:fic-right-1/2 sm:fic--z-10 sm:fic-mr-10 sm:fic-block sm:fic-transform-gpu sm:fic-blur-3xl">
            <div class="fic-aspect-[1097/845] fic-w-[68.5625rem] fic-bg-gradient-to-tr fic-from-[#ff4694] fic-to-[#776fff] fic-opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="fic-absolute fic--top-52 fic-left-1/2 fic--z-10 fic--translate-x-1/2 fic-transform-gpu fic-blur-3xl sm:fic-top-[-28rem] sm:fic-ml-16 sm:fic-translate-x-0 sm:fic-transform-gpu">
            <div class="fic-aspect-[1097/845] fic-w-[68.5625rem] fic-bg-gradient-to-tr fic-from-[#ff4694] fic-to-[#776fff] fic-opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
            <div class="fic-mx-auto fic-max-w-2xl lg:fic-mx-0">
                {!! $this->get('heading.copy')->class('fic-font-semibold fic-tracking-tight fic-text-white ' . $this->getHeadingSizeCss()) !!}
                {!! $this->get('description.copy')->class('fic-mt-8 fic-text-pretty fic-text-lg fic-font-medium fic-text-gray-400 sm:fic-text-xl/8') !!}
            </div>
            <div class="fic-mx-auto fic-mt-16 fic-grid fic-max-w-2xl fic-grid-cols-1 fic-gap-6 sm:fic-mt-20 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-3 lg:fic-gap-8">
                @foreach($this->get('cards.items') as $card)
                    <div class="fic-flex fic-gap-x-4 fic-rounded-xl fic-bg-white/5 fic-p-6 fic-ring-1 fic-ring-inset fic-ring-white/10">
                        {!! $this->renderIcon($card) !!}
                        <div class="fic-text-base/7">
                            {!! $card->title->class('fic-font-semibold fic-text-white') !!}
                            {!! $card->description->class('fic-mt-2 fic-text-gray-300') !!}
                        </div>
                    </div>
                @endforeach
{{--                <div class="fic-flex fic-gap-x-4 fic-rounded-xl fic-bg-white/5 fic-p-6 fic-ring-1 fic-ring-inset fic-ring-white/10">--}}
{{--                    <svg class="fic-h-7 fic-w-5 fic-flex-none fic-text-accent-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                    <div class="fic-text-base/7">--}}
{{--                        <h3 class="fic-font-semibold fic-text-white">Sales</h3>--}}
{{--                        <p class="fic-mt-2 fic-text-gray-300">Consectetur vel non. Rerum ut consequatur nobis unde. Enim est quo corrupti consequatur.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="fic-flex fic-gap-x-4 fic-rounded-xl fic-bg-white/5 fic-p-6 fic-ring-1 fic-ring-inset fic-ring-white/10">--}}
{{--                    <svg class="fic-h-7 fic-w-5 fic-flex-none fic-text-accent-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                    <div class="fic-text-base/7">--}}
{{--                        <h3 class="fic-font-semibold fic-text-white">Sales</h3>--}}
{{--                        <p class="fic-mt-2 fic-text-gray-300">Consectetur vel non. Rerum ut consequatur nobis unde. Enim est quo corrupti consequatur.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</x-lego::section>
