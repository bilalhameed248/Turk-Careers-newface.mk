<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed_model extends CI_model {

	function get_news_feed($user_type='',$user_id='',$followings=NULL,$limit=NULL,$offset=NULL)
	{
       
		$where='';
		
        if ($followings!=null) {
            $i=1;
            
            foreach ($followings as $following) {
                $array=explode(',', $following);
                if ($i==1) {
                    $where='where (`news_feed_user_id`='.$array[1].' AND `user_type`='.$array[0].')';
                } else {
                    $where.=' OR (`news_feed_user_id`='.$array[1].' AND `user_type`='.$array[0].')';
                }
                if(isset($_SESSION['logged_in'])){
                    $where.='OR `news_feed_user_id`='.$_SESSION['user_id'];
                }
                
                
                $i++;
            }
            $lim='';
            if($limit!=NULL){
                $lim=' LIMIT '.$limit.' OFFSET '.$offset;
               
            }
            $query='SELECT * FROM `post` '.$where.' order by id DESC'.$lim;
		   
            $query = $this->db->query($query);
        

            $query = $query->result_array();
            ///////////////////////////////////////////////////////////////////////////////////////////////////
        
            $data=array();
            $l=0;
            foreach ($query as $i) {
                if ($i['user_type']==1) {
                    $user=$this->db->get_where('users', array('id'=>$i['news_feed_user_id']))->row();
                } elseif ($i['user_type']==2) {
                    $user=$this->db->get_where('job_owners', array('id'=>$i['news_feed_user_id']))->row();
                }
                $images_query=$this->db->get_where('post_images', array('post_id' => $i['id']))->result_array();
                $comment_query1=$this->db->get_where('comments', array('post_id' => $i['id']));
                $comment_query=$comment_query1->result_array();
                $num_comments=$comment_query1->num_rows();
                $i['user'] = $user;
                $i['images'] = $images_query;
                $i['comments']=$comment_query;
                $i['num_comments']=$num_comments;
                $data[$l]=$i;
                $l++;
            }
        }
		else{
            
			$data=array();
		}
		
		return $data;
	}
	function insert_post($data)
	{
		$this->db->trans_begin();
		$this->db->insert('post', $data);
		
		if( $this->db->trans_status() === FALSE )
		{
			
            $this->db->trans_complete();
		    return( 0 );

		}
		else
		{
		    $insert_id = $this->db->insert_id();
            $this->db->trans_complete();
		    return( $insert_id );

		}

	}
	function insert_post_images($post_id,$images)
    {

        $count=count($images['name']);  //count images

        for($i=0;$i<$count;$i++)
        {
            $org_name=$images['name'][$i];
            $tmp_name=$images['tmp_name'][$i];
            $folder='post_images';
            $dir=Upload_image($org_name,$tmp_name,$folder);
            $data=array(
                'image_url' => $dir,
                'post_id' => $post_id,
                'created_at' => date('y/m/d')
            );
            $this->db->insert('post_images', $data);
        }

    }
}

