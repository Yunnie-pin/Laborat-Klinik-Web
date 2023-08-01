<div>
    <div class="row">
        <div class="col-md-3 pb-5">
            <div >
                <label for="bidang" class="form-label">Pilih Bidang</label>
    
                <select id="bidang" class="form-select" wire:model="bidangId">
                    @foreach ($databidang as $data)
                    <option value="{{ $data }}">{{ $data->name }}</option>
                    @endforeach
                </select>
    
            </div>
        </div>
    
        <div class="col-md-3 pb-5">
            <div>
                <label for="metode" class="form-label">Pilih Metode</label>
                <select id="metode" class="form-select" wire:model="metodeId">
                    @foreach ($datametode as $data)
                    <option value="{{ $data }}">{{ $data->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    
        <div class="col-md-3">
            <div>
                <label for="parameter" class="form-label">Pilih Parameter</label>
                <select id="parameter" class="form-select" wire:model="parameterId">
                    @foreach ($dataparameter as $data)
                    <option value="{{ $data }}">{{ $data->parameter }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    
        <div class="col-md-3 pt-4">
            <div>
                <a wire:click="add({{ $i }})" id="buttonAddPemeriksaan" class="btn btn-success p-2">+ Tambah Pemeriksaan</a>
            </div>
        </div>
    </div>

    @if (session()->has('errorForm'))
                        <div class="alert alert-danger p-2" role="alert">
                            {{ session('errorForm') }}
                        </div>
    @endif

    <table id="myTable" class="table table-striped border-primary table-hover table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Bidang</th>
                <th>Metode</th>
                <th>Parameter</th>

                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($input as $key => $value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value['bidang'] }}</td>
                <td>{{ $value['metode'] }}</td>
                <td>{{ $value['parameter'] }}</td>
                <td>{{ $value['harga'] }}</td>
                <td>

                    <button wire:click="remove({{ $key }})" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pemeriksaan ini?')">
                        <i class="bi bi-trash3"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
