
<form action="save" method="post">
    @csrf
    <input type="text" name="fn" required>
    <input type="text" name="ln" required>
    <input type="number" name="n" required>
    <input type="submit" value="save">
</form>