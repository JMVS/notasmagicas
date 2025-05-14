@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h2 class="text-muted mt-2 copy-note">About {{ config('app.name') }}</h2>
                    <h4 class="mt-3 font-italic text-muted">How this works:
                        <ul class="mt-3">
                            <li>We encrypt your note using an AES-256-CBC cipher</li>
                            <li>We "<a href="https://crypto.stackexchange.com/questions/202/should-we-mac-then-encrypt-or-encrypt-then-mac" target="_blank">Encrypt-then-MAC"</a></li>
                            <li>We delete it from our database once it has been read
                            </li>
                        </ul>
                    </h4>
                    <hr>
                    <h4 class="mt-3">Use this app to securely send notes to <a href="{{ config('app.company_url') }}" target="_blank">{{ config('app.company') }}</a>. By default, your notes will self destruct after seven days.</h4>
                </div>
            </div>
        </div>
    </section>

@endsection