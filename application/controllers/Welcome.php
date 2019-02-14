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
		$header_url = $this->input->get('header_url');
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
		$img_three = $this->input->get('img_three');
		$title_three = $this->input->get('title_three');
		$desc_three = $this->input->get('desc_three');
		$url_three = $this->input->get('url_three');

		if(empty($header_img)) {
			$data["template"] = "";
		} else {
			$data["template"] = $this->promo_boilerplate($header_title,$header_img,$header_url,$img_one, $title_one,$desc_one,$url_one,$img_two,$title_two,$desc_two,$url_two,$img_three,$title_three,$desc_three,$url_three);
		}

		$this->load->view('head.php');
		$this->load->view('promo.php',$data);
		$this->load->view('plugins.php');
		$this->load->view('promo-script.php');
		$this->load->view('footer.php');

	}

	function promo_boilerplate($header_title,$header_img,$header_url,$img_one, $title_one,$desc_one,$url_one,$img_two,$title_two,$desc_two,$url_two,$img_three,$title_three,$desc_three,$url_three) {

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
		$template .= '<tr style="background-color: #fff">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 24px 32px;">';
		$template .= '<tr>';
		$template .= '<td align="left" valign="top" width="300">';
		$template .= '<!-- carmudi logo img-->';
		$template .= '<img width="156" src="https://i.imgur.com/6VH1ojK.png" alt="Carmudi_Logo">';
		$template .= '</td>';
		$template .= '<td width="300" align="right" valign="top" >';
		$template .= '<span style="color:#006FC1; text-transform:uppercase; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important; line-height: normal;font-size: 18px;font-weight:bold;">';
		$template .= 'Promos';
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >     ';                          
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 32px;text-align: center;color: #FFFFFF;">';
		$template .= '<!-- header title -->';
		$template .= $header_title;
		$template .= '</span>';
		$template .= '</td> ';                                   
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" >    ';                           
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<!-- header image -->';
		$template .= '<img width="536" src="'.$header_img.'" alt="3car_Model">';
		$template .= '</td>     ';                               
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" style="margin-bottom: 30px;">     ';                          
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<!-- view all promos button -->';
		$template .= '<a href="'.$header_url.'" style="cursor:pointer;width: 166px;height: 50px; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 20px;text-align: center; color:#006FC1;background: #FFFFFF;';
		$template .= 'border-radius: 5px;text-decoration: none;padding: 14px 16px;">View Promo</a>';
		$template .= '</td> ';                                   
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="16" cellspacing="0" width="100%" style="padding-top: 16px">  ';                             
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
		$template .= '<span style="color:#363d41;display:block;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 18px;padding-top: 12px;padding-bottom: 16px;">';
		$template .= '<!-- promo description -->';
		$template .= $desc_one;
		$template .= '</span>';
		$template .= '<span style="display: block;padding: 17px 0;">';
		$template .= '<!-- Avail promo button / insert link on (href="") tag -->';
		$template .= '<a href="'.$url_one.'" style="cursor:pointer;width: 125px;height: 50px;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal; font-size: 16px;text-align: center;color: #FFFFFF;background: #006FC1;';
		$template .= 'border-radius: 5px;text-decoration:none;padding:17px 24px;">Avail Promo';
		$template .= '</a>';
		$template .= '</span>';
		$template .= '</td> ';                                   
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:32px">';                               
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="border-bottom:1px solid #E1E1E1;">  ';                                          
		$template .= '</td> ';                                   
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="16" cellspacing="0" width="100%" > ';                              
		$template .= '<tr>';
		$template .= '<td valign="top" style="padding-left: 32px">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 26px;font-size: 20px;">';
		$template .= '<!-- promo title -->';
		$template .= $title_two;
		$template .= '</span>';
		$template .= '<span style="color:#363d41;display:block;font-family:Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 18px;padding-top: 12px;padding-bottom: 16px;">';
		$template .= '<!-- promo description -->';
		$template .= $desc_two;
		$template .= '</span>';
		$template .= '<span style="display: block;padding: 17px 0;">';
		$template .= '<!-- Avail promo button / insert link on href tag -->';
		$template .= '<a href="'.$url_two.'" style="cursor:pointer;width: 125px;height: 50px;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal; font-size: 16px;text-align: center;color: #FFFFFF;background: #006FC1;';
		$template .= 'border-radius: 5px;text-decoration:none;padding:17px 24px;">Avail Promo';
		$template .= '</a>';
		$template .= '</span>';
		$template .= '</td>  '; 
		$template .= '<td align="center" valign="top" style="padding-right: 32px;">';
		$template .= '<!-- second car promo image  -->';
		$template .= '<img width="248" height="216" src="'.$img_two.'" alt="nissan">';
		$template .= '</td>  ';                                                                        
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:32px">  ';                             
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="border-bottom:1px solid #E1E1E1;">   ';                                         
		$template .= '</td>  ';                                  
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top" >';
		$template .= '<table border="0" cellpadding="16" cellspacing="0" width="100%" style="padding-bottom: 32px;">  ';                              
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
		$template .= '<span style="color:#363d41;display:block;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 18px;padding-top: 12px;padding-right: 32px;padding-bottom: 16px;">';
		$template .= '<!-- promo description -->';
		$template .= $desc_three;
		$template .= '</span>';
		$template .= '<span style="display: block;padding: 17px 0;">';
		$template .= '<!-- Avail promo button / insert link on (href="") tag -->';
		$template .= '<a href="'.$url_three.'" style="cursor:pointer;width: 125px;height: 50px;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal; font-size: 16px;text-align: center;color: #FFFFFF;background: #006FC1;';
		$template .= 'border-radius: 5px;text-decoration:none;padding:17px 24px;">Avail Promo';
		$template .= '</a>';
		$template .= '</span>  ';  
		$template .= '</td> ';                                   
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
		$template .= '<a href="https://www.twitter.com/CarmudiPH/" target="_blank" style="cursor:pointer;text-decoration:none;" >';
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
		$template .= '<tr>';
		$template .= '<td align="center">';
		$template .= '<!-- please insert carmudi app google play link on (href="") tag -->';
		$template .= '<a href="https://play.google.com/store/apps/details?id=com.carmudi.android&referrer=adjust_reftag%3Dc8q2ZnWsSmB6F%26utm_source%3DOn-site%26utm_campaign%3DFooterBannerPH%26utm_content%3DAppLaunch%26utm_term%3DCarmudiApp" target="_blank" style="cursor:pointer;text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/kSCG1lo.png" style="width: 125px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi app appstore link on (href="") tag -->';
		$template .= '<a href="https://itunes.apple.com/app/id949823961?mt=8" target="_blank" style="cursor:pointer;text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/QVFubVl.png" style="width: 125px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>    ';                
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
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:0 32px">     ';                          
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="border-bottom:1px solid #E1E1E1;"></td>        ';                            
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

	public function news_template() {

		$header_title = $this->input->get('header_title');
		$header_img = $this->input->get('header_img');
		$header_desc = $this->input->get('header_desc');
		$header_url = $this->input->get('header_url');
		// news one
		$news_one_img = $this->input->get('news_one_img');
		$news_one_title = $this->input->get('news_one_title');
		$news_one_desc = $this->input->get('news_one_desc');
		$news_one_url = $this->input->get('news_one_url');
		// news two
		$news_two_img = $this->input->get('news_two_img');
		$news_two_title = $this->input->get('news_two_title');
		$news_two_desc = $this->input->get('news_two_desc');
		$news_two_url = $this->input->get('news_two_url');
		// news three
		$news_three_title = $this->input->get('news_three_title');
		$news_three_desc = $this->input->get('news_three_desc');
		$news_three_url = $this->input->get('news_three_url');
		// features one
		$features_one_img = $this->input->get('features_one_img');
		$features_one_title = $this->input->get('features_one_title');
		$features_one_desc = $this->input->get('features_one_desc');
		$features_one_url = $this->input->get('features_one_url');
		// features twi
		$features_two_title = $this->input->get('features_two_title');
		$features_two_desc = $this->input->get('features_two_desc');
		$features_two_url = $this->input->get('features_two_url');
		// tips and advice
		$tips_one_img = $this->input->get('tips_one_img');
		$tips_one_title = $this->input->get('tips_one_title');
		$tips_one_desc = $this->input->get('tips_one_desc');
		$tips_one_url = $this->input->get('tips_one_url');
		// tips and advice
		$tips_two_title = $this->input->get('tips_two_title');
		$tips_two_desc = $this->input->get('tips_two_desc');
		$tips_two_url = $this->input->get('tips_two_url');


		if(empty($header_title)) {
			$data["template"] = "";
		} else {
			$data["template"] = $this->news_boilerplate($header_title,$header_img,$header_desc,$header_url,$news_one_img,$news_one_title,$news_one_desc,$news_one_url,$news_two_img,$news_two_title,$news_two_desc,$news_two_url,$news_three_title,$news_three_desc,$news_three_url,$features_one_img,$features_one_title,$features_one_desc,$features_one_url,$features_two_title,$features_two_desc,$features_two_url,$tips_one_img,$tips_one_title,$tips_one_desc,$tips_one_url,$tips_two_title,$tips_two_desc,$tips_two_url);
		}

		$this->load->view('head.php');
		$this->load->view('news.php',$data);
		$this->load->view('plugins.php');
		$this->load->view('news-script.php');
		$this->load->view('footer.php');

	}

	function news_boilerplate($header_title,$header_img,$header_desc,$header_url,$news_one_img,$news_one_title,$news_one_desc,$news_one_url,$news_two_img,$news_two_title,$news_two_desc,$news_two_url,$news_three_title,$news_three_desc,$news_three_url,$features_one_img,$features_one_title,$features_one_desc,$features_one_url,$features_two_title,$features_two_desc,$features_two_url,$tips_one_img,$tips_one_title,$tips_one_desc,$tips_one_url,$tips_two_title,$tips_two_desc,$tips_two_url) {

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
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="22" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td width="300" align="left" valign="top" style="padding-left:32px;">';
		$template .= '<!-- carmudi insider logo -->';
		$template .= '<img width="128" src="https://i.imgur.com/9xA8sc4.png" alt="Carmudi_Logo">';
		$template .= '</td>';
		$template .= '<td width="300" align="right" valign="top" style="padding-right:32px;color:#C4C4C4;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important; line-height: 28px;font-size: 18px;font-weight:bold;">';
		$template .= '<!--Insert Date here -->';
		$template .= '[currentmonth] [currentdaynumber], [currentyear]';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="40" cellspacing="0" width="100%" >                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding:40px 80px;">';
		$template .= '<span style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 32px;text-align: center;color: #FFFFFF;">';
		$template .= '<!--Header Title --> ';
		$template .= $header_title;
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" >                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<!-- header image -->';
		$template .= '<img width="600" height="255" src="'.$header_img.'" alt="" style="object-fit: cover;object-position: 50% 50%;">';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding: 32px 80px;">';
		$template .= '<span style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: normal;font-size: 20px;text-align: center;color: #FFFFFF;">';
		$template .= '<!-- header description -->';
		$template .= $header_desc;
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color: #006FC1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" style="padding-bottom:32px;" >                               ';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top">';
		$template .= '<!-- please insert link/url on (href="") tag for read more button -->';
		$template .= '<a href="'.$header_url.'" style="width: 150px;height: 58px; font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 18px;text-align: center; color:#006FC1;background: #FFFFFF;border-radius: 5px;text-decoration: none;padding: 14px 24px;">Read more</a>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<!-- News -->';
		// if both no content
		if(!empty($news_one_img) || !empty($news_two_img)) {
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td valign="top" style="color:#C4C4C4;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important; line-height: 28px;font-size: 18px;font-weight:bold;">';
		$template .= 'NEWS';
		$template .= '</td>';
		$template .= '</tr>';
		}
		// start
		if(!empty($news_one_img)) {
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding:0px 32px;">';
		$template .= '<!-- News first image  -->';
		$template .= '<img width="536" height="255" src="['.$news_one_img.']" alt="" style="object-fit: cover;object-position: center;">';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;font-size: 24px;color: #363D41;padding-bottom:16px;">';
		$template .= '<!-- News title -->';
		$template .= $news_one_title;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 32px;font-size: 20px;color: #363D41;padding:0 32px;">';
		$template .= '<!-- News description -->';
		$template .= $news_one_desc;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding-bottom:48px;">';
		$template .= '<!-- please insert link/url on (href="") tag for read more button -->';
		$template .= '<a href="'.$news_one_url.'" style="width: 150px;height: 58px; font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 18px;text-align: center; color:#FFFFFF;background: #006FC1 ;border-radius: 5px;text-decoration: none;padding: 14px 24px;">Read more</a>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		}
		// end
		// start
		if(!empty($news_two_img)) {
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding:0px 32px;">';
		$template .= '<!-- second news image -->';
		$template .= '<img width="536" height="255" src="'.$news_two_img.'" alt="" style="object-fit: cover;object-position: center;">';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;font-size: 24px;color: #363D41;padding-bottom:16px;">';
		$template .= '<!-- news title -->';
		$template .= $news_two_title;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 32px;font-size: 20px;color: #363D41;padding:0 32px;">';
		$template .= '<!-- news description -->';
		$template .= $news_two_desc;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top"  style="padding-bottom:48px;">';
		$template .= '<!-- please insert link/url on (href="") tag for read more button -->';
		$template .= '<a href="'.$news_two_url.'" style="width: 150px;height: 58px; font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 18px;text-align: center; color:#FFFFFF;background: #006FC1 ;border-radius: 5px;text-decoration: none;padding: 14px 24px;">Read more</a>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		}
		// end
		if(!empty($news_one_img) && !empty($news_two_img)) {
			$template .= '<tr style="background-color: #fff;">';
			$template .= '<td align="center" valign="top">';
			$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:0 32px">';
			$template .= '<tr>';
			$template .= '<td align="center" valign="top" style="border-bottom:1px solid #E1E1E1;"></td>';
			$template .= '</tr>';
			$template .= '</table>';
			$template .= '</td>';
			$template .= '</tr>';
		}
		$template .= '<!-- Features-->';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td valign="top" style="color:#C4C4C4;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important; line-height: 28px;font-size: 18px;font-weight:bold;">';
		$template .= 'FEATURES';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding:0px 32px;">';
		$template .= '<!-- features image -->';
		$template .= '<img width="536" height="255" src="'.$features_one_img.'" alt="" style="object-fit: cover;object-position: center;">';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;font-size: 24px;color: #363D41;padding-bottom:16px;">';
		$template .= '<!-- features title -->';
		$template .= $features_one_title;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 32px;font-size: 20px;color: #363D41;padding:0 32px;">';
		$template .= '<!-- features description -->';
		$template .= $features_one_desc;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding-bottom:48px;">';
		$template .= '<!-- please insert link/url on (href="") tag for read more button -->';
		$template .= '<a href="'.$features_one_url.'" style="width: 150px;height: 58px; font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 18px;text-align: center; color:#FFFFFF;background: #006FC1 ;border-radius: 5px;text-decoration: none;padding: 14px 24px;">Read more</a>';
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
		$template .= '<!-- Tips and Advice-->';
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td valign="top" style="color:#C4C4C4;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important; line-height: 28px;font-size: 16px;font-weight:bold;">';
		$template .= 'TIPS & ADVICE';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding:0px 32px;">';
		$template .= '<!-- tips and advice image -->';
		$template .= '<img width="536" height="255" src="'.$tips_one_img.'" alt="" style="object-fit: cover;object-position: center;">';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;font-size: 24px;color: #363D41;padding-bottom:16px;">';
		$template .= '<!-- tips and advice title -->';
		$template .= $tips_one_title;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" align="center" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 32px;font-size: 18px;color: #363D41;padding:0 32px;">';
		$template .= '<!-- tips and advice description -->';
		$template .= $tips_one_desc;
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding-bottom:48px;">';
		$template .= '<!-- please insert link/url on (href="") tag for read more button -->';
		$template .= '<a href="'.$tips_one_desc.'" style="width: 150px;height: 58px; font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: normal;font-size: 18px;text-align: center; color:#FFFFFF;background: #006FC1 ;border-radius: 5px;text-decoration: none;padding: 14px 24px;">Read more</a>';
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
		$template .= '<tr style="background-color: #fff;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="32" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 32px;font-size: 20px;color: #363D41;">';
		$template .= 'Read our latest posts';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" style="padding:0 32px;">';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 25px;font-size: 16px;color: #999999;text-transform: uppercase;">';
		$template .= 'News';
		$template .= '</span>';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 32px;font-size: 20px;color: #363D41;padding-top:5px;padding-bottom:5px;">';
		$template .= '<!-- News title -->';
		$template .= $news_three_title;
		$template .= '</span>';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 32px;font-size: 20px;color: #363D41;">';
		$template .= '<!-- News description -->';
		$template .= $news_three_desc;
		$template .= '<!-- please insert link/url on (href="") tag -->';
		$template .= '<a href="'.$news_three_url.'" style="color:#006FC1;text-decoration:underline;margin-left:8px;">Read more ></a> ';
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" style="padding:24 32px;">';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 25px;font-size: 16px;color: #999999;text-transform: uppercase;">';
		$template .= 'Features';
		$template .= '</span>';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 32px;font-size: 20px;color: #363D41;padding-top:5px;padding-bottom:5px;">';
		$template .= '<!-- Features title -->';
		$template .= $features_two_title;
		$template .= '</span>';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 32px;font-size: 20px;color: #363D41;">';
		$template .= '<!-- Features description -->';
		$template .= $features_two_desc;
		$template .= '<!-- please insert link/url on (href="") tag -->';
		$template .= '<a  href="'.$features_two_url.'" style="color:#006FC1;text-decoration:underline;margin-left:8px;">Read more ></a> ';
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr>';
		$template .= '<td valign="top" style="padding-right:32px;padding-left:32px;padding-top:0;padding-bottom:32px;">';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 25px;font-size: 16px;color: #999999;text-transform: uppercase;">';
		$template .= 'Tips & Advice';
		$template .= '</span>';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: bold;line-height: 32px;font-size: 20px;color: #363D41;padding-top:5px;padding-bottom:5px;">';
		$template .= '<!-- Tips & Advice title -->';
		$template .= $tips_two_title;
		$template .= '</span>';
		$template .= '<span style="display:block;font-family:  Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 32px;font-size: 20px;color: #363D41;">';
		$template .= '<!-- Tips & Advice description -->';
		$template .= $tips_two_desc;
		$template .= '<!-- please insert link/url on (href="") tag -->';
		$template .= '<a href="'.$tips_two_url.'" style="color:#006FC1;text-decoration:underline;margin-left:8px;">Read more ></a> ';
		$template .= '</span>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#F1F1F1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" style="padding-top:40px;">';
		$template .= '<!-- please insert carmudi facebook link on (href="") tag -->';
		$template .= '<a href="https://www.facebook.com/CarmudiPH/" target="_blank" style="text-decoration:none;">';
		$template .= '<img src="https://i.imgur.com/GvxcSKF.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi twitter link on (href="") tag -->';
		$template .= '<a href="https://twitter.com/CarmudiPH" target="_blank" style="text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/QJzodYC.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi youtube link on (href="") tag -->';
		$template .= '<a href="https://www.youtube.com/channel/UCcKPdngyrJG4sjBBNn1n72g" target="_blank" style="text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/Ves9z8y.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi instagram link on (href="") tag -->';
		$template .= '<a href="https://www.instagram.com/carmudiph/" target="_blank" style="text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/HhXQZm5.png" style="width:32px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#F1F1F1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding-bottom:18px;">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 20px;text-align: center;color: #363D41;">';
		$template .= 'Get our app now!';
		$template .= '</span> ';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#F1F1F1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" >';
		$template .= '<!-- please insert carmudi app google play link on (href="") tag -->';
		$template .= '<a href="https://play.google.com/store/apps/details?id=com.carmudi.android&referrer=adjust_reftag%3Dc8q2ZnWsSmB6F%26utm_source%3DOn-site%26utm_campaign%3DFooterBannerPH%26utm_content%3DAppLaunch%26utm_term%3DCarmudiApp" target="_blank" style="text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/kSCG1lo.png" style="width: 125px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '<!-- please insert carmudi app appstore link on (href="") tag -->';
		$template .= '<a href="https://itunes.apple.com/app/id949823961?mt=8" target="_blank" style="text-decoration:none;" >';
		$template .= '<img src="https://i.imgur.com/QVFubVl.png" style="width: 125px;padding:0 12px;" >';
		$template .= '</a>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#F1F1F1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="20" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top" style="padding-left:40px;padding-right:40px;">';
		$template .= '<span style="font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol!important;font-style: normal;font-weight: normal;line-height: 23px;font-size: 16px;text-align: center;color: #363D41;">';
		$template .= '© Carmudi Philippines, 4F Mancor Corporate Center, 32nd Street Bonifacio Global City Taguig ';
		$template .= '</span> ';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '</table>';
		$template .= '</td>';
		$template .= '</tr>';
		$template .= '<tr style="background-color:#F1F1F1;">';
		$template .= '<td align="center" valign="top">';
		$template .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" >';
		$template .= '<tr>';
		$template .= '<td align="center" valign="top"  style="padding-left:40px;padding-right:40px;padding-bottom:32px;">';
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

