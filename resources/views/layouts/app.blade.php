<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brainpriz Post Task</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    @yield('content')

    {{-- bootstrap cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })
        @if (session('status'))
            Toast.fire({
                icon: '<?= session('status')['0'] ?>',
                title: '<?= session('status')['1'] ?>'
            })
        @endif
        @if ($errors->any())
            Toast.fire({
                icon: 'warning',
                title: __('Check The Error Messages And Try Again')
            })
        @endif
    </script>

</body>

</html>
