@foreach($menu_items as $mMenu)
    @include('client.menu.bottom_menu', ['items'=>$mMenu['menu'], 'depth'=>0, 'type'=>$mMenu['type']])
@endforeach