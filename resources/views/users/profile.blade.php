<x-layouts.app title="{{ $user->username() . ' (' .$user->name() . ')' }}">

    <x-slot:content>
        <livewire:profile.user-profile :user="$user"/>
    </x-slot:content>


</x-layouts.app>
