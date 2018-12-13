<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class Contacto extends CI_Controller{
	//constructor del controlador articulos
	public function __construct(){
		 parent::__construct();
	 }
	public function index(){
		if($this->input->post('submit_m')){
			$movil = $this->input->post('buscar');
			$datos = array('moviles' => $this->moviles_model->get_movil($movil),
					'marca' => $this->moviles_model->get_marca(),
					'procesador' => $this->moviles_model->get_procesador()
	 		);

				$this->load->view('catalogo_view',$datos);
		}else{ 
	 	$this->load->view('contacto_view');
	 }
	}
	 public function enviar_m() {
	
	 		include_once(FCPATH.'PHPMailer/src/PHPMailer.php');
  include_once(FCPATH.'PHPMailer/src/SMTP.php');
			$correoDestino = "ernestojosecg@gmail.com";
			$nombre = $this->input->post('name',TRUE);
			$mail = $this->input->post('email',TRUE);
			$mensaje = $this->input->post('text',TRUE);
			/*$fecha = time();$fechaFormateada = date("j/n/Y", $fecha);
			$headers =
			'From: ' . $mail . "\r\n".
			'Reply-To: ' . $correoDestino. "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			$asunto = "Contacto a MovilUca";
			//Formateo el cuerpo del correo
			$cuerpo = "Enviado por: " . $nombre . ", a las " . $fecha . "";
			$cuerpo .= "E-mail: " . $mail . "";
			$cuerpo .= "Comentario: " . $mensaje;
			mail($correoDestino, $asunto, $cuerpo,$headers);
			echo "hola";
			*/
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = $mail;
			$mail->addAddress($correoDestino);
			$mail->Subject = $asunto;
			$mail->msgHTML($mensaje);
		
	}
}?>