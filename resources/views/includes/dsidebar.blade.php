<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    @role(('Admin'))
                    <img src="{{URL::asset('/images/profile/avatar.png')}}" alt="" class="circle responsive-img valign profile-image">
                    @endrole
                    @role((['Agen','Reseller']))
                    {!! Html::image('images/profile/'. Auth::user()->agen->image, 'profile image', array('class'=>'circle z-depth-0 responsive-img activator')) !!}
                    @endrole
                </div>
                <div class="col col s8 m8 l8">
                    @role(('Admin'))
                    <p class="white-text waves-light waves-effect profile-btn">{!! Auth::user()->username; !!}</p>
                    @endrole
                    @role((['Agen','Reseller']))
                    <p class="white-text waves-light waves-effect profile-btn">{!! Auth::user()->Agen->nama; !!}</p>
                    @endrole
                    <p class="user-roal">{!! Auth::user()->role->name; !!}</p>
                </div>
            </div>
        </li>
        <li class="bold {{ Request::is('dashboard/home') ? 'active' : 'no' }}"><a href="{{ url('dashboard/home')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Dashboard</a>
        </li>
        <li class="bold {{ Request::is('dashboard/profile') ? 'active' : 'no' }}"><a href="{{ url('dashboard/profile') }}" class="waves-effect waves-cyan"><i class="mdi-action-face-unlock"></i>Profile</a>
        </li>
        @role(('Admin'))
        <li class="bold {{ Request::is('dashboard/agen') ? 'active' : 'no' }}"><a href="{{ url('dashboard/agen') }}" class="waves-effect waves-cyan"><i class="mdi-social-group"></i>Agen</a>
        </li>
        <li class="bold {{ Request::is('dashboard/reseller') ? 'active' : 'no' }}"><a href="{{ url('dashboard/reseller') }}" class="waves-effect waves-cyan"><i class="mdi-social-group"></i>Reseller</a>
        </li>
        <li class="bold {{ Request::is('dashboard/stok-barang') ? 'active' : 'no' }}"><a href="{{ url('dashboard/stok-barang') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Stok Barang</a>
        </li>
        <li class="bold {{ Request::is('dashboard/konfirmasiagen') ? 'active' : 'no' }}"><a href="{{ url('dashboard/konfirmasiagen') }}" class="waves-effect waves-cyan"><i class="mdi-action-turned-in"></i>Konfirmasi Agen</a>
        </li>
        <li class="bold {{ Request::is('dashboard/rank') ? 'active' : 'no' }}"><a href="{{ url('dashboard/rank') }}" class="waves-effect waves-cyan"><i class="mdi-action-stars"></i>Ranking</a>
        </li>
        @endrole
        @role(('Agen'))
        <li class="bold {{ Request::is('dashboard/konfirmasireseller') ? 'active' : 'no' }}"><a href="{{ url('dashboard/konfirmasireseller') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Konfirmasi Reseller</a>
        </li>
        @endrole
        @role((['Agen','Reseller']))
        <li class="bold {{ Request::is('dashboard/transaksi') ? 'active' : 'no' }}"><a href="{{ url('dashboard/transaksi') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Order Produk</a>
        </li>
        <li class="bold {{ Request::is('dashboard/pesanan') ? 'active' : 'no' }}"><a href="{{ url('dashboard/pesanan') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i>Pesanan Saya</a>
        </li>
        @endrole
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>