<x-app-layout title="Data Pemilih" header="Data Pemilih">
    @can('voter_create')
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('voter.create') }}" class="btn btn-blue waves-effect waves-light mb-3"><i
                        class="md md-add"></i> Tambah Data Pemilih</a>
            </div>
            <div class="col-sm-8">

                <div class="form-group text-right mb-0">
                    <a href="{{ route('voter.map') }}" class="btn btn-danger waves-effect waves-light mb-3">
                        <i class="fas fa-fw fa-undo-alt"></i> Open Map
                    </a>
                </div>
            </div>
        </div>
    @endcan
    <x-_alert />
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-3">Daftar Pendukung</h4>

                <x-table>
                    <thead>
                        <tr>
                            <th width="4%">
                                ID
                            </th>
                            <th>Nama Pemilih</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Last Update</th>
                            <th>Referensi</th>
                            <th class="hidden-sm" width="10%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($voters as $i => $item)
                            <tr>
                                <td><b>{{ $i + 1 }}</b></td>
                                <td>{{ $item->voter_name }}</td>
                                <td>{{ $item->gender == 1 ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>
                                    @if ($item->tps->villages->village_type == 'Desa')
                                        Kec. {{ $item->tps->villages->districts->district_name }}, Desa
                                        {{ $item->tps->villages->village_name }}
                                    @else
                                        Kec. {{ $item->tps->villages->districts->district_name }}, Kel.
                                        {{ $item->tps->villages->village_name }}
                                    @endif
                                </td>

                                <td>{{ $item->updated_at }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td>
                                    @if ($item->id != 1)
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false"><i
                                                    class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @can('voter_show')
                                                    <form action="{{ route('voter.show', $item) }}" method="get">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Check</button>
                                                    </form>
                                                @endcan
                                                @can('voter_edit')
                                                    <form action="{{ route('voter.edit', $item) }}" method="get">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                        </button>
                                                    </form>
                                                @endcan
                                                @can('voter_delete')
                                                    <form action="{{ route('voter.destroy', $item) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="dropdown-item btn-delete"><i
                                                                class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle "></i>Remove</button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </x-table>
            </div>
        </div><!-- end col -->
    </div>
    <x-datatable />
    @push('scripts')
        <script>
            ! function(t) {
                "use strict";
                var e = function() {};
                e.prototype.init = function() {
                    t(".btn-delete").click(function(e) {
                        e.preventDefault();
                        const form = event.target.form;
                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            type: "warning",
                            showCancelButton: !0,
                            confirmButtonText: "Yes, delete it!",
                            cancelButtonText: "No, cancel!",
                            confirmButtonClass: "btn btn-success mt-2",
                            cancelButtonClass: "btn btn-danger ml-2 mt-2",
                            buttonsStyling: !1
                        }).then(function(t) {
                            t.value ? form.submit() : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                                title: "Cancelled",
                                text: "The data you chose to delete is safe :)",
                                type: "error"
                            })
                        })
                    })
                }, t.SweetAlert = new e, t.SweetAlert.Constructor = e
            }(window.jQuery),
            function(t) {
                "use strict";
                window.jQuery.SweetAlert.init()
            }();
        </script>
    @endpush
</x-app-layout>
