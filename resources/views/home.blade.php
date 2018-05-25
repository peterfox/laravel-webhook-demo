@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-3">
                <div class="card-header">Webhook End Point</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('setEndPoint') }}">
                        @csrf
                        <div class="form-group">
                            <label for="webhookUrl">URL</label>
                            <input id="webhookUrl" type="text" class="form-control" name="webhook_url"
                                   value="{{ old('webhook_url', $user->webhook_url) }}" />
                        </div>

                        <button class="btn btn-primary">
                            Save
                        </button>
                    </form>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-header">API Key</div>

                <div class="card-body">

                    <div class="form-group">
                        <label for="apiKey">API Key</label>
                        <input id="apiKey" type="text" class="form-control" readonly
                               value="{{ $user->api_key }}" />
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-header">Test Webhook</div>

                <div class="card-body">
                    <form method="post" action="{{ route('testWebhook') }}">
                        @csrf

                        <button class="btn btn-primary">
                            Go
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
