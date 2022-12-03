<x-layouts.app title="Projects">
    <x-slot:content>
        <x-search>
        </x-search>

        <x-project.all-projects :projects="$projects">
        </x-project.all-projects>

    </x-slot:content>
</x-layouts.app>
