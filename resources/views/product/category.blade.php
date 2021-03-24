@extends("layouts.master")
@section('title') BikeShop | ประเภทสินค้า @stop
@section('content')
    <div class="container">
        <table class="table table-bordered bs_table">
            <thead>
                <tr>
                    <th>ไอดี</th>
                    <th>ชื่อประเภท</th>
                    <th>การทำงาน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td class="bs-center">
                            <a href="#" class="btn btn-info"><i class="fa fa-edit">แก้ไข</i></a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash">ลบ</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
