<?php namespace App\Controllers;

class ContactForm extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);

		if($this->request->getMethod() == 'post') {

			// validation

			$rules = [
				'title' => 'required',
				'firstName' => 'required|min_length[4]|max_length[20]',
				'lastName' => 'required|min_length[4]|max_length[30]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'phone' => 'required|min_length[11]|max_length[11]|numeric',
				'category' => 'required',
			];

			if(! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {

				$data = [
					'title' => $this->request->getVar('title'),
					'firstName' => $this->request->getVar('firstName'),
					'lastName' => $this->request->getVar('lastName'),
					'email' => $this->request->getVar('email'),
					'phone' => $this->request->getVar('phone'),
					'problem' => $this->request->getVar('problem'),
				];

				$this->sendMail($data);

				session()->set($data);

				return redirect()->to('/success');
			}

		}
		

		// render html code

		echo view('templates/header', $data);
		echo view('contact-form');
		echo view('templates/footer');
	}

	private function sendMail($data)
	{

		$title 		= $data['title'];
		$firstName 	= $data['firstName'];
		$lastName 	= $data['lastName'];
		$phone 		= $data['phone'];
		$problem 	= $data['problem'];
		$emailTo 	= $data['email'];

		$email = new \SendGrid\Mail\Mail(); 
		$email->setFrom("lukpro95@gmail.com", "TechService");
		$email->setSubject("Thank you for submitting our form!");
		$email->addTo($emailTo, $firstName);
		$email->addContent(
			"text/plain", 
			"Dear $title $firstName $lastName,

			This email message is the official confirmation that your request about your problem has been successfully sent.
			It will reviewed by one of our Engineers as soon as possible.

			You may be contacted by us if the further information is needed.

			Your mobile phone contact: $phone
			Submitted problem: $problem

			Kind Regards,
			TechService"
		);
		$email->addContent(
			"text/html", 
			"
				Dear <strong>$title $firstName $lastName</strong>, <br><br>

				This email message is the official confirmation that your request about your problem has been successfully sent. <br>
				It will reviewed by one of our Engineers as soon as possible. <br><br>

				You may be contacted by us if the further information is needed. <br><br>

				Your mobile phone contact: <strong>$phone</strong> <br>
				Submitted problem: <strong>$problem</strong><br><br>

				Kind Regards, <br>
				<strong>TechService</strong>

			"
		);
		
		$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));

		try {
			$response = $sendgrid->send($email);
		} catch (Exception $e) {
			echo 'Caught exception: '. $e->getMessage() ."\n";
		}
	}
	
	public function success() 
	{
		$data = [];

		// deleting session in attempt to refresh the success page
		session()->destroy();

		echo view('templates/header', $data);
		echo view('success');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
