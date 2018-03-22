<?php
/** @property TodoModel $todoModel */
if (!defined('BASEPATH')) exit ('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TodoController
 *
 * @author adminSio
 */
class Todo extends CI_controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('todoModel');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $all_todos=$this->todoModel->get_all();
        $data['title']='Les Tâches !';
        $data['todos']=$all_todos;
        $this->load->view('TodoIndex', $data);
    }
    
    public function fait($id)
    {
        $params=array('completed'=>1);
        $this->todoModel->update($id,$params);
        //redirection vers la page TODO
        redirect(base_url('Todo/Index'));
    }
    
    /*public function aFaire($id)
    {
        $params=array('completed'=>0);
        $this->todoModel->update($id,$params);
        //redirection vers la page TODO
        redirect(base_url('Todo/Index'));
    }*/
    
    public function modifier()
    {
        $this->form_validation->set_rules('id', 'id', 'required|numeric');
        $this->form_validation->set_rules('ordre', 'ordre', 'required|numeric');
        $this->form_validation->set_rules('task', 'tâche','required|max_length[66]');
        
        if ($this->form_validation->run()==TRUE) 
        {
            $id=$this->input->post('id');
            $task=$this->input->post('task');
            $ordre=$this->input->post('ordre');
            
            $params=array('id'=>$id,'ordre'=>$ordre,'task'=>$task);
            
            $this->todoModel->update($id,$params);
            
            //redirection vers la page TODO
            redirect(base_url('Todo/Index'));
        }
        else{
            
            $this->load->view('TodoModifier');
        }
    }
    
    public function supprimer()
    {   
        $this->form_validation->set_rules('id', 'id', 'required|numeric');
        
        if ($this->form_validation->run()==TRUE) 
        {
            $id=$this->input->post('id');
            
            $params=array('id'=>$id);
            
            $this->todoModel->delete($id,$params);
            
            //redirection vers la page TODO
            redirect(base_url('Todo/Index'));
        }
        else{
            
            $this->load->view('TodoSupprimer');
        }
    
    }
    
    public function add()
    {
        $this->form_validation->set_rules('ordre', 'ordre', 'required|numeric');
        $this->form_validation->set_rules('task', 'tâche','required|max_length[66]');
        
        if ($this->form_validation->run()==TRUE) 
        {
            $task=$this->input->post('task');
            $ordre=$this->input->post('ordre');
            
            $params=array('task'=>$task,'ordre'=>$ordre,'completed'=>0);
            
            $this->todoModel->add($params);
            
            //redirection vers la page TODO
            redirect(base_url('Todo/Index'));
        }
        
        else{
            $this->load->view('TodoAdd');
        }
    }
    
    public function reordonner()
    {
        $all_todos=$this->todoModel->get_all();
        $data['todos']=$all_todos;
            
        $this->form_validation->set_rules('ordre', 'ordre', 'required|numeric');
        
        if ($this->form_validation->run()==TRUE) 
        {
            $ordre=$this->input->post('ordre');
            
            foreach($todos as $todo)
            {
                $this->db->get_where(array('id'=>$id));
                $this->todoModel->update($id,$nouvelOrdre[i]);
            }
        }
        else
        {
            $this->load->view('TodoReordonner', $data);
        }
        
    }
    
}