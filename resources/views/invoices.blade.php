<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Invoices') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('api/invoices') }}">
                        @csrf

                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Invoices') }}
                                </button>

                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('auth.forgot') }}
                                </a> --}}
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>