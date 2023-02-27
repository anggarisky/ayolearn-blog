<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="index, follow" name="robots" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Sigmar+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <title>Learn UI/UX Design & Website Development | Ayolearn</title>
</head>
<body>
    <section class="navbar-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="logo">
                        Ayolearn
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="popular">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($tutorials as $tutorial)
                <div class="col-lg-4 col-md-4 col-10 item">
                            <div class="content">
                                <a href="{{ route('details', $tutorial->slug) }}">
                                    <img class="img-fluid" src="{{ Storage::url($tutorial->thumbnail) }}" alt="">
                                </a>
                                <div class="information">
                                    <span class="badge float-left me-2">
                                        CODING
                                    </span>
                                    <p class="date pt-1">
                                        {{ $tutorial->created_at }}
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <a href="{{ route('details', $tutorial->slug) }}">
                                    <h2 class="title">
                                        {{ $tutorial->title }}
                                    </h2>
                                </a>
                            </div>
                
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="latest mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="header-primary">
                        Latest Tutorials
                    </h1>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($latest_tutorials as $tutorial)
                <div class="col-lg-6 basic-card-tutorial mb-4">
                    <a href="#">
                        <img class="img-fluid" src="{{ Storage::url($tutorial->thumbnail) }}" alt="">
                    </a>
                    <div class="information">
                        <span class="badge float-left me-2">
                            CODING
                        </span>
                        <p class="date pt-1">
                            {{ $tutorial->created_at }}
                        </p>
                    </div>
                    <a href="#">
                        <h2 class="title">
                            {{ $tutorial->title }}
                        </h2>
                    </a>
                    <p class="description">
                        {!! Str::limit($tutorial->content) !!}
                    </p>
                </div>
                <!-- Force next columns to break to new line -->
                <div class="w-100"></div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>