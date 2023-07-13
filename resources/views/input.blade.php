<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
      
    <form action="/add" class="mt-5" method="POST">
        @csrf
        <div class="nama">
            <label for="nama">Coffee Name</label>
            <input type="text" name="nama" id="nama" value=" {{ old('nama') }} " required>
            @error('nama')
                {{ $message }}
            @enderror
        </div>

        <div class="price">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value=" {{ old('price') }} " required>
            @error('price')
                {{ $message }}
            @enderror
        </div>

        {{-- <div class="grade">
            <label for="grade">Grade</label>
            <input type="number" name="grade" id="grade" value=" {{ old('grade') }} " required>
            @error('grade')
                {{ $message }}
            @enderror
        </div> --}}

        <div class="matakuliah">
            <label for="matakuliah">Coffee Category</label>
            <select name="matakuliah" id="matakuliah">
                <option value="" selected disabled>Select Category</option>
                @foreach($matakuliahs as $mk)
                    <option value=" {{ $mk->id }} "> {{ $mk->mata_kuliah }} </option>
                @endforeach
            </select>
            @error('matakuliah')
                {{ $message }}
            @enderror
        </div>

        <button class="button mt-4" type="submit">Submit</button>
    </form>
  </body>

</html>