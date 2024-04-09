<x-app-layout title="Data TPS" header="Data TPS">
    <x-_alert />
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-3">Daftar TPS</h4>

                <x-table>
                    <thead>
                        <tr>
                            <th width="4%">
                                ID
                            </th>
                            <th>TPS</th>
                            <th>Koordinator</th>
                            <th>Target / Rumah</th>
                            <th>Target 2024</th>
                            <th>Progres Desa & Kelurahan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($tpss as $i => $item)
                            @php
                                $average = $item->villages->voter_2019 / $item->villages->tps->count() / 10;
                                $target_kk = ceil($average * 4);
                                
                            @endphp
                            <tr>
                                <td><b>{{ $i + 1 }}</b></td>
                                <td>
                                    @if ($item->villages->village_type == 'Desa')
                                        Desa {{ $item->villages->village_name }} - {{ $item->tps_name }}
                                    @else
                                        Kelurahan {{ $item->villages->village_name }} - {{ $item->tps_name }}
                                    @endif
                                </td>
                                <td>
                                    @if ($item->villages->voter_2019 < 40)
                                        @isset($item->villages->user_id)
                                            {{ $item->villages->users->name }}
                                        @else
                                            <span class="badge badge-warning">Belum di tentukan</span>
                                        @endisset
                                    @else
                                        @isset($item->user_id)
                                            {{ $item->users->name }}
                                        @else
                                            <span class="badge badge-warning">Belum di tentukan</span>
                                        @endisset
                                    @endif
                                </td>

                                <td>
                                    @if ($item->villages->voter_2019 >= 40)
                                        {{ $target_kk }}
                                        Rumah
                                    @elseif ($item->villages->voter_2019 < 40)
                                        {{ ceil(10 / $item->villages->tps->count()) }}
                                        Rumah
                                    @endif

                                </td>
                                <td>
                                    @if ($item->villages->voter_2019 >= 40)
                                        {{ $target_kk * 3 }}
                                        Suara
                                    @elseif ($item->villages->voter_2019 < 40)
                                        {{ ceil(10 / $item->villages->tps->count()) * 3 }}
                                        Suara
                                    @endif
                                </td>
                                <td>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-blue" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
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
