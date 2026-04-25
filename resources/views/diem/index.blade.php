<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Điểm Sinh Viên</title>
    <style>
        body { font-family: sans-serif; background-color: #f8f9fa; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh Sách Sinh Viên và Điểm</h1>
        <table>
            <thead>
                <tr>
                    <th>Mã SV</th>
                    <th>Họ Tên</th>
                    <th>Môn Học</th>
                    <th>Điểm</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sinhviens as $sv)
                    @if($sv->diems->isEmpty())
                        <tr>
                            <td>{{ $sv->ma_sv }}</td>
                            <td>{{ $sv->ho_ten }}</td>
                            <td colspan="2">Chưa có điểm</td>
                        </tr>
                    @else
                        @foreach ($sv->diems as $index => $diem)
                            <tr>
                                @if ($index == 0)
                                    <td rowspan="{{ count($sv->diems) }}">{{ $sv->ma_sv }}</td>
                                    <td rowspan="{{ count($sv->diems) }}">{{ $sv->ho_ten }}</td>
                                @endif
                                <td>{{ $diem->ten_mon_hoc }}</td>
                                <td>{{ $diem->diem }}</td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
