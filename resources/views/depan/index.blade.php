<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('depan') }}/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <style>
        /* Latar belakang halaman */
        body {
            background-color: #e0e0e0; /* Medium Gray Background */
            font-family: 'Muli', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #1abc9c; /* Mint Green */
        }

        .navbar .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: #2c3e50 !important; /* Dark Blue */
        }

        .navbar-brand {
            font-size: 1.8em;
            color: #ffffff !important;
        }

        .navbar-brand img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #fff;
        }

        /* Konten */
        .resume-section {
            background-color: #ffffff; /* Putih untuk setiap section */
            padding: 40px 30px;
            margin-bottom: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .resume-section-content {
            color: #34495e; /* Dark Gray for text */
        }

        .resume-section h1,
        .resume-section h2,
        .resume-section h3 {
            color: #1abc9c; /* Mint Green */
        }

        .resume-section-content .subheading {
            color: #7f8c8d; /* Lighter Gray */
        }

        .social-icons a {
            color: #1abc9c;
            font-size: 1.5em;
            margin-right: 15px;
            transition: color 0.3s ease-in-out;
        }

        .social-icons a:hover {
            color: #2c3e50; /* Dark Blue */
        }

        hr {
            border-color: #bdc3c7; /* Light Gray */
        }

        .text-primary {
            color: #1abc9c !important;
        }

        /* Flexbox untuk tata letak pengalaman dan pendidikan */
        .d-flex {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .flex-grow-1 {
            flex-grow: 1;
        }

        .flex-shrink-0 {
            flex-shrink: 0;
            color: #1abc9c;
            font-weight: 600;
        }

        /* Section judul */
        h2.mb-5 {
            color: #2c3e50;
        }

        /* Footer */
        footer {
            background-color: #1abc9c;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #ecf0f1;
            text-decoration: none;
        }

        footer a:hover {
            color: #2c3e50;
            text-decoration: underline;
        }

        /* Devicons / Skills Icons */
        .dev-icons li {
            display: inline-block;
            margin-right: 20px;
            font-size: 2em;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">{{ $about->judul }}</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="{{ asset('foto') . '/' . get_meta_value('_foto') }}" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    {!! set_about_nama($about->judul) !!}
                </h1>
                <div class="subheading mb-5">
                    {{ get_meta_value('_kota') }} · {{ get_meta_value('_provinsi') }} · {{ get_meta_value('_nohp') }} ·
                    <a href="{{ get_meta_value('_email') }}">{{ get_meta_value('_email') }}</a>
                </div>
                <div class="lead mb-5">{!! $about->isi !!}</div>
                <div class="social-icons">
                    <a class="social-icon" href="{{ get_meta_value('_linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_github') }}"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_twitter') }}"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_facebook') }}"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />

        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                @foreach ($experience as $item)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $item->judul }}</h3>
                            <div class="subheading mb-3">{{ $item->info1 }}</div>
                            {!! $item->isi !!}
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span></div>
                    </div>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />

        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                @foreach ($education as $item)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $item->judul }}</h3>
                            <div class="subheading mb-3">{{ $item->info1 }}</div>
                            <div>{{ $item->info2 }}</div>
                            <p>{{ $item->info3 }}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span></div>
                    </div>
                @endforeach
            </div>
        </section>

        <hr class="m-0" />

        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    @foreach (explode(', ', get_meta_value('_language')) as $item)
                        <li class="list-inline-item"><i class="devicon-{{ strtolower($item) }}-plain"></i></li>
                    @endforeach
                </ul>
                <div class="subheading mb-3">Workflow</div>
                {!! set_list_workflow(get_meta_value('_workflow')) !!}
            </div>
        </section>

        <hr class="m-0" />

        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">{{ $interest->judul }}</h2>
                {{ $interest->isi }}
            </div>
        </section>

        <hr class="m-0" />

        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">{{ $award->judul }}</h2>
                {!! set_list_award($award->isi) !!}
            </div>
        </section>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('depan') }}/js/scripts.js"></script>
</body>

</html>
