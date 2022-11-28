<div class="">
    @dd($bgColorClasses)
    @if ($getIcon())
        <x-dynamic-component :component="$getIcon()" class="ml-1 w-3 h-3 flex-shrink-0" />
    @endif
    @foreach($getItems() as $item)
        {{$item}}
    @endforeach
</div>
