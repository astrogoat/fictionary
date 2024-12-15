{{--<div>--}}
    <x-fab::lists.two-column
        title="Colors"
        allow-overflow
    >
        <x-fab::lists.two-column.column title="Accent 50">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 50" position="left" wire:model="settings.colors.accent.50" color="#f0f9ff" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 100">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 100" position="left" wire:model="settings.colors.accent.100" color="#e0f2fe" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 200">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 200" position="left" wire:model="settings.colors.accent.200" color="#bae6fd" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 300">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 300" position="left" wire:model="settings.colors.accent.300" color="#7dd3fc" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 400">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 400" position="left" wire:model="settings.colors.accent.400" color="#38bdf8" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 500">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 500" position="left" wire:model="settings.colors.accent.500" color="#0ea5e9" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 600">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 600" position="left" wire:model="settings.colors.accent.600" color="#0284c7" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 700">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 700" position="left" wire:model="settings.colors.accent.700" color="#0369a1" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 800">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 800" position="left" wire:model="settings.colors.accent.800" color="#075985" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 900">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 900" position="left" wire:model="settings.colors.accent.900" color="#0c4a6e" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
        <x-fab::lists.two-column.column title="Accent 950">
            <x-slot name="secondary">
                <x-lego::color-picker label="Accent 950" position="left" wire:model="settings.colors.accent.950" color="#082f49" return-format="rgbString" />
            </x-slot>
        </x-fab::lists.two-column.column>
    </x-fab::lists.two-column>
{{--</div>--}}
