<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    @yield('content')
 
@vite('resources/js/app.js')  
<script>
    const msgError = document.querySelector('.msg-error');
    const msgParent = document.querySelector('.msg-parent');
    msgError.addEventListener('click', function(){
        msgParent.classList.add('hidden');
    });
</script>  
</body>
</html>