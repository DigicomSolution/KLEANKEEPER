<section class="footerMain fooBg" style="display: block;">
                <div class="container p-0">
                    <div class="row footerM--row grid-l1">
                        @foreach($menu_items as $ex_footer)

	@include('client.menu.extra_footer', ['items'=>$ex_footer, 'depth'=>0])  

                        @endforeach                      
             </div>
        </div>
</section>