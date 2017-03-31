@extends('front.layouts.app')

@section('breadcrumb')
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li>{{ link_to(url('/'), trans('lang.home'), trans('lang.home')) }}</li>
            <li class="active">{{ trans('lang.front.people') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    <section class="col-md-6 col-sm-6">
        <div class="col-right p-10">
            <h3>Phụ huynh cần lưu ý</h3><hr>
            <div class="row">
                <div class="col-md-12">
                    <h5>1. Loai 1:</h5>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td class="col-sm-4 text-vertical text-center text-bold" rowspan="2">KHỐI LỚP</td>
                                <td class="col-sm-4 text-center text-bold" colspan="2">2 buổi 1 tuần</td>
                                <td class="col-sm-4 text-center text-bold" colspan="2">3 buổi 1 tuần</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Sinh viên</td>
                                <td class="text-bold">Giáo viên</td>
                                <td class="text-bold">Sinh viên</td>
                                <td class="text-bold">Giáo viên</td>
                            </tr>

                            <tr>
                                <td>LỚP Lá, 1, 2, 3, 4</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LỚP 5, 6, 7, 8</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LỚP 9, 10, 11, 12</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LTĐH-NGOẠI NGỮ</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5>2. Bang 2:</h5>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td class="col-sm-4 text-vertical text-center text-bold" rowspan="2">KHỐI LỚP</td>
                                <td class="col-sm-4 text-center text-bold" colspan="2">4 buổi 1 tuần</td>
                                <td class="col-sm-4 text-center text-bold" colspan="2">5 buổi 1 tuần</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Sinh viên</td>
                                <td class="text-bold">Giáo viên</td>
                                <td class="text-bold">Sinh viên</td>
                                <td class="text-bold">Giáo viên</td>
                            </tr>

                            <tr>
                                <td>LỚP Lá, 1, 2, 3, 4</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LỚP 5, 6, 7, 8</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LỚP 9, 10, 11, 12</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LTĐH-NGOẠI NGỮ</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5>3. Bang 3:</h5>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td class="col-sm-4 text-vertical text-center text-bold" rowspan="2">KHỐI LỚP</td>
                                <td class="col-sm-4 text-center text-bold" colspan="2">6 buổi 1 tuần</td>
                                <td class="col-sm-4 text-center text-bold" colspan="2">7 buổi 1 tuần</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Sinh viên</td>
                                <td class="text-bold">Giáo viên</td>
                                <td class="text-bold">Sinh viên</td>
                                <td class="text-bold">Giáo viên</td>
                            </tr>

                            <tr>
                                <td>LỚP Lá, 1, 2, 3, 4</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LỚP 5, 6, 7, 8</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LỚP 9, 10, 11, 12</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                            <tr>
                                <td>LTĐH-NGOẠI NGỮ</td>
                                <td>600 - 700</td>
                                <td>1100 - 1200</td>
                                <td>900 - 1000</td>
                                <td>1500 - 1800</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
