<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite('resources/css/app.css')

    <title>Learn UI/UX Design & Website Development | Ayolearn</title>
</head>
<body>
    <nav class="flex align-middle mx-auto w-9/12 my-8">
        <a href="{{ route('home') }}">
            <h2 class="text-indigo-900 text-2xl font-bold">Ayolearn</h2>
        </a>
        <ul class="ml-20 mt-2 flex gap-10">
            <li>
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    UI/UX Design
                </a>
            </li>
            <li>
                <a href="#">
                    Web Development
                </a>
            </li>
            <li>
                <a href="#">
                    Mobile Development
                </a>
            </li>
        </ul>
    </nav>
    <section class="mt-20 w-9/12 mx-auto mb-20">
        <div class="grid grid-cols-1 gap-4">
            <div class="heading">
                <h1 class="text-4xl font-bold text-indigo-900 mb-8">
                    Popular Tutorials
                </h1>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="content">
                <a href="#">
                    <img class="w-full mb-5" src="https://blog.hubspot.com/hs-fs/hubfs/linkedin-summary-examples-4.jpg?width=1204&height=600&name=linkedin-summary-examples-4.jpg" alt="">
                </a>
                <a href="#">
                    <h2 class="min-h-[78px] mb-3 text-3xl text-indigo-900 font-bold">
                        How to Install React JS and Vite in Laravel Project
                    </h2>
                </a>
                <p class="mb-5 leading-loose text-gray-500 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit facilis cupiditate accusamus iste esse deserunt deploy server app working debitis doloremque...
                </p>
                <p>
                    Anne Machiaw • 12 Jan 2023
                </p>
            </div>
            <div class="content">
                <a href="#">
                    <img class="w-full mb-5" src="https://blog.hubspot.com/hs-fs/hubfs/linkedin-summary-examples-4.jpg?width=1204&height=600&name=linkedin-summary-examples-4.jpg" alt="">
                </a>
                <a href="#">
                    <h2 class="min-h-[78px] mb-3 text-3xl text-indigo-900 font-bold">
                        Fix Google Fonts
                    </h2>
                </a>
                <p class="mb-5 leading-loose text-gray-500 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit facilis cupiditate accusamus iste esse deserunt deploy server app working debitis doloremque...
                </p>
                <p>
                    Anne Machiaw • 12 Jan 2023
                </p>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-14">
            @foreach($tutorials as $tutorial)
                <div class="content">
                    <a href="{{ route('details', $tutorial->slug) }}">
                        <img class="w-full mb-5" src="{{ Storage::url($tutorial->thumbnail) }}" alt="">
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
            @endforeach
        </div>
    </section>
</body>
</html>