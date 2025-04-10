<x-layouts.admin-main>



    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Forms</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="/admin">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forms</a>
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
                            <div class="card-title">Shifokor</div>
                        </div>

                        <form action="{{ route('doctors.update', ['doctor' => $doctor->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="email2">Email Address</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email" value="{{ $doctor->email }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" value="{{ $doctor->password }}" />

                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Kengroq malumot</label>
                                            <textarea class="form-control" name="about" rows="5">{{ $doctor->about }}
                        </textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Foto</label>
                                            <input type="file" class="form-control-file" name="photo">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <label class="mb-3"><b>Ism</b></label>
                                        <div class="form-group form-group-default">
                                            <input name="first_name" type="text" class="form-control"
                                                placeholder="Ism" value="{{ $doctor->first_name }}" />

                                        </div>
                                        <label class="mb-3"><b>familiya</b></label>
                                        <div class="form-group form-group-default">
                                            <input name="last_name" type="text" class="form-control"
                                                placeholder="Familiya" value="{{ $doctor->last_name }}" />

                                        </div>
                                        <label class="mb-3"><b>Mutahasislik</b></label>
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6">
                                                <select class="form-select border-0" style="height: 55px;"
                                                    name="profession_id">
                                                    <option value="{{ old('profession_id', $doctor->profession_id) }}"
                                                        selected>{{ $doctor->profession->name }}</option>
                                                    @foreach ($professions as $profession)
                                                        <option value="{{ $profession->id }}">{{ $profession->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Saved</button>
                                <a href="/admin/view-doctors" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>







</x-layouts.admin-main>
