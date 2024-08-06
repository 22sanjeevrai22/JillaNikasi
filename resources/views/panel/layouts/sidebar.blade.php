<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}" aria-expanded="false" aria-controls="collapseDashboards">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboard
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="sidenav-menu-heading">Custom</div>
            <a class="nav-link collapsed" href="{{ route('persons.index') }}"  aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                Persons
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <a class="nav-link collapsed" href="{{ route('vehicles.index') }}" aria-expanded="false" aria-controls="collapseApps">
                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                Vehicles
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <a class="nav-link collapsed" href="{{ route('vehicle-types.index') }}" aria-expanded="false" aria-controls="collapseApps">
                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                Vehicle Types
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <a class="nav-link collapsed" href="{{ route('goods.index') }}" aria-expanded="false" aria-controls="collapseFlows">
                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                Goods
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <!-- Sidenav Heading (UI Toolkit)-->
            <div class="sidenav-menu-heading">UI Toolkit</div>
            <!-- Sidenav Accordion (Layout)-->
            <a class="nav-link collapsed" href="javascript:void(0);" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                Layout
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <!-- Sidenav Accordion (Components)-->
            <a class="nav-link collapsed" href="javascript:void(0);" aria-expanded="false" aria-controls="collapseComponents">
                <div class="nav-link-icon"><i data-feather="package"></i></div>
                Components
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <!-- Sidenav Accordion (Utilities)-->
            <a class="nav-link collapsed" href="javascript:void(0);" aria-expanded="false" aria-controls="collapseUtilities">
                <div class="nav-link-icon"><i data-feather="tool"></i></div>
                Utilities
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <!-- Sidenav Heading (Addons)-->
            <div class="sidenav-menu-heading">Plugins</div>
            <!-- Sidenav Link (Charts)-->
            <a class="nav-link" href="charts.html">
                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                Charts
            </a>
            <!-- Sidenav Link (Tables)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                Tables
            </a>
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">Valerie Luna</div>
        </div>
    </div>
</nav>
