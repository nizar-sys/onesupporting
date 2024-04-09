<x-app-layout title="Menu Management" header="Menu Management">
    @can('menu_create')
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('menu.create') }}" class="btn btn-blue waves-effect waves-light mb-3"><i
                        class="md md-add"></i> Add
                    New Menu</a>
            </div>
        </div>
    @endcan
    <x-_alert />
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-3">List of menus</h4>

                <x-table>
                    <thead>
                        <tr>
                            <th width="4%">
                                ID
                            </th>
                            <th>Parent</th>
                            <th>Menu</th>
                            <th>Permission</th>
                            <th>Prefix</th>
                            <th width="5%">Icon With Url</th>
                            <th width="5%">Is Active</th>
                            <th>Last Update</th>
                            <th class="hidden-sm" width="10%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($menus as $i => $item)
                            <tr>
                                <td><b>{{ $i + 1 }}</b></td>
                                <td>
                                    @if (count($item->children))
                                        <span class="badge badge-blue">It's a Parent Menu</span>
                                    @else
                                        @isset($item->parent->name)
                                            <span class="badge badge-secondary">Sub Menu {{ $item->parent->name }}</span>
                                        @else
                                            <span class="badge badge-warning">Main Menu</span>
                                        @endisset
                                    @endif
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->permission_name }}</td>
                                <td>{{ $item->prefix }}</td>
                                <td>
                                    @if (count($item->children))
                                        <button class="btn btn-sm btn-blue mr-1"><i
                                                class="{{ $item->icon }}"></i></button>
                                        {{ $item->url }}
                                    @else
                                        @isset($item->parent->name)
                                            <button class="btn btn-sm btn-secondary mr-1"><i
                                                    class="{{ $item->icon }}"></i></button>
                                            {{ $item->url }}
                                        @else
                                            <button class="btn btn-sm btn-warning mr-1"><i
                                                    class="{{ $item->icon }}"></i></button>
                                            {{ $item->url }}
                                        @endisset
                                    @endif

                                </td>
                                <td>
                                    @if ($item->is_active == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Non Active</span>
                                    @endif
                                </td>
                                <td>{{ $item->updated_at }}
                                </td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle"
                                            data-toggle="dropdown" aria-expanded="false"><i
                                                class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            @can('menu_show')
                                                <form action="{{ route('menu.show', $item) }}" method="get">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"><i
                                                            class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Check</button>
                                                </form>
                                            @endcan
                                            @can('menu_edit')
                                                <form action="{{ route('menu.edit', $item) }}" method="get">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"><i
                                                            class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                    </button>
                                                </form>
                                            @endcan
                                            @can('menu_delete')
                                                <form action="{{ route('menu.destroy', $item) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="dropdown-item btn-delete"><i
                                                            class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle "></i>Remove</button>
                                                </form>
                                            @endcan
                                        </div>
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
