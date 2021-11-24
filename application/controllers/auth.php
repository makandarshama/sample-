<?php
	/**
	 * 
	 */
	defined('BASEPATH') OR exit('No direct script access allowed');

	class auth extends CI_Controller
	{
		
		public function register()
		{

			//$this->load->controller('excel_import');
			//$this->cexcel_import->index();
			//$this->excel_import->fetch();
			$this->load->database();
			if(isset($_POST['register']))
			{

				$this->load->library('form_validation');

				$this->form_validation->set_rules('full_name','Full_name','required|min_length[2]|max_length[20]');

				$this->form_validation->set_rules('email','Email','required|valid_email');
				$this->form_validation->set_rules('password','Password','required|min_length[6]|max_length[10]');

				if($this->form_validation->run() == TRUE)
				{
					echo('arg1');
					echo('form validate');
				//$this->load->view('register');
					$formArray=array(
						'full_name' =>$_POST['full_name'] , 
						'email' =>$_POST['email'] , 
						'password' =>$_POST['password'] ,
						'created_on' =>date('Y-m-d H:i:s') , 
					);
					$this->db->insert('my_users',$formArray);
					$this->session->set_flashdata('msg','your account has been created successfully');
					redirect(base_url().'index.php/auth/register');


					
				}
			}
			//else{
   // echo "string";
				/*$this->load->model('auth_model');
				//$this->auth_model->insert($data);
				$formArray=array();
				$formArray['full_name'] =    $this->input->post('full_name');
				$formArray['email']     =    $this->input->post('email');
				$formArray['password']  =    $this->input->post('password');

				$formArray['created_on']=date('Y-m-d H:i:s');
				$this->auth_model->create($formArray);

				$this->session->set_flashdata('msg','your account has been created successfully');
				redirect(base_url().'index.php/auth/register');*/
      //  }
				$this->load->view('register');
			}

			

		}

		?>