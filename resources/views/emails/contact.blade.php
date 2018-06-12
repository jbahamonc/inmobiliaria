@component('mail::message')
# Mensaje recibido desde la página web

@component('mail::panel')
Nombre: {{ $data['name_contact'] }}<br>
Contacto: {{ $data['phone'] }}<br>
Email: {{ $data['email_contact'] }} <br>
Mensaje: {{ $data['msg_contact'] }}
@endcomponent

@endcomponent
