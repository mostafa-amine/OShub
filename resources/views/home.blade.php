<x-layouts.app title="Projects">
    <x-slot:content>


        <div class="section-1 container">
            <div class="title">
                <h1 class="text-center fw-bold text-green fs-1">Open Source Hub.</h1>
            </div>

            <div class="desc mt-4 d-flex justify-content-center">
                <p class="text-center fw-semibold col-8">
                    Open Source Hub is an open source project built with Laravel that allows users to share their own open source projects with the community ✨
                </p>
            </div>
        </div>


        <!-- Explore more -->
        <div class="explore-more cursor-pointer position-relative">
            <div class="position-absolute top-50 start-50 ">
            <a href="#latest" class="fs-1 text-green"><i class="bi bi-caret-down"></i></a>
            </div>
        </div>

        <livewire:project.all-projects :projects="$projects" />

    </x-slot:content>
</x-layouts.app>
