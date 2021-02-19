<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>500 - Mazer Admin Dashboard</title>
        
        <!-- Asset CSS -->
            @include('admin.asset.css')
        <!-- End of Asset CSS -->

    </head>

    <body>
        <div id="error">
            
            <div class="error-page container">
                <div class="col-md-8 col-12 offset-md-2">
                    <img class='img-error' src="{{ url('asset_admin/images/samples/error-500.png') }}" alt="Not Found">
                    <div class="text-center">
                        <h1 class='error-title'>System Error</h1>
                        <p class='fs-5 text-gray-600'>The website is currently unaivailable. Try again later or contact the
                            developer.</p>
                        <a href="{{ route('landing') }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                    </div>
                </div>
            </div>

        </div>
    </body>

</html>