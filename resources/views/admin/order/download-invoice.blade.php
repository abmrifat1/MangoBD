<h2 style="text-align: center; ">Order Invoice</h2>
<hr>
  <h3 style="text-align: left;">MangoBD</h3>

            Invoice #: 0000{{ $order->id }}<br>
            Order Date: {{ $order->created_at }}<br>
            Due: May 5, 2019

<hr>

<table>
    <tr>
        <td>Item</td>
        <td style="text-align: right; margin-right: 20px;">Price</td>
        <td style="text-align: center; margin-right: 20px;">Quantity</td>
        <td style="text-align: center; margin-right: 20px;">Discount</td>
        <td style="text-align: center;">Total</td>
    </tr>

    @php($grandTotal=0)
    @foreach($products as $product)
        <tr class="item">
            <td>{{ $product->product_name }}</td>
            <td style="text-align: right; margin-right: 20px;">Tk. {{ $product->product_price }}</td>
            <td style="text-align: center; margin-right: 20px;">{{ $product->product_quantity }}</td>
            <td style="text-align: center; margin-right: 20px;">{{ $discount=($product->discount/100)*$product->product_price }}</td>
            <td style="text-align: center;">Tk. {{ $total= ($product->product_price * $product->product_quantity)-$discount }}</td>
        </tr>
        @php($grandTotal= $grandTotal + $total)
    @endforeach
</table>
