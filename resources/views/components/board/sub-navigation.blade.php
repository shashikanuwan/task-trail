@props(['title' => 'Project Management Tool'])

<div class="flex justify-between items-center py-4">
    <h1 class="text-2xl font-bold">{{$title}}</h1>
    <x-flash-message/>

    {{$slot}}
</div>
