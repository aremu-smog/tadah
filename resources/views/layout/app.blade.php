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
        <div class="website-container">
            <header class="main-header">
                <div class="container"><a href="/"><img src="/img/tadah-logo.svg" alt="Tadah Logo"></a></div>
            </header>
            <section>
              
                
                @yield('content')
            </section>
            @include('inc.create-button')
        </div>
        
    </div>
</body>
</html>