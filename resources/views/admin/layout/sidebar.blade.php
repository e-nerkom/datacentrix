        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li class="{{ Request::is('admin/welcome') ? 'active' : '' }}">
                                <a href="/admin/welcome">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/user') ? 'active' : '' }}">
                                <a href="/admin/user">
                                    <i class="fa fa-user-circle"></i>
                                    <span>Pengguna</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/product') ? 'active' : '' }}">
                                <a href="/admin/#">
                                    <i class="fa fa-th-large"></i>
                                    <span>Produk</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/team') ? 'active' : '' }}">
                                <a href="/admin/#">
                                    <i class="fa fa-users"></i>
                                    <span>Anggota Tim</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/about') ? 'active' : '' }}">
                                <a href="/admin/#">
                                    <i class="fa fa-building"></i>
                                    <span>Tentang Perusahaan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- Sidebar Navigation End -->

            
        </aside>
        <!-- Sidebar End -->