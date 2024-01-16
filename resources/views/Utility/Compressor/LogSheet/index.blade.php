@extends('layouts.appUtility')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 RDZMobilePaddingLR0">
                <div class="card">
                    <div class="card-header">Log Sheet</div>
                    <div class="card-body RDZOverflow RDZMobilePaddingLR0">
                        <form class="form" method="POST" enctype="multipart/form-data" action="{{ url('Compressor') }}"
                            id="form_Compressor">
                            {{ csrf_field() }}
                            <div class="row-12 d-flex flex-wrap">
                                <div class="col-lg-4 p-4">
                                    <div class="acs-div-filter p-2">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal"
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="acs-div-filter p-2">
                                        <label for="Mesin">Mesin</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Mesin..</option>
                                            @foreach ($mesin as $data)
                                                <option value="{{ $data->NamaMesin }}">
                                                    {{ $data->NamaMesin }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="acs-div-filter p-2">
                                        <label for="jam_operasi">Jam Operasi</label>
                                        <input type="time" class="form-control" id="jam_operasi" name="jam_operasi"
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="acs-div-filter p-2">
                                        <label for="temp">Temperatur</label>
                                        <input type="text" class="form-control" id="temp" name="temp"
                                            placeholder="120 celcius">
                                    </div>

                                </div>
                                <div class="col-lg-4 p-4">
                                    <div class="acs-div-filter p-2">
                                        <label for="bar">Bar</label>
                                        <input type="text" class="form-control" id="bar" name="bar"
                                            placeholder="...">
                                    </div>

                                    <div class="acs-div-filter p-2">
                                        <label for="rm_hours">RM Hours</label>
                                        <input type="text" class="form-control" id="rm_hours" name="rm_hours"
                                            placeholder="...">
                                    </div>

                                    <div class="acs-div-filter p-2">
                                        <label for="lm_hours">LM Hours</label>
                                        <input type="text" class="form-control" id="lm_hours" name="lm_hours"
                                            placeholder="...">
                                    </div>
                                    <div class="acs-div-filter p-2">
                                        <label for="r_hours">R Hours</label>
                                        <input type="text" class="form-control" id="r_hours" name="r_hours"
                                            placeholder="...">
                                    </div>

                                </div>
                                <div class="col-lg-4 p-4">
                                    <div class="acs-div-filter p-2">
                                        <label for="l_hours">L Hours</label>
                                        <input type="text" class="form-control" id="l_hours" name="l_hours"
                                            placeholder="...">
                                    </div>
                                    <div class="acs-div-filter p-2">
                                        <label for="efs">Efs</label>
                                        <input type="text" class="form-control" id="efs" name="efs"
                                            placeholder="...">
                                    </div>
                                    <div class="acs-div-filter p-2">
                                        <label for="tech">Tech</label>
                                        <input type="text" class="form-control" id="tech" name="tech"
                                            placeholder="...">
                                    </div>
                                    <div class="acs-div-filter p-2">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan" name="keterangan"
                                            placeholder="...">
                                    </div>
                                </div>
                                <div class="col-lg-12 p-4">
                                    <div class="d-flex gap-2 p-2 justify-content-end flex-wrap">
                                        <button class="btn btn-success mb-2" type="button">Input</button>
                                        <button class="btn btn-warning mb-2" type="button">Koreksi</button>
                                        <button class="btn btn-danger mb-2" type="button">Hapus</button>
                                        <button class="btn btn-primary mb-2" type="button">Proses</button>
                                        <button class="btn btn-danger mb-2" type="button">Batal</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex gap-2 m-3">
                                            <label for="tanggal">Filter</label>
                                        </div>
                                        <div class="d-flex gap-2 m-3">
                                            <h6 class="mt-2">Tanggal</h6>
                                            <input type="date" class="form-control" id="tanggal-awal"
                                                placeholder="name@example.com">
                                            <h6 class="mt-2">S/D</h6>
                                            <input type="date" class="form-control" id="tanggal-akhir"
                                                placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex gap-2 m-3">
                                            <label for="tanggal">Mesin</label>
                                        </div>
                                        <div class="d-flex gap-2 m-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Mesin..</option>
                                                @foreach ($mesin as $data)
                                                    <option value="{{ $data->NamaMesin }}">
                                                        {{ $data->NamaMesin }}</option>
                                                @endforeach
                                            </select>
                                            <button type="button" class="btn btn-primary">Refresh</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Mesin</th>
                                                <th scope="col">Jam</th>
                                                <th scope="col">Temp</th>
                                                <th scope="col">Bar</th>
                                                <th scope="col">RM Hours</th>
                                                <th scope="col">LM Hours</th>
                                                <th scope="col">R Hours</th>
                                                <th scope="col">L Hours</th>
                                                <th scope="col">Efs</th>
                                                <th scope="col">Tech</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($dataTabel as $row)
                                                <tr>
                                                    <td>{{ $row->tanggal }}</td>
                                                    <td>{{ $row->mesin }}</td>
                                                    <td>{{ $row->jam_operasi }}</td>
                                                    <td>{{ $row->sparepart }}</td>
                                                    <td>{{ $row->keterangan }}</td>
                                                    <td>{{ $row->teknisi }}</td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
