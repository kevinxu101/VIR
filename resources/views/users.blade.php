<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>

            
            @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
       @endif
                


        
        <div class="card-body">

            
            <form action="{{ url('import')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="import_file" class="form-control">
                <br>
                <button type="submit" name="submit"> Submit</button> 
                
                
        
            </form>
  




        </tbody>
</table>


</body>

</html>