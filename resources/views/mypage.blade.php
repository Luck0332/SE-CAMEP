<!-- resources/views/mypage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Page</title>

    <style>
        *{

        }

        h1{
            padding-left: 35px;

        }

        body {
            padding: 2%;
            background-image: url(https://wallpapercave.com/dwp1x/wp7315488.jpg);
            background-size: cover;
        }

        .main {

            width: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 6%;
            color: black;

            background: rgba(253, 255, 232, 0.6); /* ทำให้สีขาวมีความโปร่งแสง */
            border: 2px solid #ccc;
            border-radius: 20px;
            backdrop-filter: blur(20px);


        }


        .main_two{
            width: 120%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table_1 {
            width: 40%; /* ปรับความกว้างตามต้องการ */

        }


        .table_scroll {
            width: 100%;
            height: 40vh; /* กำหนดความสูงของ .main */
            overflow-y: auto; /* เพิ่มการเลื่อนในแนวตั้ง */

            background: rgb(255, 255, 255); /* ทำให้สีขาวมีความโปร่งแสง */
            border: 2px solid #ccc;
            border-radius: 10px;
            backdrop-filter: blur(20px);
        }

        .main>button{
            border: none;
            outline: none;
            border-radius: 40px;
        }


    </style>
</head>
<body>
    <div class="main">

        <div class="main_two">
            <div>
                <h1>Workshop #HTML - FORM</h1>
            <div class="form-grub">
                <label>ชื่อ</label>
                <label><input type="text" class="form-input"></label>
            </div>
            <div class="form-grub">
                <label>สกุล</label>
                <label><input type="text" class="form-input"></label>
            </div>
            <div class="form-date">
                <label>วัน/เดือน/ปีเกิด </label>
                <label class="ages">&nbsp;&nbsp;&nbsp; อายุ <br></label>
                <label><input type="date" placeholder="dd/mm/yyyy" class="form-input-ui"></label>
                <label class="input-age"><input type="text" class="form-input-ui"></label>
            </div>
            <div class="form-radio">
                <label><br>เพศ &nbsp;</label>
                <label><input id="radio_a"
                        type="radio"
                        name="same_radio" />
                        <label for="radio_a">ชาย</label>
                    <input id="radio_b"
                        type="radio"
                        name="same_radio" />
                        <label for="radio_a">หญิง</label>
                </label>
            </div>
            <div class="form-file">
                <label><br> รูป</label>
                <label><input type="file" class="form-input"></label>
            </div>
            <div class="form-grub">
                <label>ที่อยู่</label>
                <label class="Text-area"><textarea rows="4" class="form-input"></textarea></label>
            </div>
            <div class="form-grub">
                <label>สีที่ชอบ</label>
                <label>
                    <select>
                        <option value=""
                        disabled
                        selected></option>
                        <option>สีแดง</option>
                        <option>สีส้ม</option>
                        <option>สีชมพู</option>
                        <option>สีเขียว</option>
                        <option>สีเหลือง</option>
                        <option>สีฟ้า</option>
                        <option>สีม่วง</option>
                    </select>
                </label>
            </div>
            <div class="form-radio">
                <label>แนวเพลงที่ชอบ &nbsp;</label>
                <label>
                    <input id="radio_a"
                        type="radio"
                        name="same_radio" class="form-radio"/>
                        <label for="radio_a">เพื่อชีวิต</label>
                    <input id="radio_b"
                        type="radio"
                        name="same_radio" class="form-radio"/>
                        <label for="radio_b">ลูกทุ่ง</label>
                    <input id="radio_c"
                        type="radio"
                        name="same_radio" class="form-radio"/>
                        <label for="radio_c">อื่นๆ</label>
                </label>
            </div>

            <div class="form-Accept">
                <label><br><input type="checkbox" name="checkbox_Accept" class="form-checkbox"> ยินยอมให้เก็บข้อมูล <br></label>
            </div>

            <div class="form-submid">
                <label><br><input type="reset" value="Reset" style="background-color:#990033; color:white;" class="form-submid-one"></label>
                <label><br><input type="submit" value="Submit" style="background-color:#006600; color:white;" class="form-submid-two"></label>
            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
