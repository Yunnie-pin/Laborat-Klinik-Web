<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ route('riwayat-pemeriksaan') }}">
                <i class="bi bi-grid"></i>
                <span>Riwayat Pemeriksaan</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <hr>


        <li class="nav-heading">Super Admin Pages</li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('list-user') }}">
                <i class="bi bi-grid"></i>
                <span>Data Petugas / User</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ route('list-bidang') }}">
                <i class="bi bi-grid"></i>
                <span>Data Bidang Pemeriksaan</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ route('list-metode') }}">
                <i class="bi bi-grid"></i>
                <span>Data Metode Pemeriksaan</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ route('list-parameter') }}">
                <i class="bi bi-grid"></i>
                <span>Data Parameter </span>
            </a>
        </li><!-- End Dashboard Nav -->
        


        <li class="nav-heading">Administrasi Pages</li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('list-pasien') }}">
                <i class="bi bi-grid"></i>
                <span>Data Pasien</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ route('hasil-pemeriksaan') }}">
                <i class="bi bi-grid"></i>
                <span>Hasil Pemeriksaan</span>
            </a>
        </li><!-- End Dashboard Nav -->



        <li class="nav-heading">Poli Pages</li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('registrasi-pemeriksaan') }}">
                <i class="bi bi-grid"></i>
                <span>Registrasi Pemeriksaan</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ route('review-pemeriksaan') }}">
                <i class="bi bi-grid"></i>
                <span>Review Pemeriksaan</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">Laborat Pages</li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('list-antrean-pemeriksaan') }}">
                <i class="bi bi-grid"></i>
                <span>Antrean Pemeriksaan</span>
            </a>
        </li><!-- End Dashboard Nav -->


        
    </ul>

</aside>