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
                    tên: {{$sanpham->ten}}</h4>
                    <h6 class="group inner list-group-item-text">
                    loại: {{$sanpham->phanloai->ten}}</h6>
                    <div class="row">
                        <div class="col-xs-6 col-md-12">
                            <p class="lead">
                               {{$sanpham->gia}}.vnđ</p>
                        </div>
                        <div class="col-xs-6 col-md-12">
                        
                        <form method="post" action="{{route('giohang.add',$sanpham->id)}}">
                        @csrf
                        <div  align='right'>
                             <td>
                                <strong>số lượng </strong><input type="number" min="1" value="1" style="width: 40px; height: 20px" name="soluong">
                             </td> 
                             </div>
                        <div class="row">

                        <div class="col-md-4">
                        <a class="btn btn-success" href="{{route('sanpham.show',$sanpham->id)}}">Detail</a>
                        </div>
                        
                            <div  class="col-md-4">   
                            <input type="submit" class="btn btn-success" style="width: 120px; height: 35px" value="Add to cart" >
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      @endif
    
</div>  
      
</div>
