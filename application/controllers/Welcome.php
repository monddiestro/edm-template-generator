<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->view('head.php');
		$this->load->view('selection.php');
		$this->load->view('plugins.php');
		$this->load->view('footer.php');
	}
	public function promo_template() {

		$header_title = $this->input->get('header_title');
		$header_img = $this->input->get('header_img');
		// promo 1
		$img_one = $this->input->get('img_one');
		$title_one = $this->input->get('title_one');
		$desc_one = $this->input->get('desc_one');
		$url_one = $this->input->get('url_one');
		// promo 2
		$img_two = $this->input->get('img_two');
		$title_two = $this->input->get('title_two');
		$desc_two = $this->input->get('desc_two');
		$url_two = $this->input->get('url_two');
		// promo 3
		$img_three = $this->input->get('img_two');
		$title_three = $this->input->get('title_two');
		$desc_three = $this->input->get('desc_two');
		$url_three = $this->input->get('url_two');

		if(empty($header_img)) {
			$data["template"] = "";
		} else {
			$data["template"] = $this->promo_boilerplate($header_title,$header_img,$img_one, $title_one,$desc_one,$url_one,$img_two,$title_two,$desc_two,$url_two,$img_three,$title_three,$desc_three,$url_three);
		}

		$this->load->view('head.php');
		$this->load->view('promo.php',$data);
		$this->load->view('plugins.php');
		$this->load->view('promo-script.php');
		$this->load->view('footer.php');

	}

	function promo_boilerplate($header_title,$header_img,$img_one, $title_one,$desc_one,$url_one,$img_two,$title_two,$desc_two,$url_two,$img_three,$title_three,$desc_three,$url_three) {

		$template = "";

		$template .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$template .= '<html xmlns="http://www.w3.org/1999/xhtml">';
		$template .= '<head>';
		$template .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
		$template .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
		$template .= '</head>';
		$template .= '<body style="margin:0; padding:10px 0 0 0;" bgcolor="#F8F8F8">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="600">';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 24px 32px;">';
		$template .= '<tr>';
		$template .= '<td align="left" valign="top" width="300">';
		$template .= '<!-- carmudi logo img-->';
		$template .= '<img width="106" src="https://i.imgur.com/qhcq6Tp.png" alt="Carmudi_Logo">';
		$template .= '</td>';
		$template .= '<td width="300" align="right" valign="top" >';
		$template .= '<span style="color:#fff;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important; line-height: normal;font-size: 20px;">';
		$template .= 'Promos';
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 32px;text-align: center;color: #FFFFFF;">';
		$template .= '<!-- header title -->';
		$template .= $header_title;
		$template .= '</span>';
		$template .= '</td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" >                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<!-- header image -->';
		$template .= '<img width="536" src="'.$header_img.'" alt="3car_Model">';
		$template .= '</td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" style="margin-bottom: 30px;">                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<!-- view all promos button -->';
		$template .= '<a href="https://www.carmudi.com.ph/newcars/promos/" style="cursor:pointer;width: 166px;height: 50px; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 20px;text-align: center; color:#006FC1;background: #FFFFFF;border-radius: 5px;text-decoration: none;padding: 14px 16px;">View All Promos</a>';
		$template .= '</td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="16" cellspacing="0" width="100%" style="padding-top: 16px">                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding-left: 32px;">';
		$template .= '<!-- first car promo image -->';
		$template .= '<img width="248" height="216" src="'.$img_one.'" alt="subaru">';
		$template .= '</td>';
		$template .= '<td valign="top" style="padding-right: 32px;"> ';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 26px;font-size: 20px;">';
		$template .= '<!-- promo title -->';
		$template .= $title_one;
		$template .= '</span>';
		$template .= '<span style="display:block;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 18px;padding-top: 12px;padding-bottom: 28px;">';
		$template .= '<!-- promo description -->';
		$template .= $desc_one;
		$template .= '</span>';
		$template .= '<!-- Avail promo button / insert link on (href="") tag -->';
		$template .= '<a href="'.$url_one.'" style="cursor:pointer;width: 125px;height: 50px;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal; font-size: 16px;text-align: center;color: #FFFFFF;background: #006FC1; border-radius: 5px;text-decoration:none;padding:17px 24px;">Avail Promo</a>';
		$template .= '</td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:32px">                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="border-bottom:1px solid #E1E1E1;">                                            ';
		$template .= '</td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="16" cellspacing="0" width="100%" >                               ';
		$template .= '<tr>';
		$template .= '<td valign="top" style="padding-left: 32px">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 26px;font-size: 20px;">';
		$template .= '<!-- promo title -->';
		$template .= $title_two;
		$template .= '</span>';
		$template .= '<span style="display:block;font-family:Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 18px;padding-top: 12px;padding-bottom: 28px;">';
		$template .= '<!-- promo description -->';
		$template .= $desc_two;
		$template .= '</span>';
		$template .= '<!-- Avail promo button / insert link on href tag -->';
		$template .= '<a href="'.$url_two.'" style="cursor:pointer;width: 125px;height: 50px;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal; font-size: 16px;text-align: center;color: #FFFFFF;background: #006FC1; border-radius: 5px;text-decoration:none;padding:17px 24px;">Avail Promo';
		$template .= '</a>';
		$template .= '</td>   ';
		$template .= '<td align="center" valign="top" style="padding-right: 32px;">';
		$template .= '<!-- second car promo image  -->';
		$template .= '<img width="248" height="216" src="'.$img_two.'" alt="nissan">';
		$template .= '</td>                                                                          ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:32px">                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="border-bottom:1px solid #E1E1E1;">                                            ';
		$template .= '</td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top" >';
		$template .= '<table border="0" cellpadding="16" cellspacing="0" width="100%" style="padding-bottom: 32px;">                                ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding-left: 32px;">';
		$template .= '<!-- last car promo image -->';
		$template .= '<img width="248" height="216" src="'.$img_three.'" alt="subaru">';
		$template .= '</td>';
		$template .= '<td valign="top" style="padding-right: 27px;">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 26px;font-size: 20px;">';
		$template .= '<!-- promo title -->';
		$template .= $title_three;
		$template .= '</span>';
		$template .= '<span style="display:block;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 18px;padding-top: 12px;padding-right: 32px;padding-bottom: 28px;">';
		$template .= '<!-- promo description -->';
		$template .= $desc_three;
		$template .= '</span>';
		$template .= '<!-- Avail promo button / insert link on (href="") tag -->';
		$template .= '<a href="'.$url_three.'" style="cursor:pointer;width: 125px;height: 50px;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal; font-size: 16px;text-align: center;color: #FFFFFF;background: #006FC1;border-radius: 5px;text-decoration:none;padding:17px 24px;">Avail Promo';
		$template .= '</a>';
		$template .= '</td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background: #F1F1F1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="5" cellspacing="0" width="100%" style="padding: 20px 60px;">';
		$template .= '<tr >';
		$template .= '<td align="center" valign="top" style="border-right:1px solid #363D41;">';
		$template .= '<a href="https://www.carmudi.com.ph/newcars/" style="cursor:pointer;color:#363D41 !important;font-size:18px;font-weight:bold;font-family:Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;">New Cars</a>';
		$template .= '</td>';
		$template .= '<td align="center" valign="top" style="border-right:1px solid #363D41;">';
		$template .= '<a href="https://www.carmudi.com.ph/cars/used/" style="cursor:pointer;color:#363D41 !important;font-size:18px;font-weight:bold;font-family:Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;">Used Cars</a>';
		$template .= '</td>';
		$template .= '<td align="center" valign="top" style="border-right:1px solid #363D41;">';
		$template .= '<a href="https://carmudi.com.ph/newcars/promos/" style="cursor:pointer;color:#363D41 !important;font-size:18px;font-weight:bold;font-family:Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;">View All Promos</a>';
		$template .= '</td>';
		$template .= '<td align="center" valign="top">';
		$template .= '<a href="https://www.carmudi.com.ph/contact/" style="cursor:pointer;color:#363D41 !important;font-weight:bold;font-family:Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-size:18px;">Contact Us</a>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" style="padding-top:12px;">';
		$template .= '<tr>';
		$template .= '<td align="center">';
		$template .= '<!-- please insert carmudi facebook link on (href="") tag -->';
		$template .= '<a href="https://www.facebook.com/CarmudiPH/" target="_blank" style="cursor:pointer;text-decoration:none;">';
		$template .= '<img src="https://i.imgur.com/GvxcSKF.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi twitter link on (href="") tag -->';
		$template .= '<a href="https://twitter.com/CarmudiPH" target="_blank" style="cursor:pointer;text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/QJzodYC.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi youtube link on (href="") tag -->';
		$template .= '<a href="https://www.youtube.com/channel/UCcKPdngyrJG4sjBBNn1n72g" target="_blank" style="cursor:pointer;text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/Ves9z8y.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi instagram link on (href="") tag -->';
		$template .= '<a href="https://www.instagram.com/carmudiph/" target="_blank" style="cursor:pointer;text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/HhXQZm5.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" >';
		$template .= '<!-- please insert carmudi app google play link on (href="") tag -->';
		$template .= '<a href="https://play.google.com/store/apps/details?id=com.carmudi.android&referrer=adjust_reftag%3Dc8q2ZnWsSmB6F%26utm_source%3DOn-site%26utm_campaign%3DFooterBannerPH%26utm_content%3DAppLaunch%26utm_term%3DCarmudiApp" target="_blank" style="cursor:pointer;text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/kSCG1lo.png" style="width: 125px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi app appstore link on (href="") tag -->';
		$template .= '<a href="https://itunes.apple.com/app/id949823961?mt=8" target="_blank" style="cursor:pointer;text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/QVFubVl.png" style="width: 125px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>                    ';
		$template .= '<tr style="background-color:#fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="40" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 18px;text-align: center;color: #363D41;">';
		$template .= '© Carmudi Philippines, 4F Mancor Corporate Center, 32nd Street Bonifacio Global City Taguig ';
		$template .= '</span> ';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:0 32px">                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="border-bottom:1px solid #E1E1E1;"></td>                                    ';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="40" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 25px;font-size: 16px;text-align: center;color: #919191;">';
		$template .= 'If you are seeing this email, you have subscribed from our newsletter. Want to stop receiving emails from us? Unsubscribe from our list.';
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</body>';
		$template .= '</html>';

		return $template;

	}
}	

