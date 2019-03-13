@include('layout.head')

<div id="categories-list" class="row list-group">
<div class="item  col-xs-3 col-lg-3">
@include('layout.sidebar')
</div>
<div class="item  col-xs-9 col-lg-9">
@if(count($sanphams) == 0)
          <tr><td colspan="3">Không có dữ liệu</td></tr>
          @else
   @foreach($sanphams as $sanpham)
        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
            @if($sanpham->image)
                <img style="width: 200px; height: 200px"
                class="group list-group-image" src="{{ asset('storage/'.$sanpham->image) }}" alt="" />
                @else
                            {{'Chưa có ảnh'}}
                        @endif
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                    {{$sanpham->ten}}</h4>
                    <p class="group inner list-group-item-text">
                    {{$sanpham->phanloai->ten}}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                               {{$sanpham->gia}} vnđ</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <a class="btn btn-success" href="{{route('sanpham.show',$sanpham->id)}}">Detail</a>
                            <a class="btn btn-success" href="{{route('giohang.add',$sanpham->id)}}">Add to cart</a>
                          
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      @endif
    
</div>  
      
</div>
{{$sanphams->links()}}