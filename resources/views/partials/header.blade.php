{{-- HEADER --}}
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <a class="navbar-brand" href="{{ route('homepage') }}">BooleanSchool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('classrooms.index') }}">Classrooms</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('classrooms.create') }}">New Classrooms</a>
            </li>
          </ul>
        </div>
      </nav>
</header>