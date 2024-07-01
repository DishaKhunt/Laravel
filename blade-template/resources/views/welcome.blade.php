{{-- @php
    $fruits = [ "one"=>"Apple","two"=> "Banana", "three"=>"Orange" ,"four"=> "Grapes"];
    $value = 'hello';
@endphp --}}

{{-- @include('pages.header', ['names' => $fruits]) --}}

{{-- @includeWhen( empty($value),'pages.header', ['names' => $fruits]) --}}

{{-- @includeUnless( empty($value),'pages.header', ['names' => $fruits])

<h1>Home : First Page</h1>

@include('pages.footer')

@includeIf('pages.content') --}}





{{-- {{ 5 + 2 }}

<br> <br>

{{"Hello Word"}}

<br><br>

{{ "<h1>Disha Khunt </h1>"}}

<br><br>
{!! "<h1>Disha Khunt </h1>"!!} --}}

{{-- {{"<script>alert('Disha Khunt')</script>"}} --}}

{{-- @php
    $names = ['Disha', 'Isha', 'Manshi'];
@endphp

<ul>
    @foreach ($names as $n)
        <li>{{ $loop->iteration }} - {{ $n }}</li>
        
    @endforeach --}}
{{-- </ul> --}}

{{-- <li>{{ $loop->count }} - {{ $n }}</li> --}}


{{-- <ul>
    @foreach ($names as $n)
    @if ($loop->even)
        <li style="color:red;">{{$n}}</li> 
    @elseif($loop->odd)
        <li style="color:green;">{{$n}}</li> 
    @endif
              
    @endforeach
</ul> --}}


{{-- home page for template --}}
{{-- @include('pages.homepage') --}}
