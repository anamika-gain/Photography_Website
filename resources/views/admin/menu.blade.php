<div class="sl-sideleft">
    <div class="sl-sideleft-menu">
        <a href="{{ URL::to('/home') }}" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href=" {{ route('categories') }}" class=" sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                <span class="menu-item-label">Category</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href=" {{ route('projects') }}" class=" sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-tasks"  aria-hidden="true"></i>
               
                <span class="menu-item-label">Projects</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href=" {{ route('add.post') }}" class=" sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <span class="menu-item-label">Add Posts</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        {{-- <a href="{{ route('add.post') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                <span class="menu-item-label">Posts</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('all.post') }}" class="nav-link">ALL Post</a>
            </li>
            <li class="nav-item"><a href="{{ route('add.post') }} " class="nav-link">Add Post</a>
            </li>


        </ul> --}}


        <a href="{{ route('logout') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-sign-out"></i>
                <span class="menu-item-label">Logout</span>
                <i class="menu-item-arrow fa fa-setting"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
