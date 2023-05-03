@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <style>
        .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        }
        .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
        background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
        background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
        }
    </style>
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >DATA MASTER - Kode Rekening</h1>
            <div>
                
            </div>
            
        </div>
        {{-- <label for="jenis_akun" class="fs-4"><b> Jenis Account </b></label>
        <select class="form-select mb-3 border-1 border-black" aria-label=".form-select example" name="jenis_akun" style="max-width: 300px">
                
            <option value="kas" selected>Rill Account</option>
            <option value="modal_awal">Nominal Account</option>
            
        </select> --}}
        <div class="tab">
            <button class="tablinks" onclick="openAkun(event, 'rill_account')">Rill Account</button>
            <button class="tablinks" onclick="openAkun(event, 'nominal_account')">Nominal Account</button>
            
          </div>
        <div class="table-responsive">
            <div id="rill_account" class="tabcontent">
                
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Rekening</th>
                            <th scope="col">Nama Akun</th>
                            <th scope="col">D/K</th>
                            
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($datas as $data)
                            @if ($data->id < 57)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->kode_rekening}}</td>
                                    <td>{{$data->d_k}}</td>
                                </tr>    
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="nominal_account" class="tabcontent">
                
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Rekening</th>
                            <th scope="col">Nama Akun</th>
                            <th scope="col">D/K</th>
                            
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($datas as $data)
                            @if ($data->id >= 57)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->kode_rekening}}</td>
                                    <td>{{$data->d_k}}</td>
                                </tr>    
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function openAkun(evt, akunName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(akunName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script>

    
@endsection