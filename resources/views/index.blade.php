@unless(count($listings) == 0) @foreach($listings as $list)

<h1>{{ $list["title"] }}</h1>

@endforeach @endless @else
<h1>no list</h1>

@endunless
