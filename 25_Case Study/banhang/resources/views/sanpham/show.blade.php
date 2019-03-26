@include('layout.head')
<link href="/css/detail.css" rel="stylesheet" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>

  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
                        @if($sanphams->image)
						  <div class="tab-pane active" id="pic-1"> 
                             <img src="{{ asset('storage/'.$sanphams->image) }}" alt="" style="width: 400px; height: 400px">
                          </div>
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$sanphams->ten}}</h3>
						<div class="rating">
							<div class="stars">
						 ratting:	{{$avgRatting}}<span class="fa fa-star checked"></span>
							</div>
							<span class="review-no"></span>
						</div>
						<p class="product-description"><strong>chi tiet: </strong>{{$sanphams->chitiet}}</p>
						<h4 class="price">current price: <span>{{$sanphams->gia}} vnđ</span></h4>
						<p class="vote"><strong>cho điểm đánh giá sản phẩm </strong> 
						<form method='post' action="{{route('sanpham.ratting',$sanphams->id)}}">
						@csrf
						<input type="number" min="1" max="10" style="width: 60px; height: 28px" value='5' name="ratting">
						<input type="submit" value="đánh giá" >
						</form>
						</p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<form method="post" action="{{route('giohang.add',$sanphams->id)}}">
                        @csrf
                         <div  align='left'>
                             <td>
                                <strong>số lượng </strong><input type="number" min="1" value="1" style="width: 54px; height: 20px" name="soluong">
                             </td> 
                         </div>
                         <div>
                            &nbsp
                         </div>
						<div class="action">
               <input class="add-to-cart btn btn-default" type="submit" href="{{route('giohang.add',$sanphams->id)}}" value="Add to cart">
              </form>
							@if(Auth::check())
							@if (Auth::user()->role > 0)
               <a class="add-to-cart btn btn-default" type="button"  href="{{route('sanpham.edit',$sanphams->id)}}">sửa</a>
               <a class="add-to-cart btn btn-danger" type="button"  href="{{route('sanpham.delete',$sanphams->id)}}">xóa</a>
							 @endif
							@endif
						</div>
						<form method="post" action="{{route('comment.add',$sanphams->id)}}">
						@csrf
										<textarea placeholder="comment here.."  name='comment'></textarea>
									
										<button type="submit" class="btn btn-success green" ><i class="fa fa-share"></i> comment	</button>
									</form>
					</div>
				</div>
			   <div class="container">
             <div class="row">
                <div class="col-sm-12">
								@if(count($comments) > 0)	
                <h3> <strong>Comment</strong> </h3>
                </div>
             </div>
           @foreach($comments as $comment)
              <div class="col-sm-5">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                       <strong>tên: {{$comment->username}}</strong> <span class="text-muted"></span>
                     </div>
                 <div class="panel-body">
                    {{$comment->comment}}
                 </div>
								 @if(Auth::check())
								 @if(Auth::user()->id === $comment->user_id)
								     <div align="right">
                       <a class="add-to-cart btn btn-danger" type="button"  href="{{route('comment.delete',$comment->id)}}">xóa</a>
							      </div>
										@endif
									@endif
                </div>
              </div>
            @endforeach
						@else
					  <strong>chưa có bình luận nào.</strong>
           @endif
			</div>
		</div>
	</div>
  </body>
</html>