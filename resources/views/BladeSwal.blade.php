<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti&display=swap" rel="stylesheet">
    <title>blade</title>

    @vite('resources/js/app.js')

</head>
<body class="font-athiti m-3">
<p class="text-base">Blade</p>

<button
    onclick="mySweet()"
    class="bg-teal-500 px-3 py-2 mr-4 no-underline rounded text-white hover:bg-teal-600 hover:scale-110"
>
    show swal
</button>
<button
    onclick="toast()"
    class="bg-teal-500 px-3 py-2 mr-4 no-underline rounded text-white hover:bg-teal-600 hover:scale-110"
>
    show toast
</button>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function mySweet() {
        swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'question',
            confirmButtonText: 'Cool',
            showCancelButton: true,
            cancelButtonText: 'cancel',
            cancelButtonColor: '#d33',

        })
    }

    function toast() {
        const Toast = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        })

        Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
        })
    }
</script>
</body>
</html>
