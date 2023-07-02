<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BidangPemeriksaan;
use App\Models\MetodePemeriksaan;
use App\Models\ParameterPemeriksaan;

class DynamicRegistrasiPemeriksaan extends Component
{
    public $input = [];
    public $requestKeterangan = [];
    public $i = 0;
    public $bidangId;
    public $metodeId;
    public $parameterId;
 


    public function add($i)
    {
        $this->i = $i++;
        $bidang = json_decode($this->bidangId);
        $metode = json_decode($this->metodeId);
        $parameter = json_decode($this->parameterId);

        array_push($this->input, [
            'bidang' => $bidang->name,
            'metode' => $metode->name,
            'parameter' => $parameter->parameter,
            'harga' => $parameter->harga,
        ]);

        array_push($this->requestKeterangan, [
            'bidang_id' => $bidang->id,
            'metode_id' => $metode->id,
            'parameter_id' => $parameter->id,
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
