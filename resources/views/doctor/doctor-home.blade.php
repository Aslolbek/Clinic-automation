<x-layouts.doctor-main> 
       

    <div class="container">
        <div class="page-inner">
         
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Uchrashuvlar</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="basic-datatables"
                      class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>F.I.O</th>
                          <th>Kasallik</th>
                          <th>Ko'rik vaqti</th>
                          <th>Holat</th>
                          <th>Ko'rish</th>
                        </tr>
                      </thead>
                     
                      <tbody>
                        @foreach ($appointments as $appointment)
                        <tr>
                          <td>{{ $appointment->user->first_name }} {{ $appointment->user->last_name }}</td>
                          <td>{{ $appointment->diagnos }}</td>
                          <td>{{ $appointment->appointment_times }}</td>
                          <td>@if ($appointment->user->diagnoses)
                            <span class="text-success">✅ Tashxis qo‘yilgan</span>
                        @else
                            <span class="text-danger">❌ Hali tashxis qo‘yilmagan</span>
                        @endif</td>
                          <td><a href="{{ route('users.show',  ['user'=> $appointment->user->id]) }}"><button class="btn btn-success">Kirish</button></a></td>
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



</x-layouts.doctor-main>