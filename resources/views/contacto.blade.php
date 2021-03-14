@extends('layouts.app')

@section('page-active3')
active
@endsection

@section('page-name')
Contacto
@endsection

@section('description')
Cualquier duda o aclaración pueden contactarnos
@endsection

@section('image-url')
public/img/background6.jpg
@endsection

@section('page-url')
http://yalertl.com/contacto
@endsection

@section('summary')
Cualquier duda o aclaración pueden contactarnos
@endsection

@section('content')
<div class="parallax-container valign-wrapper">
    <div class="row center">
        <div class="center-align">
            <img class="responsive-img highlighted1" src="public/img/yaler-logo.png">
        </div>
        <h4 class="header col s12 white-text">Cualquier duda o aclaración pueden contactarnos</h5>
    </div>
    <div class="parallax"><img src="public/img/background6.jpg" class="responsive-img" alt="Unsplashed background img 2"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 center-align">
            <h1 class="red-text text-darken-3" style="font-size: 25px;">CONTACTO</h1>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col s12 m6">
                        {!! Form::open(['route'=>'contactus.store']) !!}
                        <div
                            class="input-field col s12 {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Nombre') !!}
                            {!! Form::text('name', old('name'), ['class'=>'validate']) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div
                            class="input-field col s12 {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Correo Electrónico') !!}
                            {!! Form::text('email', old('email'), ['class'=>'validate']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div
                            class="input-field col s12 {{ $errors->has('message') ? 'has-error' : '' }}">
                            {!! Form::label('Mensaje') !!}
                            {!! Form::textarea('message', old('message'), ['class'=>'materialize-textarea']) !!}
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>
                        <div class="center-align">
                            <button class="btn btn-success red darken-3" style="padding-bottom: 20px;">Enviar</button>
                        </div>
                        {!! Form::close() !!}
                        <br>
                        <p><span class="flow-text red-text text-darken-3">Teléfono de Oficina:</span> (618) 836-51-07</p>
                        <p><span class="flow-text red-text text-darken-3">Teléfono Celular:</span> <a href="https://wa.me/526181452174"><i class="fab fa-whatsapp"></i> (618) 145-21-74</a></p>
                        <p><span class="flow-text red-text text-darken-3">Correo Electrónico:</span><a target="_blank" href="mailto:yalerebf@gmail.com"> yalerebf@gmail.com</a></p>
                        <br><br>
                        <!--a onclick="M.toast({html: 'Gracias!! En breve nos pondremos en contacto con usted.', classes: 'rounded red darken-3 white-text'})" class="btn">Toast!</a-->
                    </div>
                    <div class="col s12 m6">
                        <div class="video-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.5896321774326!2d-104.64696728461212!3d24.01026408471523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7f0dc6cd7cf%3A0xd84b655cd8f7cc48!2sOlmos%20800%2C%20Los%20Sauces%2C%2034078%20Durango%2C%20Dgo.!5e0!3m2!1sen!2smx!4v1615759132766!5m2!1sen!2smx"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                class="responsive-img"></iframe>
                        </div>
                        <br>
                        <p><span class="flow-text red-text text-darken-3">Dirección</span></p>
                        <p>Calle Olmos #800 Col. Los Sauces, C.P. 34078, Durango, Mex</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
