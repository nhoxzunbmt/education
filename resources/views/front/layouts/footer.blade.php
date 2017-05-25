<footer class="footer-v1">
    <div class="menuFooter clearfix">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-3 col-xs-6">
                    <ul class="menuLink">
                        <li>{{ link_to('dang-ky-tim-gia-su', 'Phụ huynh tìm gia sư')}}</li>
                        <li>{{ link_to('danh-sach-gia-su', 'Danh sách gia sư')}}</li>
                        <li>{{ link_to('phu-huynh-can-biet', 'Phụ huynh cần biết')}}</li>
                        <li>{{ link_to('hoc-phi-gia-su', 'Học phí gia sư')}}</li>
                    </ul>
                </div>

                <div class="col-sm-3 col-xs-6 borderLeft">
                    <ul class="menuLink">
                        <li>{{ link_to('dang-ky-lam-gia-su', 'Đăng ký gia sư')}}</li>
                        <li>{{ link_to('danh-sach-lop', 'Danh sách lớp')}}</li>
                        <li>{{ link_to('gia-su-can-biet', 'Gia sư cần biết')}}</li>
                        <li>{{ link_to('thanh-toan', 'Thanh toán')}}</li>
                    </ul>
                </div>

                <div class="col-sm-3 col-xs-6 borderLeft">
                    <div class="footer-address">
                        <h5>Địa chỉ:</h5>
                        <address>Số 4, Ngõ 225/95/15, Đường Mỹ Đình, Nam Từ Liêm, Hà Nội</address>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-6 borderLeft">
                    <div class="socialArea">
                        <h5>Về chúng tôi:</h5>
                        <ul class="list-inline ">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="contactNo">
                        <h5>Hotline:</h5>
                        <h3>01674.537.055</h3>
                    </div>
                </div>
            </div>
        </div>
  </div>

  <div class="footer clearfix">
    <div class="container">
      <div class="row clearfix">
        <div class="col-sm-6 col-xs-12 copyRight">
          <p>&copy; 2017 Bản quyền thuộc về Giasutritue.com</p>
        </div><!-- col-sm-6 col-xs-12 -->
        <div class="col-sm-6 col-xs-12 privacy_policy">
          {{ link_to('lien-he', 'Liên hệ') }}
          {{ link_to('chinh-sach', 'Chính sách') }}
      </div>
    </div>
  </div>
</footer>
