<h1>
    salam
</h1>
@if(session('success'))

    {{session()->get('success')}}

@endif

<hr>
<h1><a href="/ex" style="color: red">export</a></h1>
<hr>
<form action="/im" method="post" enctype="multipart/form-data">
    @csrf
    <label for="myfile">Select a file:</label>
    <input type="file" id="myfile" name="file1"><br><br>
    <input type="submit">
</form>