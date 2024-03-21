<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
 <style>
  .form{
    float: left;

  }
 </style>
</head>
<body>
    
    <div class="navbar bg-base-100">
        <a class="btn btn-ghost text-xl">daisyUI</a>
      </div>

      <a href="/form" class="btn btn-info ml-10 mt-10">masukan data</a>
      <div class="overflow-x-auto ml-20">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>eskrim apa</th>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($jualans as $w)
                
         
            <tr>
              <th>{{ $w->id }}</th>
              <td>{{ $w->nama }}</td>
              <td>{{ $w->tipe }}</td>
              <td> <a href="/{{ $w->id }}/edit">
                <button class="btn btn-success ml-5">Edit</button>
            </a>
            <form class="form"  action="/update/{{ $w->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-warning ">Delete</button>
            </form>
                
        </td>
              
            </tr>
            @endforeach
            
           
          </tbody>
        </table>
      </div>

    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>