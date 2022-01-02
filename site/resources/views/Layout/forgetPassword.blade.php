<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USDMS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme8.css">
</head>
<body>
<div class="form-body">
    <div class="website-logo">
        <a href="index.html">
            <div class="logo">
                <img class="logo-size" src="images/logo-light.svg" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <h1 class="text-center">University social data management system</h1>

            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="website-logo-inside">
                        <a href="index.html">
                            <div class="logo">

                            </div>
                        </a>
                    </div>
                    <h3>Password Reset</h3>
                    <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                    <form action="{{route('Layout.forgetPassword')}}" method="post">
                        @csrf
                        <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                        <div class="form-button full-width">
                            <button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
                        </div>
                    </form>
                </div>
                <div class="form-sent">
                    <div class="website-logo-inside">
                        <a href="index.html">
                            <div class="logo">

                            </div>
                        </a>
                    </div>
                    <div class="tick-holder">
                        <div class="tick-icon"></div>
                    </div>
                    <h3>Password link sent</h3>
                    <p>Please check your inbox <a href="http://brandio.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe9791988c93be9791988c938a9b938e929f8a9bd09791">[email&#160;protected]</a></p>
                    <div class="info-holder">
                        <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/forget8.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Oct 2021 14:24:58 GMT -->
</html>
