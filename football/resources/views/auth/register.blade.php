<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Register</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" /> <!-- Style-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!--header-->
    <div class="header-w3l">
        <h1>Register</h1>
    </div>
    <!--//header-->
    <!--main-->
    <div class="main-w3layouts-agileinfo">
        <!--form-stars-here-->
        <div class="wthree-form">
            <form action="{{ route('register_store') }}" method="post">
                @csrf

                <div class="form-sub-w3">
                    <input type="text" name="email" placeholder="Email" required="" />
                </div>
                <div class="form-sub-w3">
                    <input type="text" name="full_name" placeholder="Username" required="" />
                </div>
                <div class="form-sub-w3">
                    <input type="text" name="phone" placeholder="Phone" required="" />
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="Password" placeholder="Password" required="" />
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="confirm_password" placeholder="Reset Password" required="" />
                </div>
                <span id='message'></span>
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
        <!--//form-ends-here-->
    </div>
    <!--//main-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script>
        $('#password, #confirm_password').on('keyup', function() {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });
    </script>
</body>

</html>
