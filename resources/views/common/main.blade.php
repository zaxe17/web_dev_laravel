<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .navbar-shadow {
            box-shadow: 
                rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, 
                rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        .footer-shadow {
            box-shadow: 
                rgba(0, 0, 0, 0.25) 0px 54px 55px, 
                rgba(0, 0, 0, 0.12) 0px -12px 30px, 
                rgba(0, 0, 0, 0.12) 0px 4px 6px, 
                rgba(0, 0, 0, 0.17) 0px 12px 13px, 
                rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .form-shadow {
            box-shadow: 
                rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, 
                rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        }

        .input-shadow {
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, 
                rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset, 
                rgba(0, 0, 0, 0.25) 3px 3px 6px 1px;
        }

        .button-shadow {
            box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        }

        .icons {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #FFFFFF;
            -webkit-mask: var(--svg) no-repeat center;
            mask: var(--svg) no-repeat center;
            -webkit-mask-size: contain;
            mask-size: contain;
        }

        .hover-links {
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

        .hover-links::before {
            content: '';
            position: absolute;
            height: 1px;
            width: 100%;
            bottom: 0;
            left: 0;
            background-color: #1f2937;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease-in-out;
        }

        .hover-links:hover::before {
            transform: scaleX(1);
        }

        .form-animation {
            opacity: 0;
            animation: fade-in 1s ease-in forwards;
            animation-delay: var(--delay);
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
                filter: blur(3px);
            }

            100% {
                opacity: 1;
                filter: blur(0);
            }
        }

        .footer-animation {
            animation: footer-up 1s ease-in forwards;
            animation-delay: 0.5s;
            transform: translateY(120px);
            opacity: 0;
        }
        
        @keyframes footer-up {
            0% {
                transform: translateY(120px);
                opacity: 0;
            }
            
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .card-fade {
            opacity: 0;
            animation: card-fade 1s ease-in forwards;
            animation-delay: var(--card-delay);
        }
        
        @keyframes card-fade {
            0% {
                opacity: 0;
                filter: blur(3px);
            }
            
            100% {
                opacity: 1;
                filter: blur(0);
            }
        }
        
        .table-animation {
            opacity: 0;
            filter: blur(3px);
            animation: table-up 1s ease-in forwards;
            animation-delay: var(--table-delay);
            transform: translateY(20px);
        }

        @keyframes table-up {
            0% {
                opacity: 0;
                filter: blur(3px);
                transform: translateY(20px);
            }
            
            100% {
                opacity: 1;
                filter: blur(0);
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    @include('common.header')

    @yield('content')

    @include('common.footer')
</body>

</html>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>