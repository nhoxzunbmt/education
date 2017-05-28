@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom_right">
                    <div class="post_left_section">
                        <div class="post single_post" style="border-bottom: none;">
                            <h1>Phụ huynh cần biết</h1>

                            <div class="post_desc">
                                <div class="post_thumb">
                                    <img src="{{ url('/') }}/img/gia-su.jpg" height="260">
                                </div>
                                <p>Bạn luôn mong con em mình giỏi giang, nhưng các em dường như đã rất vất vả với chuyện học ở trường?</p>
                                <p>Bạn nghĩ nên tìm cho con một gia sư tốt? <span class="required">Chúng tôi có một số lời khuyên dành cho bạn.</span></p>
                                <h5 class="required">Nên xác định rõ nhu cầu :</h5>
                                <p><em>- Vì sao bạn nghĩ rằng con mình cần học gia sư.</em></p>
                                <p><em>- Cháu có khó khăn trong việc học môn nào.</em></p>
                                <p><em>- Cháu vô cùng vất vả khi làm bài tập về nhà.</em></p>
                                <p><em>- Mối quan hệ giữa bạn và con có tốt không.</em></p>
                                <p><em>- Liệu con bạn không có vấn đề gì về phát triển trí tuệ.</em></p>
                                <p><em>- Một kỳ thi cực kỳ quan trọng tới gần.</em></p>
                                <p><strong>Hãy rà soát lại và suy nghĩ thật kỹ xem liệu con có cần một sự giúp đỡ đặc biệt nào mà thầy cô ở trường không thể đáp ứng...</strong></p>
                                <p><strong>Theo bạn, con mình không theo kịp bạn bè trong lớp có phải vì cháu ốm, hay vì mới chuyển trường?... Hãy nhận rõ mục tiêu để tìm cho con một gia sư phù hợp nhất!</strong></p>
                                <h5 class="required">Nên trao đổi với giáo viên của con :</h5>
                                <p>Mục đích cuối cùng của bạn là giúp con học hành tiến bộ, bởi thế hãy liên lạc với thầy cô của con trên lớp để hỏi thăm những thông tin cần thiết như.</p>
                                <p><em>- Cháu đặc biệt yếu kém và cần được kèm cặp riêng môn nào?</em></p>
                                <p><em>- Có cần tìm một Gia sư có kinh nghiệm giảng dạy không?</em></p>
                                <p><em>- Hãy hỏi thầy cô về lịch thi, kiểm tra để Gia sư của con bạn có kế hoạch cụ thể cho việc ôn luyện, bồi dưỡng kiến thức.</em></p>
                                <h5 class="required">Kế hoạch học tập</h5>
                                <p>Khi đã tìm được Gia sư cho con, hãy ngồi lại cùng bàn kế hoạch giúp con tiến bộ. Ví dụ: Có thể hỏi Gia sư xem thầy cô ấy dự định tiến hành những bước cụ thể nào trong kế hoạch giúp con bạn? Mức độ tiến bộ của con sẽ được đánh giá bằng cách nào? Các buổi học sẽ đề cập đến kiến thức, các bài tập, bài kiểm tra trên lớp chứ?</p>
                                <p>Hãy rõ ràng ngay từ đầu vấn đề học phí cũng như nguyện vọng của gia sư khi hợp tác cùng gia đình bạn. Sau cùng, ít nhất tuần 1 lần, hãy để ý xem việc học của con và gia sư đang tiến triển đến đâu?</p>
                                <h5 class="required">Hãy thực tế</h5>
                                <p>Gia sư không phải là một ảo thuật gia tài thánh, quá trình học tập của con bạn cần thời gian mới thấy rõ sự tiến bộ. Bởi thế, hãy tỉnh táo trước những kỳ vọng, đừng quên cổ vũ con: "Mẹ biết con học vất vả, nhưng đây là kết quả của con tuần trước. Hãy xem, tuần này con tiến bộ"...</p>
                            </div>
                        </div>
                    </div>
                </div>
            @include('front.layouts.right')
            </div>
        </div>
    </div>

    @section('partner')
        @include('front.layouts.partner')
    @endsection
@endsection
