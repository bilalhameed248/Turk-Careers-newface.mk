<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller 
{

	function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('jobs_offered');
        $this->load->model('Feed_model');
        $this->load->model('Accademy_owner_model');
        $this->load->model('Settings_model');

        //$_SESSION['message'] = '';
    }
	
	public function index()
	{
		if(!$this->session->has_userdata('logged_in') && !$this->session->has_userdata('owner_logged_in'))
		{
			redirect(base_url().'home/login');
			exit();
		}
		//print_r($_SESSION);
        $activity="Visited News feed page";
		if(isset($_SESSION['logged_in'])){
			
			$followings=$this->user->isfollowing($_SESSION['user_id'],$to_id=NULL,'',1);
			$this->Settings_model->add_activity($roleid=1,$_SESSION['user_id'],$activity);
			$user_id=$this->session->userdata('user_id');
      $data['user']=$this->user->get($user_id);
      $data['user_data']=$this->user->get($user_id);
      $skills=$data['user_data']->skills;
      $data['jobs']=$this->jobs_offered->get($skills); //fetching jobs of interests

		}
		elseif(isset($_SESSION['owner_logged_in'])){
			
			$followings=$this->user->isfollowing($_SESSION['owner_id'],$to_id=NULL,'',2);

			$this->Settings_model->add_activity($roleid=2,$_SESSION['owner_logged_in'],$activity);
			$user_id=$this->session->userdata('owner_id');
			$data['user']=$this->user->getowner($user_id);
			$data['user_data']=$this->user->getowner($user_id);
		} 
		
		if($followings[0]=='')
		{
			$followings=NULL;
		}
		$data['news_feed']=$this->Feed_model->get_news_feed($user_type='',$user_id='',$followings);
		

        if (isset($_SESSION['logged_in'])) {
			$user_id=$this->session->userdata('user_id');
			$data['user']=$this->user->get($user_id);
			$data['user_details']=$this->user->get($user_id,FALSE,1);
            $skills=$data['user_details']->skills;
			
			$data['jobs']=$this->jobs_offered->get($skills);
        }
		elseif(isset($_SESSION['owner_logged_in']))
		{
			
			$user_id=$this->session->userdata('owner_id');
			$data['user']=$this->user->getowner($user_id);
			$data['user_details']=$this->user->get($user_id,FALSE,2);
		}
		$data['academies']=$this->Accademy_owner_model->get_all_academies_data();
		$this->load->view('timeline/feed3',$data);

	}

	function loadmorepost(){
		$limit=$this->input->post('limit');
		$offset=$this->input->post('offset');
		
		if(isset($_SESSION['logged_in'])){
			
			$followings=$this->user->isfollowing($_SESSION['user_id'],$to_id=NULL,'',1);
			//$this->Settings_model->add_activity($roleid=1,$_SESSION['user_id'],$activity);
		}
		elseif(isset($_SESSION['owner_logged_in'])){
		
			$followings=$this->user->isfollowing($_SESSION['owner_id'],$to_id=NULL,'',2);

			//$this->Settings_model->add_activity($roleid=2,$_SESSION['owner_logged_in'],$activity);
		} 
		
		if($followings[0]=='')
		{
			$followings=NULL;
		}
		$data['news_feed']=$this->Feed_model->get_news_feed($user_type='',$user_id='',$followings,$limit,$offset);
		 $i=1+$offset;
		$count=count($data['news_feed']);
		// echo $count;
		$output='';
        foreach ($data['news_feed'] as $news_feed1) {
            $image=base_url().$news_feed1['user']->profile_pic;
            // print_r($news_feed1);
        
            $output.='<span id="count" style="display: none;">'.$count.'</span>
		<div class="central-meta item">
			<div class="user-post">
				<div class="friend-info">
					<figure>
						<img src="'.$image.'" alt="">
					</figure>
					<div class="friend-name">
						<div class="more">
							<div class="more-post-optns"><i class="ti-more-alt"></i>
								<ul>
									<li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
									<li><i class="fa fa-trash-o"></i>Delete Post</li>
									
								</ul>
							</div>
						</div>';
                        
            if ($news_feed1['user_type']==1) {
                $name=$news_feed1['user']->fname.' '.$news_feed1['user']->lname;
            } elseif ($news_feed1['user_type']==2) {
                $name=$news_feed1['user']->owner_name;
            }

                        
            $output.='<ins><a href="'.base_url().'feed/timeline/'.$news_feed1['user_type'].'/'.$news_feed1['news_feed_user_id'].'" title="">'.$name.'</a> Post Album</ins>
						<span>sponsored <i class="fa fa-globe"></i></span>
						
					</div>
					<div>
						<br>
						<p>'.$news_feed1['description'].'</p>
					</div>
					<div class="post-meta">
						<figure>
						<div class="gallery_'.$i.'">
						';
                                
            $j=1;
            foreach ($news_feed1['images'] as $image) {
				
                $output.='<a href="'.$image['image_url'].'" class="gal-item gal-item_'.$i.'"><span><img src="'.$image['image_url'].'" width="200" height="200" alt="" /></span></a>';
                                    
                $j++;
            }
             $output.='</div>';                   
            
            
                            
                            
            $output.='</figure>';   
			$i++;		
						$output.='<div class="we-video-info">
							<ul>
								<li>
									<span class="views" title="views">
										<i class="fa fa-eye"></i>
										<ins>'.$news_feed1['no_of_views'].'</ins>
									</span>
								</li>
								<li>
									<div class="likes heart" title="Like/Dislike">❤ <span>'.$news_feed1['no_of_likes'].'</span></div>
								</li>
								<li>
									<span class="comment" title="Comments">
										<i class="fa fa-commenting"></i>
										<ins>'.$news_feed1['num_comments'].'</ins>
									</span>
								</li>

								<li>
									<span>
										<a class="share-pst" href="#" title="Share">
											<i class="fa fa-share-alt"></i>
										</a>
										<ins>'.$news_feed1['no_of_shares'].'</ins>
									</span> 
								</li>
							</ul>
							
						</div>
					</div>
					<div class="coment-area" style="">
						<ul class="we-comet">';
            foreach ($news_feed1['comments'] as $comments) {
                $output.='<li>
								<div class="comet-avatar">
									<img src="'.base_url().'public/timeline2/images/resources/nearly3.jpg" alt="">
								</div>
								<div class="we-comment">
									<h5><a href="time-line.html" title="">Jason borne</a></h5>
									<p>'.$comments['comment_desc'].'</p>
									<div class="inline-itms">
										<span>'.$comments['created_at'].'</span>
										<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
										<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
									</div>
								</div>
							</li>';
            }
                            
            $output.='<li>
								<a href="#" title="" class="showmore underline">more comments+</a>
							</li>
							<li class="post-comment">
								<div class="comet-avatar">
									<img src="'.base_url().'public/timeline2/images/resources/nearly1.jpg" alt="">
								</div>
								<div class="post-comt-box">
									
										<textarea placeholder="Post your comment" id="comment_desc"></textarea>
										<div class="add-smiles">
											<div class="uploadimage">
												<i class="fa fa-image"></i>
												<label class="fileContainer">
													<input type="file">
												</label>
											</div>
											<span class="em em-expressionless" title="add icon"></span>
											<div class="smiles-bunch">
												<i class="em em---1"></i>
												<i class="em em-smiley"></i>
												<i class="em em-anguished"></i>
												<i class="em em-laughing"></i>
												<i class="em em-angry"></i>
												<i class="em em-astonished"></i>
												<i class="em em-blush"></i>
												<i class="em em-disappointed"></i>
												<i class="em em-worried"></i>
												<i class="em em-kissing_heart"></i>
												<i class="em em-rage"></i>
												<i class="em em-stuck_out_tongue"></i>
											</div>
										</div>

										
										<input type="text" id="post_id" value="'.$news_feed1['id'].'">
									
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>';
        }
		echo $output;
	}
	function timeline($user_type,$user_id)
	{
        $data['news_feed']=$this->Feed_model->get_news_feed($user_type,$user_id);
		$data['user_info']=$this->user->get($user_id,FALSE,$user_type);
		$data['user_type']=$user_type;
		$data['user_id']=$user_id;
		
		if(isset($_SESSION['logged_in'])){
			$data['following']=$this->user->isfollowing($_SESSION['user_id'],$user_id,$user_type,1);
		}
		elseif(isset($_SESSION['owner_logged_in']))
		{
			$data['following']=$this->user->isfollowing($_SESSION['owner_id'],$user_id,$user_type,2);
			
		}
	
		$this->load->view('timeline/timeline',$data);
	}
	public function post_comment()
	{
		$array = array(
        'comment_desc' => $_POST['comment_desc'],
        'post_id' => $_POST['post_id'],
        'comment_by'   => $_SESSION['user_id']
		);
		if($this->db->insert('comments', $array))
		{
			echo 1;
		}
	}	
	public function add_new_post()
	{
		if(isset($_SESSION['logged_in'])){
			$type=1;
			$user_id=$_SESSION['user_id'];
		}
		elseif(isset($_SESSION['owner_logged_in'])){
			$type=2;
			$user_id=$_SESSION['owner_id'];
		}
	    $images=$_FILES['post_images'];

		$data = array(
        'description' => $_POST['post_desc'],
        'news_feed_user_id'   => $user_id,
		'user_type'=>$type
		);

        $post_id=$this->Feed_model->insert_post( $data);
		if($post_id!=0)
		{
            $this->Feed_model->insert_post_images($post_id,$images);
            redirect(base_url().'feed');
		}
	}
	function add_follower($user_type,$user_id)
	{

		$data=$user_type.','.$user_id;
		//print_r(json_decode($data));
		//echo $data;
		//exit();
        if (isset($_SESSION['logged_in'])) {
			$loggedin_type=1;
			$loggedin_id=$_SESSION['user_id'];
        }
		elseif($_SESSION['owner_logged_in']){
			$loggedin_type=2;
			$loggedin_id=$_SESSION['owner_id'];
		}
			$this->user->add_follower($data,$loggedin_id,$loggedin_type);
		
		
		
		redirect(base_url().'feed/timeline/'.$user_type.'/'.$user_id);
	}
	function search_people()
	{
		$search_name=$_POST['search_name'];
		$result=$this->user->search_people($search_name);
		$result2=$this->user->search_owners($search_name);
		$output="<u>Candidates</u><br>";
		
		foreach ($result as $result1) 
		{
			$output.='<a href="'.base_url().'feed/timeline/1/'.$result1->id.'">
							<li  style="font-size: 18px; list-style: none; color: white;margin-top: 10px;">
								<img style="border-radius: 100%; margin-right: 15px;" src="https://www.newface.mk/public/timeline2/images/resources/admin.jpg">'.$result1->fname.' '.$result1->lname.'
							</li>
						</a>';
		}
		$output.="<br><u>Employers</u><br>";
		foreach ($result2 as $result1) 
		{
			$output.='<a href="'.base_url().'feed/timeline/2/'.$result1->id.'">
							<li  style="font-size: 18px; list-style: none; color: white;margin-top: 10px;">
								<img style="border-radius: 100%; margin-right: 15px;" src="https://www.newface.mk/public/timeline2/images/resources/admin.jpg">'.$result1->owner_name.'
							</li>
						</a>';
		}
		echo $output;

	}	
}
