<h2>Formulario de Contacto</h2>

<p>Nombre de la DOP / IGP: <strong>{{ $data->get('dopigp') }}</strong></p>
<p>Nombre: <strong>{{ $data->get('name') }}</strong></p>
<p>Email: <strong>{{ $data->get('email') }}</strong></p>
<p>Teléfono: <strong>{{ $data->get('phone') }}</strong></p>
<p>Mensaje:</p>
<div>
    <strong>{!! nl2br($data->get('message')) !!}</strong>
</div>