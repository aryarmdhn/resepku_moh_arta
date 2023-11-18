
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Icons Bootsrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Resepku Arya | Create</title>
  </head>
  <body>
{{-- navbar --}}
   @include('partials.navbar')
{{-- navbar --}}


{{-- home --}}
    <div class="container mt-5">
        
<h1 class="text-center">Tulis Resepmu..</h1>

<div class="row justify-content-center">
 <div class="col-lg-8">
     <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
         @csrf
      <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Judul Resep" required value="{{ old('title') }}">
          <input type="text" name="slug" class="form-control" id="slug" disabled value="{{ old('slug') }}">
      </div>

      <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id" required >
              @foreach ($categories as $category)                
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
          </select>
      </div>

      <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required"></textarea>
      </div>
  
      
      <div class="mb-3">
          <label for="bahan" class="form-label">Bahan-bahan</label>
          <textarea name="bahan" class="form-control" id="bahan" rows="3" required"></textarea>
        </div>
     
      <div class="mb-3">
          <label for="langkah" class="form-label">Langkah Pembuatan</label>
          <textarea name="langkah" class="form-control" id="langkah" rows="3" required"></textarea>
      </div>
     
      
      
      {{-- <div class="mb-3">
        <label for="image" class="form-label">Default file input example</label>
        <input class="form-control" name="image" type="file" id="image">
      </div> --}}
      <button type="submit" class="btn btn-primary btn-lg mb-5 justify-content-center">Terbitkan Resep</button>
    </form>
 </div>
</div>

  <footer class="fixed">
    <div class="row">
        <h5 class="text-center bg-secondary p-3">Made by Moh. Arta Ramadhanu</h5>
    </div>
  </footer>

<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })


function previewImage() {
    const image = document.querySelector('#image');
const imgPreview = document.querySelector('.img-preview');

imgPreview.style.display = 'block';

const oFReader = new FileReader();
oFReader.readAsDataURL(image.files[0]);

oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
}
}

</script>

    </div>
{{-- home --}}






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>