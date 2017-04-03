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
            <h3>Dịch vụ gia sư</h3><hr>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="color_1">1. s:</h5>
                    <ul class="list_1">
                        <li>Khối tiểu học,THCS,THPT do nhóm Giáo Viên - Sinh Viên chuyên khoa đảm nhận.</li>
                        <li>Luyện chữ đẹp,chính tả,tiếng việt ,anh văn,vẽ tô màu...cho học sinh Tiểu Học.</li>
                        <li>Ôn thi tốt nghiệp,chuyển cấp THCS,THPT,luyên thi ĐH các khối A,B,C,D,A1...</li>
                        <li>Bồi dưỡng từng môn giúp luyện thi học sinh giỏi Quận,Thành Phố,Quốc Gia.</li>
                        <li>Dạy ANH-PHÁP-HOA-NHẬT...các chứng chỉ A,B,C,D...Đàm thoại cấp tốc.</li>
                        <li>Dạy từ căn bản đến nâng cao tin học,đàn,vẽ cho mọi lứa tuổi và trình độ.</li>
                    </ul>
                    <h5 class="color_1">2. Phương pháp học tập:</h5>
                    <ul class="list_1">
                        <li>Giáo viên hoặc sinh viên đến nhà học sinh kiểm tra đánh giá trình độ và đưa ra phương pháp học tập, lên giáo án giảng dạy cho phù hợp với từng học sinh.</li>
                        <li>Tư vấn cho phụ huynh và học sinh chọn khối thi, trường thi phù hợp năng lực và sở trường của từng em.</li>
                        <li>Giáo án cho từng GIA SƯ biên soạn riêng biệt phù hợp với năng lực của học sinh, chủ yếu nâng cao khả năng tự lập, khả năng tư duy và tự giải các dạng bài tập đối với từng học sinh.</li>
                        <li>Hệ thống bài giảng, bài kiểm tra, bài thi thử theo chương trình quy chuẩn của Bộ Giáo Dục và Đào Tạo.</li>
                        <li>Kết quả giảng dạy và sự tiến bộ của học sinh sẽ được trung tâm cập nhật và thông báo chi tiết đến phụ huynh học sinh vào mỗi tháng (thông qua hệ thống email, website, điện thoại...).</li>
                    </ul>
                    <h5 class="color_1">3. Mục đích dạy kèm:</h5>
                    <ul class="list_1">
                        <li>Bám sát chương trình cải cách mới của Bộ Giáo dục và đào tạo.</li>
                        <li>Kèm sát theo sổ báo bài, khối lượng bài giải tại nhà của từng học sinh.</li>
                        <li>Lấy lại kiến thức cho học sinh yếu.</li>
                        <li>Nâng cao kiến thức cho học sinh khá giỏi.</li>
                        <li>Bồi dưỡng kiến thức cho các thí sinh chuẩn bị tham dự các cuộc thi : Học sinh giỏi các cấp, các chương trình học bổng do Sở Giáo dục TP HCM tổ chức.</li>
                    </ul>
                    <h5 class="color_1">4. Cam kết chất lượng:</h5>
                    <ul class="list_1">
                        <li>Hiệu quả - uy tín là tiêu chí hoạt động hàng đầu của Trung tâm.</li>
                        <li>Phối hợp với phụ huynh kiểm tra chất lượng của gia sư trong suốt quá trình học.</li>
                        <li>Hủy ngay những hợp đồng gia sư giảng dạy thiếu nhân cách và tri thức. Thực hiện đổi ngay gia sư để đảm bảo việc học của học sinh.</li>
                        <li>Tư vấn Giáo viên, sinh viên phù hợp với trình độ của học sinh (Phụ huynh và học sinh có quyền đề cử giáo viên thích hợp).</li>
                        <li>Cam kết học sinh tiến bộ sau một tháng.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
