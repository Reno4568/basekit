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
                        Our Products
                    </h3>
                    <p>
                        Let's build something useful
                    </p>
                    <p class="my-4">
                        <a href="{{ route('admin.new_product') }}" class="btn btn-primary">
                            Add New Product
                        </a>
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 col-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse( $all_uikit as $item_all_uikit )
                          <tr>
                            <th scope="row">1</th>
                            <td>{{ $item_all_uikit->name }}</td>
                            <td>
                                <img src="{{ Storage::url($item_all_uikit->thumbnail) }}" width="120" alt="">
                            </td>
                            <td>
                                {{ $item_all_uikit->id_category }}
                            </td>
                            <td>
                                <a href="#" class="btn btn-success">View</a>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <form method="POST" action="{{ route('admin.destroy_product', $item_all_uikit->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                 </form>
                            </td>
                          </tr>
                        @empty
                        @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>