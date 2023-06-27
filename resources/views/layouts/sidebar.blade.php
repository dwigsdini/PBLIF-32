<div class="sidebar clearfix">

    <ul class="sidebar-panel nav">
      <li class="sidetitle">MAIN</li>
      <li><a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}"><span class="icon color5"></span>Home</a></li>
      <li><a href="/dashboard/matkul" class="{{ Request::is('dashboard/matkul') ? 'active' : '' }}"><span class="icon color5"></span>Mata Kuliah</a></li>
      <li><a href="/"><span class="icon color6"></span>Landing Page</a></li>

      @can('admin')
      <li class="sidetitle">Administrator</li>
      <li><a href="/dashboard/mahasiswa" class="{{ Request::is('dashboard/mahasiswa') ? 'active' : '' }}"><span class="icon color6"></span>Mahasiswa</a></li>
      @endcan



    </li>
  </div><i class="fa-solid fa-user-tie"></i>