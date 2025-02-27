<x-layouts.user-main>

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <!-- Appointments Ro‘yxati -->
                    <div class="card mt-4">
                        <div class="card-header">
                            <div class="card-title">Tibbiy Uchashuvlar</div>
                        </div>
                        <div class="card-body">
                            @if ($appointments->isEmpty())
                                <p>Hozircha hech qanday uchrashuvlar mavjud emas.</p>
                            @else
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Shifokor</th>
                                            <th>Belgilangan vaqt</th>
                                            <th>Tashhis</th>
                                            <th>Amallar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appointments as $appointment)
                                            <tr>
                                                <td>{{ $appointment->doctor->first_name }}
                                                    {{ $appointment->doctor->last_name }}</td>
                                                <td>{{ $appointment->appointment_times }}</td>
                                                <td>{{ $appointment->diagnos }}</td>
                                                <td>
                                                    <form action="{{ route('appointments.destroy', $appointment->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">O‘chirish</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>

                    <div class="card-action">
                        <a href="/user" class="btn btn-danger">Ortga</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layouts.user-main>
