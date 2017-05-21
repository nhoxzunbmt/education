@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom_right">
                    <div class="post_left_section">
                        <div class="post single_post" style="border-bottom: none;">
                            <h1>Các điều khoản gia sư cần nắm rõ</h1>
                            <div class="post_desc">
                                <p>Chia sẻ kinh nghiệm làm gia sư, các bước chuẩn bị làm gia sư, để có được một công việc gia sư ổn định và lâu dài.</p>
                                <p>Hiện nay, để kiếm thêm thu nhập phục vụ cho việc chi tiêu của bản thân và phụ giúp gia đình, nhiều học sinh, sinh viên đã chọn công việc gia sư để làm thêm ngoài giờ học của mình. Trong khi có rất nhiều gia sư tự do hoặc làm việc trong các trung tâm gia sư, các em học sinh và các bậc phụ huynh có vô vàn lựa chọn. Nhưng điều họ quan tâm đầu tiên ở các gia sư chính là kinh nghiệm dạy, ôn thi. Đừng quá coi trọng việc bạn đã dạy được bao nhiêu năm, bao nhiêu học sinh. Đó không hoàn toàn thể hiện kinh nghiệm làm gia sư của bạn.  Kinh nghiệm làm gia sư ở đây trên hết là cách bạn làm việc, cách bạn truyền đạt kiến thức, cách nắm bắt tâm lý học sinh, thậm chí là cách để bạn trò chuyện với học sinh và phụ huynh.</p>
                                <h5>Kinh nghiệm làm gia sư buổi đầu tiên :</h5>
                                <p><em>- Nên trao đổi với phụ huynh và học sinh về phương pháp giảng dạy, trọng tâm của khóa học, xác định rõ được mục tiêu phấn đấu và kết quả đạt được trong tương lai.</em></p>
                                <p><em>- Nên có một bài test ngắn dành cho học sinh để nắm bắt được trình độ, ưu nhược điểm của học sinh để định hướng phương pháp giảng dạy cũng như soạn giáo án cho phù hợp.</em></p>
                                <p><em>-  Nên dành 10-15’ trong buổi đầu tiên để bạn làm quen, lắng nghe và chia sẻ những khó khăn, vướng mắc của học sinh. Kinh nghiệm làm gia sư khuyên bạn, ngoài việc trở thành một người thầy, bạn cũng nên trở thành một người bạn của học trò mình.</em></p>
                                <h5>Kinh nghiệm làm gia sư cho những học trò nghịch không hợp tác hoặc ỷ lai :</h5>
                                <p><em>- Kinh nghiệm làm gia sư cho thấy việc quá khắt khe, rạch ròi đúng sai, quá coi nặng địa vị của người thầy trong quá trình dạy những học trò nghịch ngợm nói riêng và học trò nói chung là hoàn toàn sai lầm. Kinh nghiệm gia sư khuyên bạn nên trước hết hãy “lấy lòng” những học trò của mình.</em></p>
                                <p><em>- Thông qua con cái mình, các bậc phụ huynh đánh giá gia sư và quyết định cho nghỉ dạy, tăng buổi hay bớt buổi.</em></p>
                                <p><em>- Chính vì thế, thay vì quá khô khan như một thầy giáo hay cô giáo đứng trên bục giảng mà hàng ngày các em đã quá nhàm chán thì hãy dành chút thời gian cuối buổi để chơi một trò chơi, cá cược, hay kể một câu chuyện cười, bàn luận về một tin tức, một hiện tượng của lứa tuổi các em….</em></p>
                                <h5>Kinh nghiệm làm gia sư tạo thiện cảm với phụ huynh:</h5>
                                <p><em>- Kinh nghiệm làm gia sư khuyên bạn không những trước mặt các bậc phụ huynh mà trước những học trò của mình phải có một tác phong làm việc chuyên nghiệp nhất: Bạn phải ăn mặc gọn gàng, đứng đắn để tạo vẻ bề ngoài dễ gần và tạo cho mình sự tự tin. Học trò luôn thích những gia sư dễ coi ngồi cạnh kèm cặp, chứ có gương mặt bùi bụi, luôn cau có, khó đăm đăm sẽ làm cho học trò thấy khó chịu. Tác phong sư phạm ở đây bao gồm cả lời nói, cách đi đứng, điệu bộ, thái độ, cử chỉ…</em></p>
                                <p><em>- Một kinh nghiệm làm gia sư hay nữa giúp tạo thiện cảm cho những bậc phụ huynh là gia sư nên chăm chỉ đi sớm về muộn, hoặc ít nhất cũng nên đúng giờ.  Kinh nghiệm làm gia sư cho bạn biết là bạn chỉ cần tới dạy đúng giờ và về muộn 5 phút thôi cũng đủ để các bậc phụ huynh có cái nhìn thiện cảm hơn về bạn.</em></p>
                                <p><em>- Vào những ngày định kỳ trong tháng, hãy dành thời gian trao đổi một chút với các bậc phụ huynh về việc học của con em họ, bạn phải cho họ thấy sự tiến bộ, điểm yếu còn tồn tại và hướng giải quyết của bạn. Bạn phải luôn chứng tỏ rằng bạn là gia sư biết cách làm cho con em họ thay đổi và tiến bộ hơn.</em></p>
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
