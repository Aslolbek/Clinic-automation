<x-layouts.main>
    <x-slot:title>
        Shifokorlar
    </x-slot>


    <x-page-header>
        Shifokorlar
    </x-page-header>


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Shifokorlar</p>
                <h1>{{ $profession->name }}</h1>
            </div>


            {{-- Hodimlar ro'yxati --}}

            <div class="row g-4">
                @foreach ($doctors as $doctor)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('storage/' . $doctor->photo) }}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>{{ $doctor->first_name }}</h5>
                                <a href="">
                                    <p class="text-primary">{{ $doctor->profession->name }}</p>
                                </a>
                                <div class="team-social text-center">
                                    <a class="btn btn-square"
                                        href="{{ route('doctors.show', parameters: ['doctor' => $doctor->id]) }}"><button
                                            class="btn btn-success">Kirish</button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
                {{ $doctors->links() }}
            </div>
        </div>
    </div>
    <!-- Team End -->


</x-layouts.main>
