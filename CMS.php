<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/dashboard.css">
    <script src="./script/dashboard.js" defer async></script>
</head>

<body>

<form action="CMS.php" method="post" enctype="multipart/form-data">

<div class="upload_file">
    <label for="profile_photo">Click here to upload new photo</label>
    <input type="file" name="profile_photo" id="profile_photo" required accept="image/png, image/jpeg, image/jpg" />
</div>


<div class="styled-radio">
    <p>New photo for...</p>
    <input type="radio" name="photo_location" id="photo_1" value="photo_1" required checked />
    <label for="photo_1">Nguyễn Thị Quỳnh Giang</label>
    <br />
    <input type="radio" name="photo_location" id="photo_2" value="photo_2" required />
    <label for="photo_2">Joo Jeong-hyeon</label>
    <br>
    <input type="radio" name="photo_location" id="photo_3" value="photo_3" required />
    <label for="photo_3">Ramcharan Ramacharan</label>
    <br />
    <input type="radio" name="photo_location" id="photo_4" value="photo_4" required />
    <label for="photo_4">Võ Khải Minh</label>
</div>


<input type="submit" />

</form>



</body>

</html>