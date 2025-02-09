<x-layouts.auth>

    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Ro'yxatdan o'tish</h3>
                    </div>
<div class="panel-body p-3">
<form action="{{ route('register_store') }}" method="POST">
    @csrf
<div class="form-group py-2">
    <div class="input-field"> 
        <span class="far fa-user p-2"></span> 
        <input type="text" name="first_name" placeholder="Ism" required> 
        @error('first_name')
         <p class="alert alert-danger">{{ $message }}</p>
        @enderror
    </div>
</div>
<div class="form-group py-2">
    <div class="input-field"> 
        <span class="far fa-user p-2"></span> 
        <input type="text" name="last_name" placeholder="Familiya" required> 
        @error('last_name')
         <p class="alert alert-danger">{{ $message }}</p>
        @enderror
    </div>
</div>
<div class="form-group py-2">
    <div class="input-field"> 
        <span class="far fa-user p-2"></span>
         <input type="text" name="email" placeholder="Email" required>
         @error('email')
         <p class="alert alert-danger">{{ $message }}</p>
        @enderror 
        </div>
</div>
<div class="form-group py-2">
    <div class="input-field"> 
        <span class="far fa-user p-2"></span>
         <input type="phone" name="phone" placeholder="Tel" required> 
         @error('phone')
         <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        </div>
</div>
<div class="form-group py-1 pb-2">
    <div class="input-field"> 
        <span class="fas fa-lock px-2"></span>
         <input type="password" name="password" placeholder="Parolni Yarating" required>
          <button class="btn bg-white text-muted"> 
            <span class="far fa-eye-slash"></span> 
            </button> 
            @error('password')
         <p class="alert alert-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="input-field" style="margin-top: 2%"> <span class="fas fa-lock px-2"></span> <input type="password" name="password_confirmation" placeholder="Parolni Tasdiqlang" required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
</div>
<button type="submit" class="btn btn-primary btn-block mt-3">Yuborish</button>
<div class="text-center pt-4 text-muted">Kirish  <a href="{{ route('login')}}">Kirish</a> </div>
</form>
</div>

</div>
</div>
</div>
</div>

</x-layouts.auth>