@extends('layouts.app')

@section('title', 'Ranking')

@section('content')
<div class="container">
    <div class="titulo w-100 w-md-50">
        <img src="{{ asset('images/ciudad.png') }}" alt="ciudad" class="img-fluid" style="height:auto">
    </div>
        
    <div class="row d-flex justify-content-center">
        <div class="col-md-2 col-4 d-flex flex-column flex-md-column align-items-center">
            <h4 class="d-inline d-md-block text-center">Estado</h4>
            <p class="text-center">Por empezar</p> <!-- Aquí puedes mostrar el estado del juego -->
        </div>
        <div class="col-md-2 col-4 d-flex flex-column flex-md-column align-items-center">
            <h4 class="d-inline d-md-block text-center">Tus Puntos</h4>
            <p class="text-center">0</p> <!-- Aquí puedes mostrar los puntos del usuario -->
        </div>
        <div class="col-md-2 col-4 d-flex flex-column flex-md-column align-items-center">
            <h4 class="d-inline d-md-block text-center">Puntos Totales</h4>
            <p class="text-center">120</p> <!-- Aquí puedes mostrar los puntos posibles -->
        </div>
    </div>
    <div class="table-responsive">
        <table id="rankingTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>    
    </div>
    
</div>
<script>
    $(document).ready(function() {
        var table = $('#rankingTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": false,
        "info": false,
        "ajax": {
            "url": "/api/rankings", // Replace with your actual endpoint
            "dataSrc": ""
        },
        "columns": [
            { "data": null }, // This will be populated with the ranking position
            { "data": "user_identifier" },
            { "data": "score" }
        ],
        "createdRow": function(row, data, dataIndex) {
                // Add the ranking position to the first column
                $('td:eq(0)', row).html(dataIndex + 1);
            }
    });

    // Set an interval to refresh the data every 30 seconds
    setInterval(function() {
        table.ajax.reload(null, false); // User paging is not reset on reload
    }, 30000); // 30000 milliseconds = 30 seconds
    });
</script>
@endsection
