<aside class="main-sidebar sidebar-collapse">
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            {{--<li class="">--}}
                <a href="{{route('allocate')}}">
                    {{--<i class="fa fa-th"></i> <span>Set Rooms</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li class="">
                <a href="{{route('configure')}}">
                    <i class="fa fa-laptop"></i> <span>Configure</span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.accommodate')}}">
                    <i class="fa fa-laptop"></i> <span>Allocate</span>
                </a>
            </li>
            <li class="">
                <a href="/admin/accommodation/documentation">
                    <i class="fa fa-book"></i> <span>Documentation</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
