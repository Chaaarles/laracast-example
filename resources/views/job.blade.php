<x-layout>
    <x-slot name="heading">{{$job["title"]}}</x-slot>

    <h2 class="text-lg font-semibold text-gray-700">Description</h2>
    <p>{{$job["description"]}}</p>
    <h2 class="text-lg font-semibold text-gray-700">Salary</h2>
    <p>{{$job["salary"]}}</p>
</x-layout>
