@extends("layouts.master")
@section('title') BikeShop | รายการสินค้า @stop
@section('content')
    <div class="container">
        <h1>รายการสินค้า</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <strong>รายการ</strong>
                </div>
            </div>
            <a href="{{ URL::to('product/edit') }}" class="btn btn-success pull-right"><i
                class="fa fa-edit">เพิ่มสินค้า</i></a>
            <div class="panel-body">
                <form action="{{ URL::to('/product/search') }}" method="post" class="form-inline">
                    {{ csrf_field() }}
                    <input type="text" name="q" class="form-control" placeholder="">
                    <button type="submit" class="btn btn-primary">ค้นหา</button>
                </form>
                <table class="table table-bordered bs_table">
            </div>
            <thead>
                <tr>
                    <th>รูปสินค้า</th>
                    <th>รหัส</th>
                    <th>ชื่อสินค้า</th>
                    <th>ประเภท</th>
                    <th>คงเหลือ</th>
                    <th>ราคาต่อหน่วย</th>
                    <th>การทำงาน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td><img src="{{ URL::to($item->image_url) }}" width="50px"></td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td class="bs-price">{{ number_format($item->stock_qty, 0) }}</td>
                        <td class="bs-price">{{ number_format($item->price, 2) }}</td>
                        <td class="bs-center">
                            <a href="{{ URL::to('product/edit/' . $item->id) }}" class="btn btn-info"><i
                                    class="fa fa-edit">แก้ไข</i></a>
                            <a href="#" class="btn btn-danger btn-delete" id-delete="{{ $item->id }}"><i
                                    class="fa fa-trash">ลบ</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">รวม</th>
                    <th class="bs-price">{{ number_format($products->sum('stock_qty'), 0) }}</th>
                    <th class="bs-price">{{ number_format($products->sum('price'), 2) }}</th>
                </tr>
            </tfoot>
            </table>
            {{-- <div class="panel-footer"></div> --}}
        </div>
    </div>

    <script>
        $('.btn-delete').on('click', function() {
            if (confirm("คุณต้องการลบข้อมูลสินค้าหรือไม่?")) {
                var url = "{{ URL::to('product/remove') }}" +
                    '/' + $(this).attr('id-delete');
                window.location.href = url;
            }
        });

    </script>
@endsection
