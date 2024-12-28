<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 fic-lg:px-8">
        <div class="fic-mx-auto fic-max-w-2xl fic-text-center">
            {!! $this->get('heading.heading')->class('fic-text-balance fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl') !!}
            {!! $this->get('heading.description')->class('fic-mt-2 fic-text-lg/8 fic-text-gray-600') !!}
        </div>
        <div class="fic-mx-auto {{ $this->get('heading.heading')->hasContent() || $this->get('heading.description')->hasContent() ? 'fic-mt-16' : '' }} fic-grid fic-max-w-2xl fic-grid-cols-1 fic-gap-x-8 fic-gap-y-20 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-3">
            @foreach($this->get('articles') as $article)
                <article class="fic-flex fic-flex-col fic-items-start fic-justify-between">
                    <x-lego::bricks.link :link="$article->link">
                        <div class="fic-relative fic-w-full">
                            {!! $article->image->class('fic-aspect-video fic-w-full fic-rounded-2xl fic-bg-gray-100 fic-object-cover sm:fic-aspect-[2/1] lg:fic-aspect-[3/2]') !!}
                            <div class="fic-absolute fic-inset-0 fic-rounded-2xl fic-ring-1 fic-ring-inset fic-ring-gray-900/10"></div>
                        </div>
                    </x-lego::bricks.link>
                    <div class="fic-max-w-xl">
    {{--                    <div class="fic-mt-8 fic-flex fic-items-center fic-gap-x-4 fic-text-xs">--}}
    {{--                        <time datetime="2020-03-16" class="fic-text-gray-500">Mar 16, 2020</time>--}}
    {{--                        <a href="#" class="fic-relative fic-z-10 fic-rounded-full fic-bg-gray-50 fic-px-3 fic-py-1.5 fic-font-medium fic-text-gray-600 hover:fic-bg-gray-100">Marketing</a>--}}
    {{--                    </div>--}}
                        <div class="fic-group fic-relative">
                            <h3 class="fic-mt-3 fic-text-lg/6 fic-font-semibold fic-text-gray-900 group-hover:fic-text-gray-600">
                                <x-lego::bricks.link :link="$article->link">
                                    <span class="fic-absolute fic-inset-0"></span>
                                    {{ $article->title }}
                                </x-lego::bricks.link>
                            </h3>
                            {!! $article->description->class('fic-mt-5 fic-line-clamp-3 fic-text-sm/6 fic-text-gray-600') !!}
                        </div>
    {{--                    <div class="fic-relative fic-mt-8 fic-flex fic-items-center fic-gap-x-4">--}}
    {{--                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="fic-size-10 fic-rounded-full fic-bg-gray-100">--}}
    {{--                        <div class="fic-text-sm/6">--}}
    {{--                            <p class="fic-font-semibold fic-text-gray-900">--}}
    {{--                                <a href="#">--}}
    {{--                                    <span class="fic-absolute fic-inset-0"></span>--}}
    {{--                                    Michael Foster--}}
    {{--                                </a>--}}
    {{--                            </p>--}}
    {{--                            <p class="fic-text-gray-600">Co-Founder / CTO</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-lego::section>
