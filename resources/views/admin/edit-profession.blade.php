<x-layouts.admin-main>


    <!-- Profession -->
        <div class="container">
            <div class="page-inner">
              <div class="page-header">
                <h3 class="fw-bold mb-3">Profession</h3>
                <ul class="breadcrumbs mb-3">
                  <li class="nav-home">
                    <a href="/admin">
                      <i class="icon-home">Home</i>
                    </a>
                  </li>
                  <li class="separator">
                    <i class="icon-arrow-right"></i>
                  </li>
                  <li class="nav-item">
                    <a href="">Mutaxasislk ro'yxati</a>
                  </li>
                  <li class="separator">
                    <i class="icon-arrow-right"></i>
                  </li>
                  <li class="nav-item">
                    <a href="#">Basic Form</a>
                  </li>
                </ul>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">               
                    <div class="card-header">
                      <div class="card-title">Mutahasislik o'zgartirish</div>
                    </div>
                    <form action="{{ route('professions.update', [ 'profession'=>$profession->id ])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <label for="email2">Mutahasislik nomi</label>
                            <input
                              type="text"
                              class="form-control"
                              name="profession"
                              placeholder="Enter Email" value="{{ $profession->name }}"/>
                              @error('profession')
                               <p class="alert alert-danger">{{ $message }}</p>
                              @enderror
                          </div>
                         
                      </div>
                    </div>
                    <div class="card-action">
                      <button class="btn btn-success">Saved</button>
                    </div>
    
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
    
    
    <!-- Profession  End-->
    
    </x-layouts.admin-main>