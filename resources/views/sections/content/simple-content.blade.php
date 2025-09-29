<x-lego::section class="mx-auto container">
    <div class="{{ $this->get('useProse')->isChecked() ? 'prose mx-auto' : '' }}">
        {!! $this->get('content') !!}
    </div>
</x-lego::section>
