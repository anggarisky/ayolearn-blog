<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta content="index, follow" name="robots" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />


    <title>{{ $details->title }} | Ayolearn</title>
    <meta name="description" content="In this tutorial, we will learn about {{ $details->title }} from beginning so that you are able to prepare your dream career better with Ayolearn.">
    <meta name="keywords" content="Flutter, Android Studio, Figma, SwiftUI, HTML CSS, Bootstrap, Tailwind CSS, Laravel, React Native, Webflow, JavaScript, Adobe XD, Web Design, Mobile App Development">
    <meta name="author" content="Ayolearn" />

    <meta image="{{ Storage::url($details->thumbnail) }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ Storage::url($details->thumbnail) }}">
    <meta content="index, follow" name="robots" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $details->title }} by Ayolearn">
    <meta property="og:site_name" content="Ayolearn">
    <meta property="og:url" content="https://ayolearn.com/tutorial/{{ $details->slug }}">
    <meta property="og:description" content="In this tutorial, we will learn about {{ $details->title }} from beginning so that you are able to prepare your dream career better with Ayolearn.">
</head>
<body>
    @include('components/navbar')
    <section class="mt-5 mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h1 class="text-4xl font-bold text-indigo-900 mb-4">
                            {{ $details->title }} 
                        </h1>
                        <p>
                            {{ $details->id_creator }} • {{ $details->created_at }} 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid mb-5" src="{{ Storage::url($details->thumbnail) }}" alt="">
                    {!! $details->content !!} 
                </div>
            </div>
        </div>
    </section>
</body>
</html>