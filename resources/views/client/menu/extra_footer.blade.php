@if(isset($items))
<div class="col-lg-2 col-md-4 col-sm-6 col-6  foobgcol">

@foreach($items['menu'] as $key=>$data)      
                            <div class="col-foo-isc acc__card">
                                <h3 class="acc__title">{{$data->title}}</h3>
                                <ul class="acc__panel">
                                   
@if(isset($data['children']))
                                      @foreach ($data['children'] as $c)
                                    <li><a href="{{url('/'.$c->url)}}">{{$c->title}}</a></li>
                                      @endforeach  
@endif
                                   
                                 </ul>
                            </div>
                         
   @endforeach 
 </div>
 
@endif                        
                        

                    