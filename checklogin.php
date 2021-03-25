<? php 
session_start ();
        ถ้า (isset ($ _ POST ['ชื่อผู้ใช้'])) {
                  รวม ("condb.php");
                  $ username = $ _POST ['ชื่อผู้ใช้'];
                  $ รหัสผ่าน = $ _POST ['รหัสผ่าน'];

                  $ sql = "เลือก * จากการเข้าสู่ระบบ 
                  WHERE username = '". $ username."' 
                  และรหัสผ่าน = '". $ รหัสผ่าน."' ";
                  $ result = mysqli_query ($ con, $ sql);
				
                  ถ้า (mysqli_num_rows ($ result) == 1) {
                      $ row = mysqli_fetch_array ($ result);

                      $ _SESSION ["ID"] = $ row ["ID"];
                      $ _SESSION ["name"] = $ row ["name"];
                      $ _SESSION ["ระดับ"] = $ row ["ระดับ"];

                      ถ้า ($ _ SESSION ["level"] == "admin") { 

                        ส่วนหัว ("ที่ตั้ง: admin.php");
                      }
                  ถ้า ($ _SESSION ["ระดับ"] == "สมาชิก") { 

                        ส่วนหัว ("ที่ตั้ง: member.php");
                      }
                  }อื่น{
                    ก้อง "<script>";
                        echo "alert (\" user หรือ password ไม่ถูกต้อง \ ");"; 
                        ก้อง "window.history.back ()";
                    เสียงสะท้อน "</script>";
 
                  }
        }อื่น{

             ส่วนหัว ("Location: index.php"); // ผู้ใช้และรหัสผ่านไม่ถูกต้องกลับไปเข้าสู่ระบบอีกครั้ง
 
        }
?>