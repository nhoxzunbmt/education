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
                    <p>Sau đây là 1 số lưu ý giúp quý phụ hunh không bị trung tâm gia sư lừa  đảo lợi dụng</p>
                    <h5>1. Hình thức làm việc của các trung tâm gia sư lừa đảo :</h5>
                    <ul class="list_1">
                        <li>Không cung cấp giấy tờ tùy thân và bằng cấp của gia sư khi đi giao nhận lớp cho bên phụ huynh.</li>
                        <li>Không kiểm tra kiến thức của gia sư bằng các bài kiểm tra trực tiếp môn học mà gia sư đó sẽ đi nhận dạy.</li>
                        <li>Không chịu trách nhiệm về kết quả việc học của con em qu‎ý phụ hunh và luôn lấy lý do bào chữa.</li>
                    </ul>
                    <h5>2. Mục đích của trung tâm gia sư lừa đảo “nói không thành có”:</h5>
                    <ul class="list_1">
                        <li>Phụ huynh đang cần thuê 1 giáo viên thì trung tâm gia sư lừa đảo sẽ giới thiệu 1 sinh viên.</li>
                        <li>Phụ huynh muốn thuê 1 sinh viên học đại học thì có thể giới thiệu 1 sinh viên học cao đẳng hoặc trung cấp.</li>
                        <li>Phụ huynh cần người gia sư dạy tốt thì giới thiệu 1 người chưa có kinh nghiệm dạy.</li>
                    </ul>
                    <h5>3. Các thiệt hại bên phụ huynh phải chịu “tiền mất tật mang”:</h5>
                    <ul class="list_1">
                        <li>Chất lượng dạy của gia sư không đảm bảo.</li>
                        <li>Mất cắp đồ đạc.</li>
                        <li>Con cái của phụ huynh bị kẻ xấu dụ dỗ.</li>
                    </ul>
                    <h5>4. Các thủ thuật qua mặt phụ huynh của trung tâm gia sư lừa đảo:</h5>
                    <ul class="list_1">
                        <li>Phụ huynh yêu cầu xem bằng cấp thì gia sư lừa đảo chỉ đưa ra 1 tấm thẻ giả là thẻ giáo viên hoặc thẻ sinh viên (tấm thẻ đó được trung tâm lừa đảo làm cho gia sư khi tới nhận lớp).</li>
                        <li>Phụ huynh yêu cầu xem bằng cấp gốc thì tuyệt nhiên gia sư đó sẽ xin nghỉ vì 1 vài l‎ý do như bị bệnh, bận việc không có thời gian dạy, phải học thêm cao học…v..v..Mà không cung cấp bằng cấp giấy tờ.Đa phần là gia sư lừa đảo sẽ hướng dẫn trước khi gia sư đến nhận lớp.</li>
                    </ul>
                    <h5>5. Lời khuyên cho các bậc phụ huynh có con em đang học gia sư:</h5>
                    <ul class="list_1">
                        <li>Hãy kiểm tra giấy tờ bằng cấp gia sư 1 cách đầy đủ.</li>
                        <li>Không chấp nhận bất kì hình thức thẻ giáo viên nào.</li>
                        <li> Hãy kiểm tra chứng minh thư 1 cách thật kĩ càng.</li>
                        <li>Quan sát cách giảng dạy của gia sư.</li>
                    </ul>
                    <p>Trên đây chỉ là 1 số kinh nghiệm về cách làm việc của đa số trung tâm gia sư lừa đảo,họ không quan tâm tới chất lượng dạy kèm của gia sư mà chỉ quan tâm tới số tiền lệ phí gia sư sẽ đóng cho họ.</p>
                    <p>Chúc qu‎ý phụ huynh sẽ tìm được trung tâm gia sư uy tín để có những gia sư tốt dạy cho con em mình giỏi hơn!.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
