<x-layout>
    <div class="flex flex-col space-y-4 mb<-6 ">
        @foreach ($jobs as $job)
            <x-extended-job-card :$job></x-extended-job-card>
        @endforeach
    </div>
</x-layout>
