<?php
require_once '../db.php';

function addproductform($connect){ ?>
    <section class="add-product-form">
  <h2>افزودن محصول جدید</h2>
  <form method="POST" id="productForm" enctype="multipart/form-data">
    <label for="productname">نام محصول:</label>
    <input type="text" id="productName" name="productname" placeholder="نام محصول" required />

    <label for="category">دسته‌بندی: </label>
    <select id="category" name="category" required>
      <option value="" disabled selected>انتخاب دسته‌بندی</option>
      <?php 
      $query_add = mysqli_query($connect, "SELECT * FROM category ");
      while($row_add = mysqli_fetch_array($query_add)):
      ?>
      <option value="<?php echo $row_add['id']; ?>"><?php echo $row_add['cat_name']; ?></option>
      <?php endwhile; ?>
    </select>

    <label for="price">قیمت (تومان):</label>
    <input type="number" id="price" name="price" placeholder="مقدار را به تومان وارد کنید" min="0" required />

    <label for="image">تصویر محصول:</label>
    <input type="file" id="image" name="image" accept="image/*" required />

    <label for="description">توضیحات:</label>
    <textarea id="description" name="description" rows="4" placeholder="توضیحات محصول"></textarea>

    <button type="submit" class="btn-primary">افزودن محصول</button>
  </form>
  <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productname = $_POST['productname'];
    $productprice = $_POST['price'];
    $catid = $_POST['category'];
    $desproduct = $_POST['description'];

    $tmp = $_FILES['image']['tmp_name'];
    $name_image = $_FILES['image']['name'];

   
    $folder_image = __DIR__ . '/../recourses/';

    if ($productname == "" || $productprice == "" || $catid == "" || $desproduct == "") {
        echo "تمام فیلدها باید پر شوند.";
        exit;
    }

    if (!is_dir($folder_image)) {
        mkdir($folder_image, 0755, true);
    }

    if (move_uploaded_file($tmp, $folder_image . $name_image)) {
        $add_product_query = "INSERT INTO product (title, price, cat_id, image, des) 
                              VALUES ('$productname', '$productprice', '$catid', '$name_image', '$desproduct')";

        if ($connect->query($add_product_query) === TRUE) {
            echo "ذخیره انجام شد.";
        } else {
            echo "خطا در ذخیره در دیتابیس: " . $connect->error;
        }
    } else {
        echo "آپلود فایل شکست خورد.";
    }
}
?>

</section>
<?php
  }
  function mainadminview($connect){ ?>
  <section class="product-list">
      <table>
        <thead>
          <tr>
            <th>ردیف</th>
            <th>تصویر</th>
            <th>نام محصول</th>
            <th>دسته‌بندی</th>
            <th>قیمت</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <?php
        $query = mysqli_query($connect, 'SELECT * FROM products');
        while($row = mysqli_fetch_array($query)): 
          ?>
        <tbody>
          <tr>
            <td><?php echo $row['id'];  ?></td>
            <td><img src="../recourses/<?php echo $row['image']; ?>" alt="تصویر محصول" class="product-img" /></td>
            <td><?php echo $row['title'];  ?></td>
            <td><?php
            $cat_id = $row['cat_id'];
            $cat_query = mysqli_query($connect, "SELECT * FROM category WHERE id = '$cat_id'");
            $get_cat = mysqli_fetch_array($cat_query);
            echo $get_cat['cat_name']; 
            ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
              <button class="btn-edit">ویرایش</button>
              <button class="btn-delete">حذف</button>
            </td>
          </tr>
          
        </tbody>
        <?php endwhile; ?> 
      </table>
    </section>
    <?php 
}
function usersedit($connect){ ?>
  <section class="product-list">
      <table>
        <thead>
          <tr>
            <th>ردیف</th>
            <th>تصویر</th>
            <th>نام </th>
            <th>ایمیل</th>
          </tr>
        </thead>
        <?php
        $query = mysqli_query($connect, 'SELECT * FROM people');
        while($row = mysqli_fetch_array($query)): 
          ?>
        <tbody>
          <tr>
            <td><?php echo $row['id'];  ?></td>
            <td><?php echo $row['username'];  ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <button class="btn-edit">ویرایش</button>
              <button class="btn-delete">حذف</button>
            </td>
          </tr>
          
        </tbody>
        <?php endwhile; ?> 
      </table>
    </section>
    <?php 
}