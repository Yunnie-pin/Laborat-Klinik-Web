<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BidangPemeriksaan;
use App\Models\MetodePemeriksaan;
use App\Models\ParameterPemeriksaan;
use Illuminate\Http\Request;

class DynamicRegistrasiPemeriksaan extends Component
{
    public $input = [];
    public $keterangan = [];
    public $i = 0;
    public $bidangId;
    public $metodeId;
    public $parameterId;

    public function mount(Request $request){
        if($request->session()->has('requestKeterangan')){
            $this->input = $request->session()->get('requestKeterangan');
        }
    }

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

        array_push($this->keterangan, [
            'bidang_id' => $bidang->id,
            'metode_id' => $metode->id,
            'parameter_id' => $parameter->id,
        ]);

        session()->put('requestKeterangan', $this->input);
        session()->put('keterangan', $this->keterangan);
    }


    public function remove($key)
    {
        unset($this->input[$key]);
        unset($this->keterangan[$key]);

        session()->put('requestKeterangan', $this->input);
        session()->put('keterangan', $this->keterangan);
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
