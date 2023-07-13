<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid bg-danger p-4">
          <a class="navbar-brand text-white" href="/input">Coffee Management Product</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-white" href="/">Coffee Item</a>
                <a class="nav-link text-white" href="#">Product Category Management</a>
                <a class="nav-link text-white" href="/">English</a>
                <a class="nav-link text-white" href="/id">Chinese</a>
            </div>
          </div>
        </div>
      </nav>

    {{-- <button class="m-5">
        <a href="/input" class="text-decoration-none text-black">Input Data Here</a>
    </button>

    <button class="m-5">
        <a href="/" class="text-decoration-none text-black">English</a>
    </button>

    <button class="m-5">
        <a href="/id" class="text-decoration-none text-black">Indonesia</a>
    </button> --}}
  
    <table class="table mt-5">
        <thead>
            <tr>
                <th> {{ __('test.name') }} </th>
                <th> {{ __('test.price') }} </th>
                <th> {{ __('test.category') }} </th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($datas as $dt)
                <tr>
                    <th> {{ $dt->nama }} </th>
                    <th> {{ $dt->price }} </th>
                    <th> {{ $dt->matakuliah->mata_kuliah }} </th>
                    <th><button class="button"><a href="/update/{{ $dt->id }}" class="text-decoration-none text-dark">Update</a></button></th>
                    <th>
                        <form action="/delete/{{ $dt->id }} " method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="button" type="sbumit">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
  </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>