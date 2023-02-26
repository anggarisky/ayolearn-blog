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
        <div class="grid grid-cols-1 gap-4">
            <div>
                <h1 class="text-4xl font-bold text-indigo-900 mb-8">
                    Tutorials
                </h1>
                <p>
                    <a href="{{ route('admin.create.tutorial') }}" class="btn btn-primary">Add New</a>
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-20">
            <div>
                <hr>
            </div>
        </div>
    </section>
</body>
</html>