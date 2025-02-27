<x-layouts.main>
    <x-slot:title>
        Testimonial
    </x-slot>


    <x-page-header>
        Testimonial
    </x-page-header>


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Fikirlar</p>
                <h1>Bemorlarimiz nima deydi!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @if ($comments)
                    @foreach ($comments as $comment)
                        <div class="testimonial-item text-center">
                            <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-1.jpg"
                                style="width: 100px; height: 100px;">
                            <div class="testimonial-text rounded text-center p-4">
                                <p>{{ $comment->about }}</p>
                                <h5 class="mb-1">{{ $comment->user->first_name }}
                                    {{ $comment->user->last_name }}</h5>
                                <span class="fst-italic">{{ $comment->user->created_at }}</span>
                            </div>
                        </div>
                    @endforeach

                @endif

            </div>
        </div>
    </div>
    <!-- Testimonial End -->





</x-layouts.main>
