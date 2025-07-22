@foreach($menu_items as $mMenu)
    @include('client.menu.header', ['items'=>$mMenu['menu'], 'depth'=>0, 'type'=>$mMenu['type']])
@endforeach