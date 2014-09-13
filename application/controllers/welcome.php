<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
         if (isset($_GET['code']))
         {
             $this->facebook_ion_auth->login();
             if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
             {
                   header('Location:/?alert=facebooklogin');
                   exit();
             }

             header('Location:/');
         }
        if ($this->ion_auth->logged_in()) {
            header('location:/?/welcome/dashboard');
        }
        $this->load->view('welcome_message');
	}
    public function dashboard()
    {
    }
    
    public function facebookLogin()
    {
        $this->facebook_ion_auth->login();
    }
    
    public function register()
    {
        $this->load->library('ion_auth');
    }
    public function logout()
    {
        $this->ion_auth->logout();
        header('Location:/');
    }
    
    public function sendemail()
    {
        $this->load->library('email');
        $this->email->from('dhagen@tenminutegive.com', '10 Minute Give');
        $this->email->to('daniel.b.hagen@gmail.com');
        $this->email->subject('Testing');
        $timeround = time() - (date("i")*60 + date("s"))+(60*60)+(10*60);
        $this->email->message('Testing2'.' '.$timeround.' '.time());
        $this->email->add_custom_header('X-Mailgun-Deliver-By',date(DateTime::RFC2822, $timeround)); 
        //D, d M Y H:i:s O
        $this->email->add_custom_header('X-Mailgun-Drop-Message', 'yes'); 
        $this->email->send();
        echo $this->email->print_debugger();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */