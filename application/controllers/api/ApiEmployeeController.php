<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

    class ApiEmployeeController extends RestController
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('EmployeeModel');
        }
        public function index_get(){

            // echo "I AM RESTFUL API";
            // echo "I AM EMPLOYEE INDEX FUNCTION";
            // $this->load->get_employee();
            $employee = new EmployeeModel;
            $result_emp = $employee->get_employee();
            $this->response($result_emp, 200);
        } 
        public function storeEmployee_post(){
            $employee = new EmployeeModel;
            $data = [
                'first_name'=> $this->input->post('first_name'),
                'last_name'=> $this->input->post('last_name'),
                'phone'=> $this->input->post('phone'),
                'email'=> $this->input->post('email'),
                
            ];
            $result = $employee->insertEmployee($data);
            // $this->response($data , 200);
            if( $result > 0){
                    $this->response([
                        'status'=> true,
                        'message' => 'NEW EMPLOYEE INSERTED'
                        
                    ],RestController::HTTP_OK);
            }
            else{
                $this->response([
                    'status'=> false,
                    'message' => 'FAILED TO INSERT EMPLOYEE RECORD'
                    
                ],RestController::HTTP_BAD_REQUEST);

            }

        }
        public function findEmployee_get($id){
            $employee = new EmployeeModel;
            $result = $employee->editEmployee($id);
            $this->response($result,200);
        }
        public function updateEmployee_put($id){
            $employee = new EmployeeModel;
            $data = [
                'first_name'=> $this->put('first_name'),
                'last_name'=> $this->put('last_name'),
                'phone'=> $this->put('phone'),
                'email'=> $this->put('email'),
                
            ];
            $updateresult = $employee->updateEmployee($id,$data);
            // $this->response($data , 200);
            if( $updateresult > 0){
                    $this->response([
                        'status'=> true,
                        'message' => 'UPDATE EMPLOYEE SUCCESSFULLY'
                        
                    ],RestController::HTTP_OK);
            }
            else{
                $this->response([
                    'status'=> false,
                    'message' => 'FAILED TO UPDATE EMPLOYEE RECORD'
                    
                ],RestController::HTTP_BAD_REQUEST);

            }
        }
        public function deleteEmployee_delete($id){
            $employee = new EmployeeModel;
            $result = $employee->delete_Employee($id);

            // $this->response($data , 200);
            if( $result > 0){
                    $this->response([
                        'status'=> true,
                        'message' => 'EMPLOYEE DELETED'
                        
                    ],RestController::HTTP_OK);
            }
            else{
                $this->response([
                    'status'=> false,
                    'message' => 'FAILED TO DELETE EMPLOYEE RECORD'
                    
                ],RestController::HTTP_BAD_REQUEST);

            }

        }
    }
?>