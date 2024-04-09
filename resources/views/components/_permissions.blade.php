@props(['permissions', 'role', 'user', 'show'])
<div class="card-box">
    <div class="row">
        <div class="col">
            <div>
                <h4 class="header-title">{{ $show ? 'List of Permissions' : 'Assign Permissions' }}</h4>

                <p class="sub-header">
                    Check the <code> checkbox </code> to
                    <code> assign </code> permissions
                </p>
            </div>
        </div>
    </div>
    <div class="row">

        @foreach ($permissions->groupBy(function ($item) {
        $nameParts = explode('_', $item['name']);
        return $nameParts[0];
    }) as $group => $items)
            <div class="col-xl-3 col-lg-4 col-md-6 my-2">
                <div>
                    <h4 class="header-title">{{ $group . PHP_EOL }}</h4>

                    @foreach ($items as $i)
                        @php
                            if (isset($role)) {
                                $checked = $role->hasDirectPermission($i->name);
                            }
                            if (isset($user)) {
                                $checked = $user->hasDirectPermission($i->name);
                            }
                            $nameParts = explode('_', $i['name']);
                        @endphp
                        <div class="checkbox checkbox-blue">
                            <input type="checkbox" id="checkbox{{ $i->id }}"
                                @if ($checked == true) checked @endif name="permissions[]"
                                value="{{ $i->id }}" @if ($show) disabled @endif />
                            <label for="checkbox{{ $i->id }}">
                                {{ Str::title(isset($nameParts[1]) ? $nameParts[1] . ' ' . $nameParts[0] : $nameParts[0]) }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
