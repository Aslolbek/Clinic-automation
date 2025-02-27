<x-layouts.admin-main>


    <div class="container">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Shifokorlar</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>F.I.O</th>
                                            <th>Mutaxasislik</th>
                                            <th>Office</th>
                                            <th>View</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>F.I.O</th>
                                            <th>Profession</th>
                                            <th>Office</th>
                                            <th>View</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($doctors as $doctor)
                                            <tr>
                                                <td>{{ $doctor->first_name }}. {{ $doctor->last_name }}</td>
                                                <td>{{ $doctor->profession->name }}</td>
                                                <td>Edinburgh</td>
                                                <td><a href="{{ route('one-view-doctor', ['doctor' => $doctor->id]) }}"><button
                                                            class="btn btn-success">Ko'rish</button></a></td>
                                                <td><a href="{{ route('doctors.edit', ['doctor' => $doctor->id]) }}"><button
                                                            class="btn btn-warning">Taxrirlash</button></a></td>
                                                <td>
                                                    <form
                                                        action="{{ route('doctors.destroy', ['doctor' => $doctor->id]) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Rostdan ham o\'chirmoqchimisiz')">
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

            </div>
        </div>
    </div>



</x-layouts.admin-main>
