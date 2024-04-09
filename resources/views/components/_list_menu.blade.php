@props(['menus'])
<div class="card-box">
    <div class="row">
        <div class="col">
            <ul class="sitemap sitemap-icon" dir="ltr">
                <li>
                    <h4 class="m-0 font-18">List of Menu</h4>
                    <ul>
                        @foreach ($menus as $main_menu)
                            @if (count($main_menu->children))
                                <li><a href=""><i class="mdi mdi-checkbox-blank-circle"></i>
                                        {{ $main_menu->name }}</a>
                                    <ul>
                                        @foreach ($main_menu->children as $sub_menu)
                                            <li><a href=""><i class="mdi mdi-adjust"></i>
                                                    {{ $sub_menu->name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @else
                                <li><a href=""><i class="mdi mdi-checkbox-blank-circle"></i>
                                        {{ $main_menu->name }}</a></li>
                            @endif
                        @endforeach




                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
