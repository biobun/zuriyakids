<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="{{URL::asset('/images/avatar.jpg')}}" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <p class="white-text waves-light waves-effect profile-btn">{!! Auth::user()->Agen; !!}</p>
                    <p class="white-text waves-light waves-effect profile-btn">{!! Auth::user()->role->name; !!}</p>
                </div>
            </div>
        </li>
        <li class="bold {{ Request::is('dashboard/home') ? 'active' : 'no' }}"><a href="{{ url('dashboard/home')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
        </li>
        <li class="bold {{ Request::is('dashboard/profile') ? 'active' : 'no' }}"><a href="{{ url('dashboard/profile') }}" class="waves-effect waves-cyan"><i class="mdi-action-face-unlock"></i> Profile</a>
        </li>
        @role(('Admin'))
        <li class="bold {{ Request::is('dashboard/agen') ? 'active' : 'no' }}"><a href="{{ url('dashboard/agen') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Agen</a>
        </li>
        <li class="bold {{ Request::is('dashboard/reseller') ? 'active' : 'no' }}"><a href="{{ url('dashboard/reseller') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Reseller</a>
        </li>
        <li class="bold {{ Request::is('dashboard/stok-barang') ? 'active' : 'no' }}"><a href="{{ url('dashboard/stok-barang') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Stok Barang</a>
        </li>
        <li class="bold {{ Request::is('dashboard/konfirmasiagen') ? 'active' : 'no' }}"><a href="{{ url('dashboard/konfirmasiagen') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Konfirmasi Agen</a>
        </li>
        <li class="bold {{ Request::is('dashboard/transaksi') ? 'active' : 'no' }}"><a href="{{ url('dashboard/transaksi') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Konfirmasi Agen</a>
        </li>

        @endrole
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>