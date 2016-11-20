<!doctype html>
<html>
<head>
    @include('admin-includes.head')
</head>
<body>
<div class="container">

    <header>

        @include('admin-includes.admin-header')

    </header>


    <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            @include('admin-includes.admin-sidebar')
        </div>

        <div class="col-md-10 content">


            <div class="panel panel-default">
                <div class="panel-heading">


                    @yield('title')


                </div>
                <div class="panel-body">

                    <div class="container">
                        <div class="row">

            @yield('content')


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <footer class="row">
        @include('admin-includes.footer')
    </footer>

</div>
</body>
</html>