<div class="row">
    <div class="col-md-12 col-lg-3 mb-4 pr-2">
        <select name=country wire:model="selectedCountry" placeholder=" " required class="form-control">
            <label for="country">{{ __('Country') }}</label>
            <option value="" selected>Choose country</option>
            @foreach ($country as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>
    @if (!is_null($selectedCountry))
        <div class="col-md-12 col-lg-3 mb-4 pr-2">

            <select name=state wire:model="selectedState" required class="form-control">
                <label for="state">{{ __('State/Province') }}</label>
                <option value="" selected>Choose state</option>
                @foreach ($state as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    @if (!is_null($selectedState))
        <div class="col-md-12 col-lg-3 mb-4 pr-2">

            <input name="city" type="text" placeholder=" " required
                class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"
                required autocomplete="city" autofocus>
            <label for="city">{{ __('City') }}</label>
            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    @endif
</div>
