<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Stack</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background: gainsboro">
    <div class="container mt-5">
        <div class="mb-5">
            @if ($header && $header->title)
                <h1 class="card-body text-center"><b>{{ $header->title }}</b></h1><br>
            @else
                <h1 class="card-body text-center"><b>Default Title</b></h1>
            @endif

            @if ($header && $header->description)
                <div class="card-body text-center">
                    <p>{{ $header->description }}</p>
                </div>
            @else
                <div class="card-body text-center">
                    <p>Default Description</p>
                </div>
            @endif
        </div>

        <div class="row mb-5">
            <div class="col-md-8 mb-3" style="align-content: center" style="width: 100px; heigh: 100px">
                <div class="mb-3">
                    <div class="fs-2 text-center"><b>Github & Gitlab</b></div>
                </div>
                @if (is_null($gits))
                    <div class="row">
                        @foreach ($gits as $item)
                            <div class="col-md-6 mb-3">
                                <div style="text-align: left">
                                    <div>{{ $item['description'] }}</div>
                                    <a style="text-decoration:none" href=""><b style="color: black">Read more</b></a>&nbsp;<i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                <div class="row">
                    <p>Default Description</p>
                </div>
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <div>
                    <img src="https://placehold.co/400x400/FBFCFC/000000" alt="">
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-8 mb-3" style="align-content: center">
                <div>
                    <div class="fs-2 text-left"><b>Skill</b></div>
                </div>
                @if ($skill && $skill->description)
                    <div>
                        <div style="text-align: left">{{ $skill->description }}</div>
                    </div>
                @else
                    <div style="align-content: left">
                        <p>Default Description</p>
                    </div>
                @endif
            </div>
            @if (is_array($skill->detail_skill) && count($skill->detail_skill) > 0)
                @php
                    $chunks = array_chunk($skill->detail_skill, ceil(count($skill->detail_skill) / 2));
                @endphp
                <div class="col-md-2">
                    @foreach ($chunks[0] as $skillDetail)
                        <div>
                            <p><b>{{ $skillDetail }}</b></p>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-2">
                    @foreach ($chunks[1] as $skillDetail)
                        <div>
                            <p><b>{{ $skillDetail }}</b></p>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No skills available</p>
            @endif
        </div>

        <div class="row mb-5">
            <div class="col-md-6" style="align-content: center">
                <div>
                    <div class="fs-2 text-left"><b>My Porto</b></div>
                </div>
                @if ($porto && $porto->description)
                    <div class="mb-5">
                        <div style="text-align: left">{{ $porto->description }}</div>
                    </div>
                @else
                    <p>Default Description</p>
                @endif
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <img src="https://placehold.co/200x200/FBFCFC/000000" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <img src="https://placehold.co/200x200/FBFCFC/000000" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <img src="https://placehold.co/200x200/FBFCFC/000000" alt="">
                </div>
            </div>
        </div>

    </div>
</body>
</html>
