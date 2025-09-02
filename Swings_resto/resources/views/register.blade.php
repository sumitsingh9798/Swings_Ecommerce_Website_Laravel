<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration page</title>
    {{-- <link rel="stylesheet" href="css/register.css"> --}}
    {{-- <link rel="stylesheet" href={{ asset('css/register.css') }}> --}}
    
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile Number</label>

                                <div class="form-group row">
                                    <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile</label>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    @endsection

    {{-- <script src="js/register.js"></script> --}}
   
</body>
</html>