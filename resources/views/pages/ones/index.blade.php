<x-app-layout title="One Management" header="One Management">
    @can('one_create')
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('one.create') }}" class="btn btn-blue waves-effect waves-light mb-3"><i
                        class="md md-add"></i> Tambah New One</a>
            </div>
        </div>
    @endcan
    <x-_alert />
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-3">Daftar One Supporting</h4>

                <x-table>
                    <thead>
                        <tr>
                            <th width="4%">
                                ID
                            </th>
                            <th>Nama</th>
                            <th>E-Mail</th>
                            <th>Status</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th width="5%">Is Active</th>
                            <th>Last Update</th>
                            <th class="hidden-sm" width="10%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $i => $item)
                            <tr>
                                <td><b>{{ $i + 1 }}</b></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->roles->first() ? $item->roles->first()->name : 'no role' }}</td>
                                <td>{{ $item->gender == 1 ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>
                                    @if ($item->tps != null)
                                        @if ($item->tps->village_type == 'Desa')
                                            Kec. {{ $item->tps->districts->district_name }}, Desa
                                            {{ $item->tps->villages->village_name }}
                                        @else
                                            Kec. {{ $item->tps->districts->district_name }}, Kel.
                                            {{ $item->tps->villages->village_name }}
                                        @endif
                                    @endif
                                </td>
                                <td class="align-middle">
                                    @if ($item->is_active == 1)
                                        <span class="badge badge-success">
                                            Active
                                        </span>
                                    @else
                                        <span class="badge badge-danger">
                                            Not Active
                                        </span>
                                    @endif
                                </td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    @if ($item->id != 1)
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false"><i
                                                    class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @can('one_show')
                                                    <form action="{{ route('one.show', $item) }}" method="get">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Check</button>
                                                    </form>
                                                @endcan
                                                @can('one_edit')
                                                    <form action="{{ route('one.edit', $item) }}" method="get">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                        </button>
                                                    </form>
                                                @endcan
                                                @can('one_delete')
                                                    <form action="{{ route('one.destroy', $item) }}" method="post">
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
