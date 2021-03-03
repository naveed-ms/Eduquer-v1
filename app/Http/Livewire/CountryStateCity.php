<?php

namespace App\Http\Livewire;

use App\City;
use App\Country;
use App\State;
use Livewire\Component;

class CountryStateCity extends Component
{
    public $country;
    public $state;
    public $city;

    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

    public function mount($selectedCity = null)
    {

        $this->country = Country::all();
        $this->state = collect();
        $this->city= collect();
        $this->selectedCity = $selectedCity;

        if (!is_null($selectedCity)) {
            $city = City::with('state.country')->find($selectedCity);
            if ($city) {
                $this->city = City::where('states_id', $city->state_id)->get();
                $this->state = State::where('country_id', $city->state->country_id)->get();
                $this->selectedCountry = $city->state->country_id;
                $this->selectedState = $city->state_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.country-state-city');
    }

    public function updatedSelectedCountry($country)
    {

        $this->state = State::where('country_id', $country)->get();
        $this->selectedState = NULL;
    }

    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->city = City::where('states_id', $state)->get();
        }
    }
}
