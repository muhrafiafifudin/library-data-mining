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
                            {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->email }}</span>
                        </span>
                    </a>
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
                <li class="nav-item {{ request()->is('nilai-akurasi') ? 'active' : '' }}">
                    <a href="{{ route('accuracy.index') }}">
                        <i class="fas fa-file-signature"></i>
                        <p>Nilai Akurasi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
