<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="آکادمی رایانش | آموزش فتوشاپ" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>رایانش</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style -menu.min.css" rel="stylesheet">
    <link href="/css/footer.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <script src="/js/jquery.min.js" type="text/javascript">
    </script>
    <script src="/js/bootstrap.min.js">
    </script>
    <script src="/js/jquery.mixitup.min.js" type="text/javascript">
    </script>
</head>
<body>
<h2>register page</h2>

    <form action="{{ route('auth.create') }}" method="post">
        @csrf

        @if(Session::get('Success'))
            {{ Session::get('Success') }}
        @endif
        @if(Session::get('false'))
            {{ Session::get('false') }}
        @endif
        <input type="text" name="name" id="" placeholder="Name" value="{{ old('name') }}">
        <span>@error('name') {{ $message }} @enderror</span>
        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
        <span>@error('email') {{ $message }} @enderror</span>
        <input type="password" name="password" id="" placeholder="Password">
        <span>@error('password') {{ $message }} @enderror</span>
        <input type="submit" value="submit">
    </form>

</body>
</html>