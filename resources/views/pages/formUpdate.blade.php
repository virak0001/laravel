
<form action="{{route('update',$s->id)}}" method="post">
    @method('PATCH')
    @csrf
    <input type="text" value="{{$s{{-- s name of variable --}}->FirstName}}" name="fn" required>
    <input type="text" value="{{$s{{-- s name of variable --}}->LastName}}" name="ln" required>
    <input type="number" value="{{$s{{-- s name of variable --}}->Age}}" name="n" required>
    <input type="submit" value="Update">
</form>