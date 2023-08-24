<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data Mining</h4>
                </li>
                <li class="nav-item {{ request()->is('data-training') ? 'active' : '' }}">
                    <a href="{{ route('training-data.index') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Data Training</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('probabilitas') ? 'active' : '' }}">
                    <a href="{{ route('probability.index') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Probabilitas</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('pengujian-naive-bayes') ? 'active' : '' }}">
                    <a href="{{ route('naive-bayes.index') }}">
                        <i class="far fa-chart-bar"></i>
                        <p>Pengujian Naive Bayes</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
