<x-layouts.main>
    <x-slot:title>
        Shikorimiz
     </x-slot>

     <x-page-header>
        Shikorimiz
     </x-page-header>

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
                    <p class="d-inline-block border rounded-pill py-1 px-4">Shifokor : {{$doctor->first_name}}</p>
                    <h1 class="mb-4">{{$doctor->profession->name}}</h1>
                    <p>{{ $doctor->about }}</p><i class="far fa-check-circle text-primary me-3"></i>Sifatli sog'liqni saqlash</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Faqat malakali shifokorlar</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Tibbiy tadqiqot mutaxassislari</p>

                    @auth
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="{{ route('appointments.index')}}">Qabul</a>
                         @else
                         <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="{{ route('login')}}">Qabul uchun tizimga kiring</a>

                    @endauth
                    

                </div>
               
            </div>


            <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Izohlar</p>
                <h1>Mijozlarimiz qanday fikirda!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @if ($doctor->comments)
                @foreach ($doctor->comments as $comment )
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>{{ $comment->about }}</p>
                        <h5 class="mb-1">{{ $comment->user->first_name }} {{ $comment->user->last_name }}</h5>
                        <span class="fst-italic">{{ $comment->user->created_at }}</span>
                    </div>
                </div>
                @endforeach
                
                @endif              
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    @auth


            <!-- Comment start -->
            <form action="{{ route('comments.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
            <div class="row g-3" style="margin-top: 5%" >
                <label for="" style="color: rgb(49, 23, 144)">Izoh qoldirish</label>
                <div class="col-12">
                    <textarea name="comment" class="form-control border-0" rows="5" placeholder="Yozmoq"></textarea>
                    <button class="btn btn-success" style="margin-top: 2%">Saqlash</button>
                </div>
            </div>
            </form>
            
    @endauth
            
        </div>
        
    </div>
    
    <!-- Doctors About End -->

  

</x-layouts.main>