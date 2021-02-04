<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Semud') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">

        <!-- Styles -->
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
		
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Scripts -->
		<script src="{{ mix('js/app.js') }}" defer></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <style>
    
	body {
		color: #fff;
		font-family: 'Poppins', sans-serif;
	}
    .form-control{
		height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: #e2e2e2;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 450px;
		margin: 50px auto;
	}

    .card{
        padding: 30px;
    }
	.signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 20px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #d83838;
		border: none;
        margin-left: 13%;
		min-width: 300px;
    }

	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #d64747 !important;
        outline: none;
	}
	p{
		font-weight: bold;
		font-size: 12px;
		font-family: Poppins;
	}

	hr.hr-text {
		position: relative;
		border: none;
		height: 1px;
		background: #999;
	}

	hr.hr-text::before {
			content: attr(data-content);
			display: inline-block;
			background: #fff;
			font-weight: bold;
			font-size: 0.95rem;
			color: #999;
			border-radius: 30rem;
			padding: 0.2rem 2rem;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
}

	#customBtn{
		font-size: 18px;
        font-weight: bold;
		font-family: Poppins; 
		color: rgb(31, 30, 30);
		background: #fcf8f8;
		border: none;
        margin-left: 13%;
		min-width: 300px;
	}

    .signup-form a{
		color: rgb(233, 37, 37);
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #3598dc;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
    }
</style>

    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
