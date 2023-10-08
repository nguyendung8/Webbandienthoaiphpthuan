<?php
   include 'config.php';

   session_start();

   $user_id = $_SESSION['user_id']; //tạo session người dùng thường

   if(!isset($user_id)){// session không tồn tại => quay lại trang đăng nhập
      header('location:login.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thông tin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Về Comic</h3>
   <p> <a href="home.php">Trang chủ</a> / Thông tin </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Tại sao lại có Comic.</h3>
         <p>Từ những bạn trẻ đam mê đọc những quyển truyện trinh thám và tiểu thuyết, chúng mình đã xây dựng nên website này để giúp mọi người có thể dễ dàng tìm kiếm và mua được những quyển truyện yêu thích của mình.</p>
         <p>Qua một thời gian phát triển, Comic mong muốn mang đến những quyển truyện hay, sâu sắc và hấp dẫn đến tay các bạn đọc.</p>
         <a href="contact.php" class="btn">Liên hệ</a>
      </div>

   </div>

</section>

<!-- <section class="reviews">

   <h1 class="title">Phản hồi</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Cảm ơn Comic. đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hoàng Văn Hải</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Cảm ơn Comic. đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nguyễn Thị Bích</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Cảm ơn Comic. đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Đào Văn Mạnh</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Cảm ơn Comic. đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vũ Thùy Dương</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Cảm ơn Comic. đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lê Anh Thiện</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Cảm ơn Comic. đã giúp mình tìm mua được quyển truyện yêu thích của mình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bùi Anh Thư</h3>
      </div>

   </div>

</section> -->

<section class="authors">

   <h1 class="title">Thành viên của Comic</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/anhkien.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Bùi Trung Kiên</h3>
      </div>

      <!-- <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Trần Minh Thái</h3>
      </div> -->

      <!-- <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Hoàng Quốc Chung</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Phan Mạnh Hoàng</h3>
      </div> -->

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>