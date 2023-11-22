<?php 
class User extends CI_Model{
    public function Check_user($username, $password){
        $this->db->where(['Username'=>$username, 'Password'=>$password]);
        $query=$this->db->get('users');
        if($query->num_rows()>0){
            return $query->row();
        }   
    }
    public function getAllStudent($current_year){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('student.Academic_year', $current_year);
        $this->db->join('course','student.Course_id=course.Course_id', 'left');
        $this->db->join('parent','student.Student_id=parent.Student_id', 'left');
        $data=$this->db->get();
        return $data->result();
    }
    public function getlongcourseStudent($current_year){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where(['Course_duration' =>'Long_Course', 'Academic_year' =>$current_year]);
        $this->db->join('course','student.Course_id=course.Course_id', 'left');
        $data=$this->db->get();
        return $data->result();

    }
    public function getshortcourseStudent($current_year){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where(["Course_duration"=>"Short_Course", 'Academic_year' =>$current_year]);
        $this->db->join('course','student.Course_id=course.Course_id', 'left');
        $data=$this->db->get();
        return $data->result();
    }
    public function getnormalcourseStudent($current_year){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where(["CourseNature"=>"Normal", 'Academic_year' =>$current_year]);
        $this->db->join('course','student.Course_id=course.Course_id', 'left');
        $data=$this->db->get();
        return $data->result();
    }
    public function getmamacourseStudent($current_year){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where(['CourseNature'=>"Mama_Course", 'Academic_year' =>$current_year]);
        $this->db->join('course','student.Course_id=course.Course_id', 'left');
        $data=$this->db->get();
        return $data->result();
    }
    public function getboardingStudent($current_year){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where(['Resident'=>"Boarding" , 'Academic_year'=>$current_year]);
        $this->db->join('course','student.Course_id=course.Course_id', 'left');
        $data=$this->db->get();
        return $data->result();
    }
    public function getdayStudent($current_year){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where(['Resident'=>"Day", 'Academic_year'=>$current_year]);
        $this->db->join('course','student.Course_id=course.Course_id', 'left');
        $data=$this->db->get();
        return $data->result();
    }
    public function AllStudent($current_year){
        $query=$this->db->query('SELECT COUNT(*) AS TOTAL FROM student WHERE Academic_year="'.$current_year.'"');
        return $query->row();
    }
    public function LongcourseStudent($current_year){
        $query=$this->db->query('SELECT COUNT(*) AS TOTAL FROM student WHERE Course_duration="Long_Course" AND Academic_year="'.$current_year.'"');
        return $query->row();
    }
    public function ShortcourseStudent($current_year){
        $query=$this->db->query('SELECT COUNT(*) AS TOTAL FROM student WHERE Course_duration="Short_Course"  AND Academic_year="'.$current_year.'"');
        return $query->row();
    }
    public function NormalcourseStudent($current_year){
        $query=$this->db->query('SELECT COUNT(*) AS TOTAL FROM student WHERE CourseNature="Normal"  AND Academic_year="'.$current_year.'"');
        return $query->row();
    }
    public function MamacourseStudent($current_year){
        $query=$this->db->query('SELECT COUNT(*) AS TOTAL FROM student WHERE CourseNature="Mama_Course"  AND Academic_year="'.$current_year.'"');
        return $query->row();
    }
    public function DayStudent($current_year){
        $query=$this->db->query('SELECT COUNT(*) AS TOTAL FROM student WHERE Resident="Day"  AND Academic_year="'.$current_year.'"');
        return $query->row();
    }
    public function BoardingStudent($current_year){
        $query=$this->db->query('SELECT COUNT(*) AS TOTAL FROM student WHERE Resident="Boarding"  AND Academic_year="'.$current_year.'"');
        return $query->row();
    }
    public function Register_Student($data1){
        return $this->db->insert('student', $data1);
    }
    public function Check_Id($First_name, $Middle_name, $Last_name, $Mobile_number, $Dob){
        $this->db->where(['First_name'=>$First_name, 'Last_name'=>$Last_name, 'Mobile_number'=>$Mobile_number, 'DoB'=>$Dob]);
        $query=$this->db->get('student');
        if($query->num_rows()>0){
            return $query->row();
        }   
    }
    public function Register_Parent($data2){
        return $this->db->insert('parent', $data2);
    }
    public function Register_Emergency($data3){
        return $this->db->insert('emergency', $data3);
    }
    public function Register_Medical($data4){
        return $this->db->insert('medicalinfo', $data4);
    }
    public function RetrieveCourse(){
        return $this->db->get('course')->result();
    }
    public function FetchAllStudent(){
        $id=$this->input->post('Id');
        $data=$this->db->query('SELECT * FROM student s, course c, parent p, emergency e, medicalinfo m WHERE s.Course_id=c.Course_id AND s.Student_id=p.Student_id AND s.Student_id=e.Student_id AND s.Student_id=m.Student_id AND s.Student_id='.$id);
        return $data->row();
    }
    public function Update_student($data1){
        $this->db->where('Student_id', $data1['Student_id']);
        return $this->db->update('student', $data1);
    }
    
    public function Updat_Parent($data2){
        $this->db->where('Student_id', $data2['Student_id']);
        return $this->db->update('parent', $data2);
    }
    public function Update_Emergency($data3){
        $this->db->where('Student_id', $data3['Student_id']);
        return $this->db->update('emergency', $data3);
    }

    public function Update_medicalinfo($data4){
        $this->db->where('Student_id', $data4['Student_id']);
        return $this->db->update('medicalinfo', $data4);
    }
    public function save_User($data){
        return $this->db->insert('users', $data);
    }
    public function SelectAllUser(){
        return $this->db->get('users');
    }
    public function SelectAllCourse(){
        return $this->db->get('course');
    }
    public function UpdateAcademicYear($current_year){
        $data=[
            'id'=>1,
            'Current_Academic_Year'=>$current_year
        ];
        return $this->db->update('system_config', $data);
    }
    public function AddCourse($data){
        return $this->db->insert('course', $data);
    }
    public function UpdateCourse($data){
        $this->db->where(['Course_id'=> $data['Course_id']]);
        return $this->db->query('UPDATE course SET Course_id="'.$data['Course_id'].'" , Course_name ="'.$data['Course_name'].'", Course_Instructor ="'.$data['Course_Instructor'].'" WHERE Course_id="'.$data['Course_id'].'"');
    }
    public function deleteUser(){
        $id =$this->input->post('userid');
     $this->db->where('user_id', $id);
     return $this->db->delete('users');
    }
    public function Update_user($data){
        $this->db->where('user_id', $data['user_id']);
        return $this->db->update('users', $data);
    }
    public function CheckUserPassword($currPass, $User_id){
        $this->db->select('Password');
        $this->db->where(['Password'=>$currPass, 'user_id'=>$User_id]);
        return $this->db->get('users')->row();
    }
     public function UpdatePassword($User_id, $newPass){
        $this->db->where('user_id', $User_id);
        return $this->db->query('UPDATE users SET Password="'.$newPass.'"');
    }
}
?>