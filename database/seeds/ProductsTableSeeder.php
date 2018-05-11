<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'iPhone X 64GB',
                'slug' => str_slug('iPhone X 64GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                            <h2>"<a href="https://www.thegioididong.com/dtdd/iphone-x-64gb" target="_blank" title="Điện thoại iPhone X 64GB" type="Điện thoại iPhone X 64GB">iPhone X giá</a>
                            " là cụm từ được&nbsp;rất nhiều người mong chờ muốn biết và tìm kiếm trên Google bởi đây là chiếc điện thoại mà Apple kỉ niệm 10 năm iPhone đầu tiên được bán ra.</h2><h3><strong>Thiết kế đột phá</strong></h3><p>Như các bạn cũng đã biết thì đã 4 năm kể từ iPhone 6 và iPhone 6 Plus Apple vẫn chưa có thay đổi nào đáng kể trong thiết kế của mình.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb1.jpg" onclick="return false;"><img alt="Thiết kế đột phá" data-original="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb1.jpg" class="lazy" title="Thiết kế đột phá" src="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb1.jpg" style="display: block;"></a></p><p>Nhưng với iPhone X thì đó lại là 1 câu chuyện hoàn toàn khác, máy chuyển qua sử dụng màn hình tỉ lệ 19,5:9 mới mẻ với phần diện tích hiển thị mặt trước cực lớn.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb2.jpg" onclick="return false;"><img alt="Thiết kế đột phá" data-original="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb2.jpg" class="lazy" title="Thiết kế đột phá" src="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb2.jpg" style="display: block;"></a></p><p>Mặt lưng kính hỗ trợ sạc nhanh không dây cũng như phần camera kép đặt dọc cũng là những thứ đầu tiên xuất hiện trên 1 chiếc iPhone.</p><h3><strong>Màn hình với tai thỏ</strong></h3><p>Điểm khiến iPhone X bị chê nhiều nhất đó chính là phần "tai thỏ" phía trên màn hình, Apple đã chấp nhận điều này để đặt cụm camera&nbsp;TrueDept mới của hãng.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb15.jpg" onclick="return false;"><img alt="Màn hình với tai thỏ" data-original="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb15.jpg" class="lazy" title="Màn hình với tai thỏ" src="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb15.jpg" style="display: block;"></a></p><p>Màn hình kích thước 5.8 inch độ phân giải&nbsp;1125 x 2436 pixels đem đến khả năng hiển thị xuất sắc.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb20.jpg" onclick="return false;"><img alt="Màn hình với tai thỏ" data-original="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb20.jpg" class="lazy" title="Màn hình với tai thỏ" src="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb20.jpg" style="display: block;"></a></p><p>iPhone X sử dụng tấm nền <a href="https://www.thegioididong.com/hoi-dap/man-hinh-oled-la-gi-905762" target="_blank" title="Tìm hiểu màn hình OLED">OLED</a> (được tinh chỉnh bởi Apple) thay vì LCD như những chiếc iPhone trước đây và điều này đem lại cho máy 1 màu đen thể hiện rất sâu cũng khả năng tái tạo màu sắc không kém phần chính xác.</p><h3><strong>Face ID tạo nên đột phá</strong></h3><p>Touch ID trên iPhone X đã bị loại bỏ, thay vào đó là bạn sẽ chuyển qua sử dụng Face ID, một phương thức bảo mật sinh trắc học mới của Apple.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb7.jpg" onclick="return false;"><img alt="Face ID tạo nên đột phá" data-original="https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb7.jpg" class="lazy" title="Face ID tạo nên đột phá" src="https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb7.jpg" style="display: block;"></a></p><p>Với sự trợ giúp của cụm&nbsp;camera&nbsp;TrueDept thì iPhone X có khả năng nhận diện khuôn mặt 3D của người dùng từ đó mở khóa chiếc iPhone một cách nhanh chóng.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb11.jpg" onclick="return false;"><img alt="Face ID tạo nên đột phá" data-original="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb11.jpg" class="lazy" title="Face ID tạo nên đột phá" src="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb11.jpg" style="display: block;"></a></p><p>Tuy sẽ hơi hụt hẫng khi Touch ID đã quá quen thuộc trên những chiếc iPhone như tốc độ cũng như trải nghiệm "khóa như không khóa" của Face ID hoàn toàn có thể khiến bạn yên tâm sử dụng.</p><h3><strong>Thao tác vuốt và vuốt</strong></h3><p>Không còn phím Home cứng nên các thao tác trên iPhone X cũng hoàn toàn khác so với những đàn anh đi trước.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb3.jpg" onclick="return false;"><img alt="Thao tác vuốt và vuốt" data-original="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb3.jpg" class="lazy" title="Thao tác vuốt và vuốt" src="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb3.jpg" style="display: block;"></a></p><p>Giờ đây chỉ với thao tác vuốt và vuốt từ cạnh dưới là bạn đã có thể truy cập vào đa nhiệm, trở về màn hình Home một cách nhanh chóng.</p><h3><strong>Camera cải tiến</strong></h3><p>iPhone X vẫn sở hữu bộ đôi camera với độ phân giải 12 MP nhưng camera tele thứ 2 với khẩu độ được nâng lên mức f/2.4 so với f/2.8 của iPhone 7 Plus.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb19.jpg" onclick="return false;"><img alt="Camera cải tiến" data-original="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb19.jpg" class="lazy" title="Camera cải tiến" src="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb19.jpg" style="display: block;"></a></p><p>Ngoài ra thì cả 2 camera trên iPhone X đều sở hữu cho mình khả năng chống rung quang học giúp bạn dễ dàng bắt trọn mọi khoảnh khắc trong cuộc sống.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb9.jpg" onclick="return false;"><img alt="Camera cải tiến" data-original="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb9.jpg" class="lazy" title="Camera cải tiến" src="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb9.jpg" style="display: block;"></a></p><p>Camera trước độ phân giải 7 MP với khả năng selfie xóa phông đáp ứng tốt mọi nhu cầu tự sướng của giới trẻ hiện nay.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb8.jpg" onclick="return false;"><img alt="Camera cải tiến" data-original="https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb8.jpg" class="lazy" title="Camera cải tiến" src="https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb8.jpg" style="display: block;"></a></p><p>Bộ đôi camera trên iPhone X được đánh giá rất cao về chất lượng ảnh chụp và là một trong những chiếc camera phone chụp ảnh đẹp nhất trong năm 2017.</p><h3><strong>Hiệu năng mạnh mẽ</strong></h3><p>Hiệu năng của những chiếc iPhone chưa bao giờ là vấn đề và với iPhone X thì mọi thứ vẫn rất ấn tượng.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb10.jpg" onclick="return false;"><img alt="Hiệu năng mạnh mẽ" data-original="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb10.jpg" class="lazy" title="Hiệu năng mạnh mẽ" src="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb10.jpg" style="display: block;"></a></p><p>Con chip <a href="https://www.thegioididong.com/tin-tuc/chi-tiet-a11-bionic-chip-co-nhieu-thanh-phan-apple-tu-trong-nhat-tu-truoc-den-nay-1021653" target="_blank" title="Apple A11 Bionic 6 nhân">Apple A11 Bionic 6 nhân</a> kết hợp với 3 GB RAM thì iPhone X tự tin là chiếc <a href="https://www.thegioididong.com/dtdd" target="_blank" title="Điện thoại di động">smartphone</a> mạnh mẽ nhất mà Apple từng sản xuất.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb13.jpg" onclick="return false;"><img alt="Hiệu năng mạnh mẽ" data-original="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb13.jpg" class="lazy" title="Hiệu năng mạnh mẽ" src="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb13.jpg" style="display: block;"></a></p><p>Ngoài ra với iPhone X thì Apple cũng nhấn mạnh với trải nghiệm thực tế ảo tăng cường giúp bạn có những phút giây thư giãn thú vị.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb17.jpg" onclick="return false;"><img alt="Hiệu năng mạnh mẽ" data-original="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb17.jpg" class="lazy" title="Hiệu năng mạnh mẽ" src="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb17.jpg" style="display: block;"></a></p><p>Viên pin trên iPhone X có dung lượng&nbsp;2716 mAh (lớn hơn cả trên iPhone 8 Plus) cho bạn sử dụng khá ổn trong khoảng một ngày liên tục.</p>
                            </article>',
                'quantity_store' => 25,
                'price'=>29990000,
                'rating' => 4.5,
                'sales' => 45,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => '	OLED, 5.8", Super Retina',
                    'Hệ điều hành' => 'iOS 11',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '7 MP',
                    'CPU' => 'Apple A11 Bionic 6 nhân',
                    'RAM' => '3 GB',
                    'Thẻ SIM' => '1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '2716 mAh, có sạc nhanh',
                ]
            ],[
                'name' => 'iPhone 8 Plus 256GB',
                'slug' => str_slug('iPhone 8 Plus 256GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                <h2><a href="https://www.thegioididong.com/dtdd-apple-iphone" target="_blank" title="Điện thoại iPhone">iPhone</a> 8 Plus là bản nâng cấp nhẹ của chiếc <a href="https://www.thegioididong.com/dtdd/iphone-7-plus-256gb" target="_blank" title="Điện thoại iPhone 7 Plus">iPhone 7 Plus</a> đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.</h2><h3><strong>Thiết kế quen thuộc</strong></h3><p>Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb2-1.jpg" onclick="return false;"><img alt="Thiết kế quen thuộc" data-original="https://cdn1.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb2-1.jpg" class="lazy" title="Thiết kế quen thuộc" src="https://cdn1.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb2-1.jpg" style="display: block;"></a></p><p>Thay đổi lớn nhất chính là Apple đã chuyển từ thiết kế kim loại nguyên khối sang mặt lưng kính nhằm mang tính năng sạc không dây lên 8 Plus.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb-h1-1.jpg" onclick="return false;"><img alt="Thiết kế quen thuộc" data-original="https://cdn3.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-h1-1.jpg" class="lazy" title="Thiết kế quen thuộc" src="https://cdn3.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-h1-1.jpg" style="display: block;"></a></p><p>Ngoài ra khả năng chống nước và bụi bẩn tiêu chuẩn IP67 vẫn được duy trì trên máy.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb-h8.jpg" onclick="return false;"><img alt="Thiết kế quen thuộc" data-original="https://cdn.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-h8.jpg" class="lazy" title="Thiết kế quen thuộc" src="https://cdn.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-h8.jpg" style="display: block;"></a></p><h3><strong>Màn hình đẹp</strong></h3><p>iPhone 8 Plus sở hữu màn hình kích thước 5.5 inch độ phân giải&nbsp;<a href="https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#hd" target="_blank" title="Tìm hiểu độ phân giải Full HD (1080 x 1920 pixels)">Full HD (1080 x 1920 pixels)</a> đem lại khả năng hiển thị sắc nét.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb-h3.jpg" onclick="return false;"><img alt="Màn hình đẹp" data-original="https://cdn2.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-h3.jpg" class="lazy" title="Màn hình đẹp" src="https://cdn2.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-h3.jpg" style="display: block;"></a></p><p>Máy vẫn sử dụng tấm nền&nbsp;LED-backlit IPS LCD kết hợp với công nghệ True Tone giúp bạn dễ dàng quan sát với nhiều điều kiện khác nhau.</p><h3><strong>Hiệu năng hàng đầu</strong></h3><p>Cung cấp sức mạnh cho iPhone 8 Plus chính là con chip&nbsp;<a href="https://www.thegioididong.com/tin-tuc/chi-tiet-a11-bionic-chip-co-nhieu-thanh-phan-apple-tu-trong-nhat-tu-truoc-den-nay-1021653" target="_blank" title="Apple A11 Bionic 6 nhân">Apple A11 Bionic 6 nhân</a> cùng với 3 GB RAM và 32 GB bộ nhớ trong.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb-vang-7-1.jpg" onclick="return false;"><img alt="Hiệu năng hàng đầu" data-original="https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-vang-7-1.jpg" class="lazy" style="display: block;" title="Hiệu năng hàng đầu" src="https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-vang-7-1.jpg"></a></p><p>Máy sử dụng mượt mà với tất cả các game và ứng dụng hiện có trên App Store mà không gặp phải bất cứ độ trễ hay giật lag nào trong quá trình sử dụng.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb3.jpg" onclick="return false;"><img alt="Hiệu năng hàng đầu" data-original="https://cdn1.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb3.jpg" class="lazy" title="Hiệu năng hàng đầu" src="https://cdn1.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb3.jpg" style="display: block;"></a></p><p>Ngoài ra máy chạy sẵn iOS 11 được Apple nhấn mạnh về khả năng xử lý các tác vụ AR đem lại một trải nghiệm hoàn toàn mới mẻ trên di động.</p><h3><strong>Camera chất lượng hàng đầu</strong></h3><p>So với iPhone 7 Plus thì iPhone 8 Plus đã có những cải tiến rõ rệt về chất lượng ảnh chụp. Về phần cứng thì máy vẫn sử dụng bộ đôi camera chính có độ phân giải 12 MP và giờ đây Apple đã tích hợp thêm một con chip&nbsp;xử lý hình ảnh để nâng cao chất lượng ảnh chụp.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb-vangdong-13-1.jpg" onclick="return false;"><img alt="Camera chất lượng hàng đầu" data-original="https://cdn3.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-vangdong-13-1.jpg" class="lazy" style="display: block;" title="Camera chất lượng hàng đầu" src="https://cdn3.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-vangdong-13-1.jpg"></a></p><p>Khả năng zoom quang 2X không thay đổi chất lượng cũng như xóa phông chân dung vẫn được tích hợp trên iPhone 8 Plus cùng với&nbsp;<a href="https://www.thegioididong.com/tin-tuc/post-1029635" target="_blank" title="PORTRAIT LIGHTING" type="PORTRAIT LIGHTING">Portrait Lighting</a>, tính năng chụp ảnh sân khấu hoàn toàn mới.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb4.jpg" onclick="return false;"><img alt="Camera chất lượng hàng đầu" data-original="https://cdn.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb4.jpg" class="lazy" title="Camera chất lượng hàng đầu" src="https://cdn.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb4.jpg" style="display: block;"></a></p><p>Camera trước độ phân giải 7 MP hỗ trợ chụp ảnh HDR đủ để làm hài lòng những người dùng khó tính năng.</p><h3><strong>Vẫn còn Touch ID</strong></h3><p>Khi mà Face ID vẫn chưa thực sự khiến người dùng hoàn toàn yên tâm thì Touch ID trên iPhone 8 vẫn là một cái gì đó quen thuộc và được nhiều người tin dùng hơn.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/114114/iphone-8-plus-256gb-vangdong-14-2.jpg" onclick="return false;"><img alt="Vẫn còn Touch ID" data-original="https://cdn2.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-vangdong-14-2.jpg" class="lazy" style="display: block;" title="Vẫn còn Touch ID" src="https://cdn2.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-vangdong-14-2.jpg"></a></p><p>Tốc độ nhận diện nhanh chóng giúp bạn dễ dàng mở khóa thiết bị.</p>
                              </article>',
                'quantity_store' => 50,
                'price'=>28790000,
                'rating' => 4.5,
                'sales' => 320,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => 'LED-backlit IPS LCD, 5.5", Retina HD',
                    'Hệ điều hành' => 'iOS 11',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '7 MP',
                    'CPU' => 'Apple A11 Bionic 6 nhân',
                    'RAM' => '3 GB',
                    'Thẻ SIM' => '1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	2691 mAh, có sạc nhanh',
                    ]
                ],[
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => str_slug('iPhone 7 Plus 128GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2>"<a href="https://www.thegioididong.com/dtdd/iphone-x-64gb" target="_blank" title="Điện thoại iPhone X 64GB" type="Điện thoại iPhone X 64GB">iPhone X giá</a>" là cụm từ được&nbsp;rất nhiều người mong chờ muốn biết và tìm kiếm trên Google bởi đây là chiếc điện thoại mà Apple kỉ niệm 10 năm iPhone đầu tiên được bán ra.</h2>
                                 </article>',
                'quantity_store' => 20,
                'price'=>2130000,
                'rating' => 4.5,
                'sales' => 320,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => 'LED-backlit IPS LCD, 5.5", Retina HD',
                    'Hệ điều hành' => 'iOS 11',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '7 MP',
                    'CPU' => 'Apple A11 Bionic 6 nhân',
                    'RAM' => '3 GB',
                    'Thẻ SIM' => '1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	2691 mAh, có sạc nhanh',
                ]
            ],[
                'name' => 'Điện thoại Samsung Galaxy S9+ 64GB (Xanh san hô)
',
                'slug' => str_slug('Điện thoại Samsung Galaxy S9+ 64GB (Xanh san hô)
'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2 style="text-align: justify;"><a href="https://www.thegioididong.com/dtdd/samsung-galaxy-s9-plus-64gb-xanh-san-ho" target="_blank" title="Samsung Galaxy S9 Plus Xanh san hô" type="Samsung Galaxy S9 Plus Xanh san hô">Samsung Galaxy S9 Plus&nbsp;xanh san hô</a> nổi bật với sắc xanh mới lạ, camera kép chuyên nghiệp tuyệt đỉnh và màn hình tràn viền đẳng cấp.</h2>
                                     </article>',
                'quantity_store' => 40,
                'price'=>2330000,
                'rating' => 4.0,
                'sales' => 120,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => '	Super AMOLED, 6.2", Quad HD+ (2K+)',
                    'Hệ điều hành' => 'Android 8.0 (Oreo)',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '8 MP',
                    'CPU' => 'Exynos 9810 8 nhân 64 bit',
                    'RAM' => '6 GB',
                    'Thẻ SIM' => '	2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G',
                    'Dung lượng pin' => '3500 mAh, có sạc nhanh',
                ]
            ],[
                'name' => 'Điện thoại Samsung Galaxy Note 8',
                'slug' => str_slug('Điện thoại Samsung Galaxy Note 8'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2><strong>Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên <a href="https://www.thegioididong.com/dtdd/samsung-galaxy-s8-plus" target="_blank" title="S8 Plus">S8 Plus</a>, bút Spen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.</strong></h2>
                                        </article>',
                'quantity_store' => 50,
                'price'=>2290000,
                'rating' => 4.0,
                'sales' => 10,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => '	Super AMOLED, 6.2", Quad HD+ (2K+)',
                    'Hệ điều hành' => 'Android 8.0 (Oreo)',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '8 MP',
                    'CPU' => 'Exynos 9810 8 nhân 64 bit',
                    'RAM' => '6 GB',
                    'Thẻ SIM' => '	2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G',
                    'Dung lượng pin' => '3500 mAh, có sạc nhanh',
                ]
            ],[
                'name' => 'Laptop Asus S510UA i5 8250U/4GB/1TB/Win10/(BQ414T)',
                'slug' => str_slug('Laptop Asus S510UA i5 8250U/4GB/1TB/Win10/(BQ414T)'),
                'description' => '<article class="area_article area_articleFull" style="">
                                    <h2><strong>Laptop Asus S510UA i5 bản nâng cấp hết sức giá trị với chip xử lý thế hệ thứ 8 mới nhất của Intel cho hiệu năng vượt trội,&nbsp;đáp ứng tốt cho bạn trong các nhu cầu làm việc, học tập, giải trí hằng ngày.</strong></h2><p style="text-align: center;"><strong></strong></p><div class="video" frameborder="0" longdesc="Đánh giá Laptop Asus Vivobook S510UA" scrolling="no" src="https://www.youtube.com/embed/GNk0S_4saoE"><iframe src="https://www.youtube.com/embed/GNk0S_4saoE?rel=0" frameborder="0" allowfullscreen=""></iframe></div><p></p><h3><strong>Khác biệt đến từ cấu hình</strong></h3><p>Máy sử dụng chip <a href="https://www.thegioididong.com/hoi-dap/cpu-intel-kabylake-refresh-la-gi-1017640" target="_blank" title="Intel Core i5 Kabylake Refresh">Intel Core i5 Kabylake Refresh</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173" target="_blank" title="RAM DDR4">RAM DDR4</a> <strong>4 GB</strong>&nbsp;giúp hoạt động chơi game cũng như các ứng dụng đồ họa được đẹp mắt. Dung lượng ổ cứng <a href="https://www.thegioididong.com/hoi-dap/hdd-la-gi-922791" target="_blank" title="HDD">HDD</a> <strong>1 TB</strong> thoải mái lưu trữ dữ liệu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh.jpg" onclick="return false;"><img alt="laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh" data-original="https://cdn.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh.jpg" class="lazy" title="laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh" src="https://cdn.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh.jpg" style="display: block;"></a></p><h3><strong>Màn hình sắc nét</strong></h3><p>Màn hình lớn <strong>15.6 inch</strong> độ phân giải cao&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank" title="Full HD (1920 x 1080)">Full HD (1920 x 1080)</a>. Ngoài ra với sự bổ sung card đồ họa tích hợp <a href="https://www.thegioididong.com/hoi-dap/intel-hd-graphics-620-co-manh-khong-953533#uhd-620" target="_blank" title="Intel UHD Graphics 620">Intel UHD Graphics 620</a> có hỗ trợ thêm xem các video độ phân giải <strong>4K</strong>.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh.jpg" onclick="return false;"><img alt="laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh" data-original="https://cdn2.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh.jpg" class="lazy" title="laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh" src="https://cdn2.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh.jpg" style="display: block;"></a></p><h3><strong>Bàn phím đèn tiện dụng</strong></h3><p>Được thiết kế có độ nảy nhất định khá tốt, kèm theo đèn bàn phím cho phép bạn trải nghiệm một cách thoải mái nhất.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/laptop-asus-s510ua-i5-8250u-den-ban-phim.jpg" onclick="return false;"><img alt="laptop-asus-s510ua-i5-8250u-den-ban-phim" data-original="https://cdn4.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-den-ban-phim.jpg" class="lazy" title="laptop-asus-s510ua-i5-8250u-den-ban-phim" src="https://cdn4.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-den-ban-phim.jpg" style="display: block;"></a></p><h3><strong>Bảo mật với cảm biến vân tay</strong></h3><p>Máy được trang bị cảm biến vân tay tích hợp trên nền tảng <a href="https://www.thegioididong.com/hoi-dap/windows-10-co-tot-khong-953411" target="_blank" title="Windows 10">Windows 10</a> bản quyền, giúp bạn mở khóa máy nhanh chóng mà không cần nhập mật khẩu như cách truyền thống.</p><p><a href="https://www.thegioididong.com/hoi-dap/windows-hello-la-gi-cach-cai-dat-windows-hello-1013813" target="_blank" title=">>> Cài đặt cảm biến với Windows Hello">&gt;&gt;&gt; Cài đặt cảm biến với&nbsp;Windows Hello</a></p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/asus-s510ua-i5-8250u-bq414t-10-1.png" onclick="return false;"><img alt="Bảo mật với cảm biến vân tay" data-original="https://cdn1.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-10-1.png" class="lazy" title="Bảo mật với cảm biến vân tay" src="https://cdn1.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-10-1.png" style="display: block;"></a></p><h3><strong>Đa dạng về cổng kết nối</strong></h3><p>Máy hỗ trợ đầy đủ các cổng kết nối phổ biến hiện tại: <a href="https://www.thegioididong.com/tin-tuc/hdmi-la-gi--590061" target="_blank" title="HDMI">HDMI</a>,&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cong-giao-tiep-usb-la-gi--590168" target="_blank" title="USB 2.0">2 x USB 2.0</a>, <a href="https://www.thegioididong.com/hoi-dap/usb-30-la-gi-926737" target="_blank" title="USB 3.0">USB 3.0</a>, <a href="https://www.thegioididong.com/hoi-dap/usb-typec-chuan-muc-cong-ket-noi-moi-723760" target="_blank" title="USB Type-C">USB Type-C</a>, khe đọc thẻ nhớ <a href="https://www.thegioididong.com/hoi-dap/cac-loai-the-sd-thong-dung-hien-nay-744285#sd" target="_blank" title="SD">SD</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cac-loai-the-sd-thong-dung-hien-nay-744285#sdxc" target="_blank" title="SDXC">SDXC</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cac-loai-the-sd-thong-dung-hien-nay-744285#sdhc" target="_blank" title="SDHC">SDHC</a>,&nbsp;phù hợp với mọi nhu cầu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/asus-s510ua-i5-8250u-bq414t-11.jpg" onclick="return false;"><img alt="Đa dạng về cổng kết nối" data-original="https://cdn3.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-11.jpg" class="lazy" title="Đa dạng về cổng kết nối" src="https://cdn3.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-11.jpg" style="display: block;"></a></p><h3><strong>Kết luận</strong></h3><p>Với tất cả các ưu điểm như trên chắc chắn laptop <strong>Asus S510UA i5 8250U</strong> hướng đến đối tượng người dùng chủ yếu hỗ trợ cho công việc, học tập, giải trí... và máy không thuộc phân khúc <a href="https://www.thegioididong.com/laptop?g=choi-game-khung" target="_blank" title="Laptop chơi game khủng">laptop chơi game khủng</a> hoàn hảo.</p>
                                    </div>
                                   </article>',
                'quantity_store' => 30,
                'price'=>16290000,
                'rating' => 4.5,
                'sales' => 53,
                'category_id' => 8,
                'manufacture_id' => 3,
                'configuration' => [
                    'CPU' => 'Intel Core i5 Kabylake Refresh, 8250U, 1.60 GHz',
                    'RAM' => '4 GB, DDR4 (2 khe), 2133 MHz',
                    'Ổ cứng' => 'HDD: 1 TB, Hỗ trợ khe cắm SSD M.2',
                    'Màn hình' => '	15.6 inch, Full HD (1920 x 1080)',
                    'Card màn hình' => '	Card đồ họa tích hợp, Intel® UHD Graphics 620',
                    'Cổng kết nối' => '2 x USB 2.0, HDMI, USB 3.0, USB Type-C',
                    'Hệ điều hành' => 'Windows 10 Home SL',
                    'Thiết kế' => 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền',
                    'Kích thước' => 'Dày 17.9 mm, 1.5 kg',
                ],
            ]
        ];
        foreach($data as $product){
            Product::create($product);
        }
    }
}
