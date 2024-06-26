<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Stack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background: gainsboro">
    <div class="container mt-5">
        <div class="mb-5">
            <h1 class="card-body text-center">Your Name</h1><br>
            <div class="card-body text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-8 mb-3" style="align-content: center" style="width: 100px; heigh: 100px">
                <div class="mb-3">
                    <div class="fs-2 text-center">Github & Gitlab</div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <div style="text-align: left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur</div><br>
                            <a style="text-decoration:none" href=""><b style="color: black">Read more</b></a>&nbsp;<i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <div style="text-align: left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur</div><br>
                            <a style="text-decoration:none" href=""><b style="color: black">Read more</b></a>&nbsp;<i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
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
                    <div class="fs-2 text-left">Skill</div>
                </div>
                <div>
                    <div style="text-align: left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur</div>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p><b>Graphic Design</b></p>
                    <p><b>UX Design</b></p>
                    <p><b>Prototyping</b></p>
                    <p><b>Webflow</b></p>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p><b>Branding</b></p>
                    <p><b>Coding</b></p>
                    <p><b>Back-End</b></p>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6" style="align-content: center">
                <div>
                    <div class="fs-2 text-left">My Porto</div>
                </div>
                <div class="mb-5">
                    <div style="text-align: left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur</div>
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
            <div class="col-md-2">
                <div class="mb-3">
                    <img src="https://placehold.co/200x200/FBFCFC/000000" alt="">
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
