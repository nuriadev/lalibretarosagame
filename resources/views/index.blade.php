@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="container">
    <div class="titulo w-100 w-md-50">
        <img src="{{ asset('images/ciudad.png') }}" alt="ciudad" class="img-fluid" style="height:auto">
    </div>
    <div class="row justify-content-center">
        <!-- Cuestionario para Adivinar -->
        <div class="col-md-8 col-12">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="/predict">
                @csrf
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="outfit">Escribe tu nombre <span class="alert alert-warning p-1 ms-2" role="alert" style="font-size: 0.8rem;">
                                Esto será visible en el ranking
                            </span>
                        </label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" name="user_identifier" id="user_identifier" class="form-control" placeholder="Ej: Nuria @basicvillanelle" required>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="outfit">1. ¿Qué outfit llevará?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="outfit" id="outfit" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Outfit nuevo</option>
                                <option value="2">Outfit conocido</option>
                                <option value="3">Outfit algo nuevo y algo conocido</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="invitado">2. ¿Habrá artista invitado sorpresa?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="invitado" id="invitado" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="acustica">3. ¿Tocará la guitarra acústica?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="acustica" id="acustica" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="rosa">4. ¿Llevará algo rosa?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="rosa" id="rosa" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">En la ropa</option>
                                <option value="2">En un accesorio</option>
                                <option value="3">Nada</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="electrica">5. ¿Tocará la guitarra eléctrica?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="electrica" id="electrica" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="nueva">6. ¿Cantará una canción completamente nueva?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="nueva" id="nueva" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="otro">7. ¿Hará cover de otro artista?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <select name="otro" id="otro" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="piano">8. ¿Tocará el piano?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="piano" id="piano" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="conocemos">9. ¿Cantará una canción que no está en el EP pero sí conocemos?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="conocemos" id="conocemos" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="otro">10. ¿Hará cover de Chappell Roan?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="otro" id="otro" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="fies">11. ¿Cantará fa dies?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="fies" id="fies" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <label for="primera">12. ¿Con qué canción empezará?</label>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="primera" id="primera" class="form-control" required>
                                <option value="" selected>Elige una opción</option>
                                <option value="1">mala costumbre</option>
                                <option value="2">ronda de más</option>
                                <option value="3">otra</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection