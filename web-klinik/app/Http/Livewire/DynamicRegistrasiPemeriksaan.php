<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BidangPemeriksaan;
use App\Models\MetodePemeriksaan;
use App\Models\ParameterPemeriksaan;

class DynamicRegistrasiPemeriksaan extends Component
{
    public $input;
    public $i;
    public $bidangId;
    public $metodeId;
    public $parameterId;
 
    public function mount(){
        $this->input = [];
        $this->i = 0;
    }

    public function add($i)
    {
        $this->i = $i + 1;
        array_push($this->input, [
            'bidang_id' => $this->bidangId,
            'metode_id' => $this->metodeId,
            'parameter_id' => $this->parameterId,
        ]);
    }

    public function remove($key)
    {
        unset($this->input[$key]);
    }

    public function render()
    {
        $databidang = BidangPemeriksaan::all();
        $datametode = MetodePemeriksaan::all();
        $dataparameter = ParameterPemeriksaan::all();
        
        return view('livewire.dynamic-registrasi-pemeriksaan',[
            'databidang' => $databidang,
            'datametode' => $datametode,
            'dataparameter' => $dataparameter,
        ]);
    }
}
