<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\I18n\Date;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\Utility\Crypto\Mcrypt;
use Cake\View\Exception\MissingTemplateException;
use Cake\Utility\Crypto;
use DateTime;
use phpseclib\Crypt\Hash;
use phpseclib\Crypt\RSA;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $role= $this->Auth->user('role');
        if($role=='admin'){
            $this->Auth->allow(['*']);

        }else if($role=='user'){
            $this->Auth->allow(['*']);
        }else{
            $this->Auth->allow(['index']);

        }
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
    }
    public function index(...$path)
    {


    }
    public function product($value='')
    {
      # code...
    }

    public function one($value='')
    {
        //$this->generateKey();
    }
    public function buy(){

    }
    public function getToken($value='')
    {
        $this->loadModel('Users');
        $this->loadModel('Cards');
        $id = $this->Auth->user('id');
        $user = $this->Users->get($id);
        $this->request->is('post');

        /*GET DATA FROM CARD */
        $card= $this->request->data['card'];
        $month= $this->request->data['month'];
        $year= $this->request->data['year'];
        $cvv= $this->request->data['cvv'];
        $uuid =  $this->request->data['uuid'];

        /*ENCRYPT DATA FROM CARD*/
        $token = $this->encrypt($card.$month.$year.$cvv);
        $this->request->data['uuid'];
        $card_e= $this->Cards->newEntity();
        $data = array('token'=>base64_encode($token),'uuid'=>$uuid, 'email'=> $user->email, 'created'=>date_create());
        $card_e = $this->Cards->patchEntity($card_e,$data);
        $this->Cards->save($card_e);
        $response = array('token'=> base64_encode($token));
        echo json_encode($response);
    }

    public function confirm(){

        $this->request->is('post');
        $this->loadModel('Cards');
        $this->loadModel('Transactions');
        $id = $this->Auth->user('id');

        /*GET DATA FROM CARD */
        $data= $this->request->data['data'];
        $uuid= $this->request->data['uuid'];

        $json =json_decode($data);
        $isvalidated=  $this->validateToken($json->token,$uuid);
        if($isvalidated==1) {
            $transaction = $this->Transactions->newEntity();
            $transaction = $this->Transactions->patchEntity($transaction, ['user_id'=>$id, 'status'=>'0','cost'=>35.6,'token'=>$json->token,'description'=>'Consectetuer adipiscing elit']);
            $this->Transactions->save($transaction);
            echo $isvalidated;

        }else{
            $transaction = $this->Transactions->newEntity();
            $transaction = $this->Transactions->patchEntity($transaction, ['user_id'=>$id, 'status'=>'1','cost'=>35.6,'token'=>$json->token,'description'=>'Consectetuer adipiscing elit']);
            $this->Transactions->save($transaction);


            echo $isvalidated;


        }



    }
    public function finish($id=null){
        $this->set('id',$id);
    }
    public function generateKey(){
        $rsa = new RSA();
        $keys = $rsa->createKey(); // == $rsa->createKey(1024) where 1024 is the key size
        $myfile = fopen("privatekey.key", "w") or die("Unable to open file!");

        fwrite($myfile, $keys['privatekey']);
        fclose($myfile);
        $myfile = fopen("publickey.key", "w") or die("Unable to open file!");

        fwrite($myfile, $keys['publickey']);
        fclose($myfile);
    }

    public function encrypt($text = null){

        $rsa = new RSA();
        $rsa->loadKey(file_get_contents('publickey.key'));
        return $rsa->encrypt($text);

    }

    public function signature($text = null){

        $rsa = new RSA();
        $rsa->loadKey(file_get_contents('privatekey.key'));
        return $signature = $rsa->sign($text);

    }

    public function hash($text = null){

        $hash = new Hash();
        return $hash->hash($text);

    }
    public function decrypt($text = null){

        $rsa = new RSA();
        $rsa->loadKey(file_get_contents('privatekey.key'));
        return $rsa->decrypt($text);

    }


}
