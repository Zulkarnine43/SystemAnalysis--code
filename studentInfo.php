<?php
 class student{
        public function studentInfo(){
        	 echo "<br>"."student_id : 163432601"."<br>";
              echo "student_name : Zulkar Nine"."<br>";
              echo "student_subject : B.sc. in CSE"."<br>";
              echo "student_CGPA : 3.50"."<br>";
        }
}
class demo extends student{

	public function registrationInfo(){
		echo "Registration_Date : 06-07-2019"."<br>";
		echo "Total_credit : 12"."<br>";
	}
	public function subInfo(){
		echo "Course_name : System Analysis and design"."<br>";
		echo "CouserTeacher_name : sakib khan"."<br>";
	}
	public function attendenceInfo(){
		echo "Percentage_Attendence : 90%"."<br>";
	}
	public function ExamInfo(){
		echo "Exam_Date : 26-08-2019"."<br>";
	}
}
  $std=new demo();
  $std->studentInfo();
  $std->registrationInfo();
  $std->subInfo();
  $std->attendenceInfo();
  $std->ExamInfo();
?>