<x-layout>
    <div class="space-y-10">
        <section >
            <x-section-heading>Hot Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>

        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6  flex flex-row items-center  flex-wrap gap-x-2 gap-y-2 ">
            <x-tag>Backend</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
                <x-tag>FrontEnd</x-tag>
                <x-tag>devops</x-tag>
                <x-tag>Full-stack dev</x-tag>
            </div>

        </section>
        <section>
                <div class="flex justify-between mb-2">
                    <div>
            <x-section-heading>
                Recent Jobs
            </x-section-heading>
                    </div>
                    <div>
{{--                        <x-horizontal-option></x-horizontal-option>--}}
{{--                        <x-grid-option></x-grid-option>--}}
                        <x-small-button>Filter</x-small-button>

                    </div>
                </div>
            <div class="flex flex-col space-y-4 mb-6 ">

                <x-extended-job-card></x-extended-job-card>
                <x-extended-job-card></x-extended-job-card>
                <x-extended-job-card></x-extended-job-card>
            </div>
        </section>
    </div>
</x-layout>
