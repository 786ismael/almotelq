@extends('landing.layouts.app')
@section('content')

    <div class="privacy-policy">
        <div class="container">
            <div class="body">
                <div class="heading">
                    <h2>Privacy Policy</h2>
                    <h3>ALMOTELQ</h3>
                </div>
                <?php print_r($data->description) ;?>
            </div>
        </div>
    </div>
    @endsection