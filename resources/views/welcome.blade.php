@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 pt-4 text-center">
                    <h1 class="fw700">Send secure and encrypted notes that self destruct once they've been read</h1>
                                        <h5 class="mt-4">Secure Notes is intended for use by <a href="{{ config('app.company_url') }}" target="_blank">{{ config('app.company') }}</a> clients or associates only. Use this service to securely send information to a receipient of your choosing.</h5>
                    <div class="note">
                        <p>NOTE: If sending payment details, setup your note as follows:</p>
                        <code>
                            CC No:<br>
                            Exp. Date:<br>
                            CVV:<br>
                            Name on card:<br>
                            Billing Address:
                        </code>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="mt-0 text-muted">This service uses AES-256-CBC encryption signed with a message authentication code (MAC).</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <form class="" method="post" action="/create-note">
                        @csrf
                        <label>Create your note</label>
                        <div class="input-group mb-3">
                            <textarea rows="4" name="note" class="" placeholder="" id="" required></textarea>
                        </div>
                        <!--<label class="">Create an optional password</label>
                        <p class="text-muted npm">Leave blank if you do not require password protection</p>
                        <div class="input-group mb-3">
                            <input type="text" name="password" class="" placeholder="" value="" id="">
                        </div>-->
                        <label class="">Days till auto self destruct</label>
                        <p class="text-muted npm">The note will expire after a set number of days</p>
                        <div class="input-group mb-3">
                            <input type="number" min="1" name="expiry" class="" placeholder="" value="7" id="">
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" name="" class="btn btn-dark py-3" placeholder="" value="Get Link"
                                   id="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection