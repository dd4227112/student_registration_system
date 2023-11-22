<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent:: __construct();
		$this->load->model('User');
		date_default_timezone_set("Africa/Dar_es_Salaam");
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function home_page(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['AllStudent']=$this->User->AllStudent($current_year);
		$data['LongCourseStudent']=$this->User->LongcourseStudent($current_year);
		$data['ShortCourseStudent']=$this->User->ShortcourseStudent($current_year);
		$data['NormalCourseStudent']=$this->User->NormalcourseStudent($current_year);
		$data['MamaCourseStudent']=$this->User->MamacourseStudent($current_year);
		$data['BoardingStudent']=$this->User->BoardingStudent($current_year);
		$data['DayStudent']=$this->User->DayStudent($current_year);
		$this->load->view('index', $data);
	}
	public function Login(){
		$username=$this->input->post('Username');
		$password=md5($this->input->post('Password'));
		$user_detail=$this->User->Check_user($username, $password);
		if($user_detail){
			$session_data=[
				   'id'=>$user_detail->user_id,
				   'name'=>$user_detail->First_name." ".$user_detail->Last_name,
				   'role'=>$user_detail->Role
			   ];
			   $this->session->set_userdata($session_data);
				   return redirect('Home/home_page');
		   }else{
			   $this->session->set_flashdata("message","Username or Password is Incorrect");
				   return redirect('Home/index');
		   }
	}
	public function Forget_Password(){
		$this->load->view('forgetPassword');
	}
	public function Logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('role');
		return redirect('Home/index');
	}
	public function Register_Student(){
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->view('register_student', $data);
	}
	public function Save_student(){
		$data1=[
			'First_name'=>$this->input->post('First_name'),
			'Middle_name'=>$this->input->post('Middle_name'),
			'Last_name'=>$this->input->post('Last_name'),
			'sex'=>$this->input->post('sex'),
			'DoB'=>$this->input->post('DoB'),
			'Mobile_number'=>$this->input->post('Mobile_number'),
			'ward'=>$this->input->post('ward'),
			'District'=>$this->input->post('District'),
			'Region'=>$this->input->post('Region'),
			'Country'=>$this->input->post('Country'),
			'Organization'=>$this->input->post('Organization'),
			'Course_id'=>$this->input->post('Course_id'),
			'CourseNature'=>$this->input->post('CourseNature'),
			'Course_duration'=>$this->input->post('Course_duration'),
			'Level'=>$this->input->post('Level'),
			'Resident'=>$this->input->post('Resident'),
			'Room_Number'=>$this->input->post('Room_Number'),
			'Description'=>$this->input->post('Description'),
			'Academic_year'=>date('Y')			
		];
		$First_name=$this->input->post('First_name');
		$Last_name=$this->input->post('Last_name');
		$Middle_name=$this->input->post('Last_name');
		$Mobile_number=$this->input->post('Mobile_number');
		$Dob=$this->input->post('DoB');
		$this->User->Register_Student($data1);
		$getId=$this->User->Check_Id($First_name, $Middle_name, $Last_name, $Mobile_number, $Dob);
		$id=$getId->Student_id;
		$data2=[
			'Firstname'=>$this->input->post('Firstname'),
			'Middlename'=>$this->input->post('Middlename'),
			'Lastname'=>$this->input->post('Lastname'),
			'Email'=>$this->input->post('Email'),
			'Mobilenumber'=>$this->input->post('Mobilenumber'),
			'Relationship'=>$this->input->post('Relationship'),
			'Student_id'=>$id
		];
		$this->User->Register_Parent($data2);
		$data3=[
			'Full_name'=>$this->input->post('Full_name'),
			'Phone'=>$this->input->post('Phone'),
			'Relationships'=>$this->input->post('Relationships'),
			'Student_id'=>$id
		];
		$this->User->Register_Emergency($data3);
		$data4=[
			'Physician_name'=>$this->input->post('Physician_name'),
			'Phonenumber'=>$this->input->post('Phonenumber'),
			'Allegies'=>$this->input->post('Allegies'),
			'Medication'=>$this->input->post('Medication'),
			'Student_id'=>$id
		];

		$this->User->Register_Medical($data4);
		$this->session->set_flashdata("success_message","Student's Information saved successfully");
		return redirect('Home/Register_Student');
	}
	public function All(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['All']=$this->User->getAllStudent($current_year);
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->View('All', $data);
	}
	public function Longcourse(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['All']=$this->User->getlongcourseStudent($current_year);
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->View('LongCourse', $data);
	}
	public function Shortcourse(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['All']=$this->User->getshortcourseStudent($current_year);
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->View('Shortcourse', $data);
	}
	public function Mormalcourse(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['All']=$this->User->getnormalcourseStudent($current_year);
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->View('Normalcourse', $data);
	}
	public function Mamacourse(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['All']=$this->User->getmamacourseStudent($current_year);
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->View('Mamacourse', $data);
	}
	public function Boarding(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['All']=$this->User->getboardingStudent($current_year);
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->View('Boarding', $data);
	}
	public function Day(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data['current_year']=$academic->Current_Academic_year;
		$data['All']=$this->User->getdayStudent($current_year);
		$data['courses']=$this->User->RetrieveCourse();
		$this->load->View('Day', $data);
	}
	public function Courses(){
		$data['All_course']=$this->User->SelectAllCourse();
		$this->load->View('Courses', $data);
	}
	public function Settings(){
		$data['All_user']=$this->User->SelectAllUser();
		$this->load->View('Settings', $data);
	}
	public function FetchStudent(){
		$data=$this->User->FetchAllStudent();
		echo json_encode($data);
	}
	public function Edit_student(){
		$academic=$this->db->query('SELECT Current_Academic_year FROM system_config')->row();
		$current_year=$academic->Current_Academic_year;
		$data1=[
			'First_name'=>$this->input->post('First_name'),
			'Middle_name'=>$this->input->post('Middle_name'),
			'Last_name'=>$this->input->post('Last_name'),
			'sex'=>$this->input->post('sex'),
			'DoB'=>$this->input->post('DoB'),
			'Mobile_number'=>$this->input->post('Mobile_number'),
			'Status'=>$this->input->post('Status'),
			'ward'=>$this->input->post('ward'),
			'District'=>$this->input->post('District'),
			'Region'=>$this->input->post('Region'),
			'Country'=>$this->input->post('Country'),
			'Organization'=>$this->input->post('Organization'),
			'Course_id'=>$this->input->post('Course_id'),
			'CourseNature'=>$this->input->post('CourseNature'),
			'Course_duration'=>$this->input->post('Course_duration'),
			'Level'=>$this->input->post('Level'),
			'Resident'=>$this->input->post('Resident'),
			'Room_Number'=>$this->input->post('Room_Number'),
			'Student_id'=>$this->input->post('Student_id'),
			'Description'=>$this->input->post('Description'),			
			'Academic_year'=>$current_year
		];
		$this->User->Update_student($data1);
		$data2=[
			'Firstname'=>$this->input->post('Firstname'),
			'Middlename'=>$this->input->post('Middlename'),
			'Lastname'=>$this->input->post('Lastname'),
			'Email'=>$this->input->post('Email'),
			'Mobilenumber'=>$this->input->post('Mobilenumber'),
			'Relationship'=>$this->input->post('Relationship'),
			'Student_id'=>$this->input->post('Student_id'),
			
		];
		$this->User->Updat_Parent($data2);
		$data3=[
			'Full_name'=>$this->input->post('Full_name'),
			'Phone'=>$this->input->post('Phone'),
			'Relationships'=>$this->input->post('Relationships'),
			'Student_id'=>$this->input->post('Student_id')
		];
		$this->User->Update_Emergency($data3);
		$data4=[
			'Physician_name'=>$this->input->post('Physician_name'),
			'Phonenumber'=>$this->input->post('Phonenumber'),
			'Allegies'=>$this->input->post('Allegies'),
			'Medication'=>$this->input->post('Medication'),
			'Student_id'=>$this->input->post('Student_id')
		];
		$this->User->Update_medicalinfo($data4);
		?>
			<script type="text/javascript">
			alert("Student's Information updated successfully");
			window.location='<?php echo base_url();?>index.php/Home/home_page';
			</script>
			<?php
	}
	public function Save_User(){
		$data=[
			'First_name'=>$this->input->post('First_name'),
			'Last_name'=>$this->input->post('Last_name'),
			'Username'=>$this->input->post('Username'),
			'Password'=>md5($this->input->post('Password'))
		];
		if($this->User->save_User($data)){
			$this->session->set_flashdata("success_message","Admin added successfully");
			return redirect('Home/AddUser');
		}
	}
	public function AddUser(){
		$this->load->view('add_user');
	}
	public function Save_currentyear(){
		$current_year=$this->input->post('year');
		$this->User->UpdateAcademicYear($current_year);
		$sms="Success!!!";
		echo json_encode($sms);
	}
	public function AddCourse()	{
		$data=[
			'Course_id'=>$this->input->post('course_id'),
			'Course_name'=>$this->input->post('course_name'),
			'Course_Instructor'=>$this->input->post('Course_Instructor')
		];
		$this->User->AddCourse($data);
		$sms="Couse added successfully!!";
		echo json_encode($sms);
	}
	public function UpdateCourse(){
		$data=[
			'Course_id'=>$this->input->post('course_id'),
			'Course_name'=>$this->input->post('course_name'),
			'Course_Instructor'=>$this->input->post('Course_Instructor')
		];
		$this->User->UpdateCourse($data);
		$sms="Couse updated successfully!!";
		echo json_encode($sms);
	}
	public function deleteCourse(){
		$Course_id=$this->input->get('id');
		$this->db->query('DELETE FROM course WHERE Course_id="'.$Course_id.'"');
		echo " Course deleted";
	}
	public function SelectCourse(){
		$id=$this->input->post('course_id');
		$data=$this->db->query('SELECT * FROM course WHERE Course_id="'.$id.'"')->row();
		echo json_encode($data);
	}
	public function deleteUser(){
		$this->User->deleteUser();
		$data="User deleted";
		echo $data;
	}
	public function getUser(){
		$user_id=$this->input->post('user');
		$userdata= $this->db->query('SELECT * FROM users  WHERE user_id="'.$user_id.'"')->row();
		echo json_encode($userdata);
	}
	public function resetPassword(){
		$userid=$this->input->post('user');
		$pass=$this->db->query('SELECT Username FROM users WHERE user_id="'.$userid.'"')->row();
	$this->db->query('UPDATE users SET Password="'.md5($pass->Username).'" WHERE user_id="'.$userid.'"');
		$sms="Password reset successfully";
		echo json_encode($sms);
	}
	public function Updateuser(){
		$data=[
			'user_id' =>$this->input->post('user_id'),
			'First_name' =>$this->input->post('First_name'),
			'Last_name'=>$this->input->post('Last_name'),
			'Username' =>$this->input->post('Username')
		];
		$this->User->Update_user($data);
		$note="Information updated";
		// $note=$data['Last_name'];
		echo json_encode($note);
	}
	public function ChangePassword(){
		$this->load->view('changePassword');
	}
	public function Save_Password(){
		$currPass=md5($this->input->post('Current_Password'));
		$newPass=md5($this->input->post('New_Password'));
		$User_id=$this->session->userdata('id');
		if($current=$this->User->CheckUserPassword($currPass, $User_id)){
			if($newPass==$current->Password){
				$this->session->set_flashdata("message","Enter new different password");
				return redirect('Home/ChangePassword');
			}
			$this->User->UpdatePassword($User_id, $newPass);
			?> 
			<script>
				alert('Your password has changed successfully\n Please log in again to continue');
				window.location="<?php echo base_url();?>index.php/Home/Logout";
			</script>
			<?php 
		}
		else{
			$this->session->set_flashdata("message","Wrong current password");
			return redirect('Home/ChangePassword');
		}
	}
	public function getCurrentYear(){
		$setting =  $this->db->get('system_config')->row();
		echo json_encode($setting);
	}
}
?>