<x-layouts.doctor-main>



    <div class="container">
        <div class="page-inner">
          <div class="page-header">
                <a href="{{ route("doctors.index")}}"><button class="btn btn-dark">Ortga</button></a>
          </div>
          <!-- Doctors About Start -->
          <h3 class="fw-bold mb-3">Bemor haqida</h3>
    <div class="container-xxl py-5">
        <div class="container">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h4 class="mb-4">Familiya: {{$user->last_name}}</h4>
                        <h4 class="mb-4">Ism: {{$user->first_name}}</h4>
                        @foreach ($user->appointments as $appointment )
                        <h5 class="mb-4">Kasallik: {{ $appointment->diagnos }} </h5>
                        @endforeach
                        <h5 class="mb-4">Email: {{$user->email}}</h5>
                        <h5 class="mb-4">Phone: {{$user->phone}}</h5>
                        {{-- <p>{{ $doctor->about }}</p> --}}
                    </div>          
                    @if ( $user->diagnoses )
                    
                    <h4 class="mb-4">Oldingi tashhislar</h4>
                    @foreach (  $user->diagnoses as $diagnos )
                    <div>
                        <h5>Shifokor: {{ $diagnos->doctors->last_name  }} {{ $diagnos->doctors->first_name  }}</h5>
                        <p>{{ $diagnos->diagnosis }}</p>
                        <p> Sana: {{ $diagnos->created_at }}</p>
                    </div>
                    @endforeach
                    @elseif($user->diagnoses->isEmpty())
                    <h4 class="text-muted">Tashhislar mavjud emas</h4>
                    @endif
                    <!-- Comment start -->
                    <form action="{{ route('diagnosis.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="row g-3" style="margin-top: 5%" >
                        <label for="" style="color: rgb(49, 23, 144)">Tashxis yozing</label>
                        <div class="col-12">
                            <textarea name="diagnosis" class="form-control border-0" rows="5" placeholder="Yozmoq"></textarea>
                            <button class="btn btn-success" style="margin-top: 2%">Saqlash</button>
                        </div>
                    </div>
                    </form>
        </div>        
    </div>
    <!-- Doctors About End -->
        </div>
    </div>
</x-layouts.doctor-main>