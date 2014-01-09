<?php

namespace Acme\GraphicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Type\AbstractType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;

class ControlController extends Controller{
	
	/**
	* @Template()
	*/
	public function indexAction(){
		return array();
    }
	
	/**
	* @Template()
	*/
	public function contactAction(){
	if($_POST){
		$header = 'From: '  . $_POST['form']['name'] . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";
		$mensaje = "Cliente: " . $_POST['form']['name'] . "\r\n";
		$mensaje .= "Mensaje: " . $_POST['form']['message'] . " \r\n";
		$mensaje .= "Telefono: " . $_POST['form']['phone'] . " \r\n";
		$mensaje .= "E-mail: " . $_POST['form']['email'] . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());
		$para = 'graficavgg@gmail.com';
		$asunto = 'CONSULTA DESDE LA WEB';
		if(mail($para, $asunto, $mensaje, $header)){
			$success = true;
		} else {
			$success = false;
		}	
	}
        $form = $this->createFormBuilder()
			->add('name', 'text', array('label'=>'Nombre', 'required'=>true))
			->add('phone', 'number', array('label'=>'Telefono', 'required'=>true))
			->add('email', 'email', array('label'=>'E-mail', 'required'=>false))
			->add('message', 'textarea', array('label'=>'Mensaje', 'required'=>true))
			->getForm();
		return array('form' => $form->createView(),);
    }
	
	/**
	* @Template()
	*/
	public function invoiceAction(){
	if($_POST){		
		$header = 'From: '  . $_POST['form']['name'] . ' ' .$_POST['form']['lastName'].  " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";
		$mensaje .= "PEDIDO: " . $_POST['form']['amount'] . ' TALONARIOS DE ' .$_POST['form']['type']. " \r\n";
		$mensaje = "Titular: " . $_POST['form']['name'] . ' ' .$_POST['form']['lastName']. "\r\n";
		$mensaje .= "Cuit: " . $_POST['form']['cuit'] . " \r\n";
		$mensaje .= "N° Ing. Brutos: " . $_POST['form']['ingbrutos'] . " \r\n";
		
		$mensaje .= "Fecha Inicio Act: " . $_POST['form']['initdate'] . " \r\n";
		$mensaje .= "Ubicacion: " . $_POST['form']['direction'] . ' - ' .$_POST['form']['city']. " \r\n";	
		$mensaje .= "Telefono: " . $_POST['form']['phone'] . " \r\n";
		$mensaje .= "email: " . $_POST['form']['email'] . " \r\n";
		$mensaje .= "Informacion: " . $_POST['form']['info'] . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());
		$para = 'graficavgg@gmail.com';
		$asunto = 'SOLICITUD DE FACTURAS';
		if(mail($para, $asunto, $mensaje, $header)){
			$success = true;
		} else {
			$success = false;
		}
	}
        $form = $this->createFormBuilder()
			->add('type','choice', array('choices' => array('Factura_C' => 'Factura C', 'Factura_A' => 'Factura A'), 'required'=>true, 'empty_value' => 'Seleccione una opcion'))
			->add('amount','number', array('label'=>'Cantidad Talonarios', 'required'=>true))
			->add('cuit','number', array('label'=>'CUIT', 'required'=>true))
			->add('ingbrutos','number', array('label'=>'Ingresos Brutos', 'required'=>true))
			->add('initdate','text', array('label'=>'Fecha Inicio Act.', 'required'=>true))
			->add('name','text', array('label'=>'Nombre', 'required'=>true))
			->add('lastName','text', array('label'=>'Apellido', 'required'=>true))
			->add('city','text', array('label'=>'Ciudad', 'required'=>true))
			->add('direction','text', array('label'=>'Direccion', 'required'=>true))
			->add('phone','number', array('label'=>'Telefono Fijo', 'required'=>true))
			->add('email','email', array('label'=>'E-mail', 'required'=>false))			
			->add('info','textarea', array('label'=>'Informacion', 'required'=>false))
			->getForm();
		return array('form' => $form->createView(),);
    }
	
	/**
	* @Template()
	*/
	public function promotionAction(){
		return array();
    }
	
	/**
	* @Template()
	*/
	public function baptismAction(){
		$num =  $this->getDesignNumber('baptism');
		$path = '/Symfony/web/bundles/acmegraphic/img/galleries/baptism/tarjeta_bautismo';
		$name = 'Tarjeta de Bautismo';
		return $this->render('AcmeGraphicBundle:Control:showImages.html.php', array('numFiles' => $num, 'nameCard' => $name, 'dir' => $path));
	}
	
	/**
	* @Template()
	*/
	public function communionAction(){
		$num =  $this->getDesignNumber('communion');
		$path = '/Symfony/web/bundles/acmegraphic/img/galleries/communion/tarjeta_comunion';
		$name = 'Tarjeta de Comunion';
		return $this->render('AcmeGraphicBundle:Control:showImages.html.php', array('numFiles' => $num, 'nameCard' => $name, 'dir' => $path));
	}
	
	/**
	* @Template()
	*/
	public function weddingAction(){		
		$num =  $this->getDesignNumber('wedding');
		$path = '/Symfony/web/bundles/acmegraphic/img/galleries/wedding/tarjeta_casamiento';
		$name = 'Tarjeta de Casamiento';
		return $this->render('AcmeGraphicBundle:Control:showImages.html.php', array('numFiles' => $num, 'nameCard' => $name, 'dir' => $path));
	}
	
	function getDesignNumber($page){
		$dir = __dir__;
		$dirBase = substr($dir, 0, -33);
		$lastDir = 'web\bundles\acmegraphic\img\galleries\\' .$page. '\\';
		$finalDir = $dirBase . $lastDir;
		$finder = new Finder();
		$number = iterator_count($finder->files()->in($finalDir));
		$number = $number / 2;
		return $number;
	}
}



