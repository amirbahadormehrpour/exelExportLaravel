<h1>
    salam
</h1>
@if(session('success'))

    {{session()->get('success')}}

@endif


<form action="/im" method="post" enctype="multipart/form-data">
    @csrf
    <label for="myfile">Select a file:</label>
    <input type="file" id="myfile" name="file1"><br><br>
    <input type="submit">
</form>