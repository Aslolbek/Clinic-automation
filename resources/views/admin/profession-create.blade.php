<x-layouts.admin-main>


    <!-- Profession -->
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

                <!-- Contoller profession -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Mavjud faoliyat turlari</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Mutaxasislik</th>
                                            <th>View</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Profession</th>
                                            <th>View</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($professions as $profession)
                                            <tr>
                                                <td>{{ $profession->name }}</td>

                                                <td><a
                                                        href="{{ route('one-view-profession', ['profession' => $profession->id]) }}"><button
                                                            class="btn btn-success">Ko'rish</button></a></td>

                                                <td><a
                                                        href="{{ route('professions.edit', ['profession' => $profession->id]) }}"><button
                                                            class="btn btn-warning">Taxrirlash</button></a></td>

                                                <td>
                                                    <form
                                                        action="{{ route('professions.destroy', ['profession' => $profession->id]) }}"
                                                        method="POST"
                                                        onsubmit="return confirm(' Siz Hozir mutahasislikni o\'chirsangiz shu mutaxasislikda ishlayotgan shiforlar ham o\'chiriladi! Rostdan ham o\'chirmoqchimisiz')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">
                                                            O'chirish
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Contoller profession-->



                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Mutahasislik yaratish</div>
                        </div>

                        <form action="{{ route('professions.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="email2">Mutahasislik nomi</label>
                                            <input type="email" class="form-control" name="profession"
                                                placeholder="Mutahasislikni yozing" value="{{ old('profession') }}" />
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
