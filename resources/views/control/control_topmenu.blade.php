@php
    $current_route=request()->route()->getName();
@endphp

<ul class="navbar-nav">
    <li class="nav-item">
        <a href="{{ route('dash') }}" class="nav-link {{$current_route=='dash'?'active':''}}">
           <i class="fas fa-th-large"></i> Dashboard</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('patientAdd') }}" class="nav-link {{ request()->is('patient*') ? 'active' : '' }}">
           <i class="fas fa-user-injured"></i> Patients</a>
    </li>
    <li class="nav-item">
        <a href="contact.html" class="nav-link">
           <i class="fas fa-pills"></i> Medicines</a>
    </li>
    <li class="nav-item">
        <a href="contact.html" class="nav-link">
            
           <i class="fas fa-file-pdf"></i> Reports</a>
    </li>
    <li class="nav-item">
        <a href="contact.html" class="nav-link">
           <i class="fas fa-users-cog"></i> Users</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('accountRead') }}" class="nav-link {{ request()->is('settings*') ? 'active' : '' }}">
           <i class="fas fa-cog"></i> Settings</a>
    </li>
</ul>