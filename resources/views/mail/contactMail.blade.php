<h3>Problema o duda encontrada por usuario:</h3>
<p>{{ $data }}</p>
@if ($email != "")
    <p>Reponder a <a href="mailto:{{ $email }}">{{ $email }}</a></p>
@endif