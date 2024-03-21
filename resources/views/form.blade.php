<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <form action="/create" method="post"  class="max-w-sm mx-auto justify-center items-center mt-10">
        @csrf

          

          <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NAMA</label>
            <input type="name" name="nama" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" orequired />
          </div>
         
         <div class="mb-5">
            <select class="select select-success w-full max-w-xs" name="tipe">
                <option disabled selected>Tipe Eskrim</option>
                <option>Coklat</option>
                <option>Bas</option>
                <option>Pidato</option>
                <option>MHQ</option>
                <option>MTQ</option>
                <option>Adzan</option>
                <option>Nyanyi</option>
              </select>
             
         </div>
         <button class="btn btn-active btn-primary">Masukan</button>
        </form>


    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>