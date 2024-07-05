<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <div class="flex flex-row flex-wrap justify-evenly">
        @foreach($jobs as $job)
            <article class="mb-6 bg-white shadow rounded-lg overflow-hidden w-72 flex flex-col">
                <div class="px-6 py-4">
                    <h2 class="text-xl font-bold text-gray-800">{{ $job["title"] }}</h2>
                    <p class="text-gray-600">{{ $job["salary"] }}</p>
                    <p class="text-gray-600">{{ $job["description"] }}</p>
                </div>
                <div class="grow"></div>
                <div class="px-6 py-4 bg-teal-100">
                    <a href="/jobs/{{$job["id"]}}" class="text-indigo-600 hover:text-indigo-800">View Job</a>
                </div>
            </article>
        @endforeach
    </div>
</x-layout>
