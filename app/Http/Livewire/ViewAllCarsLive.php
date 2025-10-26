<?php

namespace App\Http\Livewire;

use App\Models\Advertisement;
use App\Models\Companie;
use App\Models\Fuel;
use App\Models\States;
use Livewire\Component;

class ViewAllCarsLive extends Component
{
    public $check_search = false, $search_cars, $company, $fuel, $state, $engine_capacity_km;

    public function search() {
        if ($this->company != null && $this->state == null && $this->fuel == null && $this->engine_capacity_km == null) {
            $this->search_cars = Companie::findorfail($this->company)->company_cars;
            $this->check_search = true;
        }

        if ($this->company == null && $this->state != null && $this->fuel == null && $this->engine_capacity_km == null) {
            $this->search_cars = Advertisement::where('state_id', $this->state)->get();
            $this->check_search = true;
        }

        if ($this->company == null && $this->state == null && $this->fuel != null && $this->engine_capacity_km == null) {
            $this->search_cars = Advertisement::where('fuel_id', $this->fuel)->get();
            $this->check_search = true;
        }

        if ($this->company == null && $this->state == null && $this->fuel == null && $this->engine_capacity_km != null && $this->engine_capacity_km != 3000) {
            $this->search_cars = Advertisement::where('engine_capacity', '<', $this->engine_capacity_km)->get();
            $this->check_search = true;
        }

        if ($this->company == null && $this->state == null && $this->fuel == null && $this->engine_capacity_km != null && $this->engine_capacity_km == 3000) {
            $this->search_cars = Advertisement::where('engine_capacity', '>', $this->engine_capacity_km)->get();
            $this->check_search = true;
        }

        if ($this->company != null && $this->state != null && $this->fuel == null && $this->engine_capacity_km == null) {
            $this->search_cars = Advertisement::where('company_id', $this->company)
            ->where('state_id', $this->state)->get();
            $this->check_search = true;
        }

        if ($this->company != null && $this->state != null && $this->fuel != null && $this->engine_capacity_km == null) {
            $this->search_cars = Advertisement::where('company_id', $this->company)
            ->where('state_id', $this->state)
            ->where('fuel_id', $this->fuel)->get();
            $this->check_search = true;
        }

        if ($this->company != null && $this->state != null && $this->fuel != null && $this->engine_capacity_km != null && $this->engine_capacity_km != 3000 ) {
            $this->search_cars = Advertisement::where('company_id', $this->company)
            ->where('state_id', $this->state)
            ->where('fuel_id', $this->fuel)
            ->where('engine_capacity', '<', $this->engine_capacity_km)->get();
            $this->check_search = true;
        }

        if ($this->company != null && $this->state != null && $this->fuel != null && $this->engine_capacity_km != null && $this->engine_capacity_km == 3000) {
            $this->search_cars = Advertisement::where('company_id', $this->company)
            ->where('state_id', $this->state)
            ->where('fuel_id', $this->fuel)
            ->where('engine_capacity', '>', $this->engine_capacity_km)->get();
            $this->check_search = true;
        }

    }

    public function render()
    {
        $cars      = Advertisement::where('stutas', 1)->get();
        $companies = Companie::where('stutas', 1)->get();
        $companies_marca = Companie::where('stutas', 0)->get();
        $fuels     = Fuel::get();
        $states    = States::get();
        return view('livewire.view-all-cars-live', compact('cars','companies', 'fuels', 'states', 'companies_marca'));
    }
}
