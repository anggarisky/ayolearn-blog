<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>Admin Dashboard | Ayolearn</title>
</head>
<body>
    <section class="mt-20 w-9/12 mx-auto mb-20">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-4xl font-bold text-indigo-900 mb-8">
                        Tutorials
                    </h1>
                    <p>
                        <a href="{{ route('admin.create.tutorial') }}" class="btn btn-primary">Add New</a>
                    </p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                          <tr> 
                            <th scope="col">Title</th>
                            <th scope="col">Actions</th> 
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($tutorials as $tutorial)
                            <tr> 
                                <td>{{ $tutorial->title }}</td>
                                <td>
                                    <a href="{{ route('admin.edit.tutorial', $tutorial->id) }}" class="btn btn-info">Edit</a>
                                    <form method="POST" action="{{ route('admin.destroy.tutorial', $tutorial->id) }}">
                                        
                                        @method('delete')
                                        @csrf
                                        <button class="mt-3 btn btn-danger form-delete">Delete</button>
                                     </form>
                                </td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>