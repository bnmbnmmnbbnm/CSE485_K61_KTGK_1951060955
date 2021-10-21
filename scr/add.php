<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="mb-3 ">
                        <label class="form-label">Họ và tên</label>
                        <input type="text" name="bd_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giới tính</label>
                        <input type="text" name="bd_sex" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Năm sinh(Tuổi)</label>
                        <input type="text" name="bd_age" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nhóm máu</label>
                        <input type="text" name="bd_bgroup" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" name="bd_phno" class="form-control">
                    </div>
                    <input type="submit" name="submit" class="add" value="Thêm">
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
