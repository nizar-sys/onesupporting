<x-app-layout title="Data Wilayah" header="Data Wilayah">
    <x-_alert />
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-3">Daftar Wilayah</h4>

                <x-table>
                    <thead>
                        <tr>
                            <th width="4%">
                                ID
                            </th>
                            <th>Wilayah</th>
                            <th>Koordinator</th>
                            <th>Status</th>
                            <th>Perolehan 2014</th>
                            <th>Perolehan 2019</th>
                            <th>Progres Kecamatan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($regions as $i => $item)
                            {{-- {{ dd($item->tps->count()) }} --}}
                            @php
                                $average = $item->villages->sum('voter_2019') / $item->tps->count() / 10;
                                $target_kk = ceil($average * 4);
                            @endphp
                            <tr>
                                <td><b>{{ $i + 1 }}</b></td>
                                <td>{{ $item->region_name }}</td>
                                <td>
                                    @isset($item->user_id)
                                        {{ $item->users->name }}
                                    @else
                                        <span class="badge badge-warning">Belum di tentukan</span>
                                    @endisset
                                </td>
                                <td>
                                    @if ($item->villages->sum('voter_2019') >= 10000)
                                        <span class="badge badge-success">Basis</span>
                                    @elseif ($item->villages->sum('voter_2019') >= 5000)
                                        <span class="badge badge-info">Penyangga</span>
                                    @elseif ($item->villages->sum('voter_2019') >= 1800)
                                        <span class="badge badge-primary">Sebaran</span>
                                    @elseif ($item->villages->sum('voter_2019') < 1800)
                                        <span class="badge badge-danger">Optimis</span>
                                    @endif
                                </td>
                                <td>{{ number_format($item->villages->sum('voter_2014'), 0, ',', '.') }}</td>
                                <td>{{ number_format($item->villages->sum('voter_2019'), 0, ',', '.') }}</td>
                                <td>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-blue" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="4%">

                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>{{ number_format($total_2014, 0, ',', '.') }}</th>
                            <th>{{ number_format($total_2019, 0, ',', '.') }}</th>
                            <th></th>
                        </tr>
                    </tfoot>
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
