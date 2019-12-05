<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$data['title'] or ""}}  Admin - TechFest</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.12/css/all.css">;
    <link rel="manifest" href="/manifest.json" />
    <script>
        let OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "cf3b3dca-96eb-4cd0-974d-59929a134d18",
            });
        });
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{$user->name or ''}}</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{route('admin.logoutGet')}}">Sign out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Database</span>
                    </h6>
                    <sidenav v-on:table-update="tableId = $event"></sidenav>
                    <hr>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Forms</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        @foreach($links as $name=>$route)
                        <li class="nav-item">
                            <a class="nav-link" href="{{$route or ''}}" target="_blank">
                                {{$name or ""}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <dashboard v-bind:table-id="tableId"></dashboard>
            </main>
        </div>
    </div>
</div>
{{--<script src="https://chatwee-api.com/v2/script/5a1a9ab9bd616d4b1fb7ee13.js"></script>--}}
<script src="{{asset('js/feather.js')}}"></script>
<script>
    feather.replace();
    const _routes = {
        'role' : '{!! route('admin.role.Get') !!}',
        'roleCreate': '{!! route('admin.role.createPost') !!}',
        'roleDelete': '{!! route('admin.role.deleteIdPost') !!}',
        {{--'formCreate': '{!! form('admin.from.Get') !!}'--}}
    };
    const _csrf = '{{csrf_token()}}';
</script>
<script src="{{asset('js/admin.js')}}"></script>
</body>
</html>

