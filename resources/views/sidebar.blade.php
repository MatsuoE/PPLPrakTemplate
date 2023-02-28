<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        
    </div>

    <nav class="text-white text-base font-semibold pt-3">
        <a href="/" class="flex items-center {{Request::is('/', '/cplprodi') ? 'active-nav-link' : 'opacity-75 hover:opacity-100'}}  text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            CPL Prodi
        </a>
        <a href="/blank" class="flex items-center {{Request::is('/blank') ? 'active-nav-link' : 'opacity-75 hover:opacity-100'}}  text-white py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            CPL SNDikti
        </a>
        <a href="/tables" class="flex items-center text-white {{Request::is('/blank') ? 'active-nav-link' : 'opacity-75 hover:opacity-100'}} py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Profil Lulusan
        </a>
        <a href="/forms" class="flex items-center text-white {{Request::is('/blank') ? 'active-nav-link' : 'opacity-75 hover:opacity-100'}} py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            MK
        </a>
        <a href="/tabs" class="flex items-center text-white {{Request::is('/blank') ? 'active-nav-link' : 'opacity-75 hover:opacity-100'}} py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            BK
        </a>
        <a href="/calendar" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            CPMK
        </a>
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
        <i class="fas fa-arrow-circle-up mr-3"></i>
        Sistem Informasi
    </a>
</aside>