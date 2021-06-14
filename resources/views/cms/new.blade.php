<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />

    <title>Work faster as a Mobile Developer - BaseKit</title>
  </head>
  <body>
      
    <section class="pt-10 pb-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h3>
                        New Product
                    </h3>
                    <p>
                        Let's build something useful
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-12">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.new_product.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Product Name</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <select name="id_category" class="form-select" aria-label="Default select example">
                                <option selected>Product category</option>
                                <option value="1">Health</option>
                                <option value="2">Education</option>
                                <option value="3">Finance</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Thumbnail</label>
                            <input name="thumbnail" class="form-control form-control-sm" id="formFileSm" type="file">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Url Download</label>
                            <input name="url_file" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>