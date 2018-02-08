<title>Landing Page Taquillas</title>
<meta charset="UTF-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link rel="stylesheet" href={{asset("bootstrap/css/bootstrap.min.css")}}>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<!-- Font Awesome -->
<link rel="stylesheet" href={{asset("font-awesome/css/font-awesome.min.css")}}>

<!-- JQuery -->
<script src={{asset("js/complementos/jquery.min.js")}}></script>

<!-- JavaScript -->
<script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
<script src="{{ asset('js/index.js') }}"></script>

<!-- SweetAlert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

<script>
    window.onload = getHeaderHeight;
    function getHeaderHeight(){
        try {
            var header = document.getElementsByTagName('header')[0];
            var nav = document.getElementById('nav');
            var navHeight = parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
            var html = document.getElementsByTagName('html')[0];
            header.style.height = parseInt(window.innerHeight) - navHeight + 'px';
            // if (document.URL.includes("login") || document.URL.includes("register")) {
            //     //document.body.style.height = parseInt(window.innerHeight) + 'px';
            //     //html.style.height = parseInt(window.innerHeight) + 'px';
            //     document.body.style.overflow = 'hidden';
            // }
            addEvent();
        } catch (e) {}
    }
</script>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
