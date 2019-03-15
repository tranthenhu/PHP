@include('layout.head')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-flud">
<div class="row">
<div class="col-md-3">
</div>

	 
            <div class="col-md-9">


                <div class="col-md-5 col-sm-6 col-xs-12 col-md-push-6 col-sm-7">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Review Order</h4>
                        </div>

                        <div class="panel-body">
                      
                        @foreach($giohangs as $key => $giohang)
                                <div class="col-md-12">
                                    <strong>tên: {{$giohang->sanpham->ten}}</strong>
                                    <div class="pull-right"><span>{{$giohang->sanpham->gia}}</span><span>.vnđ</span></div>
                                </div>
                               
                                @endforeach 
                               
                                <div class="col-md-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>$num</span><span></span></div>
                                    <hr>
                                </div>
                             
                                <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
                                
                        </div>
                        
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                
                <div class="col-md-7 col-sm-6 col-xs-12 col-md-pull-6 col-sm-5">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h3><strong>Current Cart</strong></h3></div>
                        <div class="panel-body">
                           <table class="table borderless">
    						<thead>
                                <tr>
        							<td ><strong>Your Cart</strong></td>
                                    <td class="text-left"><strong>Tên</strong></td>
        							<td class="text-center"><strong>Số lượng</strong> </td>
        							<td class="text-center"><strong>Giá(vnđ)</strong></td>
        							
        							<td></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                @foreach($giohangs as $key => $giohang)
    							<tr>
    								<td class="col-md-3">
    								    <div class="media">
                                        @if($giohang->sanpham->image)
    								          <img class="group list-group-image" src="{{ asset('storage/'.$giohang->sanpham->image) }}" alt="" 
                                               style="width: 72px; height: 72px;">
                                              @else
                                                  {{'Chưa có ảnh'}}
                                          @endif
    								         <div class="media-body">
    								            
    								             <h5 class="media-heading"> </h5>
    								         </div>
    								    </div>
    								</td>
                                    <td class="text-left" > {{$giohang->ten}}</td>
                                      
    								      <td class="text-center"> 
                                              <input type='text' style="width: 50px; height: 20px;" value='1' name='{{$giohang->ten}}'>
                                          </td>
                                    
    								<td class="text-center">{{$giohang->sanpham->gia}}</td>
    								
    								<td class="text-right"><a href="{{route('giohang.destroy',$giohang->id)}}" type="button" class="btn btn-danger">Remove</a></td>
                                    
    							</tr>
                                @endforeach
    						</tbody>
    					</table> 
                        </div>
                    </div>
                    

                    <!--SHIPPING METHOD END-->
                </div>
                </div>
                </div>
</div>
