<x-layouts.user-main>

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Foydalanuvchi Ma'lumotlarini Tahrirlash</div>
                        </div>
                        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Telefon raqam</label>
                                            <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Profil rasmi</label>
                                            <input type="file" class="form-control" name="photo" />
                                            <br>
                                            <img src="{{ asset('storage/' . $user->photo) }}" alt="Profil rasmi" class="avatar-img rounded" width="120">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <label class="mb-3"><b>Ism</b></label>
                                        <div class="form-group form-group-default">
                                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $user->first_name) }}" required />
                                        </div>
                                        <label class="mb-3"><b>Familiya</b></label>
                                        <div class="form-group form-group-default">
                                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $user->last_name) }}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Saqlash</button>
                                <a href="/users" class="btn btn-danger">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layouts.user-main>
