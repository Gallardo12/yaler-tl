@extends('layouts.app')

@section('page-active3')
active
@endsection

@section('page-name')
Contacto
@endsection

@section('description')

@endsection

@section('image-url')

@endsection

@section('page-url')

@endsection

@section('summary')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1>CONTACTO</h1>
    </div>
</div>
<div class="container" style="margin-top:90px;">
    <div class="card-panel z-depth-5">
        <div class="row">
            <div class="col s12 m6">



                <h4 class="center"> Material Contact form</h4>
                <div class="row">
                    <form class="col s12 m12">
                        <div class="row">
                            <div class="input-field col s12 m12">
                                <i class="mdi-action-account-circle prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>

                            <div class="input-field col s12 m12">
                                <i class="mdi-communication-email prefix"></i>
                                <input id="icon_email" type="email" class="validate">
                                <label for="icon_email">Your Email</label>
                            </div>

                            <div class="input-field col s12 m12">
                                <i class="mdi-editor-mode-edit prefix"></i>
                                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                <label for="icon_prefix2">Message</label>
                            </div>


                        </div>
                        <!--row-->
                    </form>

                </div>
                <!--row-->
                <button class="btn waves-effect waves-light center" type="submit" name="action">Send your message&nbsp;
                    <i class="mdi-content-send"></i>
                </button>



            </div>
            <!--col-->





            <div class="col s12 m5 offset-m1">
                <br>
                <br>
                <p>
                    123 IMAGINARY ST, SUITE 100 <br>
                    XXXXX, IL 30314
                </p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25895663.485556163!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sus!4v1428092793529"
                    width="300" height="300" frameborder="0" style="border:0"></iframe>
            </div>



        </div>
        <!--row-->
    </div>
    <!--card-->
</div>
<!--conatiner-->
@endsection
