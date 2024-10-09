<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login</title>
    <style>
        /* CSS untuk background SVG */
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="1365" height="698" viewBox="0 0 1365 698" fill="none"><path d="M0 687.408C0 687.408 1358.2 711.239 1362.85 687.408C1381.41 592.305 1288.87 759.237 726 543.751C163.125 328.264 33.194 0 33.194 0H0V687.408Z" fill="%23D8EBF9"/></svg>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;


        }
        @media (max-width: 768px) {
        body {
            background-size: contain;
            background-position: top center;
        }
}


        .container {
            display: flex;
            justify-content: space-between;
            padding: 2% 5%;
            position: relative;
        }

        .img {
            width: 50%;

           margin-right: 5%;
           margin-top: 5%
        }
        .img img {
            width: 100%;
            height: auto;
        }

        .logo {

            width: 50%;
            text-align: right;
            align-content: center;
            margin-left: 10%;
            margin-right: 0%;


        }
        .logo img {
            width: 35%;
            height: auto;
            margin-right: 30%

        }

        /* Posisi form menjadi relatif dan berada di tengah */
        .form {
            position: relative;
            margin-top: 5%;
           align-content: center;
            padding-right: 10%;
        }

        /* Membuat label dan input lebih selaras */
        .form img {
            width: 40%;
            margin-right: 1%;;
        }
        .form button{
            margin-top: 5%;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="img grid-cols-5">
            <img  src="XBMjuAjRpRkd6TLebVnLm-transformed.png" alt="Image">
        </div>
        <div class="logo">
            <img src="1669103641950 1.png" alt="Logo">

            <div class="form">
                        <form id="formAuthentication" class="mb-3" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-floating form-floating-outline mb-3">
                                <input type="text" class="form-control @error ('name') is-invalid @enderror" id="username" name="name"
                                    placeholder="Enter your name" autofocus />
                                <label for="username">Name</label>
                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                            </div>
                            <div class="form-floating form-floating-outline mb-3">
                                <input type="text" class="form-control @error ('email') is-invalid @enderror"  id="email" name="email"
                                    placeholder="Enter your email" />
                                <label for="email">Email</label>
                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                            </div>
                            <div class="form-floating form-floating-outline mb-3">
                                <input type="password" id="password" class="form-control @error ('password') is-invalid @enderror" name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <label for="password">Password</label>
                                        @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                            </div>
                            <div class="form-floating form-floating-outline mb-3">
                                <input type="password" id="password" class="form-control" name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                    <label for="password">Password Confirmation</label>
                                    {{-- <span class="input-group-text cursor-pointer">
                                        <i class="mdi mdi-eye-off-outline"></i>
                                    </span> --}}
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions"
                                        name="terms" />
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);">privacy policy & terms</a>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">Sign up</button>
                        </form>


                    </div>
                </div>
                <!-- Register Card -->

            </div>
        </div>
    </div>

    <!-- / Content -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

</body>

</html>
