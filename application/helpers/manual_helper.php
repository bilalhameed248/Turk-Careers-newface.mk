<?php
function Upload_image($org_name,$tmp_name,$folder) //its not for only images but for any file
{
	$random=rand(10,50);
	$name='skillz_'.$random.$org_name;
	$directory='/public/uploads/'.$folder;
	
		
	$dir=$directory.'/'.$name;
	
	$target_file=$_SERVER['DOCUMENT_ROOT'].$dir;
	if(move_uploaded_file($tmp_name, $target_file))
	{
		return $dir;
	}
}
function send_pass_email($pass,$to, $activation_link) 
{
	$ci =& get_instance();
    $ci->load->config('email');
    $ci->load->library('email');
    $from = $ci->config->item('smtp_user');
    $subject="Password";
    $message="Your Password Is: ".$pass."\n\n\nActivation Link: ".$activation_link;
    $ci->email->set_newline("\r\n");
    $ci->email->from($from);
    $ci->email->to($to);
    $ci->email->subject($subject);
    $ci->email->message($message);
    if ($ci->email->send()) 
    {
        return true;
    } 
    else 
    {
        show_error($ci->email->print_debugger());
    }
}

function generate_random_string($length)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function cvparse($cvpath)
{
	$path=base_url().$cvpath;
	
	/*
	Api source:https://promptapi.com/marketplace/description/resume_parser-api
	*/
    // API KEY 1: IDCZUZMJOgRTRQLMI4xsxwsgJOO9tEUK  
    // API KEY 2: ou71EWBJJnw2JfkRjPgdYqNEwRgSpuvn  (use)
    // API KEY 3: ou71EWBJJnw2JfkRjPgdYqNEwRgSpuvn
    // API KEY 4: LZ4eexJMwyCxIfZESa77nDl7J7kn5eYr
    // API KEY 5: 2OI9bqijp1Zete1131mwY75BFrtr4cCh
    // API KEY 6: ou71EWBJJnw2JfkRjPgdYqNEwRgSpuvn
	// API KEY 7: 7eaGi4jJ0p0wdcsv09rieyAfp03taCSe   
	$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.promptapi.com/resume_parser/url?url=".$path,
    CURLOPT_HTTPHEADER => array(
      "Content-Type: text/plain",
      "apikey: ou71EWBJJnw2JfkRjPgdYqNEwRgSpuvn"
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET"
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

			



?>