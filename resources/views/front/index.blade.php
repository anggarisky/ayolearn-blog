<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="index, follow" name="robots" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <title>Learn UI/UX Design & Website Development | Ayolearn</title>
</head>
<body>
    @include('components/navbar')
    <section class="mt-20 w-9/12 mx-auto mb-20">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="heading">
                            <h1 class="text-4xl font-bold text-indigo-900 mb-8">
                                Popular Tutorials
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($tutorials as $tutorial)
                <div class="col-lg-3">
                    
                            <div class="content">
                                <a href="{{ route('details', $tutorial->slug) }}">
                                    <img class="img-fluid mb-5" src="{{ Storage::url($tutorial->thumbnail) }}" alt="">
                                </a>
                                <a href="{{ route('details', $tutorial->slug) }}">
                                    <h2 class="min-h-[40px] mb-3 text-xl text-indigo-900 font-bold">
                                        {{ $tutorial->title }}
                                    </h2>
                                </a>
                                <p class="mb-5 leading-loose text-gray-500 text-base">
                                    {{ Str::limit($tutorial->content, 70) }}
                                </p>
                                <p>
                                    {{ $tutorial->id_creator }} • 12 Jan 2023
                                </p>
                            </div>
                        
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>