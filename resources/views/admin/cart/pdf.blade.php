<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">   
        <div class="invoice-container" ref="document" id="html">
           <table style="width:100%; height:auto;  text-align:center; " BORDER=0 CELLSPACING=0>
             <thead style="background:#fafafa; padding:8px;">
               <tr style="font-size: 20px;">
                 <td colspan="4" style="padding:20px 20px;text-align: left;">MONA FURNITURE</td>
               </tr>
             </thead>
             <tbody style="background:#ffff;padding:20px;">
               <tr>
                 <td colspan="4" style="padding:20px 0px 0px 20px;text-align:left;font-size: 16px;color:#000;">Mã đơn hàng <b>#120{{ $orders->id }}</b> Từ
                    <b>{{ $orders->created_at->diffForHumans() }}</b>   </td>
               </tr>
               <tr>
                <td colspan="4" style="padding:20px 0px 0px 20px;text-align:left;font-size: 16px;color:#000;">Họ tên khách hàng: {{ $orders->user->name }}</td>
              </tr>
              <tr>
                <td colspan="4" style="padding:20px 0px 0px 20px;text-align:left;font-size: 16px;color:#000;">Số điện thoại: {{ $orders->phone }}</td>
              </tr>
               <tr>
                 <td colspan="4" style="text-align:left;padding:10px 10px 10px 20px;font-size:16px;">Thông tin hoá đơn</td>
               </tr>
             </tbody>
           </table>
           <table style="width:100%; height:auto; background-color:#fff;text-align:center; padding:10px; background:#fafafa">
             <tbody>
               <tr style="color:#6c757d; font-size: 20px;">
                 <td style="border-right:1.5px dashed  #DCDCDC; width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Order Date</td>
                 <td style="border-right: 1.5px dashed  #DCDCDC ;width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Order No.</td>
                 <td style="border-right:1.5px dashed  #DCDCDC ;width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Payment</td>
                 <td style="width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Shipping Address</td>
               </tr>
               <tr style="background-color:#fff; font-size:12px; color:#262626;">
                 <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;">{{ $orders->created_at}}</td>
                 <td style="border-right:1.5px dashed  #DCDCDC ;width:25% ; font-weight:bold;background: #fafafa;">#120{{ $orders->id }}</td>
                 <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;">CASH</td>
                 <td style="width:25%; font-weight:bold;background: #fafafa;">{{ $orders->address }}</td>
               </tr>
             </tbody>
           </table>
           <table style="width:100%; height:auto; background-color:#fff; margin-top:0px;  padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0px;">
             <thead>
               <tr style=" color: #6c757d;font-weight: bold; padding: 5px;">
                 <td colspan="2" style="text-align: left;">Tên sản phẩm</td>
                 <td style="text-align: center;">Số lượng</td>
                 <td style="padding: 10px;text-align:center;">Giá</td>
                 <td style="text-align:center;padding: 10px;">Tổng tiền</td>
               </tr>
             </thead>
             <tbody>
                <?php $totalOrder = 0 ?>
                @foreach ($detail as $item)
                <?php $totalOrder += $item->subtotal ?>
               <tr>
                 <td style="width:10%; ">
                   <a href=""><img src="{{ url('uploads') }}/{{ $item->product->image }}" style="width:100px;" /></a>
                 </td>
                 <td style="width:20%;margin-left:10px;text-align: center;">{{ $item->product->name }}</td>
                 <td style="width:20%;padding: 10px; text-align:center;">{{ $item->quantity }}</td>
                 <td style="width:20%;padding: 10px;text-align: center;">{{ number_format($item->product->price) }}đ</td>
                 <td style="width:30%; ;font-weight: bold;font-size: 14px;text-align: center;">{{ number_format($item->subtotal) }}đ</td>
               </tr>
               @endforeach
             </tbody>
           </table>
           <table style="width:100%; height:auto; background-color:#fff;padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0">
             <tbody>
               <tr style="padding:20px;color:#000;font-size:15px">
                 <td style="font-weight: bold;padding:5px 0px">Tổng thu :</td>
                 <td style="text-align:right;padding:5px 0px;font-weight: bold;font-size:16px;">{{number_format($totalOrder)}}đ</td>
               </tr>
             </tbody>
             <tfoot style="padding-top:20px;font-weight: bold;">
               <tr>
                 <td style="padding-top:20px;">Need help? Contact us <span style="color:#c61932"> info@thred-plus.shop </span></td>
               </tr>
             </tfoot>
           </table>
      </div>
      </div>
</body>
</html>


