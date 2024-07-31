<x-layout>
    <x-slot name="heading">{{$job["title"]}}</x-slot>

    <h2 class="text-lg font-semibold text-gray-700">Description</h2>
    <p>{{$job["description"]}}</p>
    <h2 class="text-lg font-semibold text-gray-700">Salary</h2>
    <p>{{$job["salary"]}}</p>
    @can('update', $job)
        <form method="post" action="/jobs/{{$job->id}}">
            @csrf
            @method('DELETE')
            <button class="mt-4 p-3 bg-red-100 border-red-300 hover:bg-red-200 rounded-lg mr-4">
                Delete job
            </button>
        </form>

        <button class="mt-4">
            <a class="p-3 bg-white border-slate-300 border hover:bg-slate-200 rounded-lg"
               href="/jobs/{{$job->id}}/edit">Edit
                Job</a>
        </button>
    @endcan
</x-layout>
