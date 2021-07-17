<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
    <link href="css/styles.css" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">
    
    <style type="text/css" media="screen">

    	.font{
    		font-family: 'Roboto Mono', monospace;
    	}

    	 .primary{
            color: #00dd00;
        }

        #primary{
            background-color: #212529;
        }    
        
        .mainbutton{
            border: 1px solid #00dd00;
            background-color: #00dd00;
            color: #000000;
        }

        .outlinebutton{
            color: #00dd00;
            background-color: #212529;
            border-color: #00dd00;

        }

        .dark{
            background-color: #212529;

        }
        .d{
            margin-top: -50px;
            
        }
        .d:hover{
            color: #ffffff;
        }
        li{
            margin-right: 20px;
        }

    </style>
</head>
<body class="dark font">
	@yield('content')
</div>



</body>
</html>