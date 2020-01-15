@if (count($customer)>0)
@foreach ($customer as $item)
    {{$item}}
@endforeach
@else
    Don't have name!!!
@endif