<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="" class="brand-link">
            <img src="{{asset('assets/img/about/logo.jpg')}}" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">ՈՍԿԵՎԱՆ</span>
        </a>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
{{--                <img src="{{asset('assets/img/worker/' .$admin_info['img'])}}" class="img-circle elevation-2" alt="User Image">--}}
            </div>
            <div class="info">
{{--                <a href="#" class="d-block">{{$admin_info['name'] . ' ' . $admin_info['lastname']}}</a>--}}
            </div>
        </div>
        @php
            $menu = \App\Models\Menu::where('id', '>', 1)->where('is_drop', 0)->get();
            $role = 2;  //stanal loginic heto
        @endphp
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach($menu as $value)
                    @if($role = 0 || $role == $value->id)
                        <li class="nav-item">
                            <a href="{{route('worker_info', $value->id)}}" class="nav-link">
                                {{--                        <img src="{{asset('assets/img/ambulance/ambulance.jpg')}}" class="brand-image img-circle elevation-3 admin_menu_img">--}}
                                <p>
                                    {{$value->name}}
                                </p>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
