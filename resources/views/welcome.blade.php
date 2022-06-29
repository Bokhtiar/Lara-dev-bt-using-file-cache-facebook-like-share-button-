<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Facebook Like and Share Buttons in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        @foreach ($blogs as $blog)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ $blog->content }}</p>

                    <div class="likeShareBtnmt-3">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0"
                            nonce="gADfnUf7"></script>
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width=""
                            data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
