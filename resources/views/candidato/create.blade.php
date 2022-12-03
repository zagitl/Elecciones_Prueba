@extends('plantilla')
@section('content')

<div class="card uper">
    <div class="card-header">
        Agregar Candidato
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" 
            action="{{ route('candidato.store') }} " 
            enctype="multipart/form-data" 
            onsubmit="return validateData();">
            @csrf
            <div class="form-group">
                <label for="nombrecompleto">Nombre:</label>
                <input type="text" class="form-control" 
                    id="nombrecompleto"
                    name="nombrecompleto" />
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo">
                    <option value="M" selected>Mujer</option>
                    <option value="H">Hombre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" 
                accept="image/png, image/jpeg" 
                onchange="preview(event,'previewImage');"
                >
                <div id="previewImage"></div>
            </div>
            <div class="form-group">
                <label for="perfil">Perfil:</label>
                <input type="file" id="perfil" name="perfil" 
                accept="application/pdf"
                onchange="preview(event,'previewPDF');"
                >
                <div id="previewPDF"></div>
            </div>
            <div class="form-group">
                <label for="curp">curp:</label>
                <input type="text" 
                    id="curp" 
                    name="curp" 
                    onfocusout="validate(this)"
                >
            </div>
            <div class="form-group">
                <label for="edad">edad:</label>
                <input type="text" 
                    class="numberonly"
                    id="edad" 
                    name="edad" 
                    maxlength="3"
                >
            </div>            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<script type="text/javascript" 
src="{{ URL::asset('js/custom.js') }}">
</script>
@endsection