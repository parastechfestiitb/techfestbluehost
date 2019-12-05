<nav class="fixed-top bg-dark">
    @include('templates.navigation')
    @if(isset(session()->get('participant')->phone) && session()->get('participant')->phone)
        <div class="search">
            <div class="overlay pointer"></div>
        </div>
        <div class="hamburger">
            <div class="overlay pointer"></div>
        </div>
        <div class="bars pointer"> <i class="fas fa-bars"></i></div>
        <div class="cover"></div>
        <div class="sidenav">
            <div class="profile">
                <img src="{{session('googleData')->picture}}" alt="user picture" class="img-responsive h-100">
            </div>
            <div class="h-100 w-100 d-flex align-items-center">
                <div class="d-flex flex-column menu w-100">
                    @foreach($participant->events()->get() as $event)
                        <div class="elem w-100 fa-2x pointer">Element {{$event->name}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="second-sidenav">
            <div class="overlay">
                <div class="h-100 w-100 d-flex align-items-center">
                    <div class="elem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aliquid minus laborum cum quasi harum eum nulla suscipit consequuntur, itaque quae reiciendis exercitationem, aliquam corrupti asperiores deserunt ducimus dolores natus!</div>
                </div>
            </div>
        </div>
    @else
        <div class="overlay pointer" id="signinButton">
            <div class="bars pointer">
                <i class="fas fa-user"></i>
            </div>
        </div>
    @endif

</nav>