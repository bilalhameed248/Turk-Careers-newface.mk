<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_offered extends CI_model {

	
	function get($param1='') 			//will return jobs according to user's skills.($param1---skills)
	{
		$this->db->select('*,jobs_offered.id AS jid,jobs_offered.status as jstatus');
		$skills_array=explode(',',$param1);
		$i=1;
		foreach($skills_array as $skill)
		{
			if($i==1)
			{
				$this->db->like('title',$skill);
				$this->db->like('skills',$skill);
			}
			else
			{
				$this->db->or_like('description',$skill);
				$this->db->or_like('skills',$skill);
			}
			$i++;

		}
		
		$this->db->join('job_owners', 'jobs_offered.owner_id = job_owners.id');
		$this->db->limit(5,0);
		$jobs=$this->db->get('jobs_offered')->result();
		
		return $jobs;
	}
	function getjobs($title='',$salary=NULL,$city="",$isowner=FALSE,$count=FALSE)  // for getting jobs along with owber's details
	{
		$this->db->select('*,jobs_offered.id AS jid,jobs_offered.status as jstatus');
		if($title!='')
		{
			$this->db->like('jobs_offered.title',$title);
			$this->db->or_like('jobs_offered.description',$title);
		}
		if($salary!=NULL)
		{
			$this->db->where('salary_offered_min <=',$salary);
			$this->db->where('salary_offered_max >=',$salary);
		}
		if($isowner)
		{
			$this->db->where('jobs_offered.owner_id',$_SESSION['owner_id']);  //to fetch jobs posted by particular owner
		}
	    $this->db->from('jobs_offered');
	    $this->db->join('job_owners', 'jobs_offered.owner_id = job_owners.id');
	    $this->db->order_by('jid', 'DESC');
        $query=$this->db->get();
        if($count)
        {
            return $query->num_rows();
        }
        else{
            return $query->result();
        }

	}
	function applied_jobs($id)
	{
		$query = $this->db->get_where('Jobs_applications', array('candidate_id' => $id));
		return $query->num_rows();
	}
	function detail($id)
	{
		$query = $this->db->get_where('jobs_offered', array('id' => $id));
		return $query->row();
	}
	function insertjob($data)
	{
		// print_r($_SESSION);
		// exit();
		//print_r($data);
		$data = array(
        'title' => $data['job_title'],
        'description' => $data['description'],
        'posted_on' => date("Y-m-d"),
        'is_available' => 1,
        'skills' => $data['skills'],
        'owner_id' => $_SESSION['owner_id'],
        'experience' => $data['experience'],
        'salary_offered_min' => $data['min_salary'],
        'salary_offered_max' => $data['max_salary']
);

	return($this->db->insert('jobs_offered', $data));
		
	}
	function view_applicants($job_id)
	{
		$this->db->select('*,Jobs_applications.id AS appid');
		$this->db->from('Jobs_applications');
		$this->db->where('Jobs_applications.job_id',$job_id);
		$this->db->join('users', 'Jobs_applications.candidate_id = users.id');

		$query = $this->db->get();
		return $query->result();
	}
	function insertapp($candidate_id,$job_id,$desc,$dir)
	{
		$data = array(
        'candidate_id' =>$candidate_id,
        'job_id' => $job_id,
        'applied_on' => date('Y-m-d'),
        'candidate_desc'=>$desc,
        'cv_path'=>$dir
		);

		$this->db->insert('Jobs_applications', $data);
		return true;
	}
	function checkapp($user_id,$job_id)
	{
		//echo "user:".$user_id.' job:'.$job_id;
		//$query = $this->db->get_where('mytable', array('id' => $id));
		$query = $this->db->get_where('Jobs_applications', array('candidate_id' => $user_id,'job_id'=>$job_id));
		 
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			
			return true; //means user has already applied to this job
		}
		else
		{
			
			return false;
		}
	}
	function getJobOwnerData($id='',$count=FALSE)
	{
		
		if($id!='')
		{
			$query = $this->db->get_where('job_owners', array('id' => $id));
			return $query->row();
		}
		elseif(!$count)
		{
            $this->db->select('*,job_owners.id as emp_id,job_owners.status as emp_status,activities.activity_desc');
            $this->db->from('job_owners');
            $this->db->join('subscription', 'subscription.id = job_owners.subscription_id');
            $this->db->join('activities', 'activities.user_id = job_owners.id AND activities.role_id=2' );
			$query=$this->db->get();
			return $query->result();
		}
		else
        {
            $query=$this->db->get('job_owners');
            return $query->num_rows();
        }
		
	}

	function get_related_jobs($title) 			//will return Related jobs
	{
		$this->db->like('title',$title);
		$this->db->or_like('description',$title);
		$this->db->join('job_owners', 'jobs_offered.owner_id = job_owners.id');
		$related_jobs=$this->db->get('jobs_offered')->result();
		return $related_jobs;
	}
	function update_profile($data,$id)   //employer profile
	{
		$this->db->where('id', $id);
		$done=$this->db->update('job_owners', $data);
		return $done;
	}
	function update_job($data,$id)   //job 
	{
		
		$this->db->where('id', $id);
		$done=$this->db->update('jobs_offered', $data);
		return $done;
	}

	
}
