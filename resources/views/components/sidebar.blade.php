<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/home">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        @if (auth()->user()->level == 'pelamar')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user_profiles.index') }}">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Profile</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-apply.index')}}">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Job Applications</span>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('perusahaan-profiles.index')}}">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Profile</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/appli">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Job Applications</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('job_postings.index') }}">
                    <i class="mdi mdi-briefcase menu-icon"></i>
                    <span class="menu-title">Pekerjaan</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/create_job">
                    <i class="mdi mdi-folder-plus menu-icon"></i>
                    <span class="menu-title">Upload Pekerjaan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#bookmark">
                    <i class="mdi mdi-bookmark-check menu-icon"></i>
                    <span class="menu-title">Kandidat Disimpan</span>
                </a>
            </li>
        @endif




    </ul>
</nav>
