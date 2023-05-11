@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body {
            margin: 0px;
        }

        .section {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        .image_part {
            width: 100%;

            box-sizing: border-box;
            background-color: #001a2d;
        }

        .form-control {
            width: 500px;
        }
    </style>

</head>

<body>
    <div class="section">
        <div class="image_part">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <img src="/draw2.webp" alt="" srcset="">
            </div>

        </div>
        <div class="form_part">
            <div class="form_box">

                <div class="d-flex justify-content-center align-items-center vh-100">
                    
                    
                    
                    <form action="{{url('/')}}/register" method="POST">
                    @csrf
                    
                        <h1 class="mb-4">Login/Siginup</h1>
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                        
                        <span class="text-danger">
                            @error('mail')
                                {{$message}}
                            @enderror
                        </span>
                        <div class="form-outline text-center mb-4">
                            <input type="mail" id="form13" name="mail" class="form-control" value='{{old("mail")}}'/>
                            <label class="form-label" for="form13">Your mail</label>
                        </div>
                        <span class="text-danger mb-4">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>
                        <div class="form-outline text-center mb-4">
                            <input type="password" id="form14" name="password" class="form-control" />
                            <label class="form-label" for="form13">Password</label>
                        </div>
                        
                        <div class="d-block">
                            <button type="submit" class="btn btn-primary mb-4">Login</button>
                        </div>
                        
                        
                        <div class="d-inline-block">
                            <a href="{{ url('/profile') }}">Signup</a>
                        </div>&nbsp;&nbsp;&nbsp;
                        <div class="d-inline-block">
                            <a href="#">Help</a>
                        </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        @if(Session::has('success_failed'))
            @if(Session::get('success_failed') == 'success')
                SweetAlert('login successfull','');
            @elseif(Session::get('success_failed') == 'Not Found')
                SweetAlert('Failed!!','Mail ID not Found')
            @elseif(Session::get('success_failed') == 'failed')
                SweetAlert('Failed!!','Login Credentials are not matching')
            @endif
            var a="<?=Session::get('success_failed')?>"
            
        @endif


        @if(Session::has('some_data'))
            var a="<?=Session::get('some_data')?>"
            console.log(a);
        @endif
        

        function SweetAlert(title,msg){
            swal({
                title: title,
                text: msg,
                icon: "error",
                button: "OK",
            });
        }
        
    </script>
    @include('layouts.footer')
    

</body>

</html>