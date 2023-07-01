<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{route('glxavor.glxavor')}}" class="brand-link">
            <img src="{{asset('assets/img/gallery/logo.jpg')}}" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">ՈՍԿԵՎԱՆ</span>
        </a>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/img/worker/' .$admin_info['img'])}}" class="img-circle elevation-2 admin_foto" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin', $worker_id)}}" class="d-block">{{$admin_info['name'] . ' ' . $admin_info['lastname']}}</a>
            </div>
        </div>
        @php
            $menu = \App\Models\Menu::where('id', '>', 1)->get();
            $role = $admin_info['role'];  //stanal loginic heto
        @endphp
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach($menu as $value)
                    @if($role == 1 || $role == $value->id)
                        <li class="nav-item">
                            <a href="{{($value->is_worker) ? route('worker_info', $value->id) : route($value->admin_url)}}" class="nav-link">
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
