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
                'quantity_store' => rand(0,50),
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
                'quantity_store' => rand(0,50),
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
                    'Dung lượng pin' => '2691 mAh, có sạc nhanh',
                    ]
                ],[
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => str_slug('iPhone 7 Plus 128GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2>"<a href="https://www.thegioididong.com/dtdd/iphone-x-64gb" target="_blank" title="Điện thoại iPhone X 64GB" type="Điện thoại iPhone X 64GB">iPhone X giá</a>" là cụm từ được&nbsp;rất nhiều người mong chờ muốn biết và tìm kiếm trên Google bởi đây là chiếc điện thoại mà Apple kỉ niệm 10 năm iPhone đầu tiên được bán ra.</h2>
                                 </article>',
                'quantity_store' => rand(0,50),
                'price'=>21300000,
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
                'name' => 'iPhone 8 Plus 64GB',
                'slug' => str_slug('iPhone 8 Plus 64GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                             <h2>Thừa hưởng thiết kế đã đạt đến độ chuẩn mực, thế hệ&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-8-plus" target="_blank" title="iPhone 8 256 GB" type="iPhone 8 256 GB">iPhone 8 Plus</a>&nbsp;thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.</h2>
                                </article>',
                'quantity_store' => rand(0,50),
                'price'=>23980000,
                'rating' => 5,
                'sales' => 1112,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => '	LED-backlit IPS LCD, 5.5", Retina HD',
                    'Hệ điều hành' => '	iOS 11',
                    'Camera sau' => '2 camera 12 MPP',
                    'Camera trước' => '	7 MP',
                    'CPU' => 'Apple A11 Bionic 6 nhân',
                    'RAM' => '	3 GB',
                    'Thẻ SIM' => '	1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	2691 mAh, có sạc nhanh',
                ]
            ],[
                'name' => 'iPhone 8 Plus Red 64GB (Đỏ)',
                'slug' => str_slug('iPhone 8 Plus Red 64GB (Đỏ)'),
                'description' => '<article class="area_article area_articleFull" style="">
                             <h2><a href="https://www.thegioididong.com/dtdd-apple-iphone" target="_blank" title="Điện thoại iPhone">iPhone</a><a href="https://www.thegioididong.com/dtdd/iphone-8-plus-do" target="_blank" title="iPhone 8 Plus Đỏ" type="iPhone 8 Plus Đỏ">&nbsp;8 Plus đỏ</a> là bản nâng cấp nhẹ của chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-7-plus-256gb" target="_blank" title="Điện thoại iPhone 7 Plus">iPhone 7 Plus đỏ</a>&nbsp;đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến cũng như màu sắc nổi bật, cá tính.</h2>
                                </article>',
                'quantity_store' => rand(0,50),
                'price'=>25980000,
                'rating' => 5,
                'sales' => 12,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => '	LED-backlit IPS LCD, 5.5", Retina HD',
                    'Hệ điều hành' => '	iOS 11',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '	7 MP',
                    'CPU' => 'Apple A11 Bionic 6 nhân',
                    'RAM' => '	3 GB',
                    'Thẻ SIM' => '	1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	2691 mAh, có sạc nhanh',
                ]
            ],[
                'name' => 'Laptop Asus S510UA i5 8250U/4GB/1TB/Win10/(BQ414T)',
                'slug' => str_slug('Laptop Asus S510UA i5 8250U/4GB/1TB/Win10/(BQ414T)'),
                'description' => '<article class="area_article area_articleFull" style="">
                                    <h2><strong>Laptop Asus S510UA i5 bản nâng cấp hết sức giá trị với chip xử lý thế hệ thứ 8 mới nhất của Intel cho hiệu năng vượt trội,&nbsp;đáp ứng tốt cho bạn trong các nhu cầu làm việc, học tập, giải trí hằng ngày.</strong></h2><p style="text-align: center;"><strong></strong></p><div class="video" frameborder="0" longdesc="Đánh giá Laptop Asus Vivobook S510UA" scrolling="no" src="https://www.youtube.com/embed/GNk0S_4saoE"><iframe src="https://www.youtube.com/embed/GNk0S_4saoE?rel=0" frameborder="0" allowfullscreen=""></iframe></div><p></p><h3><strong>Khác biệt đến từ cấu hình</strong></h3><p>Máy sử dụng chip <a href="https://www.thegioididong.com/hoi-dap/cpu-intel-kabylake-refresh-la-gi-1017640" target="_blank" title="Intel Core i5 Kabylake Refresh">Intel Core i5 Kabylake Refresh</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173" target="_blank" title="RAM DDR4">RAM DDR4</a> <strong>4 GB</strong>&nbsp;giúp hoạt động chơi game cũng như các ứng dụng đồ họa được đẹp mắt. Dung lượng ổ cứng <a href="https://www.thegioididong.com/hoi-dap/hdd-la-gi-922791" target="_blank" title="HDD">HDD</a> <strong>1 TB</strong> thoải mái lưu trữ dữ liệu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh.jpg" onclick="return false;"><img alt="laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh" data-original="https://cdn.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh.jpg" class="lazy" title="laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh" src="https://cdn.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-diem-manh-cau-hinh.jpg" style="display: block;"></a></p><h3><strong>Màn hình sắc nét</strong></h3><p>Màn hình lớn <strong>15.6 inch</strong> độ phân giải cao&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank" title="Full HD (1920 x 1080)">Full HD (1920 x 1080)</a>. Ngoài ra với sự bổ sung card đồ họa tích hợp <a href="https://www.thegioididong.com/hoi-dap/intel-hd-graphics-620-co-manh-khong-953533#uhd-620" target="_blank" title="Intel UHD Graphics 620">Intel UHD Graphics 620</a> có hỗ trợ thêm xem các video độ phân giải <strong>4K</strong>.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh.jpg" onclick="return false;"><img alt="laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh" data-original="https://cdn2.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh.jpg" class="lazy" title="laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh" src="https://cdn2.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-do-phan-giai-man-hinh.jpg" style="display: block;"></a></p><h3><strong>Bàn phím đèn tiện dụng</strong></h3><p>Được thiết kế có độ nảy nhất định khá tốt, kèm theo đèn bàn phím cho phép bạn trải nghiệm một cách thoải mái nhất.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/laptop-asus-s510ua-i5-8250u-den-ban-phim.jpg" onclick="return false;"><img alt="laptop-asus-s510ua-i5-8250u-den-ban-phim" data-original="https://cdn4.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-den-ban-phim.jpg" class="lazy" title="laptop-asus-s510ua-i5-8250u-den-ban-phim" src="https://cdn4.tgdd.vn/Products/Images/44/135668/laptop-asus-s510ua-i5-8250u-den-ban-phim.jpg" style="display: block;"></a></p><h3><strong>Bảo mật với cảm biến vân tay</strong></h3><p>Máy được trang bị cảm biến vân tay tích hợp trên nền tảng <a href="https://www.thegioididong.com/hoi-dap/windows-10-co-tot-khong-953411" target="_blank" title="Windows 10">Windows 10</a> bản quyền, giúp bạn mở khóa máy nhanh chóng mà không cần nhập mật khẩu như cách truyền thống.</p><p><a href="https://www.thegioididong.com/hoi-dap/windows-hello-la-gi-cach-cai-dat-windows-hello-1013813" target="_blank" title=">>> Cài đặt cảm biến với Windows Hello">&gt;&gt;&gt; Cài đặt cảm biến với&nbsp;Windows Hello</a></p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/asus-s510ua-i5-8250u-bq414t-10-1.png" onclick="return false;"><img alt="Bảo mật với cảm biến vân tay" data-original="https://cdn1.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-10-1.png" class="lazy" title="Bảo mật với cảm biến vân tay" src="https://cdn1.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-10-1.png" style="display: block;"></a></p><h3><strong>Đa dạng về cổng kết nối</strong></h3><p>Máy hỗ trợ đầy đủ các cổng kết nối phổ biến hiện tại: <a href="https://www.thegioididong.com/tin-tuc/hdmi-la-gi--590061" target="_blank" title="HDMI">HDMI</a>,&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cong-giao-tiep-usb-la-gi--590168" target="_blank" title="USB 2.0">2 x USB 2.0</a>, <a href="https://www.thegioididong.com/hoi-dap/usb-30-la-gi-926737" target="_blank" title="USB 3.0">USB 3.0</a>, <a href="https://www.thegioididong.com/hoi-dap/usb-typec-chuan-muc-cong-ket-noi-moi-723760" target="_blank" title="USB Type-C">USB Type-C</a>, khe đọc thẻ nhớ <a href="https://www.thegioididong.com/hoi-dap/cac-loai-the-sd-thong-dung-hien-nay-744285#sd" target="_blank" title="SD">SD</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cac-loai-the-sd-thong-dung-hien-nay-744285#sdxc" target="_blank" title="SDXC">SDXC</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cac-loai-the-sd-thong-dung-hien-nay-744285#sdhc" target="_blank" title="SDHC">SDHC</a>,&nbsp;phù hợp với mọi nhu cầu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/135668/asus-s510ua-i5-8250u-bq414t-11.jpg" onclick="return false;"><img alt="Đa dạng về cổng kết nối" data-original="https://cdn3.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-11.jpg" class="lazy" title="Đa dạng về cổng kết nối" src="https://cdn3.tgdd.vn/Products/Images/44/135668/asus-s510ua-i5-8250u-bq414t-11.jpg" style="display: block;"></a></p><h3><strong>Kết luận</strong></h3><p>Với tất cả các ưu điểm như trên chắc chắn laptop <strong>Asus S510UA i5 8250U</strong> hướng đến đối tượng người dùng chủ yếu hỗ trợ cho công việc, học tập, giải trí... và máy không thuộc phân khúc <a href="https://www.thegioididong.com/laptop?g=choi-game-khung" target="_blank" title="Laptop chơi game khủng">laptop chơi game khủng</a> hoàn hảo.</p>
                                   </article>',
                'quantity_store' => rand(0,50),
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
                    ]
                ],[
                'name' => 'IPhone X 256GB',
                'slug' => str_slug('iPhone X 256GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                     <h2><strong>iPhone X được&nbsp;Apple&nbsp;ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, <a href="https://www.thegioididong.com/dtdd/iphone-x-64gb" target="_blank" title="điện thoại iPhone X 64GB" type="điện thoại iPhone X 64GB">giá iPhone X</a> cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.</strong></h2><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11675_800x450.jpg" onclick="return false;"><img alt="1" data-original="https://cdn4.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11675_800x450.jpg" class="lazy" title="1" src="https://cdn4.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11675_800x450.jpg" style="display: block;"></a></p><p>Màn hình iPhone X được phủ kín gần như toàn bộ ở mặt trước và vẫn chừa lại một phần màn hình cho loa, camera và các cảm biến ở phía trên.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11690_800x450.jpg" onclick="return false;"><img alt="2" data-original="https://cdn1.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11690_800x450.jpg" class="lazy" title="2" src="https://cdn1.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11690_800x450.jpg" style="display: block;"></a></p><p>Còn mặt sau vẫn là chất liệu kính nhé, tiện thể thì iPhone X cũng trang bị chuẩn chống nước IP67.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/ava_800x450.jpg" onclick="return false;"><img alt="3" data-original="https://cdn3.tgdd.vn/Files/2017/09/13/1021094/ava_800x450.jpg" class="lazy" title="3" src="https://cdn3.tgdd.vn/Files/2017/09/13/1021094/ava_800x450.jpg" style="display: block;"></a></p><p>Thay vì sử dụng công nghệ TrueTone HD thì màn hình OLED 5.8 inch của iPhone X được trang bị công nghệ Super Retina cho mật độ điểm ảnh lên tới 458 dpi.&nbsp;</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11620_800x450.jpg" onclick="return false;"><img alt="4" data-original="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11620_800x450.jpg" class="lazy" title="4" src="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11620_800x450.jpg" style="display: block;"></a></p><p>Với màn hình tràn viền như này mà không có nút Home thì người dùng sẽ phải vuốt từ dưới lên để mở trình quản lý đa nhiệm.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11680_800x451.jpg" onclick="return false;"><img alt="6" data-original="https://cdn2.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11680_800x451.jpg" class="lazy" title="6" src="https://cdn2.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11680_800x451.jpg" style="display: block;"></a></p><p>Tương tự như Galaxy Note 8, giờ đây iPhone X cũng có riêng một phím để gọi Siri ra hỗ trợ.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11670_800x450.jpg" onclick="return false;"><img alt="5" data-original="https://cdn4.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11670_800x450.jpg" class="lazy" title="5" src="https://cdn4.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11670_800x450.jpg" style="display: block;"></a></p><p>Đi kèm với màn hình chất lượng đó thì chúng ta sẽ có Chip A11 Bionic. Một cái tên gì đó nghe có vẻ rất là "Chất". Và chip này có 6 lõi, cho hiệu suất hoạt động tốt hơn 25% so với A10.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11979-_2040x1360-800-resize.jpg" onclick="return false;"><img alt="1" data-original="https://cdn1.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11979-_2040x1360-800-resize.jpg" class="lazy" title="1" src="https://cdn1.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11979-_2040x1360-800-resize.jpg" style="display: block;"></a></p><p>Vẫn là vấn đề cũ, không có Touch ID thì mở khóa bằng... mặt. Giờ đây chúng ta đã có Face ID để làm điều đó. Với công nghệ vô cùng đặc biệt này, bạn có thể mở khóa bằng khuôn mặt của mình dù là ngoài trời nắng hay trong bóng đêm, kể cả chưa cạo râu hay mới cắt tóc,... Face ID chấp hết.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11729-_2040x1360-800-resize.jpg" onclick="return false;"><img alt="1" data-original="https://cdn3.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11729-_2040x1360-800-resize.jpg" class="lazy" title="1" src="https://cdn3.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11729-_2040x1360-800-resize.jpg" style="display: block;"></a></p><p>Theo Apple, Face ID có độ bảo mật còn cao hơn cả Touch ID, đạt tỷ lệ nhận diện sai chỉ là 1 trên 1.000.000 (1 triệu), trong khi Touch ID là 1 trên 50.000.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11773-_2040x1360-800-resize.jpg" onclick="return false;"><img alt="8" data-original="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11773-_2040x1360-800-resize.jpg" class="lazy" title="8" src="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11773-_2040x1360-800-resize.jpg" style="display: block;"></a></p><p>Một tính năng mới đi kèm với Face ID là Animoji vô cùng mới mẻ khi bạn có thể tạo được những emotion chuyển động theo khuôn mặt của bạn một cách rất ngộ nghĩnh và đáng yêu.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11716_800x450.jpg" onclick="return false;"><img alt="9" data-original="https://cdn2.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11716_800x450.jpg" class="lazy" title="9" src="https://cdn2.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11716_800x450.jpg" style="display: block;"></a></p><p>Không chỉ camera trước, mà camera sau của iPhone X cũng nhận được những nâng cấp mạnh mẽ với hệ thống camera kép 12MP kèm theo ống kính góc thường và ống kính tele. Đặc biệt, cả hai camera của iPhone X đều được trang bị công nghệ chống rung quang học, đi cùng với đó là hệ thống đèn Flash LED mới.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11638_800x450.jpg" onclick="return false;"><img alt="10" data-original="https://cdn4.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11638_800x450.jpg" class="lazy" title="10" src="https://cdn4.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11638_800x450.jpg" style="display: block;"></a></p><p>Tương tự như bộ đôi iPhone 8 và iPhone 8 Plus thì iPhone X cũng được trang bị tính năng sạc không dây. Chúng ta sẽ được thấy một chiếc sạc không dây tới từ Apple có tên là AirPower.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11649_800x450.jpg" onclick="return false;"><img alt="11" data-original="https://cdn1.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11649_800x450.jpg" class="lazy" title="11" src="https://cdn1.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11649_800x450.jpg" style="display: block;"></a></p><p>Và thời lượng pin của iPhone X sẽ nhiều hơn 2 giờ so với iPhone 7.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11983-_2040x1360-800-resize.jpg" onclick="return false;"><img alt="1" data-original="https://cdn3.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11983-_2040x1360-800-resize.jpg" class="lazy" title="1" src="https://cdn3.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11983-_2040x1360-800-resize.jpg" style="display: block;"></a></p><p>iPhone X sẽ có 2 tùy chọn bộ nhớ trong là 64 GB và 256 GB tương tự như iPhone 8/8 Plus.</p><p><a class="preventdefault" href="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-12115-_2040x1360-800-resize.jpg" onclick="return false;"><img alt="1" data-original="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-12115-_2040x1360-800-resize.jpg" class="lazy" title="1" src="https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-12115-_2040x1360-800-resize.jpg" style="display: block;"></a></p><p>Với thiết kế cực sang trọng cùng những tính năng hiện đại, iPhone X - phiên bản iPhone kỷ niệm 10 năm ngày ra mắt iPhone nhắm đến phân khúc người dùng cực kỳ cao cấp, việc được sỡ hữu siêu phẩm iPhone X sẽ là niềm tự hào với cộng đồng iFan.</p>
                                  </article>',
                'quantity_store' => rand(0,50),
                'price'=>34790000,
                'rating' => 4,
                'sales' => 63,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => 'OLED, 5.8", Super Retina',
                    'Hệ điều hành' => 'iOS 11',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '7 MP',
                    'CPU' => 'Apple A11 Bionic 6 nhân',
                    'RAM' => '3 GB',
                    'Thẻ SIM' => '1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '2716 mAh, có sạc nhanh',
                    ]
                ],[
                'name' => 'IPhone 7 Plus 32GB',
                'slug' => str_slug('iPhone 7 Plus 32GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                    <h2 style="text-align: justify;"><strong>Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-6-plus-64gb" target="_blank" title="iPhone 6 Plus" type="iPhone 6 Plus">iPhone 6 Plus</a>, &nbsp;iPhone 7 Plus 32GB được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.</strong></h2><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb1-1.jpg" onclick="return false;"><img alt="Diện mạo mới của iPhone 7 Plus" data-original="https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg" class="lazy" title="Diện mạo mới của iPhone 7 Plus" src="https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg" style="display: block;"></a><br>Thay đổi dãy nhựa an-ten bắt sóng được đưa vòng lên trên thay vì cắt ngang ở mặt lưng như trước.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb2-1.jpg" onclick="return false;"><img alt="Bút home cảm ứng" data-original="https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg" class="lazy" title="Bút home cảm ứng" src="https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg" style="display: block;"></a><br>Nút Home quen thuộc không còn là phím vật lý nữa mà được thay thế bằng cảm ứng, nó sẽ rung lên khi bạn ấn. Vì đã dùng iPhone một thời gian rất dài, nên tôi công nhận rằng hơi khó để làm quen với nó, nhưng có lẽ chỉ mất vài ngày thôi.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb3-1.jpg" onclick="return false;"><img alt="Trang bị chuẩn chống nước cao cấp" data-original="https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg" class="lazy" title="Trang bị chuẩn chống nước cao cấp" src="https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg" style="display: block;"></a><br>Cuối cùng chúng ta cũng có được chiếc iPhone vẫn sống khi rơi vào nước hay đi mưa không cần phải loay hoay tìm chỗ cất vì Apple đã mang chuẩn chống nước IP67 cho iphone 7 plus .(Lưu ý: không nên cố tình ngâm nước vì nếu có thiệt hại do vào nước sẽ không được Apple bảo hành).</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb4-1.jpg" onclick="return false;"><img alt="Màn hình Retina sáng và sắc nét" data-original="https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg" class="lazy" style="display: block;" title="Màn hình Retina sáng và sắc nét" src="https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg"></a><br>Màn hình Retina trên 7 Plus hỗ trợ DCI-P3 gam màu rộng, nghĩa là chúng có khả năng tái tạo màu sắc trong phạm vi của sRGB. Nói đơn giản, chúng có thể hiển thị sống động hơn, sắc thái hình ảnh tốt hơn trước đó. Độ phân giải, mật độ điểm ảnh và kích thước màn hình vẫn giữ nguyên so với iPhone 6s Plus.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb5-1.jpg" onclick="return false;"><img alt="Dàn loa stereo" data-original="https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg" class="lazy" style="display: block;" title="Dàn loa stereo" src="https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg"></a><br>Lần đầu tiên iPhone xuất hiện tính năng âm thanh Stereo. Phim ảnh, podcast và các cuộc gọi loa ngoài bây giờ âm thanh rõ ràng hơn rất nhiều. Đó là do Apple đã dùng công nghệ thiết lập loa chứ không phải thiết kế 2 loa ngay trên mặt.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb6-.jpg" onclick="return false;"><img alt="Camera kép" data-original="https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg" class="lazy" title="Camera kép" src="https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg" style="display: block;"></a></p><p>iPhone 7 Plus là&nbsp;chiếc iPhone đầu tiên được trang bị camera kép, đem lại khả năng chụp ảnh ở hai tiêu cự khác nhau. Camera thông thường vẫn chụp hình góc rộng, còn camera thứ hai có tiêu cự phù hợp để chụp chân dung, có tính năng chụp chân dung xóa phông (làm mờ hậu cảnh).&nbsp;</p><p>Với 1 chạm nhanh chóng bạn có thể chuyển đổi giữa chế độ 1x và zoom 2x, hoặc bạn có thể kéo thanh trượt hay dùng 2 ngón tay đến zoom. Apple đã thêm tính năng zoom kỹ thuật số lên đến 10x.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb8-1.jpg" onclick="return false;"><img alt="Mặt lưng bóng bẩy" data-original="https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg" class="lazy" title="Mặt lưng bóng bẩy" src="https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg" style="display: block;"></a><br>Điểm nhấn ấn tượng nhất nằm ở mặt lưng của sản phẩm với hiệu ứng phản chiếu ánh sáng khi thay đổi góc nhìn rất đặc biệt. Hiệu ứng này cũng được áp dụng cho toàn bộ khung máy, từ cạnh trên, cạnh dưới cho đến các nút bấm nên cho cảm giác một thiết bị cực kỳ hoàn thiện, gần như không có bất kỳ một chi tiết thừa nào cả.&nbsp;</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb9.jpg" onclick="return false;"><img alt="Cấu hình cực mạnh" data-original="https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg" class="lazy" style="display: block;" title="Cấu hình cực mạnh" src="https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg"></a></p><p>Ngoài trái tim&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tong-quan-ve-chip-a10-fusion-cua-apple-885052" target="_blank" title="Apple A10 Fusion 4 nhân 64-bit" type="Apple A10 Fusion 4 nhân 64-bit">Apple A10 Fusion 4 nhân</a>&nbsp;với hiệu năng cực kì mạnh mẽ và ấn tượng thì iPhone 7 Plus còn được trang bị hệ điều hành mới nhất IOS 10 với nhiều tính năng bất ngờ, và thú vị. Hiện tại, bạn có thể nâng cấp lên IOS 11 mới nhất như trên&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-x-64gb" target="_blank" title="iPhone X" type="iPhone X">iPhone X</a>.</p><p>“Táo khuyết” cũng không quên nhấn mạnh iPhone 7 Plus sẽ nhanh hơn iPhone đời đầu tới… 140 lần. Những ai mê chơi game trên di động cũng sẽ “phải lòng” iPhone mới khi có chip xử lý đồ họa được nâng tầm đúng chất “máy chơi game”.</p><p>Camera trước nâng cấp độ phân giải 7MP với khẩu độ mở lớn f/2.2 hỗ trợ chụp trong điều kiện thiếu sáng tuyệt vời với công nghệ Retina Flash, Auto HDR.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb10.jpg" onclick="return false;"><img alt="Camera trước" data-original="https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg" class="lazy" style="display: block;" title="Camera trước" src="https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg"></a></p><p><a class="preventdefault" href="https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb11.jpg" onclick="return false;"><img alt="Chụp thiếu sáng với Retina Flash" data-original="https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg" class="lazy" style="display: block;" title="Chụp thiếu sáng với Retina Flash" src="https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg"></a></p><p>IPhone 7 Plus theo bản thân đánh giá là một sự&nbsp; lựa chọn hợp lý trong tầm giá:</p><ul><li><strong>Ưu điểm:</strong><ul><li>Hiệu năng rất cao</li><li>Camera trước sau rất tuyệt vời</li><li>Chống nước</li><li>Thời lượng pin tốt</li></ul></li><li><strong>Nhược điểm:</strong><ul><li>Loại bỏ jack 3.5mm</li><li>Không thay đổi thiết kế quá nhiều mặc dù đã 3 năm</li><li>Phím Home cần thời gian để làm quen</li></ul></li></ul>
                                  </article>',
                'quantity_store' => rand(0,50),
                'price'=>19990000,
                'rating' => 4,
                'sales' => 33,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => 'LED-backlit IPS LCD, 5.5", Retina HD',
                    'Hệ điều hành' => 'iOS 11',
                    'Camera sau' => '2 camera 12 MP',
                    'Camera trước' => '7 MP',
                    'CPU' => 'Apple A10 Fusion 4 nhân 64-bit',
                    'RAM' => '3 GB',
                    'Thẻ SIM' => '1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '2900 mAh',
                    ],
                ],[
                'name' => 'IPhone 6s Plus 32GB',
                'slug' => str_slug('iPhone 6s Plus 32GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                    <h2>iPhone 6s Plus 32 GB là&nbsp;phiên bản&nbsp;nâng cấp hoàn hảo từ iPhone 6 Plus với nhiều tính năng mới hấp dẫn.</h2><h3 style="line-height: 20.8px; text-align: justify;"><strong>Camera được cải tiến</strong></h3><p style="line-height: 20.8px; text-align: justify;">iPhone 6s Plus 32 GB được nâng cấp độ phân giải camera sau lên 12 MP (thay vì 8 MP như trên&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-6-plus-16gb" target="_blank" title="Thông tin điện thoại iPhone 6 Plus 16 GB">iPhone 6 Plus</a>), camera cho tốc độ lấy nét và chụp nhanh, thao tác chạm để chụp nhẹ nhàng. Chất lượng ảnh trong các điều kiện chụp khác nhau tốt.</p><p style="line-height: 20.8px; text-align: center;"></p><div class="twentytwenty-wrapper twentytwenty-horizontal"><div id="imgCpr_1" class="imgCprW twentytwenty-container" data-src1="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus2-1.jpg" data-src2="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus1-1.jpg" style="height: 442px;"><img src="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus2-1.jpg" class="twentytwenty-before" style="clip: rect(0px, 295px, 442px, 0px);"> <img src="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus1-1.jpg" class="twentytwenty-after"> <div class="twentytwenty-overlay"><div class="twentytwenty-before-label"></div><div class="twentytwenty-after-label"></div></div><div class="twentytwenty-handle" style="left: 295px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div><p></p><p style="line-height: 20.8px; text-align: center;"><i style="line-height: 20.8px;">Màu sáng hơn hẳn so với iPhone 6 Plus</i></p><p style="line-height: 20.8px; text-align: justify;">Camera trước với độ phân giải 5 MP cho hình ảnh với độ chi tiết rõ nét, đặc biệt máy còn có tính năng Retina Flash, sẽ giúp màn hình sáng lên như đèn Flash để bức ảnh khi bạn chụp trong trời tối được tốt hơn.</p><p style="line-height: 20.8px; text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/71770/iphone-6s-plus213.gif" onclick="return false;"><img alt="Để bật tính năng Retina Flash, tại camera trước bạn bật đèn Flash lên" data-original="https://cdn3.tgdd.vn/Products/Images/42/71770/iphone-6s-plus213.gif" class="lazy" title="Để bật tính năng Retina Flash, tại camera trước bạn bật đèn Flash lên" src="https://cdn3.tgdd.vn/Products/Images/42/71770/iphone-6s-plus213.gif" style="display: block;"></a></p><p style="line-height: 20.8px; text-align: center;"><i>Để bật tính năng Retina Flash, tại camera trước bạn bật đèn Flash lên</i></p><p style="line-height: 20.8px; text-align: center;"></p><div class="twentytwenty-wrapper twentytwenty-horizontal"><div id="imgCpr_2" class="imgCprW twentytwenty-container" data-src1="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus1-2.jpg" data-src2="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus2-2.jpg" style="height: 533px;"><img src="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus1-2.jpg" class="twentytwenty-before" style="clip: rect(0px, 228px, 533px, 0px);"> <img src="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus2-2.jpg" class="twentytwenty-after"> <div class="twentytwenty-overlay"><div class="twentytwenty-before-label"></div><div class="twentytwenty-after-label"></div></div><div class="twentytwenty-handle" style="left: 228px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div><p></p><p style="line-height: 20.8px; text-align: center;"><i style="line-height: 20.8px;">Đèn Flash giúp ảnh được sáng hơn</i></p><h3 style="line-height: 20.8px; text-align: justify;"><strong>Thích thú hơn với màn hình rộng</strong></h3><p style="line-height: 20.8px; text-align: justify;">Màn hình lớn cùng&nbsp;<span style="line-height: 20.8px;">màu sắc tươi tắn, độ nét cao&nbsp;sẽ mang đến nhiều</span>&nbsp;thích thú khi lướt web, xem phim hay làm việc.</p><p style="line-height: 20.8px; text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/71770/iphone-6s-plus4-1.jpg" onclick="return false;"><img alt="Màn hình lớn 5.5 inch thoải mái để làm việc và giải trí" data-original="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus4-1.jpg" class="lazy" title="Màn hình lớn 5.5 inch thoải mái để làm việc và giải trí" src="https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus4-1.jpg" style="display: block;"></a></p><p style="line-height: 20.8px; text-align: center;"><i>Màn hình lớn 5.5 inch thoải mái để làm việc và giải trí</i></p><h3 style="line-height: 20.8px; text-align: justify;"><strong>Cảm ứng 3D Touch độc đáo</strong></h3><p style="line-height: 20.8px; text-align: justify;">3D Touch là tính năng hoàn toàn mới trên iPhone 6s Plus 32 GB, cho phép người dùng xem trước được các tùy chọn nhanh dựa vào lực nhấn mạnh hay nhẹ mà không cần phải nhấp vào ứng dụng.</p><p style="line-height: 20.8px; text-align: justify;">Để sử dụng, bạn chỉ cần nhấn vào màn hình hoặc ứng dụng 1 lực mạnh đến khi máy rung nhẹ là có thể xem được.</p><p style="line-height: 20.8px; text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/42/71770/iphone-6s-plus342.gif" onclick="return false;"><img alt="Chọn nhanh các lựa chọn trên camera của máy" data-original="https://cdn2.tgdd.vn/Products/Images/42/71770/iphone-6s-plus342.gif" class="lazy" title="Chọn nhanh các lựa chọn trên camera của máy" src="https://cdn2.tgdd.vn/Products/Images/42/71770/iphone-6s-plus342.gif" style="display: block;"></a></p><p style="line-height: 20.8px; text-align: center;"><i>Chọn nhanh các lựa chọn trên camera của máy</i></p><p style="line-height: 20.8px; text-align: justify;">Đáng tiếc tính năng 3D Touch này chỉ mới được áp dụng trên các&nbsp;<a href="https://www.thegioididong.com/game-ung-dung?key=c%E1%BB%A7a+apple" target="_blank" title="Các game và ứng dụng cho hệ điều hành Apple">ứng dụng của Apple</a>&nbsp;như: danh bạ, camera, mail, máy ảnh ...&nbsp;</p><p style="line-height: 20.8px; text-align: justify;">Bạn có thể tìm hiểu thêm tính năng 3D Touch tại&nbsp;<strong><a href="https://www.thegioididong.com/tin-tuc/tong-hop-tat-ca-nhung-tien-ich-3d-touch-dem-den-cho-nguoi-dung-714800" target="_blank" title="Tìm hiểu thêm các chức năng 3D Touch">đây</a></strong>.</p><h3 style="line-height: 20.8px; text-align: justify;"><strong>Sức mạnh của bộ vi xử lý A9 mới nhất</strong></h3><p style="line-height: 20.8px; text-align: justify;">iPhone 6s Plus 32 GB sử dụng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/chip-xu-ly-apple-a9-tren-iphone-6s-va-6s-plus-733695" target="_blank" title="Tìm hiểu rõ hơn về chip xử lý A9">vi xử lý A9</a>&nbsp;tốc độ 1.8 GHz (iPhone 6 Plus chỉ với 1.4 GHz), giúp máy chạy cùng lúc nhiều ứng dụng mượt mà.&nbsp;Hiện tại, bạn có thể nâng cấp lên IOS 11 mới nhất như trên&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-x-64gb" target="_blank" title="iPhone X" type="iPhone X">iPhone X</a>.</p><p style="line-height: 20.8px; text-align: center;"></p><div class="video" allowfullscreen="" frameborder="0" height="395" scrolling="no" src="https://www.youtube.com/embed/ZowcYYl-UM0" width="640"><iframe src="https://www.youtube.com/embed/ZowcYYl-UM0?rel=0" frameborder="0" allowfullscreen=""></iframe></div><p></p><p style="line-height: 20.8px; text-align: center;"><i><span style="line-height: 20.8px; text-align: justify;">Bạn sẽ thực sự cảm nhận được sức mạnh của iPhone 6s Plus 32 GB khi chiến các game có đồ họa nặng như&nbsp;</span><a href="https://www.thegioididong.com/tin-tuc/modern-combat-5-blackout-game-bom-tan-do-bo-len-ca-556327" style="line-height: 20.8px; text-align: justify;" target="_blank" title="Thông tin thêm về game Modern Combat">Modern Combat 5</a><span style="line-height: 20.8px; text-align: justify;">&nbsp;hay&nbsp;Warhammer 40.000</span></i></p><p style="line-height: 20.8px; text-align: center;"></p><div class="video" allowfullscreen="" frameborder="0" height="395" src="https://www.youtube.com/embed/338nP7G8TfI" width="640"><iframe src="https://www.youtube.com/embed/338nP7G8TfI?rel=0" frameborder="0" allowfullscreen=""></iframe></div><p></p><p style="line-height: 20.8px; text-align: center;"><i style="line-height: 20.8px;">Người trợ lý ảo rất hữu dụng trên các dòng máy iPhone (Nguồn: Youtube)</i></p><p style="line-height: 20.8px; text-align: justify;"><span style="line-height: 20.8px;">Viên pin chỉ có dung lượng 2750 mAh khá thấp, tuy nhiên bạn vẫn có thể an tâm sử dụng máy trong một ngày.</span></p><p style="line-height: 20.8px; text-align: justify;">Một chiếc điện thoại vừa thể hiện đẳng cấp của bạn vừa mang lại những nâng cấp tốt hơn như camera, hiệu năng hoạt động mạnh mẽ hơn, tính năng 3D Touch độc đáo, tất cả sẽ là trải nghiệm mới mẻ cho bạn khi chọn mua iPhone 6s Plus 32 GB.</p>
                                  </article>',
                'quantity_store' => rand(0,50),
                'price'=>13990000,
                'rating' => 4,
                'sales' => 30,
                'category_id' => 4,
                'manufacture_id' => 3,
                'configuration' => [
                    'Màn hình' => 'LED-backlit IPS LCD, 5.5", Retina HD',
                    'Hệ điều hành' => 'iOS 11',
                    'Camera sau' => '12 MP',
                    'Camera trước' => '5 MP',
                    'CPU' => 'Apple A9 2 nhân 64-bit',
                    'RAM' => '2 GB',
                    'Bộ nhớ trong' => '32 GB',
                    'Thẻ SIM' => '1 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '2750 mAh',
                    ],
                ],[
                'name' => 'Samsung Galaxy S9+ 64GB (Xanh san hô)
',
                'slug' => str_slug('Samsung Galaxy S9+ 64GB (Xanh san hô)
'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2 style="text-align: justify;"><a href="https://www.thegioididong.com/dtdd/samsung-galaxy-s9-plus-64gb-xanh-san-ho" target="_blank" title="Samsung Galaxy S9 Plus Xanh san hô" type="Samsung Galaxy S9 Plus Xanh san hô">Samsung Galaxy S9 Plus&nbsp;xanh san hô</a> nổi bật với sắc xanh mới lạ, camera kép chuyên nghiệp tuyệt đỉnh và màn hình tràn viền đẳng cấp.</h2>
                                     </article>',
                'quantity_store' => rand(0,50),
                'price'=>23300000,
                'rating' => 4.0,
                'sales' => 120,
                'category_id' => 5,
                'manufacture_id' => 4,
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
                'name' => 'Samsung Galaxy Note 8',
                'slug' => str_slug('Samsung Galaxy Note 8'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2><strong>Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên <a href="https://www.thegioididong.com/dtdd/samsung-galaxy-s8-plus" target="_blank" title="S8 Plus">S8 Plus</a>, bút Spen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.</strong></h2>
                                        </article>',
                'quantity_store' => rand(0,50),
                'price'=>22900000,
                'rating' => 4.0,
                'sales' => 10,
                'category_id' => 5,
                'manufacture_id' => 4,
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
                'name' => 'Samsung Galaxy C9 Pro',
                'slug' => str_slug('Samsung Galaxy C9 Pro'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2><strong>Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên <a href="https://www.thegioididong.com/dtdd/samsung-galaxy-s8-plus" target="_blank" title="S8 Plus">S8 Plus</a>, bút Spen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.</strong></h2>
                                        </article>',
                'quantity_store' => rand(0,50),
                'price'=>22900000,
                'rating' => 4.0,
                'sales' => 10,
                'category_id' => 5,
                'manufacture_id' => 4,
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
                'name' => 'OPPO F5 6GB',
                'slug' => str_slug('OPPO F5 6GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2 dir="ltr"><a href="https://www.thegioididong.com/dtdd/oppo-f5-6gb" target="_blank" title="OPPO F5 6GB" type="OPPO F5 6GB">OPPO F5 6GB</a> là phiên bản nâng cấp cấu hình của chiếc OPPO F5, chuyên gia selfie làm đẹp thông minh và màn hình tràn viền tuyệt đẹp.</h2>  
                                    </article>',
                'quantity_store' => rand(0,50),
                'price'=>8900000,
                'rating' => 4.0,
                'sales' => 34,
                'category_id' => 6,
                'manufacture_id' => 4,
                'configuration' => [
                    'Màn hình' => 'IPS LCD, 6.0", Full HD+',
                    'Hệ điều hành' => 'ColorOS 3.2 (Android 7.1)',
                    'Camera sau' => '	16 MP',
                    'Camera trước' => '	20 MP',
                    'CPU' => '	Mediatek Helio P23',
                    'RAM' => '	6 GB',
                    'Thẻ SIM' => '2 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	3200 mAh',
                ]
            ],[
                'name' => 'Nokia 7 plus',
                'slug' => str_slug('Nokia 7 plus'),
                'description' => '<article class="area_article area_articleFull" style="">
                                   <h2><a href="https://www.thegioididong.com/dtdd-nokia" target="_blank" title="Điện thoại Nokia">Nokia</a> 7 Plus là chiếc <a href="https://www.thegioididong.com/dtdd" target="_blank" title="Điện thoại di động">smartphone</a> đầu tiên đánh dấu bước đi đầu tiên của HMD vào thế giới màn hình tỉ lệ 18:9.</h2>
                                    </article>',
                'quantity_store' => rand(0,50),
                'price'=>11000000,
                'rating' => 4.0,
                'sales' => 34,
                'category_id' => 7,
                'manufacture_id' => 1,
                'configuration' => [
                    'Màn hình' => '	IPS LCD, 6", Full HD+',
                    'Hệ điều hành' => '	Android 8.0 (Oreo)',
                    'Camera sau' => '	12 MP và 13 MP (2 camera)',
                    'Camera trước' => '		16 MP',
                    'CPU' => '	Qualcomm Snapdragon 660 8 nhân',
                    'RAM' => '		4 GB',
                    'Thẻ SIM' => '
2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G',
                    'Dung lượng pin' => '	3200 mAh',
                ]
            ],[
                'name' => 'OPPO F7 128GB',
                'slug' => str_slug('OPPO F7 128GB'),
                'description' => '<article class="area_article area_articleFull" style="">
                                 <h2>Tiếp nối sự thành công của&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-f5" target="_blank" title="Oppo F5">OPPO F5</a>&nbsp;thì&nbsp;<a href="https://www.thegioididong.com/dtdd-oppo" target="_blank" title="OPPO">OPPO</a>&nbsp;tiếp tục giới thiệu&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-f7" target="_blank" title="OPPO F7 ">OPPO F7 128GB</a>&nbsp;với mức giá tương đương nhưng mang trong mình thiết kế hoàn toàn mới cũng nhiều cải tiến đáng giá.</h2>
                                   </article>',
                'quantity_store' => rand(0,50),
                'price'=>9930000,
                'rating' => 4.0,
                'sales' => 131,
                'category_id' => 7,
                'manufacture_id' => 1,
                'configuration' => [
                    'Màn hình' => '	LTPS LCD, 6.23", Full HD+',
                    'Hệ điều hành' => '	ColorOS 5.0 (Android 8.1)',
                    'Camera sau' => '	16 MP',
                    'Camera trước' => '		25 MP',
                    'CPU' => '	MediaTek Helio P60',
                    'RAM' => '	6 GB',
                    'Thẻ SIM' => '2 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	3400 mAh',
                ]
            ],[
                'name' => 'Nokia 6 new',
                'slug' => str_slug('Nokia 6 new'),
                'description' => '<article class="area_article area_articleFull" style="">
                                  <h2>Sau nhiều rò rỉ thì cuối cùng chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd/nokia-6-2018" target="_blank" title="Điện thoại Nokia 6" type="Điện thoại Nokia 6">Nokia 6</a>&nbsp;phiên bản 2018 cũng đã chính thức ra mắt với một thiết kế sang trọng nhưng vẫn có gì đó đáng tiếc cho một chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Điện thoại">smartphone</a>&nbsp;ra mắt vào năm 2018.</h2>
                                   </article>',
                'quantity_store' => rand(0,50),
                'price'=>6000000,
                'rating' => 4.0,
                'sales' => 31,
                'category_id' => 7,
                'manufacture_id' => 1,
                'configuration' => [
                    'Màn hình' => '	IPS LCD, 6", Full HD+',
                    'Hệ điều hành' => '	Android 8.0 (Oreo)',
                    'Camera sau' => '	12 MP và 13 MP (2 camera)',
                    'Camera trước' => '		16 MP',
                    'CPU' => '	Qualcomm Snapdragon 660 8 nhân',
                    'RAM' => '		4 GB',
                    'Thẻ SIM' => '2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G',
                    'Dung lượng pin' => '	3200 mAh',
                ]
            ],[
                'name' => 'Nokia 5',
                'slug' => str_slug('Nokia 5'),
                'description' => '<article class="area_article area_articleFull" style="">
                                 <h2 dir="ltr">Nokia 5 là một <a href="https://www.thegioididong.com/dtdd" target="_blank" title="tốt">điện thoại</a> mới được trình làng đánh dấu sự trở lại ở sự kiện MWC 2017. Máy mang trong mình nhiều thay đổi cùng mức giá bán hấp dẫn.</h2>
                                 </article>',
                'quantity_store' => rand(0,50),
                'price'=>3680000,
                'rating' => 4.0,
                'sales' => 31,
                'category_id' => 7,
                'manufacture_id' => 1,
                'configuration' => [
                    'Màn hình' => '		IPS LCD, 5.2", HD',
                    'Hệ điều hành' => '		Android 7.1 (Nougat)',
                    'Camera sau' => '13 MP',
                    'Camera trước' => '		8 MP',
                    'CPU' => '	Qualcomm Snapdragon 430 8 nhân 64 bit',
                    'RAM' => '	2 GB',
                    'Thẻ SIM' => '2 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	3200 mAh',
                ]
            ],[
                'name' => 'Samsung Galaxy J3 Pro',
                'slug' => str_slug('Samsung Galaxy J3 Pro'),
                'description' => '<article class="area_article area_articleFull" style="">
                               <h2><strong>Samsung Galaxy J3 Pro là bản nâng cấp mạnh mẽ về cả ngoại hình và cấu hình so với chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-j3-lte" target="_blank" title="Điện thoại Samsung Galaxy J3">Samsung Galaxy J3</a> tiền nhiệm, hứa hẹn sẽ đem đến cho người dùng một Smartphone xứng đáng với giá tiền bỏ ra.</strong></h2>
                                  </article>',
                'quantity_store' => rand(0,50),
                'price'=>3980000,
                'rating' => 4.5,
                'sales' => 311,
                'category_id' => 5,
                'manufacture_id' => 4,
                'configuration' => [
                    'Màn hình' => 'PLS TFT LCD, 5", HD',
                    'Hệ điều hành' => '		Android 7.1 (Nougat)',
                    'Camera sau' => '13 MP',
                    'Camera trước' => '	5 MP',
                    'CPU' => '		Exynos 7570 4 nhân 64-bit',
                    'RAM' => '	2 GB',
                    'Thẻ SIM' => '	2 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '	3200 mAh',
                ]
            ],[
                'name' => 'Samsung Galaxy A8+ (2018)',
                'slug' => str_slug('Samsung Galaxy A8+ (2018)'),
                'description' => '<article class="area_article area_articleFull" style="">
                             <h2 style="text-align: justify;"><a href="https://www.thegioididong.com/dtdd-samsung" target="_blank" title="Điện thoại Samsung">Samsung</a> Galaxy A8+ (2018) là phiên bản lớn hơn của chiếc&nbsp;Samsung Galaxy A8 (2018) phù hợp với những bạn yêu thích một thiết bị có màn hình lớn và thời lượng pin bền bỉ.</h2>
                                 </article>',
                'quantity_store' => rand(0,50),
                'price'=>9980000,
                'rating' => 4.5,
                'sales' => 112,
                'category_id' => 5,
                'manufacture_id' => 4,
                'configuration' => [
                    'Màn hình' => '	Super AMOLED, 6", Full HD+',
                    'Hệ điều hành' => '	Android 7.1 (Nougat)',
                    'Camera sau' => '	16 MP',
                    'Camera trước' => '	16 MP và 8 MP',
                    'CPU' => '	Exynos 7885 8 nhân 64-bit',
                    'RAM' => '	6 GB',
                    'Thẻ SIM' => '2 Nano SIM, Hỗ trợ 4G',
                    'Dung lượng pin' => '3500 mAh, có sạc nhanh',
                ]
            ]
            ];
        foreach($data as $product){
            Product::create($product);
        }
    }
}
