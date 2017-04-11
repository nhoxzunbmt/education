<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4" id="brand-footer">
                <p><a href="{{ url('/') }}"><img src="{{ url('/') }}/icons/logo-footer.jpg" height="50"></a></p>
                <p>Bản quyền &copy; {{ current_year() }}</p>
                <div class="twitter"><a href="#">Follow on Twitter</a></div>
                <div class="fb"><a href="#">Follow on  Facebook</a></div>
            </div>

            <div class="col-md-4 col-sm-4" id="contacts-footer">
                <h4>Liên hệ với chúng tôi</h4>
                <ul>
                    <li><i class="icon-home"></i> 11 Fifth Ave, Loftus - NEW JERSEY, US</li>
                    <li><i class="icon-phone"></i> Telephone: + 61 (2) 8093 3400</li>
                    <li><i class="icon-phone-sign"></i> Fax: +61 (2) 9542 3599</li>
                    <li><i class="icon-envelope"></i> Email: <a href="#">dovv1987@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4" id="quick-links">
                <h4>Đăng ký nhận thông tin</h4>
                <div id="message-newsletter"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                    <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                    <button id="submit-newsletter" class="button_medium" style="position:relative"> Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</footer>

<div id="toTop" title="Lên trên"></div>
