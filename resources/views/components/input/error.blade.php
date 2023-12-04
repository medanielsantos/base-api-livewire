@props(['name', 'message'])

@error($name)
<p class="inline mt-1 text-red-500 text-sm tracking-wide">
    @lang($message)
</p>
@enderror
