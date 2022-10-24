
                        <!DOCTYPE html>
                        <html lang="en">
                        
                        <head>
                            <meta charset="utf-8">
                            <title>DarkPan - Bootstrap 5 Admin Template</title>
                            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                            <meta content="" name="keywords">
                            <meta content="" name="description">
                        
                            <!-- Favicon -->
                            <link href="img/favicon.ico" rel="icon">
                        
                            <!-- Google Web Fonts -->
                            <link rel="preconnect" href="https://fonts.googleapis.com">
                            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
                            
                            <!-- Icon Font Stylesheet -->
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
                        
                            <!-- Libraries Stylesheet -->
                            <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
                            <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
                        
                            <!-- Customized Bootstrap Stylesheet -->
                            <link href="css/bootstrap.min.css" rel="stylesheet">
                        
                            <!-- Template Stylesheet -->
                            <link href="css/style.css" rel="stylesheet">
                        </head>
                        
                        
                        <body>
                        
                        
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card mt-5" style= "background-color:tranparent;border:none;"> 
                                       
                                         
                                         
                                     
                                       
                                            <div class="card-body" style="background-color:#191C24; ">
                                                <div class="container-fluid p-5 px-4">
                                                    <div class="row g-4">
                                                        <div class="col-sm-12 col-xl-12">
                                                            <div class="bg-secondary rounded h-100 p-5">
                                             <div class="card-header">{{ __('Login') }}</div>
                            
                                                <form method="POST" action="{{ route('login') }}" >
                                                    @csrf
                                                        
                                                    <div class="row mb-3">
                                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        
                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                        
                                                    <div class="row mb-3">
                                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        
                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                        
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Remember Me') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row mb-0">
                                                        <div class="col-md-8 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Login') }}
                                                            </button>
                        
                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                        
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    <!-- JavaScript Libraries -->
                            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                            <script src="lib/chart/chart.min.js"></script>
                            <script src="lib/easing/easing.min.js"></script>
                            <script src="lib/waypoints/waypoints.min.js"></script>
                            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                            <script src="lib/tempusdominus/js/moment.min.js"></script>
                            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
                        
                            <!-- Template Javascript -->
                            <script src="js/main.js"></script>
                        </body>
                        
                        </html>
                        
                        