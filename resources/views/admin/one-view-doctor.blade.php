<x-layouts.admin-main>



    <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Shifokor haqida</h3>
            <ul class="breadcrumbs mb-3">
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.view-doctors')}}"><button class="btn btn-dark">Ortga</button></a>
              </li>
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
            </ul>
          </div>

          <!-- Doctors About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('storage/'.$doctor->photo )}}"  alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Shifokor</p>
                    <h3 class="mb-4">Familiya: {{$doctor->last_name}}</h3>
                    <h3 class="mb-4">Ism: {{$doctor->first_name}}</h3>
                    <h3 class="mb-4">Kasbi: {{$doctor->profession->name}}</h3>
                    <h3 class="mb-4">Email: {{$doctor->email}}</h3>
                    <p>{{ $doctor->about }}</p>
                    
                </div>               
            </div>          
        </div>        
    </div>
    <!-- Doctors About End -->
        </div>
    </div>
</x-layouts.admin-main>