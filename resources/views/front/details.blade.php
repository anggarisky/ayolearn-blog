<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite('resources/css/app.css')


    <title>{{ $details->title }} | Ayolearn</title>
</head>
<body>
    @include('components/navbar')
    <section class="mt-20 w-6/12 mx-auto mb-20">
        <div class="grid grid-cols-1">
            <div class="heading">
                <h1 class="text-4xl font-bold text-indigo-900 mb-4">
                    {{ $details->title }} 
                </h1>
                <p>
                    {{ $details->id_creator }} • {{ $details->created_at }} 
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-5">
            <div class="content">
                <img class="w-full mb-5" src="https://blog.hubspot.com/hs-fs/hubfs/linkedin-summary-examples-4.jpg?width=1204&height=600&name=linkedin-summary-examples-4.jpg" alt="">
                {!! $details->content !!} 
            </div>
        </div>
    </section>
</body>
</html>