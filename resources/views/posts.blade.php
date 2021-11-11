<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:new-post/>
                <livewire:all-posts/>
{{--                <x-jet-welcome />--}}
            </div>
        </div>
    </div>

{{--    New post modal--}}
{{--    <x-jet-dialog-modal wire:model="">--}}
{{--        <x-slot name="title">--}}
{{--            {{ __('Add Post') }}--}}
{{--        </x-slot>--}}

{{--        <x-slot name="content">--}}
{{--            {{__('test content') }}--}}
{{--        </x-slot>--}}

{{--        <x-slot name="footer">--}}

{{--        </x-slot>--}}
{{--    </x-jet-dialog-modal>--}}
</x-app-layout>
