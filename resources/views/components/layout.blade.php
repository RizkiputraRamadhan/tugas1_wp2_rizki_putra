<!DOCTYPE html>

<head>
    <title>Kampus UBSI | @yield('title')</title>
    {{-- Template Bootstrap dari https://getbootstrap.com/ diinstal langsung via CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-
4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    {{-- Belajar bootstrap grid di https://www.petanikode.com/bootstrap-grid/ --}}
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        @include('components/message')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- javascript dari bootstrap langsung via CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
