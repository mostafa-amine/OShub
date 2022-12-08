<x-layouts.app title="Projects">
    <x-slot:content>
        <x-search>
        </x-search>

        <livewire:project.all-projects :projects="$projects" />

    </x-slot:content>
</x-layouts.app>
