<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <div class="sidenav-menu-heading">Chalet</div>
            <!-- Sidenav Accordion (Pages)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                Chalet
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <!-- Nested Sidenav Accordion (Pages -> Account)-->
                    <a class="nav-link" href="{{ route('admin.chalet.list-chalet') }}">List Chalet</a>
                    <a class="nav-link" href="{{ route('admin.chalet.add') }}">Add Chalet</a>
                    <a class="nav-link" href="{{ route('admin.chalet.my-chalet') }}">My Chalet</a>
                </nav>
            </div>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Address</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                data-target="#collapseAddress" aria-expanded="false" aria-controls="collapseAddress">
                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                Address
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseAddress" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.address.district') }}">District</a>
                    <a class="nav-link" href="{{ route('admin.address.city') }}">City</a>
                    <a class="nav-link" href="{{ route('admin.address.state') }}">State</a>
                </nav>
            </div>

            <!-- Sidenav Heading (UI Toolkit)-->
            <div class="sidenav-menu-heading">User</div>
            <!-- Sidenav Accordion (Layout)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                User
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                    <!-- Nested Sidenav Accordion (Layout -> Navigation)-->
                    <a class="nav-link" href="{{ route('admin.user.list') }}"  data-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                        List User</a>
                    <a class="nav-link" href="{{ route('admin.user.add') }}" data-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                        Add User</a>
            </div>
            
            <!-- Sidenav Heading (Addons)-->
            <div class="sidenav-menu-heading">Accommodation</div>
            <!-- Sidenav Link (Charts)-->
            <a class="nav-link" href="{{ route('admin.accommodation.list') }}">
                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                Accommodation
            </a>
            <div class="sidenav-menu-heading">Report</div>
            <!-- Sidenav Link (Tables)-->
            <a class="nav-link" href="{{ route('admin.report') }}">
                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                Report
            </a>
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>
