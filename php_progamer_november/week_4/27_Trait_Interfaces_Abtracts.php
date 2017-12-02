<?php
    echo "<h3>Traits - Abstract Sự giống và khác nhau</h3>";
    // traits với abstract class khác nhau ở chúng không phụ thuộc vào vào sự thừa kế !
    /** Trait là một module giúp cho chúng ta có thể sử dụng lại các phương thức được khai báo trong trait vào các class khác nhau một cách đơn giản hơn là kế thừa như trước.
     * Các đặc điểm của Traits:
    Trait có chức năng gom lại các phương thức và thuộc tính mà chúng ta muốn sử dụng lại nhiều lần.
    Traits như một abstract class ( đều không thể khởi tạo được) nhưng không hoàn toàn giống nhau.
    Các phương thức trong Trait có thể bị override lại trong class sử dụng nó.

     * Ưu điểm của Trait:
    Giảm việc lặp code đáp ứng được nguyên tắc (DRY - Don't Repeat Yoursefl).
    Khắc phục được điểm yếu đơn kế thừa của PHP.

     * Nhược điểm của Trait: Nhược điểm duy nhất mà mình thấy được khi sử dụng traits đó là sẽ gây khó khăn có chúng ta đọc được các phương thức từ một class có sử dụng trait.
     */
    # Example
    /**
    class AbstractValidate extends AbstractCache {}
    class AbstractSocial extends AbstractValidate {}
    class Post extends AbstractSocial {}
     */

    echo '<br>';

    echo "<h3>Traits hoạt động như thế nào?</h3>";

    /** Như bạn đã thấy ở bên trên thì cả hai object của class Post và Comment đều có phương thức share() mặc dù phương thức này không hề được định nghĩa trong class.

    Trait được đưa ra đơn giản chỉ là một cách để bạn copy and paste code giữa các class. Đó chính là lý do tại sao phương thức share() có thể được sử dụng khi khởi tạo đối tượng cũng như trong chính bản thân class Post hay Comment. Cụ thể như sau:
     *
     */

    class Post {

        use Sharable;

        public function shareWithFacebook() {
            echo $this->share('');
            echo 'Facebook shared!';
        }
    }

    echo '<br>';

    echo "<h3>Traits khác với Abstract Class thế nào?</h3>";


    /** Trait khác với Abstract Class vì nó không dựa trên sự thừa kế. Tưởng tượng rằng nếu class Post và class Comment phải kế thừa từ một AbstractSocial class. Chúng ta dường như muốn nhiều hơn là chỉ share post và comment lên mạng xã hội. Tuy nhiên việc sử dụng abstract class khiến chúng ta phải xây dựng một mô hình kế thừa hết sức phức tạp như sau:
     *
     */


    echo "<h3>Traits khác với Interfaces thế nào?</h3>";
    /** Có thể nói về cơ bản thì Trait và Interface khá giống nhau về tính chất sử dụng. Cả hai đều không thể sử dụng nếu không có một class được implement cụ thể. Tuy nhiên chúng cũng có những sự khác nhau hết sức rõ rệt.

    Interface có thể hiểu như một bản "hợp đồng" (nếu sử dụng) chỉ ra rằng: "đối tượng có thể làm việc này", do vậy bạn phải implement nó thì mới sử dụng được. Trong khi đó Trait chỉ nói : "đối tượng có khả năng làm việc này".

    Ta hãy cùng đi vào một ví dụ cụ thể như sa
     *
     */

    // Interface
    interface Sociable {

        public function like();
        public function share();

    }

    // Trait
    trait Sharable {

        public function share($item)
        {
            // share this item
        }

    }

    // Class

//    class Post implements Sociable {
//
//        use Sharable;
//
//        public function like()
//        {
//            //
//        }
//
//    }

    /** Chúng ta có interface Sociable chỉ ra rằng đối tượng Post có thể like() và share(). Trong khi đó Sharable Trait implement phương thức share() và phương thức like() lại được implement bởi chính class Post.

    Bạn có thể thấy chúng ta có thể type hint đối tượng Post để kiểm tra xem nó có được implement từ Sociable interface hay không, đồng thời ta có thể thấy phương thức share() triển khai trong Trait không những sử dụng cho việc implement từ interface mà còn có thể mang đi sử dụng cho các class tương tự khác:
     *
     */

    echo '<br>';

    $post = new Post;

    if($post instanceOf Sociable)
    {
        $post->share('hello world');
    }

    echo "<h3>Dùng Traits có lợi thế nào?</h3>";
     /*
        Giảm việc lặp code.

        Tránh được việc kế thừa nhiều tầng nhiều lớp khá phức tạp trong tổng thể hệ thống, sẽ khó maintain sau này.
    Định nghĩa ngắn gọn, sau đó có thể đặt sử dụng ở những nơi cần thiết, sử dụng được ở nhiều class cùng lúc.
    Nhược điểm của Traits

        Trait có thể tạo ra các class mang quá nhiều trách nhiệm (responsibility). Trait được tạo ra chủ yếu dựa trên tư tưởng "copy and paste" code giữa các class. Chúng ta có thể dễ dành thêm một tập hợp các phương thức vào class thông qua việc sử dụng Trait. Điều này vi phạm nguyên tắc Single Responsibility Principle.
    Sử dụng Trait khiến chúng ta khó khăn trong việc xem tất cả các phương thức của một class, do vậy khó để có thể phát hiện được một phương thức bất kỳ có bị trùng lặp hay không.
    Trait cảm giác như công cụ hữu ích cho những kẻ lười, khi muốn thêm vào để giải quyết vấn đề ngay lập tức. Thường thì Composition là một kiến trúc ổn hơn cho việc kế thừa hay sử dụng Trait.
    Những tình huống cụ thể sử dụng Traits

      */

    /** Các câu hỏi đặt ra cho chúng ta như sau:

    Chúng ta có nên viết phương thức share() ở trong tất cả các class implement từ Shareable interface? Câu trả lời là: KHÔNG.
    Chúng ta có nên tạo ra một AbstractShare class để các class của chúng ta kế thừa, và đồng thời các class đó implement Shareable interface? Câu trả lời cũng là: KHÔNG.
    Giải pháp của chúng ta nên thực hiện đó là implement phương thức share() trong một ShareableTrait, đồng thời chúng ta có thể thêm vào những class cần thiết sử dụng.
     * Interface Shareable
     */
    interface Shareable {

        public function share();

    }
    echo "<h3>Ví dụ cụ thể về việc sử dụng Trait</h3>";

    /**
     * Trong bài viết của tác giả có lấy ví dụ về package Cashier trong Laravel, tuy nhiên tôi xin phép không phân tích về package này vì có thể có người chưa từng sử dụng nó (bản thân tác giả của bài viết này cũng chưa sử dụng).

    Tôi xin giới thiệu với các bạn về một tính năng mà vốn Laravel đã có từ những phiên bản 4.x trong đó có sử dụng Trait. Hẳn là nếu bạn từng làm việc với Laravel, cụ thể hơn là với Eloquent, chắc các bạn đến khái niệm Soft Delete mà Laravel đưa ra. Tưởng tượng đơn giản thì thay bằng việc delete vật lý bản ghi trong Database, chúng ta chỉ delete logic thôi. Bản ghi đó vẫn còn nhưng đang ở trạng thái deleted.

    Về Soft Delete thì bạn có thể tưởng tượng như chức năng thùng rác trên hệ điều hành của chúng ta. Khi chúng ta xóa, dữ liệu sẽ vào thùng rác. Bạn hoàn toàn có thể recover dữ liệu đó hoặc vào thùng rác xóa hẳn dữ liệu khỏi ổ cứng.

    Như vậy là ta đã có cái nhìn tổng quan về Soft Delete rồi, giờ ta sẽ đi sâu vào xem Laravel họ xử lý vấn đề này thế nào? Sử dụng Trait ra sao? Tôi sẽ dùng tài liệu tham chiếu của phiên bản Laravel 5.2. Ta sẽ tìm hiểu về cách cài đặt Soft Deleting:
     *
     */

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Flight extends Model
    {
        use SoftDeletes;

        /**
         * The attributes that should be mutated to dates.
         *
         * @var array
         */
        protected $dates = ['deleted_at'];
    }

    /** Đây là một Model Flight mới được tạo ra:

    use Illuminate\Database\Eloquent\Model; để khai báo sử dụng base model mà Laravel đã dựng lên, tất cả các Model của chúng ta đều được kế thừa từ Base Model này.
    use Illuminate\Database\Eloquent\SoftDeletes; chính là khai báo sử dụng Trait SoftDeletes.
    use SoftDeletes; cách gọi này giống với những ví dụ ở trên, để ta có thể sử dụng Trait trong class Flight.
    Flow sử dụng Soft Delete hết sức đơn giản:

    Trong bảng của chúng ta ngoài created_at và updated_at sẽ có thêm trường deleted_at để tracking lại trạng thái đã xóa hay chưa? Dữ liệu NULL sẽ là trạng thái chưa xóa và có giá trị datetime sẽ lại thời điểm xóa bản ghi.
    Khi chỉ muốn delete logic (soft delete) ta sẽ sử dụng hàm delete() (VD: $flight->delete()), dữ liệu trường deleted_at sẽ được cập nhật.
    Khi muốn delete vật lý (xóa hẳn khỏi Database) ta sẽ sử dụng hàm forceDelete() (VD: $flight->forceDelete()), bản ghi sẽ biến mất hỏi Database mà không còn một dấu vết nào :P
    Thật là kỳ diệu phải không? Có hai hàm mà giải quyết được bài toán của chúng ta rất gọn gàng, hãy cùng mổ xẻ thêm Trait SoftDeletes có những gì để có câu trả lời.

    Trước hết hãy nói chuyện đến trường hợp các Model bình thường không sử dụng Soft Delete, ngay trong Base Model mà tôi nói ở trên đã chứa các hàm dùng để delete mà ta có thể sử dụng lại, cụ thể như sau:

    Hàm delete(): trong code bạn lưu ý là hàm này có gọi đến hàm performDeleteOnModel(), chưa cần hiểu sâu hàm này làm công việc gì, ta chỉ cần biết nó sẽ thực hiện việc delete bản ghi khỏi Database.
    Hàm forceDelete(): như ta thấy là nó gọi thằng luôn $this->delete() (yaoming).
    Như vậy thì với một Model bình thường (không sử dụng Soft Delete), ta vẫn sử dụng được cả hai hàm delete() và forceDelete(), tuy nhiên kết quả là như nhau, bản ghi sẽ biến mất khỏi Database của chúng ta.

    Case bình thường ta đã clear đúng không nào? Giờ hãy xem điều vi diệu khi sử dụng Trait SoftDeletes. Ta vẫn focus vào hai hàm đã nói ở trên:

    Hàm delete(): không được định nghĩa lại ở trong Trait, do vậy khi gọi hàm này, chúng ta sẽ sử dụng hàm delete() của Base Model. Tuy nhiên điều kỳ diệu là ở việc Trait đã định nghĩa lại hàm performDeleteOnModel() (ở trên tôi đã nói là trong hàm delete() có gọi đến hàm này). Mô tả sơ qua thì hàm này làm nhiệm vụ nếu không phải forceDelete thì sẽ chỉ thực hiện cập nhật trường deleted_at, ngược lại sẽ thực hiện gọi hàm forceDelete().
    Hàm forceDelete(): được định nghĩa lại trong Trait, trong hàm này có gọi đến hàm delete() nhưng lại bật cờ forceDeleting là true. Làm như vậy để hàm performDeleteOnModel() biết được phải xóa hẳn khỏi Database.
    Như vậy ta đã hiểu hơn về cơ chế thực hiện Soft Delete của Laravel với sự trợ giúp của Trait rồi phải không nào. Ngoài ra thì Trait SoftDeletes này còn cung cấp thêm cho chúng ta các hàm khác để làm việc thuận tiện hơn với Soft Delete:

    restore(): để lấy lại dữ liệu Soft Delete khôi phục về trạng thái chưa delete (giống ví dụ recover từ thùng rác của tôi ở trên)
    withTrashed(), onlyTrashed(): phục vụ khi query lấy dữ liệu, có thể tùy chọn lấy dữ liệu từ Database chỉ những dữ liệu xóa logic hay lấy tất cả dữ liệu (bao gồm cả dữ liệu đã được xóa logic).
    Có thể đưa ra kết luận ngắn gọn như sau: việc sử dụng Trait trong trường hợp này có hiệu quả rất tốt, không có Trait model vẫn hoạt động bình thường, cần sử dụng đến Trait thì khai báo sử dụng và hệ thống mở thêm tính năng khá mềm dẻo.
     *
     */

    echo '<br>';