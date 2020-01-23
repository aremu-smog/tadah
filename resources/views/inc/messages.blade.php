<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Tadah</title>
</head>
<body>
    <div class="website-wrapper">
        <div class="website-container success-message">
            <div>
                    <img src="/img/success.svg" alt="Success Icon">
                    <p>
                        @if ($success)
                            {{$success}}
                        @endif
                    </p> 
                    <a href="/" class="btn btn-white">View all tasks</a>
            </div>
            
            
        </div>
        
    </div>
</body>
</html>