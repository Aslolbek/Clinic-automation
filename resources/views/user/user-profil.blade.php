<x-layouts.user-main>

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Foydalanuvchi Profili</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="photo">Profil rasmi</label>
                                        <br>
                                        <img src="{{ asset('storage/' . $user->photo) }} " alt="Profil rasmi"
                                            class="avatar-img rounded" width="120">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" value="{{ $user->email }}"
                                            readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Telefon raqam</label>
                                        <input type="text" class="form-control" value="{{ $user->phone }}"
                                            readonly />
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <label class="mb-3"><b>Ism</b></label>
                                    <div class="form-group form-group-default">
                                        <input type="text" class="form-control" value="{{ $user->first_name }}"
                                            readonly />
                                    </div>
                                    <label class="mb-3"><b>Familiya</b></label>
                                    <div class="form-group form-group-default">
                                        <input type="text" class="form-control" value="{{ $user->last_name }}"
                                            readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                class="btn btn-primary">Tahrirlash</a>
                            <a href="/admin/view-users" class="btn btn-danger">Ortga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








</x-layouts.user-main>
