<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="register.css" type="text/css">
</head>
<body>
    
    <div class="box">
        <div class="container">
            <div class="title">
             <h2>Sign up</h2>
            </div>
            <div class="form">  
                <div class="form-input">
                <form action="">
                    <table>
                    <tr>
                        <td><label class="label" for="nama">Username</label></td>
                         <td class="equal"> : </td>
                        <td><input class="input" type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td><label class="label" for="email">Email</label></td>
                        <td class="equal"> : </td>
                        <td><input class="input" type="text" name="email"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="t-lahir">Tempat Lahir</label></td>
                         <td class="equal"> : </td>
                         <td><input class="input" type="text" name="t-lahir"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="ttl">Tanggal Lahir</label></td>
                         <td class="equal"> : </td>
                         <td><input class="input" type="text" name="ttl"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="pass">Password</label></td>
                         <td class="equal"> : </td>
                         <td><input class="input" type="password" name="pass"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="rpass">Ulangi Password</label></td>
                         <td class="equal"> : </td>
                         <td><input class="input" type="password" name="r-pass"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="gender">Jenis Kelamin</label></td>
                         <td class="equal"> : </td>
                         <td>
                            <input type="radio" class="r-input" value="Laki-laki" name="gender">
                            <label for="laki-laki" class="r-label">Laki-laki</label>
                            <input type="radio" class="r-input" value="Perempuan" name="gender">
                            <label for="Perempuan" class="r-label">Perempuan</label>
                         </td>
                    </tr>
                 </table>
                <div class="form-submit">
                    <input type="submit" value="Submit" id="submit-btn">
                        <a href="sup.html" id="batal-btn">Cancel</a>
                </div>
            </form>
            <div class="back">
                <h4><a href="login.php">Kembali</a></h4>
            </div>
        </div>
    </div>
 </div>
 </div>
</body>
</html>
