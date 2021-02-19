<!DOCTYPE html>
<html lang="id">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard - IvanMG</title>

        <!-- Asset CSS -->
            @include('admin.asset.css')
        <!-- End of Asset CSS -->

    </head>

    <body>
        <div id="app">

            <!-- Sidebar Menu -->
                @include('admin.partial.sidebar')
            <!-- End of Sidebar Menu -->

            <div id="main">

                <!-- Header Menu -->
                    @include('admin.partial.header')
                <!-- End ofHeader Menu -->
                    
                <!-- Content Menu -->
                    @include('admin.partial.content')
                <!-- End of Content Menu -->

                <!-- Footer Menu -->
                    @include('admin.partial.footer')
                <!-- End of Footer Menu -->
            </div>
        </div>

        <!-- Javascript Asset -->
            @include('admin.asset.js')
        <!-- End of Javascript Asset -->
    </body>

</html>
