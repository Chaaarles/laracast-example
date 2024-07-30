@props(['name'])

@error($name)
<p class="text-red-600 text-semibold">{{$message}}</p>
@enderror
